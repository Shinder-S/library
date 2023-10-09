<?php
require_once './app/models/homeModel.php';
require_once './app/views/homeView.php';

class GeneralController extends CheckController{
    private $model;
    private $view;


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

    function showDelete($item, $id){
        $this->checkLogIn();
        $this->view->showDelete($item, $id);
    }

}