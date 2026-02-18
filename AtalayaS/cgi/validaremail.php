<?
   	require('../conexion/conex_db.php');
    $conn=conex();  

	function generarLinkTemporal($idusuario, $documento){
    	$conn=conex();  

		$cadena = $idusuario.$documento.rand(1,9999999).date('Y-m-d');
		$token = sha1($cadena);

		$sql = " INSERT INTO adocca.TCA_RPASSWORD (id, documento, token, f_crea) VALUES ('$idusuario','$documento','$token',sysdate) ";
		
		$strid=oci_parse($conn,$sql); 
		$resultado = oci_execute($strid);     
		
		if ($resultado){	
			//$enlace = 'http://192.168.1.93/aDatos/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;
			//$enlace = 'https://apps.colomboworld.com/aDatos/cgi/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;			
			$enlace = 'restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;						
			return $enlace;
		} else {
			return false;
		}
	}

	function enviarEmail( $email, $link ){

		require("_lib/class.phpmailer.php");
		$mail = new PHPMailer();

		$mensaje = '<html>
		<head>
 			<title>Restablece tu contrase&ntilde;a</title>
		</head>
		<body>
		<tabl align="center">
		<tr>
			<td><p>Hemos recibido una petici&oacute;n para restablecer la contrase&ntilde;a de tu cuenta.</p>
 				<p>Si hiciste esta petici&oacute;n, haz clic en el siguiente enlace o copiar el enlace en tu navegador, si no hiciste esta petici&oacute;n puedes ignorar este correo.</p>
 				<p>
 					<strong>Enlace para restablecer tu contrase&ntilde;a</strong><br>
	 				<a href="'.$link.'"> Restablecer contrase&ntilde;a </a>
 				</p>
			</td>
		</tr>
		</table>
		</body>
		</html>';
		
		
		  try {

			//Crear instancia de PHPMailer
			$mail = new PHPMailer(true);  
			$mail->IsSMTP();
			$mail->isHTML(true);

			//Configuración Servidor Mail
			$mail->From         	= "colomboamedellin@gmail.com";
			$mail->FromName     	= "Colombo Americano de Medellin";
			$mail->Host         	= "smtp.gmail.com";
			$mail->Port 		= 587;
			$mail->SMTPAuth 	= true;
			$mail->SMTPSecure 	= 'tls';
		
			$mail->Username     	= 'colomboamedellin@gmail.com';
			$mail->Password     	= 'pycfbjnuovjllssx';

			$mail->SMTPDebug = 0;
			
			$mail->Subject     = "Recuperación Contraseña";
			$mail->AddAddress($email, "Estudiante");
			//$mail->AddCC('desarrollador@colombomedellin.edu.co');		
			//$mail->AddBCC('desarrollador@colombomedellin.edu.co');
			
			$mail->Body 	 = $mensaje;
			$mail->AltBody  = $mensaje;
			$mail->Send();
			
			$Salida = " Envio de Respuesta &Eacute;xitoso... Verifique. ";
			
		  } catch (phpmailerException $e) {
			  echo $e->errorMessage(); 
			  $Salida = " Envio de Respuesta NO &Eacute;xitoso... Verifique. ";		  
		  }
		
		
	}
	
	$email 	= $_REQUEST['email'];	
	$documento	= $_REQUEST['documento'];
	//echo "Correo:".$email.", Documento:".$documento;

	if( $email != '' && $documento !=''){
		$email_may = strtoupper($email);
		
		$S="SELECT 
			   ter.id,
			   ter.documento,
			   ter.email
		 FROM
			admin.terceros ter
		 WHERE upper(ter.email)='$email_may' and ter.documento='$documento' ";
		//echo $S;		
		$strEmail=oci_parse($conn,$S); 
		oci_execute($strEmail);     
		
		if ($fila_ter = oci_fetch_array($strEmail, OCI_BOTH)){	
      		$idusuario = $fila_ter['ID'];
			$documento= $fila_ter['DOCUMENTO'];
			
			$linkTemporal = generarLinkTemporal( $idusuario, $documento );
      		if($linkTemporal){
	        	enviarEmail( $email, $linkTemporal );
?>
				<script language="javascript" type="text/javascript">
	        		alert('Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contrase\u00F1a');
					document.location.href='/aDatos';
				</script>
<?
	      		} else {
?>
				<script language="javascript" type="text/javascript">
	        		alert('Lo sentimos, ya se ha solicitado previamentes un cambio de contraseña que no finalizo el proceso... verifique en su correo electronico... Gracias');
				document.location.href='/aDatos';
				</script>
<?
				
			}
   		} else {
?>
			<script language="javascript" type="text/javascript">
        		alert(' No existe una cuenta asociada a ese correo o documento... Verifique');
				document.location.href='/aDatos';
			</script>
<?
		}
	} else {
?>
			<script language="javascript" type="text/javascript">
        		alert('Debes introducir el documento y el email de la cuenta... Verifique');
				document.location.href='/aDatos';
            </script>
<?
	}
?>
