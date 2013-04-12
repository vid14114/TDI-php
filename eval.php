<?php
    session_start();
    require_once 'MDB2.php';
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
        die($mdb2->getMessage());
    }
    
    $res =& $mdb2->query('SELECT u_accountname, u_password FROM u_users');
    if(PEAR::isError($res)) {
        die($res->getMessage());ecl
    }
    while(($row = $res->fetchRow())) {
        echo $row[0]." ".$row[1]."\n";
        if($username == $row[0] && $password == $row[1]) {
            $_SESSION['user']=$username;
            header ('Location: index.php');
        }
    }
    $mdb2->disconnect();
?>