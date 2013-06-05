<?php
session_start();
require_once 'HTML/Template/Sigma.php';
$tpl = new HTML_Template_Sigma('.');
if($_GET['filename'] == 'register')
{
    $tpl->loadTemplateFile('register.html');
    goto end;
}
if(!isset($_SESSION['user']))
    $tpl->loadTemplateFile('login.html');
else
{
    $filename = $_GET['filename'];
    $tpl->loadTemplateFile($filename.'.html');
}
end:
$tpl->show();
?>