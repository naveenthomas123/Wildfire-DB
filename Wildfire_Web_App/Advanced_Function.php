<?php
include "Wildfire_web.php";
$County = $_GET["county"];

$sql = "SELECT County_Name, wildfire_data.Risk_Factor,
(SELECT High_Temp FROM wildfire_data WHERE County_name = '$County' AND High_Temp > (SELECT AVG(High_Temp) FROM wildfire_data)),
(SELECT Humidity FROM wildfire_data WHERE County_name = '$County' AND Humidity < (SELECT AVG(Humidity) FROM wildfire_data)),
(SELECT  Avg_Precipitation FROM wildfire_data WHERE County_name = '$County' AND Avg_Precipitation < (SELECT AVG(Avg_Precipitation) FROM wildfire_data)),
(SELECT Wind_Speed FROM wildfire_data WHERE County_name = '$County' AND Wind_Speed > (SELECT AVG(Wind_Speed) FROM wildfire_data)),
(SELECT Elevation FROM wildfire_data WHERE County_name = '$County' AND Elevation > (SELECT AVG(Elevation) FROM wildfire_data)),
(SELECT Actions FROM wildfire_data right join actions on wildfire_data.Risk_Factor = actions.Risk_Factor WHERE County_name = '$County')
FROM wildfire_data 
RIGHT JOIN actions ON wildfire_data.Risk_Factor = actions.Risk_Factor where County_name = '$County'";

$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_array()){
        echo "County_name = " . $row[0]. "\t";
        if($row[2] <> null){
            echo "High temperature is a major factor in Wildfires in this $County";
        }
        if($row[3] <> null){
            echo "Humidity is a major factor in Wildfires in this $County";
        }
        if($row[4] <> null){
            echo "Avg_Precipitation is a major factor in Wildfires in this $County";
        }
        if($row[5] <> null){
            echo "Wind Speed is a major factor in Wildfires in this $County";
        }
        if($row[6] <> null){
            echo "Elevation is a major factor in Wildfires in this $County";
        }
        echo "Risk Factor: " . $row[1]. "\t";
        if($row[7] <> null){
        echo "Actions to take based on Risk Factor: " . $row[6];
        }
    }   
}
?>
<a href="Wildfire_web.php"> Return to main page</a>