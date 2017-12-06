<style>
 #map_canvas { margin: 0; padding: 0; height: 500px;}
  /* Optional: Makes the sample page fill the window. */
  .pac-container {
    background-color: #FFF;
    z-index: 1050;
    position: fixed;
    display: inline-block;
    float: left;
}
  .map-control{
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  }

  #pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 300px;
  }

  #pac-input:focus {
    border-color: #4d90fe;
  }

  .pac-container {
    font-family: Roboto;
  }

  #type-selector {
    color: #fff;
    background-color: #4d90fe;
    padding: 5px 11px 0px 11px;
  }

  #type-selector label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
  }
  #target {
    width: 345px;
  }
</style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false&key=AIzaSyCY-S8A_rqZ2jEkhOGb-V5de6QkWn4T8YQ"></script>

<script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
<script>
    setTimeout(popup, 2000);
    function popup() {
      $('.modal-map').attr('class','modal fade');
    }

    


</script>

        <script>
            var map;
            var geocoder;
            var mapOptions = { center: new google.maps.LatLng(0.0, 0.0), zoom: 2,
            mapTypeId: google.maps.MapTypeId.ROADMAP };

            function initAutocomplete() {

              geocoder = new google.maps.Geocoder();
              var map = new google.maps.Map(document.getElementById("map_canvas"),
              mapOptions);
              google.maps.event.addListener(map, 'click', function(event) {
                  placeMarker(event.latLng);
              });

              var marker;
              function placeMarker(location) {
                  if(marker){ //on vérifie si le marqueur existe
                      marker.setPosition(location); //on change sa position
                  }else{
                      marker = new google.maps.Marker({ //on créé le marqueur
                          position: location,
                          map: map
                      });
                  }
                  document.getElementById('lat').value=location.lat();
                  document.getElementById('lng').value=location.lng();
                  getAddress(location);
              }

              function getAddress(latLng) {
              geocoder.geocode( {'latLng': latLng},
              function(results, status) {
                if(status == google.maps.GeocoderStatus.OK) {
                  if(results[0]) {
                    document.getElementById("address").value = results[0].formatted_address;


                  }
                  else {
                    document.getElementById("address").value = "No results";
                  }
                }
                else {
                  document.getElementById("address").value = status;
                }
              });
              }

              // Create the search box and link it to the UI element.
              var input = document.getElementById('pac-input');
              var searchBox = new google.maps.places.SearchBox(input);
              map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

              // Bias the SearchBox results towards current map's viewport.
              google.maps.event.addListener(map, 'bounds_changed', function(event) {
                  searchBox.setBounds(map.getBounds());
              });


              var markers = [];
              // Listen for the event fired when the user selects a prediction and retrieve
              // more details for that place.
              searchBox.addListener('places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                  return;
                }

                // Clear out the old markers.
                markers.forEach(function(marker) {
                  marker.setMap(null);
                });

                map.addListener('bounds_changed', function() {
                  searchBox.setBounds(map.getBounds());
                });
                markers = [];

                // For each place, get the icon, name and location.
                var bounds = new google.maps.LatLngBounds();
                places.forEach(function(place) {
                  if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                  }
                  var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                  };

                  // Create a marker for each place.
                  markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                  }));

                  if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                  } else {
                    bounds.extend(place.geometry.location);
                  }
                });
                map.fitBounds(bounds);
              });

            }
              google.maps.event.addDomListener(window, 'load', initAutocomplete);


        </script>
