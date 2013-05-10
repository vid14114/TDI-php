<?php
require_once 'HTML/Template/Sigma.php';
if(!isset($_SESSION['user']))
    $tpl->loadTemplateFile('login.html');
else
{
    $filename = $_GET['filename'];
    $tpl = new HTML_Template_Sigma('.');
    $tpl->loadTemplateFile($filename.'.html');
    $tpl->show();
}
?>