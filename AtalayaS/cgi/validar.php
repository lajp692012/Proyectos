<?

if(isset($_SESSION['usr_doc'])){
?>
<script language="javascript">
		alert('Usuario Ya Inici\u00F3 Sesi\u00F3n... Verifique');
		//parent.top.location.href='/Formulario/';	
</script>	
<?
   //header("Top: index.php");
} else {
	$sigue = 1;	
	//echo "Por acá";
}
?>
