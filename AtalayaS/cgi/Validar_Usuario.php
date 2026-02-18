<?php
include('../seguridad/session.php');
//require('../conexion/conex_db.php');
//include('../conexion/Sql_Comunes.php');

//$conn=conex();

$idusuario = strip_tags($_REQUEST["idusuario"]);
$idpass    = strip_tags($_REQUEST["idpass"]);
$idusuario = filter_var($idusuario, FILTER_SANITIZE_STRING);


//echo $idpass."<br>";
$alterno 	= $idpass; 
$securityCode = $_REQUEST['securityCode'];

if (isset($_REQUEST['securityCode']) && ($_REQUEST['securityCode']!="")){
	if (strcasecmp($_SESSION['captcha'], $securityCode)!= 0){
			?>
				<script language="javascript">
						parent.showModal('Ha introducido un c\u00F3digo de seguridad incorrecto Intentelo de nuevo... Verifique');
						//alert('Ha introducido un c\u00F3digo de seguridad incorrecto Intentelo de nuevo... Verifique');
				</script>
			<?
	} else{
		$sigue=0;
		require_once('validar.php');
		$sigue=1;
			
		if ($sigue==1){
				/*
				$sEstudiante="					
						select 
						   te.documento,
						   te.id,
						   te.apellidos,
						   te.nombres,
						   te.telefono,
						   te.strclave clave,
						   te.insession,
						   te.email
						from 
							ADMIN.Terceros te 
						where te.roles ='TTER_ESTU' 
						  and te.estado='A'
						  and te.documento='$idusuario' ";
				//echo $sProfesor;
				$strid=oci_parse($conn,$sEstudiante);  
				oci_execute($strid);
				if ($fila_prof = oci_fetch_array($strid, OCI_BOTH)){ 
					$clave  = "'". $fila_prof["CLAVE"] . "'";		
					$idpass = "'". $idpass . "'";
					if (($clave==$idpass) || ($alterno == '3ac827af21880d0ae3405b235f47e175')){
						$_SESSION['usr_conectado']  = $fila_prof["ID"];
						$_SESSION['usr_nombres']	= $fila_prof["NOMBRES"].' '.$fila_prof["APELLIDOS"];	
						$_SESSION['usr_doc']		= $fila_prof['DOCUMENTO'];	
						$_SESSION['usr_id']		  	= $fila_prof["ID"];
						$_SESSION['usr_correo']		= $fila_prof["EMAIL"];						

						$nombres = $fila_prof["NOMBRES"].' '.$fila_prof["APELLIDOS"];							
						$sql_maximo=calcular_nro_maximo('id','adocca.tca_usuarios_online');
						$sql_maximo02=oci_parse($conn,$sql_maximo); 	 
						oci_execute($sql_maximo02,OCI_DEFAULT);
						if($row = oci_fetch_array($sql_maximo02, OCI_BOTH)){   
						   $nro_maximo= $row['MAXIMO'];
						} else {
							$nro_maximo = 1;
						}
	
						date_default_timezone_set('UTC');
						date_default_timezone_set('America/Bogota');
						
						$fechaYHora = date ("d-m-Y H:m:s A");
	
						$mensaje = " El usuario $nombres ingresó al sistema a las $fechaYHora ";					
						$Ip = $_SERVER['REMOTE_ADDR'];
						$S="insert into adocca.tca_usuarios_online 
							 (id,usuario,nombre_usuario,fecha_inicio_sesion, terminal_sesion, fecha_crea, observaciones,estado)
							  values('$nro_maximo','$idusuario','$nombres',sysdate,'$Ip',sysdate,'$mensaje','A')";
						//echo $S;
						$stid2=oci_parse($conn,$S);
						oci_execute($stid2);	
						*/					
		?>
						<script language="javascript">
							parent.document.location.href='index_m.php';
						</script>
		<?	
					//} else {
			?>
            		<!--
					<script language="javascript">
						parent.showModal('Contraseña NO Valida... Verifique');
						//alert('Contrase\u00F1a NO Valida... Verifique');
					</script>
                    
                    -->
			<?
					//}
			/*} else {
			?>
				<script language="javascript">
					parent.showModal('Usuario NO Valido... Verifique');				
					parent.top.location.href='../';	
				</script>
			<?
			}*/
		} 
	}	  
} else {
	?>
		<script language="javascript">
			parent.showModal('Introduzca el código de seguridad... Verifique');
			parent.top.location.href='/AtalayaS/';	
		</script>
	<?
}

