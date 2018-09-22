<?php

require_once("dbModel.php");

class Model{

    public $dbc;

    public function __construct(){
        $this->dbc = DatabaseConnection::getSingleTonInstance();
    }
}

?>