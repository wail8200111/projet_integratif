<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    include_once 'connexion.php';
    include_once 'Agences.php';

    $database = new Database();
    $db = $database->getConnection();

    $stade = new Stades($db);

    $stmt = $stade->lire();

    if($stmt->rowCount() > 0){
        $tableauStade = [];
        $tableauStade['stade'] = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $stade = [
                "Id_Stade" => $Id_Stade,
                "Longitude" => $Longitude,
                "Latitude" => $Latitude,
                "NomStade" => $NomStade,
            ];

            $tableauStade['stade'][] = $stade;
        }
        http_response_code(200);
        echo json_encode($tableauStade);
    }

}else{
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}
