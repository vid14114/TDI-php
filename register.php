<?php
$_SESSION['loggedin']=false;

require_once 'HTML/Template/Sigma.php';

    $tpl = new HTML_Template_Sigma('.');
    $tpl->loadTemplateFile('register.html');
    $tpl->show();
?>