<?php
require_once "./app/Controllers/checkController.php";
require_once "./app/Models/categoryModel.php";
require_once "./app/Views/categoryView.php";

class CategoryController extends CheckController{
    private $categoryModel;

    function __construct(){
        parent::__construct();
        $this->view = new CategoryView;
        $this->model = new CategoryModel;
        $this->categoryModel = new CategoryModel;
    }
    
    function showCategories($name = null){
    if(isset($name))
        $categories = $this->model->getCategoriesByCategory($name);
    else
        $categories = $this->model->getAllCategories();
    $this->view->showCategories($categories);
    }

    function showFormCategory($param, $id = null){
        $this->checkLogIn();
        $category = $this->categoryModel->getCategoriesNames();
        $category = null;
        if(isset($id))
            $category = $this->model->getCategory($id);

        $this->view->showFormCategory($param, $id, $category);
    }

    function addCategory(){
        $this->checkLogIn();
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $id_category = $_POST['id_category'];

        $this->model->insertCategory($name, $brand, $id_category);
        
        $this->view->showMessage($name);
    }

    function editCategory($id_category){
        $this->checkLogIn();
        $name = $_POST['name'];
        $amount = $_POST['amount'];

        $this->model->editCategory($name, $amount);
        
        $this->view->showMessage($name);
    }

    function deleteCategory($table, $id){
        $this->checkLogIn();
        $this->model->deleteCategoryById($id);
        $this->view->showMessage($table, $id);
    }

}