import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(require('vue-resource'));
Vue.use(require('vue-moment'));
Vue.use(VueRouter);

import Posts from './posts.vue'
import Post from './post.vue'
Vue.component('Post', Post)
import Page from './page.vue'
Vue.component('Page', Page)
import Header from './theme-header.vue'
Vue.component('theme-header', Header)
import Footer from './theme-footer.vue'
Vue.component('theme-footer', Footer)

// Base routes
var routes = [
    {
        path: wp.base_path,
        component: Posts
    }
];

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