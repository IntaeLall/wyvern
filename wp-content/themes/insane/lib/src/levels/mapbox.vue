<style>
    .level.level-mapbox #map {
        height: 520px;
        width: 100%;
    }
</style>

<template>
    <div class="level level-mapbox">
        <div id="map"></div>
    </div>
</template>

<script>
    export default {

        mounted() {

            mapboxgl.accessToken = 'pk.eyJ1Ijoicm96a2xhZCIsImEiOiJjaXZmZTVnZDUwMDQ1MnRwa3hhZGl4NHF0In0.yDeszAAnAlBc-9rwWs6PzA';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/rozklad/ciw9godi900482qnu4qauaozp'
            });
            window.map = map;

        },

        props: ['level'],

        data() {
            return {
                assets_path: wp.assets_path,
                base_path: wp.base_path,
                site_name: wp.site_name,
                lang: wp.lang,
                show_video: false
            }
        }
    }
</script>