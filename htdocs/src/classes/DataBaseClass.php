<?php

require_once __DIR__ . '/../../src/classes/AppParametersClass.php';

class DataBase {
    public function __construct()
    {
        $params = new AppParameters();


        try {
            $db = new PDO("mysql:host={$params->getDatabaseData()->hostname};dbname={$params->getDatabaseData()->name}", 
        $params->getDatabaseData()->username,  $params->getDatabaseData()->password);
        } catch (PDOException $err) {
            echo 'Erreur : ' . $err->getMessage();
        }
        
        var_dump($db);
    }
}