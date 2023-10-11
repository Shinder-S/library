<?php
require_once './app/models/pathModel.php';
class UserModel extends PathModel{

    function __construct(){
        parent::__construct();
    }

    function getEmailUser($email){
        $sentence = $this->db->prepare("SELECT * FROM users WHERE user_mail = ?");
        $sentence->execute(array($email));

        return $sentence->fetch(PDO::FETCH_OBJ);
    }
}