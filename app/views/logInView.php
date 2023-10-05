<?php
require_once './libs/Smarty.class.php';


class LogInView{
   protected $smarty;

    public function __construct(){
    $this->smarty = new Smarty();
    
   }
   public function showLogIn(){
    $this->smarty->display('login.tpl');
   }
}