<!DOCTYPE html>
<html>
<body>

<div id="googleMap" style="width:100%;height:700px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(0,0),
  zoom:5,
};
var map =new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZaRBLWcX7bIL3hDGSf7KIQURG0YNp8z0&callback=myMap"></script>

</body>
</html>