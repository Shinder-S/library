<?php
require_once "./app/Controllers/checkController.php";
require_once "./app/models/bookModel.php";
require_once "./app/views/bookView.php";

class BookController extends CheckController{
    protected  $bookContentController;

    function __construct(){
        parent::__construct();
        $this->view = new BookView;
        $this->model = new BookModel;

    }
    public function showBooks(){
        $books = $this->model->getBooks();
        $this->view->showBooks($books);
    }

    
        
    

}