<template>
    <div class="mapbox">
        <div id="map"></div>
    </div>
</template>

<script>
    export default {

        mounted() {

            var self = this;

            var scripts = [
                'https://api.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.js',
                'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.0.3/mapbox-gl-directions.js'
            ]


            var styles = [
                'https://api.mapbox.com/mapbox-gl-js/v0.28.0/mapbox-gl.css',
                'https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v3.0.3/mapbox-gl-directions.css'
            ];

            for ( var key in scripts ) {

                var script = scripts[key];
                var scriptobj = this.loadScript(script);

            }

            for ( var key in styles ) {

                var style = styles[key];
                var styleobj = this.loadStyle(style);

            }

            scriptobj.onload = function(){

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
            loadScript(url) {
                var element = document.createElement('script');
                element.setAttribute('src', url);
                document.head.appendChild(element);
                return element;
            },

            loadStyle(url) {
                var element = document.createElement('link')
                element.type = 'text/css'
                element.rel = 'stylesheet'
                element.href = url
                document.head.appendChild(element)
                return element
            },

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
                center: [41.10, 18.10],
                zoom: 5,

                base: true,
                directions: false
            }
        }
    }
</script>