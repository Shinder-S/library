<?php
require_once './app/Models/userModel.php';
require_once './app/Views/authView.php';

class AuthController{
    private $view;
    private $model;

    function __construct(){
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function validationUser(){
        $email = $_POST['loginUser'];
        $password = $_POST['loginPassword'];

        $user = $this->model->getEmailUser($email);

        if($user && password_verify($password, $user->user_password)){
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL . "books");
        } else{
            $this->view->showLogin("The user data is incorrect");
        }
    }

    function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
