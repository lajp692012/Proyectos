<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualización de Datos</title>

<LINK REL="SHORTCUT ICON"  href="../images/favicon-n.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK href="../css/stylesheet.css" type=text/css rel=stylesheet>
<script type="text/javascript" src="../js/javascript.js" language="JavaScript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- vinculo a bootstrap -->
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<!-- Temas-->
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">

<script language="javascript" type="text/javascript">

	function Cambiar(){
		var email = document.getElementById('correo').value;	
		var documento = document.getElementById('documento').value;
		
		alert(email);
		alert(documento);
		if (email!='' && documento !=''){
			//alert('?email='+email+'&documento'+documento);
		    document.getElementById('Espera').style.visibility='visible';			
			document.location.href='validaremail.php?email='+email+'&documento='+documento;
		} else {
			alert('Debe Especificar un Correo Electronico y el Documento... Verifique');	
			document.getElementById('documento').focus();
			return false;
		}
		document.getElementById('ifrm').src='validaremail.php?email='+email+'&documento='+documento;		
		
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

.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0,0,0,0.8);
    z-index: 99999;
    display:none;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: auto;
}
.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
}

.close {
    background: #606061;
    color: #000000;
    line-height: 25px;
    position: absolute;
    right: 0px;
    text-align: center;
    top: 0px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover { background: #00d9ff; }

BODY { background: url(../images/ISO.png) fixed repeat}

</style>

</head>
<body>
    <div id="ContenedorC">
    <div class="Icon"><img src="../images/CCA-Color.png"></div>                     
        <div class="ContentForm">
        <!--<form action="" method="post" name="FormEntrar">-->       
        	
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
              <input type="number" class="form-control" name="documento" placeholder="Documento" id="documento" aria-describedby="sizing-addon1" autocomplete="off" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
              <input type="email" class="form-control" name="correo" placeholder="Correo Electrónico" id="correo" aria-describedby="sizing-addon1" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" name="IngresoLog" onClick="Cambiar();">Enviar</button>
            </div>
            <div id="Espera" style="visibility:hidden">
                <h2><strong>Enviando Correo... Gracias</strong></h2>
            </div>
        <!--</form>-->
        </div>    
    </div>
    <iframe name="ifrm" id="ifrm" style="border: 0px; overflow:hidden; width:100%; height:200; display:block" scrolling="auto" src="" frameborder="1"></iframe>
    
    <div id="openModal" class="modalDialog">
      <div>
        <button title="Close" class="close" onClick="javascript:CloseModal(0);">X</button>
        <h2>Matr&iacute;culas Online</h2>
        <div id="divMensaje"></div>
      </div>
    </div>
    
</body>     
</html>
