<?php
/* Smarty version 4.3.4, created on 2023-10-05 19:36:22
  from 'C:\xampp\htdocs\TPE WEB2\library\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_651ef416e60c80_27898805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '850a122ed8ca634c4e405951d19f3b87b0d56660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB2\\library\\templates\\login.tpl',
      1 => 1696527379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_651ef416e60c80_27898805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-50 mx-auto login-wrapper">
    <form action="validate" method="POST" class="form">
        <h2>Login</h2>
        <div class="input-group">
            <input type="email" name="email" id="loginUser" required>
            <label for="loginUser">Email</label>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="loginPassword" required>
            <label for="loginPassword">Password</label>
        </div>
      
        <input type="submit" value="Enter" class="submit-btn">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
