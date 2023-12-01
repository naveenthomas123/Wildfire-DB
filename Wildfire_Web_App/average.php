<?php
include "Wildfire_web.php";
$boo = $_GET["boo"];
if($boo == 'yes'){
$sql = "Select avg(High_Temp), avg(Humidity), avg(Avg_Precipitation), avg(Wind_Speed), avg(Elevation), avg(Historical_fires) from wildfire_data";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_array())
        echo " High_temp = " . $row[0]. " Humidity = " . $row[1]. " Precipitation = " . $row[2]. " Wind Speed = ". $row[3]. " Elevation = " . $row[4]. " Historical Fires = " .$row[5];
}
}
?>
<a href="Wildfire_web.php"> Return to main page</a>