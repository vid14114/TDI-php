<?php
session_start();
require_once 'HTML/Template/Sigma.php';
$tpl = new HTML_Template_Sigma('.');
if(!isset($_SESSION['user']))
    $tpl->loadTemplateFile('login.html');
else
{
    $filename = $_GET['filename'];
    $tpl->loadTemplateFile($filename.'.html');
}
$tpl->show();
?>