<?php
    session_start();
    require_once 'MDB2.php';
    require_once 'Log.php';
    $logger = Log::singleton('file', 'register.log', 'Log');
    ini_set('display_errors', '0'); 
    
    $dsn = array(
        'phptype' => 'mysqli',
        'username' => 'tdi-write',
        'password' => 'write-tdi',
        'hostspec' => 'localhost',
        'port' => '3336',
        'database' => 'tdi'
    );
    
    $options = array(
        'debug' => 2,
        'result_buffering' => false
    );
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    $mdb2 =& MDB2::factory($dsn, $options);
    if(PEAR::isError($mdb2)) {
        $logger->log($mdb2->getMessage(), PEAR_LOG_ERR);
        die($mdb2->getMessage());
    }
    else
        echo "Succeeded1";
    
    $sql = "INSERT INTO u_users (u_accountname, u_password, u_email) VALUES ($username, $password, $email)";
    $result =& $mdb2->exec($sql);
    if(PEAR::isError($result)) {
        $logger->log($result->getMessage(), PEAR_LOG_ERR);
        die($result->getMessage());
    }
    else
        echo "Succeeded2";
    
?>