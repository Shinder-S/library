<?php 
require_once  './libs/Smarty.class.php';
require_once './app/views/connectionView.php';

class BookView extends ConnectionView{
    function __construct(){
        parent::__construct();
    }

    function showBooks($books){
        $this->smarty->assign('count', count($books));
        $this->smarty->assign('books', $books);
        $this->smarty->display('booksList.tpl');

    }

    function showFormBook($param, $id , $book){
        $this->smarty->assign('param', $param);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('book', $book);
        $this->smarty->display('bookForm.tpl');


    }
}