<?php
	require_once 'MDB2.php';
    require_once 'HTML/Template/Sigma.php';
    $tpl = new HTML_Template_Sigma('.');

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

	$mdb2 = new MDB2;
	$mdb2->connect($dsn, $options);
	if(PEAR::isError($mdb2)) {
			die($mdb2->getMessage());
	}	
	$res = $mdb2->query('SELECT u_id, u_accountname, u_password, u_locked FROM u_users');
	if(PEAR::isError($res)) {
				//log message
}
	print_r($res);
?>