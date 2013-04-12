<?php
    session_start();
    require_once 'MDB2.php';
    require_once 'Log.php';
    $logger = Log::singleton('file', 'login.log', 'Log');
    ini_set('display_errors', '0'); 
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
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
    
    $res =& $mdb2->query('SELECT u_accountname, u_password FROM u_users');
    if(PEAR::isError($res)) {
        $logger->log($res->getMessage(), PEAR_LOG_ERR);
        die($res->getMessage());
   }
    while(($row = $res->fetchRow())) {
        if($username == $row[0] && $password == $row[1]) {
            $_SESSION['user']=$username;
            header ('Location: index.php');
        }
    }
    echo "Login error";
    $mdb2->disconnect();
?>