<?php

function conex(){
	date_default_timezone_set('UTC');
	$usuario ='adocca';
	$pass	='adocca';
	
	//$servidor ="(DESCRIPTION=(ADDRESS = (PROTOCOL = TCP)(HOST = Desarrollo.colomboworld.local)(PORT = 1521))(CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME = CCAM)))";

	$servidor = " (DESCRIPTION =
					(ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
					(CONNECT_DATA =
					  (SERVER = DEDICATED)
					  (SERVICE_NAME = ccam)
					)
				  )";	
	  	  
	//$servidor = '(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 10.10.10.13)(PORT = 1521)))(CONNECT_DATA=(SERVICE_NAME=CCAPDB1.publicsubnet.redcolombotest.oraclevcn.com)))';
	  
	if (!$conn = oci_connect($usuario, $pass, $servidor,"AL32UTF8") ) {
		//echo "Error conectando al servidor";
		die();
	} 
		//echo "conectando al servidor";
		return $conn;
}

?>

