<?php
   require_once 'HTML/Template/Sigma.php';

   $tpl = new HTML_Template_Sigma('.');
   $tpl->loadTemplateFile('layout.html');

   $tpl->show();
?>
