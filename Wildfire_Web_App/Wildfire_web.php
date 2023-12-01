<html>
<head>
<h1>Wildfires</h1><br>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "Hyperbeam@12";
$dbname = "wildfires";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
List:<br><br>
<form action="search.php">
  <label for="boo">Do you want to List the Database? yes or no:</label>
  <input type="text" name="boo"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>
Search:<br><br>
<form action="List.php">
  <label for="county">County:</label>
  <input type="text" name="county"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>

Insertion:<br><br>
<form action="Insertion.php">
  <label for="county">County:</label>
  <input type="text" name="county"><br><br>
  <label for="Temperature">Temperature:</label>
  <input type="double" name="Temperature"><br><br>
  <label for="humidity">Humidity:</label>
  <input type="double" name="Humidity"><br><br>
  <label for="precipitation">Precipitation:</label>
  <input type="double" name="Precipitation"><br><br>
  <label for="Wind_Speed">Wind_Speed:</label>
  <input type="double" name="Wind Speed"><br><br>
  <label for="Elevation">Elevation:</label>
  <input type="int" name="Elevation"><br><br>
  <label for="Historical_fires">Historical_Fires:</label>
  <input type="int" name="Historical Fires"><br><br>
  <label for="">Risk_Factor:</label>
  <input type="text"name="Risk Factor"><br><br>
  <input type="submit" value="Submit">
</form>

Delete:<br><br>
<form action="Delete.php">
  <label for="county">County:</label>
  <input type="text" name="county"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>

Update:<br><br>
<form action="update.php">
  <label for="county">Which County do you want to change?</label>
  <input type="text" name="county"><br><br>
  <label for="cat">Which numerical attribute do you want to change?</label>
  <input type="text" name="numerical"><br><br>
  <label for="cat">What is the value?</label>
  <input type="double" name="nval"><br><br>
  <label for="cat">Which categorical attribute do you want to change?</label>
  <input type="text" name="categorical"><br><br>
  <label for="cat">What is the value?</label>
  <input type="text" name="cval"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>
Average:<br><br>
<form action="average.php">
  <label for="boo">Do you want the averages of the numerical attributes? yes or no:</label>
  <input type="text" name="boo"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>
Actions:<br><br>
<form action="join.php">
  <label for="boo">See actions to take based on risk factor: yes or no</label>
  <input type="text" name="boo"><br><br>
  <input type="submit" value="Submit">
</form>
Advanced Function:<br><br>
<form action="Advanced_Function.php">
  <label for="county">County:</label>
  <input type="text" name="county"><br><br>
  <input type="submit" value="Submit">
</form>
<br><br>
<?php
//$conn->close();
?>
</body>
</html>