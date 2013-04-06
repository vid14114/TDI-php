<?php
    require_once 'MDB2.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username." ".$password."\n";
    
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
        die($res->getMessage());
    }
    while(($row = $res->fetchRow())) {
        echo $row[0]." ".$row[1]."\n";
        if($username == $row[0] && $password == $row[1]) {
            echo "Authentication successful";
        }
    }
    $mdb2->disconnect();
?>