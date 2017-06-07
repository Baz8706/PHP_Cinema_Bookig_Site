<?php
header("Content-type: application/json");
$a = $_GET[lat];
$b = $_GET[lon];
$c = $_GET[type];
$d = $_GET[description];
$conn = new PDO ("mysql:host=localhost;dbname=dftitutorials;","dftitutorials","dftitutorials");

$statement = $conn->prepare("INSERT INTO annotations (lat, lon, type, description) VALUES (?, ?, ?, ?);");
$statement->bindparam(1,$lat);
$statement->bindparam(2,$lon);
$statement->bindparam(3,$type);
$statement->bindparam(4,$description);
$statement->execute();
?>

