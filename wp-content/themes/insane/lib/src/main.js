import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'

Vue.use(require('vue-moment'));
Vue.use(VueRouter);

window.wp.templates = [];

// Default components
import Posts from './posts.vue'
import Post from './post.vue'
Vue.component('Post', Post)
window.wp.templates.push('Post')

import Page from './page.vue'
Vue.component('Page', Page)
window.wp.templates.push('Page')

import Header from './theme-header.vue'
Vue.component('theme-header', Header)
import Footer from './theme-footer.vue'
Vue.component('theme-footer', Footer)

// Layout partials
import Levels from './levels.vue'
Vue.component('levels', Levels)

// Specific pages
// import Page6 from './page6.vue'
// Vue.component('Page6', Page6)
// window.wp.templates.push('Page6')

// Levels - ACF flexible content layouts
import Intro from './levels/intro.vue'
Vue.component('intro', Intro)
import Mapbox from './levels/mapbox.vue'
Vue.component('mapbox', Mapbox)

// Cache
window.Cache = {
    data: {},

    set(key, value) {
        this.data[key] = value;
    },

    get(key) {
        if ( typeof this.data[key] !== 'undefined' )
            return this.data[key];
    },

    has(key) {
        if ( typeof this.data[key] !== 'undefined' )
            return true;
        return false;
    }
}

// Mixins
Vue.mixin({
    methods: {
        getMenuLocation(location, callback) {
            axios.get(wp.root + 'wp-api-menus/v2/menu-locations/' + location)
            .then(function (response) {
                if ( typeof callback == 'function' )
                    callback(response.data);
            })
            .catch(function (error) {
                console.log(error);
            });
        },

        url2Slug(url) {
            return url.replace(/^.*\/\/[^\/]+/, '')
        },

        getPost(callback) {
            axios.get(wp.root + 'wp/v2/posts/' + this.$route.meta.postId)
            .then(function(response) {
                if ( typeof callback == 'function' )
                    callback(response.data);
            }).catch(function(error) {
                console.log(error);
            });
        },

        getCategory(categoryId) {
            var self = this;
            axios.get(wp.root + 'wp/v2/categories/' + categoryId)
            .then(function(response) {
                self.categories.push(response.data)
            }).catch(function(error) {
                console.log(error);
            });
        },
        getUser(userId) {
            var self = this;
            axios.get(wp.root + 'wp/v2/users/' + userId)
            .then(function(response) {
                self.author = response.data
            }).catch(function(error) {
                console.log(error);
            });
        },

        getPage(callback) {
            var self = this;

            var cachekey = 'getPage' + this.$route.meta.postId;
            if ( window.Cache.has(cachekey) ) {
                if ( typeof callback == 'function' )
                    return callback(window.Cache.get(cachekey));
            }

            axios.get(wp.root + 'wp/v2/pages/' + this.$route.meta.postId).then(function(response){

                if ( typeof callback == 'function' )
                    callback(response.data);

                window.Cache.set(cachekey, response.data);

            }).catch(function(error) {
                console.log(error);
            });
        },

        getPosts() {
            var self = this;
            axios.get(wp.root + 'wp/v2/posts').then(function(response) {
                self.posts = response.data;
                window.eventHub.$emit('page-title', '');
                window.eventHub.$emit('track-ga');
            }).catch(function(error) {
                console.log(error);
            });
        },

        getPages() {
            var self = this;
            axios.get(wp.root + 'wp/v2/pages').then(function(response) {
                self.pages = response.data;
            }, function(response) {
                console.log(response);
            });
        },

        getSearch(term, callback) {
            axios.get(wp.root + 'wp/v2/posts?search='+term).then(function(response) {
                if ( typeof callback == 'function' )
                    callback(response.data);
            }).catch(function(error) {
                console.log(error);
            });
        }
    }
});

//
Offline.on('confirmed-down', function () {
    alert('offline');
});

// Base routes
var routes = [];

// Front page displays == Your latest posts
if ( wp.show_on_front == 'posts' ) {
    routes.push({
        path: wp.base_path,
            component: Posts
    });
}

// Front page displays == A static page
if ( wp.show_on_front == 'page' ) {

    if ( wp.page_on_front != 0 ) {
        // type is "Front page"
        routes.push({
            path     : wp.base_path,
            component: Page,
            meta: {
                postId: wp.page_on_front
            }
        });
    } else if ( wp.page_on_front != 0 ) {
        // type is "Posts page"
        routes.push({
            path     : wp.base_path,
            component: Post,
            meta: {
                postId: wp.page_for_posts
            }
        });
    }
}

// Dynamically generated routes
wp.routes.forEach(function (wproute) {
    routes.push({
        path: wp.base_path + wproute.slug,
        component: {
            extends: Vue.component(getTemplateHierarchy(wproute.type, wproute.id, wproute.template))
        },
        meta: {
            postId: wproute.id,
            template: wproute.template
        }
    })

    // When full link is used
    routes.push({
        path: wproute.link,
        component: {
            extends: Vue.component(getTemplateHierarchy(wproute.type, wproute.id, wproute.template))
        },
        meta: {
            postId: wproute.id,
            template: wproute.template
        }
    })
})


var router = new VueRouter({
    mode: 'history',
    routes: routes
});

window.eventHub = new Vue();

var App = new Vue({
    el: '#app',

    template:   '<div class="template-wrapper" :class="{ fullscreen: fullscreen, fullvideo: fullvideo }">' +
                '<theme-header></theme-header>' +
                '<router-view></router-view>' +
                '<theme-footer></theme-footer>' +
                '<button type="button" class="btn btn-nav btn-fullscreen" @click="fullscreen = !fullscreen"></button>' +
                '</div>',

    router: router,

    data() {
        return {
            fullscreen: false,
            fullvideo: false
        }
    },

    mounted() {
        this.updateTitle('');
        this.trackGA();
    },

    methods: {
        updateTitle(pageTitle) {
            document.title = (pageTitle ? pageTitle + ' - ' : '') + wp.site_name;
        },
        trackGA() {
            if ( typeof ga == 'function' ) {
                ga('set', 'page', '/' + window.location.pathname.substr(1));
                ga('send', 'pageview');
            }
        },
        toggleVideo(show_video) {
            this.fullvideo = show_video;
        }
    },

    // Create listeners
    created: function () {
        window.eventHub.$on('page-title', this.updateTitle)
        window.eventHub.$on('track-ga', this.trackGA)
        window.eventHub.$on('toggle-video', this.toggleVideo)
    },

    // It's good to clean up event listeners before
    // a component is destroyed.
    beforeDestroy: function () {
        window.eventHub.$off('page-title', this.updateTitle)
        window.eventHub.$off('track-ga', this.trackGA)
        window.eventHub.$off('toggle-video', this.toggleVideo)
    },

    watch: {
        // Changed route
        '$route' (to, from) {
            window.eventHub.$emit('changed-route')

            this.fullvideo = false;
            this.fullscreen = false;
            this.show_search = false;

            console.log('Changed route', to, from);
        }
    }
});

function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function getTemplateHierarchy(type, id, template) {

    // f.e. Map
    if ( typeof template == 'string' ) {
        if (window.wp.templates.indexOf(capitalize(template)) !== -1)
            return capitalize(template);
    }

    // f.e. Page9
    if ( typeof type == 'string' && typeof id != 'undefined' ) {
        if (window.wp.templates.indexOf(capitalize(type) + id) !== -1)
            return capitalize(type) + id;
    }

    // f.e. Page
    if ( typeof type == 'string' ) {
        if (window.wp.templates.indexOf(capitalize(type)) !== -1)
            return capitalize(type);
    }

}