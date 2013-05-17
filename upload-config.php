<?php
    session_start();
    require_once 'MDB2.php';
    require_once 'Log.php';
    $logger = Log::singleton('file', 'upload.log', 'Log');
    
    if($_FILES['config_file']['error'] > 0)
        $logger->log($_FILES['config_file']['error']);
    else
    {
        $config_string = readfile($_FILES['config_file']['tmp_name']);
        echo $config_string.'<br />';
        $arr_conf = explode(' ', $config_string);
        
        foreach($el as $arr_conf)
        {
            echo $el.'<br />';
        }
    }
?>