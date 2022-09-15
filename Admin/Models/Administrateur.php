<?php 

    session_start();

    class Administrateur {

        private $connexion = null;
        private $table = "ADMINISTRATEUR";

        public string $idAdministrateur;
        public string $nom;
        public string $email;
        public string $passwd;
        public string $created;

        public function __construct($connexion) {
            $this->connexion = $connexion;
        }

        public function authentification() {

            $email = htmlspecialchars(strip_tags($this->email));
            $passwd = htmlspecialchars(strip_tags($this->passwd));
            $table = $this->table;

            $query = "SELECT `nom`, `email`, `passwd` FROM `$table` WHERE `email` = '$email'";
            $result = mysqli_query($this->connexion, $query);

            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                if (password_verify($passwd, $data["passwd"])) {
                    $_SESSION["nom"] = $data["nom"];
                    return true;
                } else return false;
            }

        }

        public function deconnexion() {
            session_destroy();

            $url = "../index.php";
            header("Location: $url");
        }

        public function voirAdministrateur() {

            $query = "SELECT * FROM " . $this->table;
            $result = mysqli_query($this->connexion, $query);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    return $result;
                } return $result;
            }
        }

        public function ajouterAdministrateur() {

            $nom = htmlspecialchars(strip_tags($this->nom));
            $email = htmlspecialchars(strip_tags($this->email));
            $passwd = password_hash(htmlspecialchars(strip_tags($this->passwd)), PASSWORD_DEFAULT);
            $table = $this->table;

            $query = "INSERT INTO `$table`(`nom`, `email`, `passwd`) VALUES ('$nom','$email','$passwd')";
            if (mysqli_query($this->connexion, $query)) {
                return true;
            } else return false;

        }

        public function supprimerAdministrateur() {
            
            $id = htmlspecialchars(strip_tags($this->idAdministrateur));
            $table = $this->table;

            $query = "DELETE FROM `$table` WHERE `idAdministrateur` = '$id'";
            if (mysqli_query($this->connexion, $query)) {
                return true;
            } else return false;
            
        }

        public function modifierAdministrateur() {

            $id = htmlspecialchars(strip_tags($this->idAdministrateur));
            $nom = htmlspecialchars(strip_tags($this->nom));
            $email = htmlspecialchars(strip_tags($this->email));
            $passwd = password_hash(htmlspecialchars(strip_tags($this->passwd)), PASSWORD_DEFAULT);
            $table = $this->table;

            $query = "UPDATE `$table` SET `nom`='$nom',`email`='$email',`passwd`='$passwd' WHERE `idAdministrateur` = '$id'";
            if (mysqli_query($this->connexion, $query)) {
                return true;
            } else return false;

        }

        public function oneAdministrateur() {

            $id = htmlspecialchars(strip_tags($this->idAdministrateur));
            $table = $this->table;

            $query = "SELECT * FROM `$table` WHERE `idAdministrateur` = '$id'";
            $result = mysqli_query($this->connexion, $query);
            if ($result) {
                $res = mysqli_fetch_assoc($result);
                return $res;
            } else return $result;

        }

    }