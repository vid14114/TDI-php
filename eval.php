<?php
	require_once 'MDB2.php';

	$dsn = array(
	     'phptype' => 'mysqli',
	     'username' => 'tdi-read',
	     'password' => 'read-tdi',
	     'hostspec' => 'vidovic.no-ip.org',
	     'database' => 'tdi'
);
	$options = array(
		 'debug' => 2,
		 'portability' => MDB_PORTABILITY_ALL
);

	$mdb2 = MDB2::connect($dsn, $options);
	if(PEAR::isError($mdb2)) {
			//log message
	}	

	$username=$_POST['username'];
	$passwd=$_POST['password'];

	echo $username;
	echo $passwd;
?>