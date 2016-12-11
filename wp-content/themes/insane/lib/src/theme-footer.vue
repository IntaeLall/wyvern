<style>

</style>

<template>
</template>

<script>
    export default {
        mounted() {
            var self = this;
            this.getMenuLocation('footer', function(data){
                self.menu = data;
            });
        },

        data() {
            return {
                assets_path: wp.assets_path,
                base_path: wp.base_path,
                site_name: wp.site_name,
                lang: wp.lang,
                menu: []
            }
        },

        methods: {

        }
    }
</script>