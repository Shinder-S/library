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
}