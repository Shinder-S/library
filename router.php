<?php
require_once './app/controllers/generalController.php';
require_once './app/controllers/authController.php';
require_once './app/controllers/bookController.php';


define('BASE_URL', '//' .$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}



$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        $controller = new GeneralController();
        $controller->showHome();
        break;
    case 'login':
        $AuthController = new AuthController();
        $AuthController->showLogin();
        break;
    case 'validate':
        $Authcontroller = new AuthController();
        $Authcontroller->validationUser();
        break;  
    case 'logout':
        $AuthController = new AuthController();
        $AuthController->logout();
        break;
    case 'books':
        if(isset($params[1])&&($params[1])){
            switch($params[1]){
                case 'form':
                    $BookController = new BookController();
                    if(isset($params[3]))
                        $BookController->showFormBook($params[2], $params[3]);
                    else
                        $BookController->showFormBook($params[2]);
                    break;
                case 'add':
                    $BookController = new BookController();
                    $BookController->addBook();
                    break;
               

            }
        }
        else{
            $BookController = new BookController();
            $BookController->showBooks();  
           break;  

        }
              
    default:
        echo "404 Page Not Found";
        break;        
}