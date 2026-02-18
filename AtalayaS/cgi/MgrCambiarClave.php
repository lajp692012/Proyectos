<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cambiar password</title>
<META http-equiv=Content-Type content="text/javascript; charset=utf-8">
<LINK href="css/stylesheet.css" type=text/css rel=stylesheet>

<script type="text/javascript" src="js/md5.pack.js" language="JavaScript"></script>

<script language="JavaScript1.2">

isIE=document.all;
isNN=!document.all&&document.getElementById;
isN4=document.layers;
isHot=false;

function ddInit(e){
  topDog=isIE ? "BODY" : "HTML";
  whichDog=isIE ? document.all.theLayer : document.getElementById("theLayer");  
  hotDog=isIE ? event.srcElement : e.target;  
  while (hotDog.id!="titleBar"&&hotDog.tagName!=topDog){
    hotDog=isIE ? hotDog.parentElement : hotDog.parentNode;
  }  
  if (hotDog.id=="titleBar"){
    offsetx=isIE ? event.clientX : e.clientX;
    offsety=isIE ? event.clientY : e.clientY;
    nowX=parseInt(whichDog.style.left);
    nowY=parseInt(whichDog.style.top);
    ddEnabled=true;
    document.onmousemove=dd;
  }
}

function dd(e){
  if (!ddEnabled) return;
  whichDog.style.left=isIE ? nowX+event.clientX-offsetx : nowX+e.clientX-offsetx; 
  whichDog.style.top=isIE ? nowY+event.clientY-offsety : nowY+e.clientY-offsety;
  return false;  
}

function ddN4(whatDog){
  if (!isN4) return;
  N4=eval(whatDog);
  N4.captureEvents(Event.MOUSEDOWN|Event.MOUSEUP);
  N4.onmousedown=function(e){
    N4.captureEvents(Event.MOUSEMOVE);
    N4x=e.x;
    N4y=e.y;
  }
  N4.onmousemove=function(e){
    if (isHot){
      N4.moveBy(e.x-N4x,e.y-N4y);
      return false;
    }
  }
  N4.onmouseup=function(){
    N4.releaseEvents(Event.MOUSEMOVE);
  }
}

function hideMe(){

  if (isIE||isNN) whichDog.style.visibility="hidden";
  else if (isN4) document.theLayer.visibility="hide";
}

function showMe(){
  if (isIE||isNN) whichDog.style.visibility="visible";
  else if (isN4) document.theLayer.visibility="show";
}

document.onmousedown=ddInit;
document.onmouseup=Function("ddEnabled=false");

function Validar_Clave(){
	
  var idcontra1=document.getElementById('txtcontra1').value; 
  var idcontra2=document.getElementById('txtcontra2').value; 
  var idusuario=document.getElementById('txtusuario').value;   
    

  if (idusuario==""){
	  alert("El sistema presenta problemas con la sessión, favor cerrar y volver a entrar al sistema.");
	  top.window.location.href='seguridad/logout.php';
	  return false;
  }

  if (idcontra1==""){
	  alert("Debe ingresar la contrase\u00f1a.");
	  document.getElementById('txtcontra1').focus();
	  return false;
  }
  if (idcontra2==""){
	  alert("Debe ingresar la contrase\u00f1a.");
	  document.getElementById('txtcontra2').focus();
	  return false;
  }

  if (idcontra1!="" && idcontra2!=""){
	  if(idcontra1!=idcontra2){ 
	  alert("Las contrase\u00f1as no coinciden.");
	  document.getElementById('txtcontra1').value='';
	  document.getElementById('txtcontra2').value='';
	  document.getElementById('txtcontra1').focus();
	  return false;
	  }
  }
  
  if (idcontra1.length<8){
	  alert("Longitud m\xednima de 8 car\xe1cteres.");
	  document.getElementById('txtcontra1').focus();
	  return false;	  
  }
  
  if (idcontra2.length<8){
	  alert("Longitud m\xednima de 8 car\xe1cteres.");
	  document.getElementById('txtcontra2').focus();
	  return false;	  
  }
  
  alert(idcontra1);
  alert(idcontra2);
  
  idcontra1	= md5(idcontra1);
  idcontra2	= md5(idcontra2);  
  
  //alert(idcontra1);
  
  //document.getElementById('ifrmresultado' ).src = "seguridad/FuncionCambiarPassword.php?idcontra1="+encodeURIComponent(idcontra1)+'&idcontra2='+encodeURIComponent(idcontra2)+'&idusuario='+encodeURIComponent(idusuario);
  //alert('?idcontra1='+idcontra1+'&idcontra2='+idcontra2+'&idusuario='+encodeURIComponent(idusuario));  
  document.getElementById('ifrmresultado' ).src = "seguridad/FuncionCambiarPassword.php?idcontra1="+idcontra1+'&idcontra2='+idcontra2+'&idusuario='+encodeURIComponent(idusuario);  
}
//#3A639C
</script>
</head>

<body>
			
				
<div id="theLayer" style="position:absolute; width:451px; left:330px; top:170px; visibility:hidden; height: 8px; z-index: 1;">
<table border="0" width="500" height="300" bgcolor="#C3D9FF" cellspacing="0" cellpadding="3">
<tr>
<td width="100%">
  <table border="0" width="100%" cellspacing="0" cellpadding="0" height="344">
  <tr>
  <td width="100%" height="23" id="Heading3" style="cursor:move"><ilayer width="100%" onselectstart="return false">
  <layer width="100%" onmouseover="isHot=true;if (isN4) ddN4(theLayer)" onmouseout="isHot=false"> <font face="Verdana, Arial, Helvetica, sans-serif" color="#FFFFFF"><img src="images/18_privacy.gif" width="18" height="18" />Cambiar clave...</font> </layer>
  </ilayer></td>
  <td style="cursor:hand" valign="top">
  <a href="javascript:;" onClick="hideMe();return false"><font color=#ffffff size=2 face=arial  style="text-decoration:none"><img src="images/delete2.gif" width="13" height="14" border="0" /></img></font></a>  </td>
  </tr>
  <tr>
  <td width="100%" bgcolor="#FFFFFF" style="padding:4px" colspan="2">
<!-- PLACE YOUR CONTENT HERE //-->  
<!--<form action="/academicocca/seguridad/FuncionCambiarPassword_ajax.php" method="post" id="form_ter_rapido">-->

<table width="399" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="14" height="22"></td>
    <td colspan="2" valign="middle">Usuario:</td>
    <td colspan="2" valign="middle">
      <input name="txtusuario" type="text" id="txtusuario" value="<? echo $_SESSION['usr_conectado']; ?>" /></td>
    </tr>
	 <tr>
    <td width="14" height="22"></td>
    <td colspan="2" valign="middle">&nbsp;</td>
    <td colspan="2" valign="middle">
		</td>
    </tr>
  <tr>
    <td width="14" height="22"></td>
    <td colspan="2" valign="middle"><span class="Required">*</span> Nueva contrase&ntilde;a:</td>
    <td colspan="2" valign="top"><input name="txtcontra1" type="password" id="txtcontra1"/></td>
    </tr>
  
  <tr>
    <td height="22"></td>
    <td colspan="2" valign="middle"><span class="Required"></span><span class="Required">*</span> Repetir contrase&ntilde;a:</td>
    <td colspan="2" valign="top"><input name="txtcontra2" type="password" id="txtcontra2"/></td>
    </tr>
  <tr>
    <td height="24"></td>
    <td width="80">&nbsp;</td>
    <td width="74">&nbsp;</td>
    <td width="37">&nbsp;</td>
    <td width="194">&nbsp;</td>
  </tr>
  <tr>
    <td height="32"></td>
    <td valign="top"><input name="btnguardar" type="image" src="images/botonAceptar.gif" id="btnguardar" value="Guardar"   onmousemove="window.status='Cambiar_Password'" onmouseout="window.status='Sistema Acadmico - Centro Colombo Americano - Medelln'" onclick="Validar_Clave();" /></td>
	
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><span id="resultados"></span>&nbsp;</td>
    </tr>
  <tr>
    <td height="19"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19"></td>
    <td colspan="4" valign="top">(Los campos se&ntilde;alados con (<span class="Required">*</span>) son requeridos)<br />
	<span class="installError">Recuerde que son m&iacute;nimo 8 caract&eacute;res.</span></td>
    </tr>
  <tr>
    <td height="31"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<!--</form>-->
<iframe name="ifrmresultado" id="ifrmresultado" style="border: 0px; overflow:hidden; width:0; height:0; margin-top:0"  scrolling="auto"  src="" frameborder="0" ></iframe>
<!-- END OF CONTENT AREA //-->  </td>
  </tr>
  </table> 
</td>
</tr>
</table>
</div>				
				
</body>
</html>
