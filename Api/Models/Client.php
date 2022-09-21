<?php 


    class Client {
        
        private $connexion = null;
        private $table = "UTILISATEUR";

        public string $idClient;
        public string $username;
        public string $email;
        public string $numero;
        public string $password;

        public function __construct($connexion) {
            $this->connexion = $connexion;
        }

        public function ajouterCompte() {

            $username = htmlspecialchars(strip_tags($this->username));
            $email = htmlspecialchars(strip_tags($this->email));
            $numero = htmlspecialchars(strip_tags($this->numero));
            $password = password_hash(htmlspecialchars(strip_tags($this->password)), PASSWORD_DEFAULT);
            $table = $this->table;

            $query = "INSERT INTO `$table` (`username`, `email`, `numero`, `password`) VALUES ('$username','$email','$numero','$password')";
            if (mysqli_query($this->connexion, $query)) {
                return true;
            } else return false;
        }

        public function authentification() {

            $email = htmlspecialchars(strip_tags($this->email));
            $password = htmlspecialchars(strip_tags($this->password));
            $table = $this->table;

            $query = "SELECT * FROM `$table` WHERE `email` = '$email'";
            $result = mysqli_query($this->connexion, $query);

            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                if (password_verify($password, $data["password"])) {
                    return true;
                } else return false;
            }

        }


    }



?>