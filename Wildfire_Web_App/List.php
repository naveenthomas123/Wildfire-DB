<?php
include "Wildfire_web.php";
$County = $_GET["county"];

$sql = "Select ID, County_name, High_Temp, Humidity, Avg_Precipitation, Wind_Speed, Elevation, Historical_fires, Risk_Factor from wildfire_data where wildfire_data.County_name = '$County'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc())
        echo "\n"."ID = " . $row["ID"]. " County_name = " . $row["County_name"]. " High_temp = " . $row["High_Temp"]. " Humidity = " . $row["Humidity"]. " Precipitation = " . $row["Avg_Precipitation"]. " Wind Speed = ". $row["Wind_Speed"]. " Elevation = " . $row["Elevation"]. " Historical Fires = " .$row["Historical_fires"]." Risk factor = " . $row["Risk_Factor"]. " ";
}
?>
<a href="Wildfire_web.php"> Return to main page</a>