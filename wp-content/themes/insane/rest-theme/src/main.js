import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(require('vue-resource'));
Vue.use(require('vue-moment'));
Vue.use(VueRouter);

// Default components
import Posts from './posts.vue'
import Post from './post.vue'
Vue.component('Post', Post)
import Page from './page.vue'
Vue.component('Page', Page)
import Header from './theme-header.vue'
Vue.component('theme-header', Header)
import Footer from './theme-footer.vue'
Vue.component('theme-footer', Footer)

// Layout partials
import Levels from './levels.vue'
Vue.component('levels', Levels)

// Levels - ACF flexible content layouts
import Intro from './levels/intro.vue'
Vue.component('intro', Intro)

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
            meta: { postId: wp.page_on_front }
        });
    } else if ( wp.page_on_front != 0 ) {
        // type is "Posts page"
        routes.push({
            path     : wp.base_path,
            component: Post,
            meta: { postId: wp.page_for_posts }
        });
    }
}

// Dynamically generated routes
wp.routes.forEach(function (wproute) {
    routes.push({
        path: wp.base_path + wproute.slug,
        component: {
            extends: Vue.component(capitalize(wproute.type))
        },
        meta: { postId: wproute.id }
    })

    // When full link is used
    routes.push({
        path: wproute.link,
        component: {
            extends: Vue.component(capitalize(wproute.type))
        },
        meta: { postId: wproute.id }
    })
})

var router = new VueRouter({
    mode: 'history',
    routes: routes
});

window.eventHub = new Vue();

var App = new Vue({
    el: '#app',

    template: '<div class="template-wrapper">' +
    '<theme-header></theme-header>' +
    '<div class="container"><router-view></router-view></div>' +
    '<theme-footer></theme-footer>' +
    '</div>',

    router: router,

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
        }
    },

    // Create listeners
    created: function () {
        window.eventHub.$on('page-title', this.updateTitle)
        window.eventHub.$on('track-ga', this.trackGA)
    },

    // It's good to clean up event listeners before
    // a component is destroyed.
    beforeDestroy: function () {
        window.eventHub.$off('page-title', this.updateTitle)
        window.eventHub.$off('track-ga', this.trackGA)
    },

    watch: {
        // Changed route
        '$route' (to, from) {
            window.eventHub.$emit('changed-route')

            console.log('Changed route', to, from);
        }
    }
});

function capitalize(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}