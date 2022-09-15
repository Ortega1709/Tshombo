<?php 

    include ("../Db/Database.php");
    include ("../Models/Marque.php");

    if (isset($_POST["ajouter"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $marque = new Marque($connexion);
        $marque->nom = $_POST["nom"];


        if ($marque->ajouterMarque()) {
            $url = "../Views/marques.php";
            header("Location: $url");
        }

    }

    if (isset($_POST["modifier"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $marque = new Marque($connexion);
        $marque->idMarque = $_POST["id"];
        $marque->nom = $_POST["nom"];


        if ($marque->modifierMarque()) {
            $url = "../Views/marques.php";
            header("Location: $url");
        }

    }

    if (isset($_GET["id"])) {

        $database = new Database();
        $connexion = $database->getConnection();

        $marque = new Marque($connexion);
        $marque->idMarque = $_GET["id"];


        if ($marque->supprimerMarque()) {
            $url = "../Views/marques.php";
            header("Location: $url");
        }

    }


    