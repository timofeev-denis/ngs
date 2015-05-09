<?php /* Static Name: Map */ ?>
<style type="text/css">
    /* Set a size for our map container, the Google Map will take up 100% of this container */
    #map {
        width: 100%;
        height: 378px;
    }
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {

    	// The latitude and longitude to center the map (always required)
    	var myLatlng = new google.maps.LatLng(<?php echo of_get_option('latitude'); ?>, <?php echo of_get_option('longitude'); ?>);

        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: <?php echo of_get_option('zoom'); ?>,
            
            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: myLatlng, // Santa Barbara

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: 
            [
            	{"featureType":"water","stylers":[{"color":"#73b6e6"}]},
           	    {"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},
           	    {"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},
           	    {"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#e8e0d8"}]},
           	    {"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#cedeaa"}]},
           	    {"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},
           	    {"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},
           	    {"featureType":"poi","stylers":[{"visibility":"off"}]},
           	    {"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e8e0d8"}]},
           	    {"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"visibility":"off"},{"color":"#ff0"}]},
           	    {"featureType":"poi.park","stylers":[{"visibility":"on"}]},
           	    {"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},
           	    {"featureType":"poi.medical","stylers":[{"visibility":"on"}]},
           	    {"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}
           	]
        };

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var contentString = '<div id="content"><?php $desc = of_get_option("description"); echo str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $desc); ?></div>';
		var infowindow = new google.maps.InfoWindow({
		    content: contentString
		});

		var image = '<?php echo get_stylesheet_directory_uri(); ?>/images/marker.png';

        var marker = new google.maps.Marker({
		    position: myLatlng,
		    map: map,
		    icon: image
		});

		// To add the marker to the map, call setMap();
		marker.setMap(map);

		google.maps.event.addListener(marker, 'click', function() {
		    infowindow.open(map,marker);
		});

    }
</script>
<div id="map"></div>