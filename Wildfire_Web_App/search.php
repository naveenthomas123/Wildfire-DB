<?php
include "Wildfire_web.php";
$boo = $_GET["boo"];
if($boo == 'yes'){
$sql = "Select * from wildfire_data";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc())
    echo "ID = " . $row["ID"]. " County_name = " . $row["County_name"]. " High_Temp = " . $row["High_Temp"]. " Humidity = " . $row["Humidity"]. " Precipitation = " . $row["Avg_Precipitation"]. " Wind Speed = ". $row["Wind_Speed"]. " Elevation = " . $row["Elevation"]. " Historical Fires = " .$row["Historical_fires"]." Risk factor =" . $row["Risk_Factor"];
}
}
?>
<a href="Wildfire_web.php"> Return to main page</a>