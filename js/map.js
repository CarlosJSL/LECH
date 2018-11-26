var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -5.841610, lng: -35.200750},
    zoom: 16
  });
}