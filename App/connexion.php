<?php
namespace App;

use PDO;
use PDOException;

class Connexion {
    
    private $db_type;
    private $host;
    private $db;
    private $user;
    private $password;

    public function __construct() {
        $this->db_type = DB_TYPE;
        $this->host = HOST;
        $this->db = DB;
        $this->user = USER;
        $this->password = PASSWORD;
    
    
    }


    /**
     * Connects to the database
     */
    function connectDb(){
        try {
            return new PDO($this->db_type . ":host=". $this->host .";dbname=". $this->db, $this->user, $this->password);
        } catch (PDOException $e) {
            echo "Error when calling the database : ".$e;
        }
    }
}
?>