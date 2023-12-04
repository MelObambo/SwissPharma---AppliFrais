<?php

/**
 * Connects to the database
 */
function getConnexion(){
    try {
        return new PDO("mysql:host=". HOST .";dbname=". DB, USER, PASSWORD);
    } catch (PDOException $e) {
        echo "Error when calling the database : ".$e;
    }
}
?>