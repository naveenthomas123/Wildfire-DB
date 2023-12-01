<?php
include "Wildfire_web.php";
$County = $_GET["county"];
$Numerical = $_GET["numerical"];
$nval = $_GET["nval"];
$Categorical = $_GET["categorical"];
$cval = $_GET["cval"];


if ($Numerical <> null && $Categorical <> null){
    $sql = "Update wildfire_data Set $Numerical = '$nval', $Categorical = '$cval' where County_name = '$County'";
    $result = $conn->query($sql);
}
elseif($Numerical <> null){
    $sql = "Update wildfire_data Set $Numerical = '$nval' where County_name = '$County'";
    $result = $conn->query($sql);
}
else{
    $sql = "Update wildfire_data Set $Categorical = '$cval' where County_name = '$County'";
    $result = $conn->query($sql);
}

?>
<a href="Wildfire_web.php"> Return to main page</a>