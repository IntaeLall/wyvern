<style>

</style>

<template>
    <transition name="slide-fade">
        <div class="page" v-show="page.id">
            <component is="levels" :object="page"></component>

            <h1 class="entry-title">{{ page.title.rendered }}</h1>

            <div class="entry-content" v-html="page.content.rendered">
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        mounted() {
            this.getPage();
        },

        data() {
            return {
                page: {
                    id: 0,
                    slug: '',
                    title: { rendered: '' },
                    content: { rendered: '' }
                },
                lang: wp.lang
            }
        },

        methods: {
            getPage() {
                this.$http.get(wp.root + 'wp/v2/pages/' + this.$route.meta.postId).then(function(response) {
                    this.page = response.data;
                    window.eventHub.$emit('page-title', this.page.title.rendered);
                    window.eventHub.$emit('track-ga');
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