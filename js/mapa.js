function iniciarMap(){
    var coord = {lat: 19.3968679 ,lng: -98.9859561};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}