<?php
require_once 'HTML/Template/Sigma.php';
$tpl = new HTML_Template_Sigma('.');
   /* if($_SESSION['loggedin']==false)
    {
        $tpl->loadTemplateFile('login.html');
        $tpl->show();
    }
    else
    {*/
        $tpl->loadTemplateFile('home.html');
        $tpl->show();
  //  }
?>