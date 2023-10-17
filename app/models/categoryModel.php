<?php

require_once './app/Models/pathModel.php';

class CategoryModel extends PathModel{
    function __construct(){
        parent::__construct();
    }

    function insertBookCategory($name, $category, $id_book){
        $query = $this->db->prepare("INSERT INTO category(name, category, id_book) VALUES (?,?,?)");
        $query->execute([$name, $category, $id_book]);
    }

    function deleteCategoryById($id){
        $query = $this->db->prepare("DELETE FROM category WHERE id_book = (?)");
        $query->execute([$id]);
    }

    function editBookCategory($name, $category, $id_book, $id){
        $query = $this->db->prepare("UPDATE category SET name = ?, 
                                                            category = ?,
                                                            id_book = ?
                                    WHERE id_book = ?");
        $query->execute([$name, $category, $id_book, $id]);
    }
    
    function getAllCategories(){
        $query = $this->db->prepare("SELECT FROM category ORDER BY name");
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }

    function getCategoriesNames(){
        $query = $this->db->prepare("SELECT id_category, name FROM category ORDER BY name");
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);

        return $categories;
    }

    function getAllCategoryById($id){
        $query = $this->db->prepare("SELECT * FROM category WHERE id_category = ?");
        $query->execute([$id]);

        $category = $query->fetchAll(PDO::FETCH_OBJ);

        return $category;
    }
}