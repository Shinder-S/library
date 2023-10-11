<?php

class PathModel {
    protected $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=library;charset=utf8', 'root', '');
    }
   
}