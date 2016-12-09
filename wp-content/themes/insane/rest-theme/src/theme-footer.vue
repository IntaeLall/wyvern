<style>

</style>

<template>
    <footer class="footer">
        <div class="container">
            Copyright &copy; <router-link :to="{ path: base_path }">{{ site_name }}</router-link>
        </div>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                assets_path: wp.assets_path,
                base_path: wp.base_path,
                site_name: wp.site_name,
                lang: wp.lang
            }
        }
    }
</script>