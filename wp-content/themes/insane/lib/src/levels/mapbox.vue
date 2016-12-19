<style>
    .level.level-mapbox #map {
        min-height: 520px;
        width: 100%;
    }
    .marker {
        display: block;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        padding: 0;
    }
</style>

<template>
    <div class="level level-mapbox">
        <div id="map"></div>
    </div>
</template>

<script>
    import MapboxComponent from '../components/mapbox/mapbox.vue';

    export default {

        extends: MapboxComponent,

        props: ['level'],

        methods: {
            initData() {
                var map = this.getMap(),
                    self = this;

                this.getPlacePosts(function(data){

                    data.forEach(function(post){
                        if ( typeof post.acf == 'undefined' ) return;
                        if ( typeof post.acf.location == 'undefined' ) return;

                        var locobj = JSON.parse( post.acf.location );

                        if ( typeof locobj[0] == 'undefined' ) return;

                        if ( typeof locobj[0].lat == 'undefined' ) return;
                        if ( typeof locobj[0].lng == 'undefined' ) return;

                        // create a DOM element for the marker
                        var el = document.createElement('div');
                        el.className = 'marker';
                        el.style.width = 40 + 'px';
                        el.style.height = 40 + 'px';

                        if ( typeof post.acf.obrazky[0] != 'undefined' ) {
                            if ( typeof post.acf.obrazky[0].obrazek != 'undefined' ) {
                                if (typeof post.acf.obrazky[0].obrazek.sizes != 'undefined') {
                                    el.style.backgroundImage = 'url('+post.acf.obrazky[0].obrazek.sizes.thumbnail+')';
                                }
                            }
                        }

                        el.addEventListener('click', function(marker) {
                            self.$router.push({ path: self.url2Slug(post.link) })
                            map.setCenter([post.acf.location[0].lat, post.acf.location[0].lng]);
                        });

                        // add marker to map
                        new mapboxgl.Marker(el, {offset: [-40 / 2, -40 / 2]})
                            .setLngLat({
                                lat: locobj[0].lat,
                                lng: locobj[0].lng
                            })
                            .addTo(map);
                    });
                });
            }
        },

        data() {
            return {
                container: 'map',
                token: wp.keys.mapbox,
                style: 'mapbox://styles/rozklad/ciw9godi900482qnu4qauaozp',
                center: [42.4797, 19.94336],
                zoom: 3,
                directions: true
            }
        }
    }
</script>