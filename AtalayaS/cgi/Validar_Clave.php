<?
require('../conexion/conex_db.php');
$conn=conex();

$idusuario = strip_tags($_REQUEST["usuario"]);
$idpass    = strip_tags($_REQUEST["clave"]);
$idusuario = filter_var($idusuario, FILTER_SANITIZE_STRING);

$alterno 	  = $idpass; 

//echo "usuario:".$idusuario;
if (is_numeric($idusuario)){
	$sqlT = " Select ter.strclave, ter.documento, ter.id from admin.terceros ter where ter.documento='$idusuario' and ter.estado='A' and ter.roles='TTER_ESTU' ";	
	$strClv=oci_parse($conn,$sqlT);  
	oci_execute($strClv);
	//echo $sqlT;
	if ($fila_ter = oci_fetch_array($strClv, OCI_BOTH)){ 
		//echo $sqlT;	
		$clave  = $fila_ter["STRCLAVE"];
		$idpass = $idpass;
		$usrId  = $fila_ter["ID"];	
		
		$doc_usr = $fila_ter['DOCUMENTO'];		
		$doc_usr = md5($doc_usr);
		
		$clavedefecto=md5('12345678');
		$continuar = 0;
		
		if ($fila_ter["STRCLAVE"] === $doc_usr || $fila_ter["STRCLAVE"]==$clavedefecto){
			$continuar = 0;
		} 
	?>
		<script language="javascript">
			var continuar = '<? echo $continuar; ?>';
			parent.Logueo(continuar,0);	
		</script>
	<?	
	}else{
	?>
		<script language="javascript">
			parent.Logueo(1,1);	
		</script>
	<?	
	}
}
/* else {
	$strid=oci_parse($conn, " Select * from tca_usuarios where usuario='$idusuario' and estado='A' ");  
	oci_execute($strid);
	if ($fila_ter = oci_fetch_array($strid, OCI_BOTH)){ 
		$clave =$fila_ter["CLAVE"];
		//$idpass = $idpass;
		$usrId = $fila_ter["TER_ID"];
	}
}
*/


?>
		


