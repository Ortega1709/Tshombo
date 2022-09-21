
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

    $utilisateur = new Client($connection);
    $data = json_decode(file_get_contents("php://input"));

    if (!empty($data->email) && !empty($data->password)) {

            $utilisateur->email = $data->email;
            $utilisateur->password = $data->password;

            if ($utilisateur->authentification()) {

                http_response_code(201); // code success
                echo json_encode(["message" => "Connexion réussie"]);
            } else {

                http_response_code(503); // code erreur de service
                echo json_encode(["message" => "Email ou mot de passe incorrect"]);
            }
        } else {

            http_response_code(503); // code erreur de service
            echo json_encode(["message" => "Erreur de connexion"]);
        }
} else {

    // on retourne un code d' erreur ... 
    http_response_code(405);
    echo json_encode(["message" => "method not allowed"]);
}

?>