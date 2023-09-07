<?php

class Database{
    protected static $instance=NULL;
    private $connection; 

    public function __construct(){
        try {
            // Private constructor to prevent instantiation from outside
            $this->connection = new mysqli("localhost", "root", "", "api_project");
            
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public static function connect(){
        if (isset(Database::$instance)==null) {
            self::$instance = new Database();
        }
        return Database::$instance;
    }

    public  function fetchData(){
        $sql = "SELECT * FROM students";
        $result = $this->connection->query($sql);

        // $con=Database::connect();
        // $result =$con->query("SELECT * FROM students");

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }


}

$db=Database::connect();
$db->fetchData();