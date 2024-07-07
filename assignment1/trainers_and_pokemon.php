<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Public/styles.css">
</head>
<body>

<h2>Trainer and Pokémon List</h2>

<table id="t01">
  <tr>
    <th>Trainer ID</th>
    <th>Trainer Name</th>
    <th>Hometown</th>
    <th>Pokémon ID</th>
    <th>Pokémon Name</th>
    <th>Type 1</th>
    <th>Type 2</th>
    <th>Move ID</th>
    <th>Move Name</th>
    <th>Move Type</th>
    <th>Power</th>
  </tr>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pokemon_db";
$port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT trainer.id as trainer_id, trainer.name as trainer_name, trainer.hometown,
        pokemon.id as pokemon_id, pokemon.name as pokemon_name, pokemon.type1, pokemon.type2,
        moves.id as move_id, moves.name as move_name, moves.type as move_type, moves.power
        FROM trainer
        LEFT JOIN pokemon ON trainer.id = pokemon.id
        LEFT JOIN pokemon_moves ON pokemon.id = pokemon_moves.pokemon_id
        LEFT JOIN moves ON pokemon_moves.move_id = moves.id
        ORDER BY trainer.id, pokemon.id, moves.id";

$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $conn->error;
} else {
    $current_trainer = '';
    $current_pokemon = '';
    
    while($row = $result->fetch_assoc()) {
        $type_class = strtolower('type-' . $row["type1"]); //This is not working, according to the pokemon type1 changing the color depending on the element
        
        if ($current_trainer !== $row["trainer_id"]) {
            $current_trainer = $row["trainer_id"];
            echo "<tr class='$type_class'>";
            echo "<td>" . $row["trainer_id"]. "</td>";
            echo "<td>" . $row["trainer_name"]. "</td>";
            echo "<td>" . $row["hometown"]. "</td>";
        } else {
            echo "<tr class='$type_class'><td colspan='3'></td>";
        }

        if ($current_pokemon !== $row["pokemon_id"]) {
            $current_pokemon = $row["pokemon_id"];
            echo "<td>" . $row["pokemon_id"]. "</td>";
            echo "<td>" . $row["pokemon_name"]. "</td>";
            echo "<td>" . $row["type1"]. "</td>";
            echo "<td>" . $row["type2"]. "</td>";
        } else {
            echo "<td colspan='4'></td>";
        }

        echo "<td>" . $row["move_id"]. "</td>";
        echo "<td>" . $row["move_name"]. "</td>";
        echo "<td>" . $row["move_type"]. "</td>";
        echo "<td>" . $row["power"]. "</td>";
        echo "</tr>";
    }
}

$conn->close();
?>
</table>

</body>
</html>
