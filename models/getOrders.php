<?php
include '../config/config.php';
include '../config/database.php';
$query = "SELECT * FROM orders ";
$result = $mysqli->query($query);

$json_array = array();

while ($assoc = $result->fetch_assoc()) {
    $json_array[] = $assoc;
}

$json = json_encode($json_array);
echo $json;
