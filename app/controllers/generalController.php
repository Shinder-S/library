<?php
require_once "./app/Controllers/checkController.php";
require_once "./app/views/connectionView.php";


class GeneralController extends CheckController{
    
   


    public function __construct(){
        parent::__construct();
        $this->view = new ConnectionView();
    }

    function showHome(){
        $this->view->showHome();
    }

  

  

    function showDescription(){
        $this->view->showDescription();
    }

    function displayError(){
        $this->view->showError();
    }

    function showDelete($item, $book_id){
        $this->checkLogIn();
        $this->view->showDelete($item, $book_id);
    }

}