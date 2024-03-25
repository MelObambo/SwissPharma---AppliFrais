<?php
namespace App\Models;

class EmployeeModel extends Model {

    /**
     * @param string $name
     * 
     * @return Object $res
     */
    public function getEmployee($login) {
        $sql = "SELECT * FROM Employe WHERE login = :login ;";
        $req = $this->getConnexion()->prepare($sql);
        $req->bindParam(':login', $login);
        $req->execute();
        $res = $req->fetch($this->getConnexion()::FETCH_ASSOC);
        return $res;
    }
}
?>