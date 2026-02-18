<? 
   session_start();
   global $ctrl_user;
   global $usuario;
   global $terid;
   global $doc;
   global $usr_ws;
   global $url_destino_pago;
   global $correo;
   
   //ini_set("session.cookie_lifetime","36000"); 
   
   $ctrl_user   ='';
   $usuario  	 = $_SESSION['usr_conectado'];  
   $nombre_usuario= $_SESSION['usr_nombres'];  
   $terid	   = $_SESSION['usr_id'];  
   $doc		 = $_SESSION['usr_doc'];
   $correo	 = $_SESSION['usr_correo'];  
   
	$usr_ws = 'https://test1.e-collect.com/app_express/webservice/eCollectWebservicesv4.asmx?WSDL';
	$url_destino_pago = 'Aceptar.php?Respuesta=';
      
?>