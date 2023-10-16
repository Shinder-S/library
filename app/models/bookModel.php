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
    function getBookById($book_id){
        $query = $this->db->prepare('SELECT * from books where book_id=?');
        $query->execute([$book_id]);
        $book= $query->fetch(PDO::FETCH_OBJ);
        return $book;
    }
    function insertBook($book_name,$book_price,$book_category){
        $query = $this->db->prepare("INSERT INTO books (book_name,book_price,book_category) VALUES (?,?,?)");
        $query->execute(array($book_name,$book_price,$book_category));
    }
    function editBook($book_id,$book_name,$book_price,$book_category){
        $query = $this->db->prepare("UPDATE books SET book_name = ?,book_price = ?, book_category = ? WHERE book_id = ?");
        $query->execute(array($book_name, $book_price, $book_category, $book_id));
    }
    function deleteBookById($book_id){
        $query = $this->db->prepare("DELETE FROM books WHERE book_id = ?");
        $query->execute(array($book_id));

    }
   
}