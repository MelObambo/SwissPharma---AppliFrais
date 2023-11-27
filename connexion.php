<?php
require('config.php');

use App\JConfig;
$config = new JConfig();

try {
    $connexion = new PDO("mysql: host =". $config->host ."; dbname =". $config->db, $config->user, $config->password);
    return $connexion;
} catch (PDOException $e) {
    echo "Error when calling the database : ".$e;
}
?>