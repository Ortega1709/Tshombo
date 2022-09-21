<?php 


    session_start();
    class Shop {

        private $connexion = null;
        private $table = "SHOP";
        
        public string $idShop;
        public string $nom;
        public string $email;
        public string $passwd;
        public string $image;
        public string $numero;
        public string $avenue;
        public string $quartier;
        public string $commune;
        public string $telephone;
        public string $created;


        public function __construct($connexion) {
            $this->connexion = $connexion;
        }


        public function ajouterShop() {
            $nom = htmlspecialchars(strip_tags($this->nom));
            $email = htmlspecialchars(strip_tags($this->email));
            $passwd = htmlspecialchars(strip_tags($this->passwd));
            $image = htmlspecialchars(strip_tags($this->image));
            $numero = htmlspecialchars(strip_tags($this->numero));
            $avenue = htmlspecialchars(strip_tags($this->avenue));
            $quartier = htmlspecialchars(strip_tags($this->quartier));
            $commune = htmlspecialchars(strip_tags($this->commune));
            $telephone = htmlspecialchars(strip_tags($this->telephone));
            $table = $this->table;

            $query = "INSERT INTO `$table`(`nom`, `email`, `passwd`, `image`) VALUES ('$nom','$email','$passwd','$image')";
            $result = mysqli_query($this->connexion, $query);

            if ($result) {

                $query_one = "SELECT MAX(`idShop`) AS LASTID FROM `$table`";
                $result_one = mysqli_query($this->connexion, $query_one);
                if ($result_one) {

                    $res = mysqli_fetch_assoc($result_one);
                    $idShop = $res['LASTID'];

                    $query_two = "INSERT INTO `ADRESSE`(`idShop`, `numero`, `avenue`, `quartier`, `commune`) VALUES ('$idShop','$numero','$avenue','$quartier','$commune')";
                    $result_two = mysqli_query($this->connexion, $query_two);
                    if ($result_two) {
                        
                        $query_three = "INSERT INTO `NUMERO`(`idShop`, `numero`) VALUES ('$idShop','$telephone')";
                        $result_three = mysqli_query($this->connexion, $query_three);
                        if ($result_three) {

                            return 1;
                        } else return 0;

                    } else return 0;
                }

            } else return false;

        }

        public function supprimerShop() {
            $idShop = htmlspecialchars(strip_tags($this->idShop));
            $table = $this->table;
            
            $query = "DELETE FROM `$table` WHERE `idShop` = '$idShop'";
            $result = mysqli_query($this->connexion, $query);

            if ($result) {
                return true;
            } else return false;
        }
    }