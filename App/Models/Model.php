<?php
namespace App\Models;

use App\Connexion;

class Model {

    private $connect;

    public function __construct(){
        $connexion = new Connexion();
        $this->connect = $connexion->connectDb();
    }

    public function getConnexion(){
        return $this->connect;
    }
}