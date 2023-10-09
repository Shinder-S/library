<?php
require_once './libs/Smarty.class.php';

class HomeView{
   protected $smarty;

   public function __construct(){
    $this->smarty = new Smarty();
   }
   
   public function showBooks(){
    $this->smarty->display('home.tpl');
   }
}