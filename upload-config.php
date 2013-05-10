<?php
    session_start();
    require_once 'MDB2.php';
    require_once 'Log.php';
    $logger = Log::singleton('file', 'upload.log', 'Log');
    
    echo $_FILES['config-file']
    if($_FILES['config-file']['error'] > 0)
        $logger->log($_FILES['config-file']['error']);
    else
    {
        $config_string = readfile($_FILES['config-file']['tmp_name']);
        echo $config_string;
    }
?>