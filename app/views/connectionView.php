<?php

require_once './libs/Smarty.class.php';

class ConnectionView{
    protected $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showError(){
        $this->smarty->displayError('error.tpl');
    }

    public function showHome(){
        $this->smarty->display('home.tpl');
    }

   

    public function showMessage($table, $book_id){
        $this->smarty->assign('table', $table);
        $this->smarty->assign('book_id', $book_id);
        $this->smarty->display('messageDelete.tpl');
    }

    public function editMessage($book_name, $book_id=null){
        $this->smarty->assign('book_name', $book_name);
        $this->smarty->assign('book_id', $book_id);
        $this->smarty->display('editMessage.tpl');
    }

    public function showDelete($param, $book_id){
        $this->smarty->assign('param', $param);
        $this->smarty->assign('book_id', $book_id);
        $this->smarty->display('delete.tpl');
    }

    public function showDescription(){
        $this->smarty->display('drinkDescription.tpl');
    }
}