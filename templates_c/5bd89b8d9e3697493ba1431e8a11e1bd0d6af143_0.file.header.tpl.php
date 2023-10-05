<?php
/* Smarty version 4.3.4, created on 2023-10-05 19:47:13
  from 'C:\xampp\htdocs\TPE WEB2\library\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_651ef6a1cd53e9_19338465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd89b8d9e3697493ba1431e8a11e1bd0d6af143' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE WEB2\\library\\templates\\header.tpl',
      1 => 1696528027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651ef6a1cd53e9_19338465 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Library</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0" >
    <div class="container-fluid bg-primary bg-gradient">
      <a class="navbar-brand" href="#">Library</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login">Log In</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
    </header>
<?php }
}
