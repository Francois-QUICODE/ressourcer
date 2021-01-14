<?php 

class AppParameters {
    public function __construct()
    {
        $file = __DIR__ . '/../../config.json' ;
        $this->data = json_decode(file_get_contents($file));
    }

    public function getDatabaseData () {
        return $this->data->database;
    }
}