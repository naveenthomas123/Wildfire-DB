<?php
include "Wildfire_web.php";

$County = $_GET["county"];
$Temperature = $_GET["Temperature"];
$Humidity = $_GET["Humidity"];
$Precipitation = $_GET["Precipitation"];
$Wind = $_GET["Wind_Speed"];
$Elevation = $_GET["Elevation"];
$Historical = $_GET["Historical_Fires"];
$Risk = $_GET["Risk_Factor"];

$sql = "INSERT INTO wildfire_data (County_name, High_temp, Humidity, Avg_precipitation, Wind_Speed, Elevation, Historical_fires, Risk_Factor) VALUES ('$County','$Temperature' ,'$Humidity','$Precipitation' , '$Wind', '$Elevation', '$Historical', '$Risk');";
$result = $conn->query($sql);
?>
<a href="Wildfire_web.php"> Return to main page</a>