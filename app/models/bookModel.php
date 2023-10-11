<?php

require_once './app/models/pathModel.php';

class BookModel extends PathModel{
    function __construct(){
        parent::__construct();
    }
    function getBooks(){
        $query = $this->db->prepare('SELECT * From books');
        $query->execute();
        
        $books = $query->fetchAll(PDO:: FETCH_OBJ);
        return $books;
    }
   
}