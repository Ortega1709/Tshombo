<?php 

    include ("../Db/Database.php");
    include ("../Models/Shop.php");

    if (isset($_POST["ajouter"])) {

        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $passwd = $_POST["passwd"];
        $n = $_POST["n"];
        $avenue = $_POST["avenue"];
        $quartier = $_POST["quartier"];
        $commune = $_POST["commune"];
        $telephone = $_POST["telephone"];

        // upload file 
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowedExt = array("jpg","jpeg","png");
        if(in_array($fileActualExt, $allowedExt)){
            $fileNemeNew = uniqid('',true).".".$fileActualExt;
            $fileDestination = '../../static/'.$fileNemeNew;
            if($fileError == 0){
                if($fileSize < 10000000){
                    $database = new Database();
                    $connexion = $database->getConnection();
                    $shop = new Shop($connexion);

                    $shop->nom = $nom;
                    $shop->email = $email;
                    $shop->passwd = $passwd;
                    $shop->numero = $n;
                    $shop->avenue = $avenue;
                    $shop->quartier = $quartier;
                    $shop->commune = $commune;
                    $shop->telephone = $telephone;
                    $shop->image = $fileNemeNew;
                    if ($shop->ajouterShop()) {

                        move_uploaded_file($fileTempName, $fileDestination);
                        $url = "../Views/shops.php";
                        header("Location: $url");

                    } else echo "Erreur d'insertion";
                }else echo "File Size Limit beyond acceptance";
            }else echo "Something Went Wrong Please try again!";
        }else echo "You can't upload this extention of file";
    }