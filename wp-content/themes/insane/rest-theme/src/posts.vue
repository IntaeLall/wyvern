<style>

</style>

<template>
    <transition name="slide-fade">
        <div class="posts" v-show="posts.length">
            <Post v-for="post in posts" :post="post"></Post>
        </div>
    </transition>
</template>

<script>
    export default {
        mounted() {
            this.getPosts();
        },

        data() {
            return {
                posts: []
            }
        },

        methods: {
            getPosts() {
                this.$http.get(wp.root + 'wp/v2/posts').then(function(response) {
                    this.posts = response.data;
                    window.eventHub.$emit('page-title', '');
                    window.eventHub.$emit('track-ga');
                }, function(response) {
                    console.log(response);
                });
            }
        }
    }
</script>