<?php 

    class Telephone{

        private $connexion = null;
        private $table = "TELEPHONE";
        private $table2 = "SPECIFICATION";

        public string $idTelephone;
        public string $idMarque;
        public string $idShop;
        public string $model;
        public string $image;
        public string $quantite;
        public string $prix;
        public string $os;
        public string $ecran;
        public string $processeur;
        public string $ram;
        public string $stockage;
        public string $photo;
        public string $batterie;
        public string $couleur;

        public function __construct($connexion) {
            $this->connexion = $connexion;
        }

        public function telephones() {

            $query = "SELECT TELEPHONE.idTelephone, TELEPHONE.idShop, TELEPHONE.idMarque, TELEPHONE.model, TELEPHONE.quantite, SPECIFICATION.os, SPECIFICATION.ecran, SPECIFICATION.processeur, SPECIFICATION.ram, SPECIFICATION.stockage,
            SPECIFICATION.photo, SPECIFICATION.batterie, SPECIFICATION.couleur, TELEPHONE.image, TELEPHONE.prix FROM TELEPHONE, SPECIFICATION WHERE TELEPHONE.idTelephone = SPECIFICATION.idTelephone;";
            $result = mysqli_query($this->connexion, $query);

            if ($result) {
                return $result;
            } else echo "Erreur";
        }

        public function ajouterTelephone() {

            $idMarque = htmlspecialchars($this->idMarque);
            $idShop = htmlspecialchars(strip_tags($this->idShop));
            $model = htmlspecialchars(strip_tags($this->model));
            $image = htmlspecialchars(strip_tags($this->image));
            $quantite = htmlspecialchars(strip_tags($this->quantite));
            $prix = htmlspecialchars(strip_tags($this->prix));
            $os = htmlspecialchars(strip_tags($this->os));
            $ecran = htmlspecialchars(strip_tags($this->ecran));
            $processeur = htmlspecialchars(strip_tags($this->processeur));
            $ram = htmlspecialchars(strip_tags($this->ram));
            $stockage = htmlspecialchars(strip_tags($this->stockage));
            $photo = htmlspecialchars(strip_tags($this->photo));
            $batterie = htmlspecialchars(strip_tags($this->batterie));
            $couleur = htmlspecialchars(strip_tags($this->couleur));
            $table = $this->table;
            $table2 = $this->table2;

            $query = "INSERT INTO `$table`(`idMarque`, `idShop`, `model`, `image`, `quantite`, `prix`) VALUES ('$idMarque','$idShop','$model','$image','$quantite','$prix')";
            $result = mysqli_query($this->connexion, $query);
            if ($result) {

                $query_one = "SELECT MAX(`idTelephone`) AS LASTID FROM `$table`";
                $result_one = mysqli_query($this->connexion, $query_one);
                if ($result_one) {

                    $res = mysqli_fetch_assoc($result_one);
                    $idTelephone = $res['LASTID'];

                    $query_two = "INSERT INTO `$table2`(`idTelephone`, `os`, `ecran`, `processeur`, `ram`, `stockage`, `photo`, `batterie`, `couleur`) VALUES ('$idTelephone','$os','$ecran','$processeur','$ram','$stockage','$photo','$batterie','$couleur')";
                    $result_two = mysqli_query($this->connexion, $query_two);

                    if ($result_two) {
                        return true;
                    } else return false;
                }
            }
        }

    }
?>