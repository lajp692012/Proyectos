<?

	$token 	= $_REQUEST['token'];
	$idusuario 	= $_REQUEST['idusuario'];
	
	
   	require('../conexion/conex_db.php');
   	$conn=conex();  

	$sql = "SELECT * FROM TCA_RPASSWORD WHERE token = '$token'";
	$strid=oci_parse($conn,$sql); 
	oci_execute($strid);     
	
	if ($fila_res = oci_fetch_array($strid, OCI_BOTH)){	
			
		if(sha1($fila_res['ID']) == $idusuario ){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Restablecer Contraseña</title>

<LINK REL="SHORTCUT ICON"  href="../images/sai/favicon-n.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK href="../css/stylesheet.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="../js/javascript.js" language="JavaScript"></script>
<script type="text/javascript" src="../js/PopCalendar.js" language="JavaScript"></script>
<script type="text/javascript" src="../js/Popup.js" language="JavaScript"></script>	

<script language="javascript" type="text/javascript">
	function Cambiar(){
		var token	= document.getElementById('token').value;	
		var idusuario = document.getElementById('idusuario').value;			
		var password1 = document.getElementById('password1').value;
		var password2 = document.getElementById('password2').value;		

		//alert(email);
		//alert('?password1='+password1+'&password2='+password2+'&idusuario='+idusuario+'&token='+token);

		if (password1!='' && password2!=''){
			document.location.href='cambiarpassword.php?password1='+password1+'&password2='+password2+'&idusuario='+idusuario+'&token='+token;
		} else {
			alert('La constraseña no Coincide... Verifique');	
			document.getElementById('password1').value='';
			document.getElementById('password2').value='';			
			document.getElementById('password1').focus();
			return false;
		}		
	}

</script>

<style>
input.text, select.text, textarea.text {
	background: #FFF;
	border: 1px solid #CCC;
	border-radius: 5px 5px 5px 5px;
	color: #000;
	padding: 5px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:15px
}

</style>


</head>

<BODY text=#000000 topMargin=10 marginheight="10" marginwidth="10" bgColor=#adaead >
<table border="0" cellpadding="0" cellspacing="0"  hspace="0" vspace="0" align="center" bgcolor="#FFFFFF">
<tr>
	<td><img src="../images/lc.jpg" width="15" height="17" /></td>
	<td background="../images/tbg.jpg" colspan="2"></td>
	<td><img src="../images/rc.gif" width="15" height="17" /></td>
</tr>
<tr>
	<td  style="background:url(../images/l_bg.jpg) repeat-y; background-color:#fff" width="6"></td>
	<td>
    	<table border="0" class="Text" align="center">
	    <tr>
        	<td align="center"><img src="../images/lColombo.png" width="240" height="70" border=0 style="border-radius: 25px;"></td>
        </tr>
        <tr>
        	<th><span style="font-size:18px">Restaurar contrase&ntilde;a</span></th>
        </tr>
        <tr>
        	<td align="center"><span style="font-size:16px">Nueva contrase&ntilde;a</span><br>
                <input type="password" class="class" name="password1" id="password1" required>
       		</td>
       </tr>
       <tr>
       		<td align="center"><span style="font-size:16px"> Confirmar contrase&ntilde;a</span><br>
                <input type="password" class="class" name="password2" id="password2" required>
            </td>
       </tr>
       <tr>
        	<td colspan="2" align="center" ><input type="image" src="../images/Ok.png" value="Recuperar contraseña" onClick="Cambiar();" >
            <input type="hidden" name="token" id="token" value="<? echo $token ;?>">
            <input type="hidden" name="idusuario" id="idusuario" value="<? echo $idusuario; ?>"></td>
       </tr>
       </table>
    </td>
    <td>&nbsp;</td>
    <td style="background:url(../images/r_bg___.jpg) repeat-y; background-color:#fff"></td>
</tr>
<tr>
    <td><img src="../images/lcb.gif" width="15" height="17" /></td>
    <td background="../images/bbg__.jpg" colspan="2" style="background-color:#fff"></td>
    <td><img src="../images/rcb.gif" width="15" height="17" /></td>
</tr>
</table>
</BODY>
</html>
<?
		} else{
			header('Location:pass.html');
		}
	} else{
		header('Location:pass.html');
	}
?>
