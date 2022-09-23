<?php 


    class Client {
        
        private $connexion = null;
        private $table = "CLIENT";

        public string $idClient;
        public string $username;
        public string $nom;
        public string $postNom;
        public string $email;
        public string $passwd;
        public string $created;

        public function __construct($connexion) {
            $this->connexion = $connexion;
        }

        public function ajouterCompte() {

            $username = htmlspecialchars(strip_tags($this->username));
            $nom = htmlspecialchars(strip_tags($this->nom));
            $postNom = htmlspecialchars(strip_tags($this->postNom));
            $email = htmlspecialchars(strip_tags($this->email));
            $passwd = password_hash(htmlspecialchars(strip_tags($this->passwd)), PASSWORD_DEFAULT);
            $table = $this->table;

            $query = "INSERT INTO `$table` (`username`, `nom`, `postNom`, `email`, `passwd`) VALUES ('$username', '$nom', '$postNom', '$email', '$passwd')";
            if (mysqli_query($this->connexion, $query)) {
                return true;
            } else return false;
        }

        public function authentification() {

            $email = htmlspecialchars(strip_tags($this->email));
            $passwd = htmlspecialchars(strip_tags($this->passwd));
            $table = $this->table;

            $query = "SELECT * FROM `$table` WHERE `email` = '$email'";
            $result = mysqli_query($this->connexion, $query);

            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                if (password_verify($passwd, $data["passwd"])) {
                    return true;
                } else return false;
            }

        }


    }



?>