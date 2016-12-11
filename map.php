<?php
  session_start();
?>
    <div id="postalcode" name="postalcode">
        <?php 
            $postalcode = $_SESSION['task_location'];
        ?>
    </div>
    <style><?php include 'css/map.css'; ?></style>
    <div id="map" class="map"></div>
    <script>
        
      var jsPostalCode = "<?php Print($postalcode); ?>";
        
      function initMap() {
        var originalMapCenter = new google.maps.LatLng(44.651070, -63.582687); /* Halifax coordinates */
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: originalMapCenter, 
        });

        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      }
        
      function geocodeAddress(geocoder, resultsMap) {
        geocoder.geocode({'address':jsPostalCode}, function(results, status) {
          if (status === google.maps.GeocoderStatus.OK) { 
            if(status != google.maps.GeocoderStatus.ZERO_RESULTS) {
              resultsMap.setCenter(results[0].geometry.location);
              var marker = new google.maps.Marker({
                map: resultsMap,
                position: results[0].geometry.location, 
              });
              marker.setMap(resultsMap);

              var infowindow = new google.maps.InfoWindow({
                content: "Task location: " + jsPostalCode.toUpperCase()
              });

              marker.addListener('click', function() {
                infowindow.open(resultsMap, marker);
              });

            }
            else {
              alert("No results found");
            }
          } 
          else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeUKykRtzM1Bz-taZD_wnVmrawKvEDBQE&callback=initMap">
    </script>