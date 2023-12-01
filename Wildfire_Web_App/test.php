<?php
include "Wildfire_web.php";

$County = $_GET("county");
$Temperature = $_GET("Temperature");
$Humidity = $_GET("Humidity");
$Precipitation = $_GET("Precipitation");
$Wind = $_GET("Wind Speed");
$Elevation = $_GET("Elevation");
$Historical = $_GET("Historical Fires");
$Risk = $_GET("Risk Factor");
//$sql = "Select max(ID) From wildfire_data";
//$id = $mysqli=>query($sql) + 1 

$sql = "INSERT INTO `wildfire_data` (ID,County_name, High_temp, Humidity, Avg_precipitation, Wind_Speed, Elevation, Historical_fires, Risk Factor) VALUES ($id,$County,$Temperature ,$Humidity,$Precipitation , $Wind, $Elevation, $Historical, $Risk);"
?>
