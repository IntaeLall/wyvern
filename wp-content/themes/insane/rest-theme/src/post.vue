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
        <div class="post" v-if="post.id">
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
                this.getPost();
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
            getPost() {
                this.$http.get(wp.root + 'wp/v2/posts/' + this.$route.meta.postId).then(function(response) {

                    this.post = response.data;

                    // Load category information
                    var self = this;
                    this.post.categories.forEach(function(category){
                        self.getCategory(category);
                    });

                    this.getUser(this.post.author);

                    window.eventHub.$emit('page-title', this.post.title.rendered);
                    window.eventHub.$emit('track-ga');
                }, function(response) {
                    console.log(response);
                });
            },
            getCategory(categoryId) {
                this.$http.get(wp.root + 'wp/v2/categories/' + categoryId).then(function(response) {
                    this.categories.push(response.data)
                }, function(response) {
                    console.log(response);
                });
            },
            getUser(userId) {
                this.$http.get(wp.root + 'wp/v2/users/' + userId).then(function(response) {
                    this.author = response.data
                }, function(response) {
                    console.log(response);
                });
            }
        },

        route: {
            canReuse() {
                return false;
            }
        }
    }
</script>