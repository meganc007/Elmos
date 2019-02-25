<?php /* Template Name: Contact */ get_header('inner'); ?>
    <section style="border-top: 4px solid #cf2832;" class="container-fluid">
        <div class="row">
            <div id="map_canvas">
                <script src='https://maps.googleapis.com/maps/api/js?key=&sensor=false&extension=.js'></script>
                <script>
                    google.maps.event.addDomListener(window, 'load', init);
                    var map;

                    function init() {
                        var mapOptions = {
                            center: new google.maps.LatLng(30.363125, -86.265396),
                            zoom: 19,
                            zoomControl: true,
                            zoomControlOptions: {
                                style: google.maps.ZoomControlStyle.DEFAULT,
                            },
                            disableDoubleClickZoom: true,
                            mapTypeControl: true,
                            mapTypeControlOptions: {
                                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                            },
                            scaleControl: true,
                            scrollwheel: false,
                            panControl: true,
                            streetViewControl: true,
                            draggable: true,
                            overviewMapControl: true,
                            overviewMapControlOptions: {
                                opened: false,
                            },
                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                            styles: [
                                {
                                    "featureType": "administrative.neighborhood",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#7e7b7b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "administrative.land_parcel",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#7e7b7b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "landscape",
                                    "elementType": "all",
                                    "stylers": [
                                        {
                                            "color": "#918e8e"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "landscape.natural",
                                    "elementType": "labels.text.fill",
                                    "stylers": [
                                        {
                                            "color": "#868484"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#9e9b9b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "road.highway",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "color": "#807d7d"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#9e9b9b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "road.arterial",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "color": "#807d7d"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "road.local",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#9e9b9b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "road.local",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "color": "#807d7d"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "transit",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#9e9b9b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "transit",
                                    "elementType": "geometry.stroke",
                                    "stylers": [
                                        {
                                            "color": "#807d7d"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "water",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "#7e7b7b"
                                                    }
                                                ]
                                            },
                                {
                                    "featureType": "poi",
                                    "elementType": "geometry.fill",
                                    "stylers": [
                                        {
                                            "color": "797777"
                                                    }
                                                ]
                                            }
                                        ]
                        }
                        var mapElement = document.getElementById('elmosmap');
                        var map = new google.maps.Map(mapElement, mapOptions);
                        var locations = [
                        ['elmosgrill', 'undefined', 'undefined', 'undefined', 'undefined', 30.363074, -86.26554099999998, 'http://elmos.pairsite.com/wp-content/themes/curiosity_framework_v2.5/images/map_marker.png']
                                ];
                        for (i = 0; i < locations.length; i++) {
                            if (locations[i][1] == 'undefined') {
                                description = '';
                            } else {
                                description = locations[i][1];
                            }
                            if (locations[i][2] == 'undefined') {
                                telephone = '';
                            } else {
                                telephone = locations[i][2];
                            }
                            if (locations[i][3] == 'undefined') {
                                email = '';
                            } else {
                                email = locations[i][3];
                            }
                            if (locations[i][4] == 'undefined') {
                                web = '';
                            } else {
                                web = locations[i][4];
                            }
                            if (locations[i][7] == 'undefined') {
                                markericon = '';
                            } else {
                                markericon = locations[i][7];
                            }
                            marker = new google.maps.Marker({
                                icon: markericon,
                                position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                                map: map,
                                title: locations[i][0],
                                desc: description,
                                tel: telephone,
                                email: email,
                                web: web
                            });
                            link = '';
                        }

                    }
                </script>
            </div>
            <style>
                #elmosmap {
                    height: 400px;
                    width: 100%;
                }
                
                .gm-style-iw * {
                    display: block;
                    width: 100%;
                }
                
                .gm-style-iw h4,
                .gm-style-iw p {
                    margin: 0;
                    padding: 0;
                }
                
                .gm-style-iw a {
                    color: #4272db;
                }
            </style>

            <div id='elmosmap' class="embed-responsive-item"></div>

        </div>
    </section>
    <section id="contact" class="container-fluid grungebg">
        <div class="row">
            <div class="col-sm-12 col-md-6 contact-info">
                <?php $id=15; $post = get_page($id); echo $post->post_content; ?>
                    <div>
                        <a href="https://www.facebook.com/Elmos-Grill-185463494836678/" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" /></a>

                        <a href="https://www.instagram.com/elmos_grill_30a/" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" /></a>

                        <a href="https://twitter.com/elmos_grill_30A" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" /></a>

                        <a href="https://plus.google.com/116444727736441362419" target="_blank"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" /></a>
                    </div>
            </div>
            <div class="col-sm-12 col-md-6 contact-form">
                <?php echo do_shortcode('[contact-form-7 id="30" title="Home (Contact Form)"]'); ?>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>