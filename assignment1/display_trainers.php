<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Public/styles.css">
</head>
<body>

<h2>Trainer List</h2>

<table id="t01">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Hometown</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pokemon_db";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM trainer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"]. "</td>";
        

        if ($row["name"] == "Ash Ketchum") {
            echo "<td><strong>" . $row["name"]. "</strong></td>";
        } else {
            echo "<td>" . $row["name"]. "</td>";
        }


        if ($row["hometown"] == "Unknown") {
            echo "<td><em>" . $row["hometown"]. "</em></td>";
        } else {
            echo "<td>" . $row["hometown"]. "</td>";
        }
        
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>0 results</td></tr>";
}
$conn->close();
?>
</table>

</body>
</html>
