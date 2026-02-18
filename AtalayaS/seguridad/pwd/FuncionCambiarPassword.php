<?php
require('../conexion/conex_db.php');
$conn=conex();

$fecha_sistema=date("d/m/y");
header('Content-Type: text/html; charset=utf-8');

$idcontra1=$_REQUEST["idcontra1"];
$idcontra2=$_REQUEST["idcontra2"];
$idusuario=$_REQUEST["idusuario"];

$idcontra= $idcontra1;

$vUsuario = $idusuario ;
$sqlC = " Update admin.terceros set strclave='$idcontra' where documento='$idusuario' ";
$stid = oci_parse($conn,$sqlC);
oci_execute($stid);

?>

<script language="javascript" type="text/javascript">
	  parent.showModal("El usuario se actualizo satisfactoriamente.");
</script>




