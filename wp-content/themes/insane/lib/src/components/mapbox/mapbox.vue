<template>
    <div class="mapbox">
        <div id="map"></div>
    </div>
</template>

<script>
    export default {

        mounted() {

            // Library include workaround
            var mapboxGlJs = document.createElement('script');
            mapboxGlJs.setAttribute('src','https://api.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.js');
            document.head.appendChild(mapboxGlJs);

            var mapboxGlCss = document.createElement('link')
            mapboxGlCss.type = 'text/css'
            mapboxGlCss.rel = 'stylesheet'
            mapboxGlCss.href = 'https://api.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.css'
            document.head.appendChild(mapboxGlCss)

            var self = this;

            mapboxGlJs.onload = function(){

                mapboxgl.accessToken = self.token;
                window.map = new mapboxgl.Map({
                    container: self.container,
                    style: self.style,
                    center: self.center,
                    zoom: self.zoom
                });

                self.initData();
            };

        },

        methods: {
            initData() {

            },

            getMap() {
                return window.map;
            }
        },

        data() {
            return {
                container: 'map',
                token: '{MAPBOX_TOKEN_HERE}',
                style: '{MAPBOX_STYLE_HERE}',
                center: [-65.017, -16.457],
                zoom: 5
            }
        }
    }
</script>