<?php
require_once 'HTML/Template/Sigma.php';
$filename = $_GET['filename'];

    $tpl = new HTML_Template_Sigma('.');
    $tpl->loadTemplateFile($filename.'.html');
    $tpl->show();
?>