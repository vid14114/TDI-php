<?php
    require_once 'MDB2.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $dsn = 'mysqli://tdi-read:read-tdi@vidovic.no-ip.org/tdi';
    $options = array(
        'debug' => 2,
        'result_buffering' => false
        );
        
    $mdb2 =& MDB2::factory($dsn, $options);
    if(PEAR::isError($mdb2)) {
        die($mdb2->getMessage());
    }
    
    $res=mdb2->query('SELECT * FROM u_users');
    if(PEAR::isError($res)) {
        die($res->getMessage());
    }
    echo $res;
    
    $mdb2->disconnect();
?>