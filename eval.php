<?php
    require_once 'MDB2.php';
    
    $dsn = 'mysqli://tdi-read:read-tdi@vidovic.no-ip.org/tdi';
    $options = array(
        'debug' => 2,
        'result_buffering' => false
        );
        
    $mdb2 =& MDB2::factory($dsn, $options);
    if(PEAR::isError($mdb2)) {
        die($mdb2->getMessage());
    }
    
    $mdb2->disconnect();
?>