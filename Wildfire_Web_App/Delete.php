<?php
include "Wildfire_web.php";
$County = $_GET["county"];

$sql = "Delete from wildfire_data where wildfire_data.County_name = '$County'";
$result = $conn->query($sql);
?>
<a href="Wildfire_web.php"> Return to main page</a>