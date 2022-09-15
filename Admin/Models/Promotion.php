<?php 


    session_start();
    class Promotion {

        private $connexion = null;
        private $table = "PROMOTION";

        private string $idPromotion;
        private string $idShop;
        private string $image;
        private string $created;


        public function __construct($connexion) {
            $this->connexion = $connexion;
        }

        public function ajouterPromotion() {
            $idShop = htmlspecialchars(strip_tags($this->idShop));
            $image = htmlspecialchars(strip_tags($this->image));
            $table = $this->table;

            $query = "INSERT INTO $table`(`idShop`, `image`) VALUES ('$idShop','$image')";
            $result = mysqli_query($this->connexion, $query);
            if ($result) {
                return true;
            } else return false;
        }

        public function supprimerPromotion() {
            $idPromotion = htmlspecialchars(strip_tags($this->idPromotion));
            $table = $this->table;
            
            $query = "DELETE FROM `$table` WHERE `idPromotion` = '$idPromotion'";
            $result = mysqli_query($this->connexion, $query);

            if ($result) {
                return true;
            } else return false;
        }
    }