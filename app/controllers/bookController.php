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

    function addBook(){
        $this->checkLogIn();
        $book_name = $_POST['book_name'];
        $book_price = $_POST['book_price'];
        $book_category = $_POST['book_category'];

        $this->model->insertBook($book_name,$book_price,$book_category);
        $this->view->editMessage($book_name);
        

    }
    function showFormBook($param,$id=null){
        $book = null;
        if(isset($id))
          $book = $this->model->getBookById($param, $id , $book);
          $this->view->showFormBook($param, $id, $book);
    }
    function editBook($book_id){
        $this->checkLogIn();
        $book_name = $_POST['book_name'];
        $book_price = $_POST['book_price'];
        $book_category = $_POST['book_category'];

        $this->model->editBook($book_name,$book_price,$book_category,$book_id);
        $this->view->editMessage($book_name,$book_id);
        
    }
    function deleteBook($table,$book_id){
        $this->checkLogIn();
        $this->model->deleteBookById($book_id);
        $this->view->showMessage($table,$book_id);
    }
     function viewBook($book_id){
        $book = $this->model->getBookById($book_id);
        $this->view->viewBook($book);
     }

    
        
    

}