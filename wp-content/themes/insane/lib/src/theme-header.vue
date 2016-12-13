<style>
    .header {

    }
    .header .container {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .header .container > * {
        flex: 1;
    }
    .header .container .nav {
        text-align: right;
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
                <div class="search">
                    <input type="search" v-model="search" :placeholder="lang.search_placeholder">
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
                        <li v-for="item in mega">
                            <router-link :to="{ path: url2Slug(item.url) }">{{ item.title }}</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </transition>

        <transition name="slide-fade">
            <div class="mega-search" v-if="show_search">
                <div v-for="result in search_results" class="search-result">
                    <h3 class="search-result-title">
                        <router-link :to="{ path: url2Slug(result.link) }" v-html="highlightSearch(result.title.rendered)"></router-link>
                    </h3>
                    <div class="search-result-content" v-html="highlightSearch(result.excerpt.rendered)">
                    </div>
                </div>
            </div>
        </transition>

    </div>
</template>

<script>
    export default {
        mounted() {
            this.getPages();

            var self = this;

            this.getMenuLocation('primary', function(data){
                self.menu = data;
            });

            this.getMenuLocation('mega', function(data){
                self.mega = data;
            });
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
                mega: [],
                lang: wp.lang,
                show_menu: false,
                search: '',
                search_results: [],
                show_search: false,
            }
        },

        methods: {
            hideMenu() {
                this.show_menu = false;
            },
            highlightSearch(input) {
                return input.replace(this.search, '<span class="search-highlight">' + this.search + '</span>')
            }
        },

        watch: {
            search: function(val, oldVal){

                if ( val.length > 0 )
                {
                    var self = this;
                    this.show_search = true;
                    this.getSearch(val, function(data){
                        self.search_results = data;
                    });
                } else {
                    this.search_results = [];
                    this.show_search = false;
                }

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