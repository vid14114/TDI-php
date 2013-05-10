<?php
    session_start();
    require_once 'MDB2.php';
    require_once 'Log.php';
    $logger = Log::singleton('file', 'login.log', 'Log');
    
    if($_FILES['config-file']['error'] > 0)
        $logger->log($_FILES["file"]["error"]);
    else
    {
        $config-string = readfile($_FILES["config-file"]["tmp_name"]);
        echo $config-string;
    }
?>