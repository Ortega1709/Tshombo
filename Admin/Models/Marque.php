<?php 

    session_start();

    class Marque {

        private $connexion = null;
        private $table = "MARQUE";

        public string $idMarque;
        public string $nom;

        public function __construct($connexion) {
            $this->connexion = $connexion;
        }

    
        public function voirMarque() {

            $query = "SELECT * FROM " . $this->table;
            $result = mysqli_query($this->connexion, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    return $result;
                } else return $result;
            }

        }

        public function oneMarque() {
            
            $id = $this->idMarque;
            $table = $this->table;

            $query = "SELECT * FROM $table WHERE idMarque = '$id'";
            $result = mysqli_query($this->connexion, $query);
            if ($result) {
                $res = mysqli_fetch_assoc($result);
                return $res;
            } else return $result;
            
        }

        public function modifierMarque() {

            $id = $this->idMarque;
            $nom = htmlspecialchars(strip_tags($this->nom));
            $table = $this->table;

            $query = "UPDATE `$table` SET `nom`='$nom' WHERE `idMarque` = '$id'";
            $result = mysqli_query($this->connexion, $query);
            if ($result) {
                return true;
            } else return false;
        }




        public function ajouterMarque() {

            $nom = htmlspecialchars(strip_tags($this->nom));
            $table = $this->table;

            $query = "INSERT INTO `$table`(`nom`) VALUES ('$nom')";
            $result = mysqli_query($this->connexion, $query);
            if ($result) {
                return true;
            } else return false;

        }

        public function supprimerMarque() {

            $id = $this->idMarque;
            $table = $this->table;
            
            $query = "DELETE FROM `$table` WHERE `idMarque` = '$id'";
            $result = mysqli_query($this->connexion, $query);

            if ($result) {
                return true;
            } else return false;
        }



    }