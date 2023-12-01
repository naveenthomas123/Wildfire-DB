<?php
include "Wildfire_web.php";
$boo = $_GET["boo"];
if($boo == 'yes'){
    $sql = "Select * from wildfire_data right join actions on wildfire_data.Risk_Factor = actions.Risk_Factor";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc())
            echo $row["ID"]."\t".$row["County_name"]. "\t".$row["High_Temp"]. "\t".$row["Humidity"]. "\t".$row["Avg_Precipitation"]. "\t".$row["Wind_Speed"]. "\t".$row["Elevation"]. "\t" .$row["Historical_fires"]. "\t".$row["Risk_Factor"]."\t".$row["Actions"]."\n";
    }
}
?>
<a href="Wildfire_web.php"> Return to main page</a>