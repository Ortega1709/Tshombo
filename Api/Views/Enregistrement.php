
<?php 

// header requis ...
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include_once "../db/Database.php";
    include_once "../Models/Utilisateur.php";

    $database = new Database();
    $connection = $database->getConnection();

    $utilisateur = new Utilisateur($connection);
    $data = json_decode(file_get_contents("php://input"));

    if (
        !empty($data->username) && 
        !empty($data->email) &&
        !empty($data->numero) &&
        !empty($data->password)) {

            $utilisateur->username = $data->username;
            $utilisateur->email = $data->email;
            $utilisateur->numero = $data->numero;
            $utilisateur->password = $data->password;

            if ($utilisateur->ajouterCompte()) {

                http_response_code(201); // code success
                echo json_encode(["message" => "L'ajout a été effectué"]);
            } else {

                http_response_code(503); // code erreur de service
                echo json_encode(["message" => "L'ajout n'a pas été effectué"]);
            }
        } else {

            http_response_code(503); // code erreur de service
            echo json_encode(["message" => "L'ajout n'a pas été effectué"]);
        }
} else {

    // on retourne un code d' erreur ... 
    http_response_code(405);
    echo json_encode(["message" => "method not allowed"]);
}

?>