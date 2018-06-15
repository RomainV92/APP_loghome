<?php
$conn = new mysqli('localhost', 'root', '', 'users');
if ($conn->connect_error) {
    die("Connextion error: " . $conn->connect_error);
}

$result = $conn->query('SELECT Valeur FROM capteur WHERE ID =\''.$_GET['cible'].'\'');
if($result->num_rows >0){
    while ($row = $result->fetch_assoc()){
        echo $row['Valeur'];
    }
}
?>