<?php
namespace App\Models;

use App\Connexion;

class EmployeeModel {

    private $connect;

    public function __construct() {
        $connexion = new \App\Connexion();
        $connect = $connexion->connectDb();
    }

    /**
     * @param string $name
     * 
     * @return Object $res
     */
    function getEmployee($login) {
        $sql = "SELECT * FROM utilisateur WHERE login = :login ;";
        $req = $this->connect->prepare($sql);
        $req->bindParam(':login', $login);
        $req->execute();
        $res = $req->fetch($this->connect::FETCH_ASSOC);
        return $res;
    }
}
?>