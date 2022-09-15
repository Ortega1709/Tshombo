
<?php 

    include ("../Db/Database.php");
    include ("../Models/Administrateur.php");

    if (isset($_POST["ajouter"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $administrateur = new Administrateur($connexion);
        
        $administrateur->nom = $_POST["nom"];
        $administrateur->email = $_POST["email"];
        $administrateur->passwd = $_POST["passwd"];

        if ($administrateur->ajouterAdministrateur()) {
            $url = "../Views/administrateur.php";
            header("Location: $url");
        } else {
            echo "Erreur";
        }
    }

    if (isset($_POST["connexion"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $administrateur = new Administrateur($connexion);
        
        $administrateur->email = $_POST["email"];
        $administrateur->passwd = $_POST["passwd"];

        if ($administrateur->authentification()) {
            $url = "../Views/dashboard.php";
            header("Location: $url");
        } else {
            $url = "../index.php";
            header("Location: $url");
        }
    }

    if (isset($_GET["d"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $administrateur = new Administrateur($connexion);
        $administrateur->deconnexion();
    }

    if (isset($_POST["modifier"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $administrateur = new Administrateur($connexion);
        $administrateur->idAdministrateur = $_POST["id"];
        $administrateur->nom = $_POST["nom"];
        $administrateur->email = $_POST["email"];
        $administrateur->passwd = $_POST["passwd"];

        if ($administrateur->modifierAdministrateur()) {
            $url = "../Views/administrateur.php";
            header("Location: $url");
        } else {
            $url = "../Views/editerAdministrateur.php";
            header("Location: $url");
        }
    }

    if (isset($_GET["id"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $administrateur = new Administrateur($connexion);
        $administrateur->idAdministrateur = $_GET["id"];

        if ($administrateur->supprimerAdministrateur()) {
            $url = "../Views/administrateur.php";
            header("Location: $url");
        }
    }

?>