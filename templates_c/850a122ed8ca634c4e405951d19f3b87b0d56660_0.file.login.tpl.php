<?php
/* Smarty version 4.3.4, created on 2023-10-11 20:46:38
  from 'C:\xampp\htdocs\TPE WEB2\library\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6526ed8e1cb5d3_29029877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '850a122ed8ca634c4e405951d19f3b87b0d56660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB2\\library\\templates\\login.tpl',
      1 => 1697049103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6526ed8e1cb5d3_29029877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="login-box"> 
    <h1>Login Here</h1>
    <form action="validate" method="POST" class="form">
        <label for="loginUser">Email</label>
        <input type="email" required class="" id="loginUser" name="loginUser" placeholder="Enter Email">

        <label for="loginPassword">Password</label>
        <input type="password" required class="" id="loginPassword" name="loginPassword" placeholder="Enter Password">

        <input type="submit" value="LOG IN" class="submit-btn" ></button>


    </form>
</div>
    
 

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
