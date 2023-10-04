<?php

class HomeModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', '');
        
    }
    function getBooks(){
        $query = $this->db->prepare('SELECT * FROM books');
        $query->execute();

        $books = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $books;
    }
}