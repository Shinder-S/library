<?php
/* Smarty version 4.3.4, created on 2023-10-11 19:24:55
  from 'C:\xampp\htdocs\TPE WEB2\library\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6526da6783f4c5_57799020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d17e4e643bb04b12c46c6a17f1f0f259e2a2d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB2\\library\\templates\\home.tpl',
      1 => 1697045093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6526da6783f4c5_57799020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div>
    <p>Bienvenido a la libreria (sin Nombre)</p>
    <p>Aca va a poder ver los libros disponibles que se encuentran en nuestro stock<p>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
