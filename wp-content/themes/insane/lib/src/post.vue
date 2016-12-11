<style>
    .entry-meta {
        opacity: 0.5;
    }
    ul.categories {
        list-style-type: none;
        padding-left: 0;
    }
    ul.categories li:after {
        content: ", ";
        display: inline;
    }
    ul.categories li:last-child:after {
        display: none;
    }
</style>

<template>
    <transition name="slide-fade">
        <div class="post content" v-if="post.id" :class="post.slug">
            <h1 class="entry-title" v-if="isSingle">{{ post.title.rendered }}</h1>
            <h2 class="entry-title" v-else><router-link :to="{ path: base_path + post.slug }">{{ post.title.rendered }}</router-link></h2>

            <component is="levels" :object="post"></component>

            <!-- ACF test -->
            <img v-if="post.acf.banner" v-bind:src="post.acf.banner.url">

            <!-- Entry meta filters -->
            <div class="entry-meta">
                <span>{{ post.date | moment("lll") }}</span>

                <ul class="categories">
                    <li v-for="category in categories"><a v-bind:href="category.link">{{ category.name }}</a></li>
                </ul>

                <em>
                    <a v-bind:href="author.link">
                        {{ author.name }}
                    </a>
                </em>
            </div>

            <div class="entry-content" v-html="post.content.rendered">
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        props: {
            post: {
                type: Object,
                default() {
                    return {
                        id: 0,
                        slug: '',
                        title: { rendered: '' },
                        content: { rendered: '' }
                    }
                }
            },
            categories: {
                type: Array,
                default() {
                    return [];
                }
            },
            author: {
                type: Object,
                default() {
                    return {};
                }
            }
        },

        mounted() {
            // If post hasn't been passed by prop
            if (!this.post.id) {
                var self = this;
                this.getPost(function(data){
                    self.post = data;

                    // Load category information
                    self.post.categories.forEach(function(category){
                        self.getCategory(category);
                    });

                    self.getUser(self.post.author);

                    window.eventHub.$emit('page-title', self.post.title.rendered);
                    window.eventHub.$emit('track-ga');
                });

                this.isSingle = true;
            }
        },

        data() {
            return {
                assets_path: wp.assets_path,
                base_path: wp.base_path,
                isSingle: false,
                lang: wp.lang
            }
        },

        methods: {

        },

        route: {
            canReuse() {
                return false;
            }
        }
    }
</script>