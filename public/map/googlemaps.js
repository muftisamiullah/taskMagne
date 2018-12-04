var curLat = null; //user location
var curLon = null;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
        window.alert("no location");
    }
}
function showPosition(position) {
    curLat = position.coords.latitude;
    curLon = position.coords.longitude;
}
function initMap(){
  getLocation() //finds out user location to fomat the map
  if (curLat == null){
    curLat = 34.096391;   //if the user location cannot be found, set default ones
    curLon = 74.802305;   // of boston
    console.log("random locations");
  }
  var options = {
    zoom:17,
    center:{lat:curLat, lng:curLon}
  }
    var uluru = {lat: curLat, lng: curLon};
    var map = new google.maps.Map(document.getElementById("map"),options);
    var marker = new google.maps.Marker({position: uluru, map: map});
}
