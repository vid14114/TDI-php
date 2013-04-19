<?php
session_start();
require_once 'HTML/Template/Sigma.php';
$tpl = new HTML_Template_Sigma('.');
if(isset($_GET['logout']) && $_GET['logout'])
    unset($_SESSION['user']);
if(!isset($_SESSION['user']))
    $tpl->loadTemplateFile('login.html');
else
    $tpl->loadTemplateFile('home.html');
$tpl->show();
?>