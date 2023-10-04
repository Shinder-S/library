<?php
require_once './app/models/homeModel.php';
require_once './app/views/homeView.php';

class HomeController{
    private $model;
    private $view;


    public function __construct(){
        $this->model = new HomeModel();
        $this->view = new HomeView();
    }

    public function showBooks(){
        $books =  $this->model->getBooks();

        $this->view->showBooks($books);

        
    }










}