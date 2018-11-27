var map;
function initMap() {
  let myLatLng = {lat: -5.841610, lng: -35.200750};

  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 16
  });

  let marker = new google.maps.Marker({
    position: myLatLng,
    animation: google.maps.Animation.DROP,
    title:"LECH"
});

  marker.setMap(map);
}