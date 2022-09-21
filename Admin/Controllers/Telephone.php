<?php 

    include ("../Db/Database.php");
    include ("../Models/Telephone.php");

    if (isset($_POST["ajouter"])) {


        $idShop = $_POST["shop"];
        $idMarque = $_POST["marque"];
        $model = $_POST["model"];
        $os = $_POST["os"];
        $ecran = $_POST["ecran"];
        $processeur = $_POST["processeur"];
        $ram = $_POST["ram"];
        $stockage = $_POST["stockage"];
        $photo = $_POST["photo"];
        $batterie = $_POST["batterie"];
        $couleur = $_POST["couleur"];
        $prix = $_POST["prix"];
        $quantite = $_POST["quantite"];
        

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
                    $telephone = new Telephone($connexion);

                    $telephone->idMarque = $idMarque;
                    $telephone->idShop = $idShop;
                    $telephone->model = $model;
                    $telephone->os = $os;
                    $telephone->ecran = $ecran;
                    $telephone->processeur = $processeur;
                    $telephone->ram = $ram;
                    $telephone->stockage = $stockage;
                    $telephone->photo = $photo;
                    $telephone->batterie = $batterie;
                    $telephone->couleur = $couleur;
                    $telephone->prix = $prix;
                    $telephone->quantite = $quantite;
                    $telephone->image = $fileNemeNew;

                    if ($telephone->ajouterTelephone()) {

                        move_uploaded_file($fileTempName, $fileDestination);
                        $url = "../Views/telephones.php";
                        header("Location: $url");

                    } else echo "Erreur d'insertion";
                }else echo "File Size Limit beyond acceptance";
            }else echo "Something Went Wrong Please try again!";
        }else echo "You can't upload this extention of file";
    }