<?php

$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData, true);

$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "bitcoin";

$conn = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nom = "Bitcoin";

$sql = "INSERT INTO currency (name, valueEUR VALUES (?, ?)";
$stmt = $conn->prepare($sql);
var_dump($sql);
$stmt->execute();

if ($conn->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();


