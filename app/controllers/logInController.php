<?php
require_once './app/views/logInView.php';

class LogInController{
    private $view;

    public function __construct(){
        $this->view = new LogInView();
    }

    public function showLogIn(){
        $this->view->showLogIn();
    }
}