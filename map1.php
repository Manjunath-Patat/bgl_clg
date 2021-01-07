<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
// If we wanted to change the base currency, we would uncomment the following line
// $geoplugin->currency = 'EUR';
 
$geoplugin->locate();
echo $geoplugin->city;
$geoplugin->countryName;
$geoplugin->latitude;
 $geoplugin->longitude ;
?>


