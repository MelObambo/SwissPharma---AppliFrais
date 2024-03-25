<?php
namespace App\Models;

class RoleModel extends Model {

    /**
     * @param $label
     * 
     * Creates an expense sheet in the database
     */
    public function getRoles(){
        $sql ="SELECT * FROM Role";
        $req = $this->getConnexion()->prepare($sql);
        $req->execute();
    }
}
?>