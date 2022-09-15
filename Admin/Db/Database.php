
<?php 

class Database {

    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $dbname = "TSHOMBO";
    public $connection;

    public function getConnection() {

        $this->_connection = null;
        $this->_connection = mysqli_connect($this->server, $this->user, $this->password, $this->dbname);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL [Error] => " . mysqli_connect_error();
            exit();
        } else { return $this->_connection; }

    }
}