<?php
include '../config/config.php';
include '../config/database.php';
$id = $_GET['id'];

$query = "DELETE FROM orders WHERE id=$id";

$result = $mysqli->query($query);

echo $result;
