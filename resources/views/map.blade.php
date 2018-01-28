<!DOCTYPE html>
<html lang="en">
 
  
 <head>
   <link rel="stylesheet" type="text/css" href="{{URL::asset('css/map.css')}}">
 </head>
  
 
<body>


<div id="map"></div>
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvuxh7HFTWHVMIMCQcyWWHFPtNJ21ig1M&callback=initMap">
</script>


  </body>

<script>
function initMap() {
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 7,
    center: {lat: 30.3753, lng: 69.3451}
  });
  directionsDisplay.setMap(map);

  
    calculateAndDisplayRoute(directionsService, directionsDisplay);
  
  
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
  directionsService.route({
    origin: '{{$source}}',
    destination: '{{$dest}}',
    travelMode: 'DRIVING'
  }, function(response, status) {
    if (status === 'OK') {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}
</script>

</html>