<style>
    .header {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        margin-bottom: 50px;
    }
    .header .container {
        display: flex;
        align-items: center;
    }
    .header .nav-toggle { width: 40px; }
    .header .site-title { width: 50%; }
    .header .nav {
        list-style: none;
        margin: 0;
        padding: 0;
        width: 50%;
        text-align: right;
    }
    .header .nav li {
        display: inline;
        margin-left: 15px;
    }
    .header .router-link-active { color: #333; }
    .site-title, .site-title a {
        height: 40px;
    }
</style>

<template>
    <div class="theme-header">
        <header class="header">
            <div class="container">
                <div class="nav-toggle">
                    <button type="button" @click="show_menu = !show_menu" class="c-hamburger c-hamburger--htx" v-bind:class="{ 'is-active': show_menu }">
                        <span>{{ lang.show_menu }}</span>
                    </button>
                </div>
                <div class="site-title">
                    <router-link :to="{ path: base_path }" v-show="!logo">{{ site_name }}</router-link>
                    <router-link :to="{ path: base_path }" v-show="logo" class="block">
                        <img v-bind:src="assets_path + '/images/logo.svg'"
                         v-bind:alt="site_name"
                         height="40">
                    </router-link>
                </div>
                <ul class="nav">
                    <li v-for="item in menu">
                        <router-link :to="{ path: url2Slug(item.url) }">{{ item.title }}</router-link>
                    </li>
                </ul>
            </div>
        </header>

        <transition name="slide-fade">
            <div class="mobile-nav" v-show="show_menu && !megamenu">
                <div class="container">
                    <ul class="nav">
                        <li v-for="item in menu">
                            <router-link :to="{ path: url2Slug(item.url) }">{{ item.title }}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </transition>

        <transition name="slide-fade">
            <div class="mega-nav" v-show="show_menu && megamenu">
                <div class="container">
                    <ul class="nav">
                        <li v-for="item in menu">
                            <router-link :to="{ path: url2Slug(item.url) }">{{ item.title }}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </transition>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.getPages();
            this.getMenuLocation('primary');
        },

        data() {
            return {
                assets_path: wp.assets_path,
                base_path: wp.base_path,
                site_name: wp.site_name,
                logo: wp.logo,
                megamenu: wp.megamenu,
                pages: [],
                menu: [],
                lang: wp.lang,
                show_menu: false
            }
        },

        methods: {
            getPages() {
                this.$http.get(wp.root + 'wp/v2/pages').then(function(response) {
                    this.pages = response.data;
                }, function(response) {
                    console.log(response);
                });
            },
            getMenuLocation(location) {
                this.$http.get(wp.root + 'wp-api-menus/v2/menu-locations/' + location).then(function(response) {
                    this.menu = response.data;
                }, function(response) {
                    console.log(response);
                });
            },
            url2Slug(url) {
                return url.replace(/^.*\/\/[^\/]+/, '')
            },
            hideMenu() {
                this.show_menu = false;
            }
        },

        // Create listeners
        created() {
            window.eventHub.$on('changed-route', this.hideMenu)
        },

        // It's good to clean up event listeners before
        // a component is destroyed.
        beforeDestroy() {
            window.eventHub.$off('changed-route', this.hideMenu)
        },
    }
</script>