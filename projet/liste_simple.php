<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$host = "localhost";
$db_name = "Projet_Integratif";
$username = "root";
$password = "root";
try{
    $db = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
    $db->exec("set names utf8");
}catch(PDOException $exception){
    echo "Erreur de connexion : " . $exception->getMessage();
}

$sql = "SELECT * FROM stade";

$query = $db->prepare($sql);

$query->execute();

while($row = $query->fetch(PDO::FETCH_ASSOC)){
    extract($row);

    $stade = [
        "Id_Stade" => $Id_Stade,
        "Longitude" => $Longitude,
        "Latitude" => $Latitude,
        "NomStade" => $NomStade,
    ];

    $tableauStade['stade'][] = $stade;
}

echo json_encode($tableauStade);