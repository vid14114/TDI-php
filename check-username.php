<?php
    require_once 'MDB2.php';
    require_once 'Log.php';
    $logger = Log::singleton('file', 'login.log', 'Log');
    ini_set('display_errors', '0'); 
    
    $username = $_POST['username'];
    
    $dsn = array(
        'phptype' => 'mysqli',
        'username' => 'tdi-read',
        'password' => 'read-tdi',
        'hostspec' => 'localhost',
        'port' => '3336',
        'database' => 'tdi'
    );
    
    $options = array(
        'debug' => 3,
        'result_buffering' => false
        );
    
    $mdb2 =& MDB2::factory($dsn, $options);
    if(PEAR::isError($mdb2)) {
        $logger->log($mdb2->getMessage(), PEAR_LOG_ERR);
        die($mdb2->getMessage());
    }
    
    $res =& $mdb2->query('SELECT u_accountname FROM u_users WHERE u_accountname = "'.$username.'"');
    if(PEAR::isError($res)) {
        die($res->getMessage());
    }
    
    while (($row = $res->fetchRow()))
    {
        if($row[0] == $username)
        {
            echo 1;
            exit();
        }
    }
    echo 0;
    $mdb2->disconnect();
?>