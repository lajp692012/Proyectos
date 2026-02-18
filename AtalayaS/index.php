<?
define( 'MAX_SESSION_TIEMPO', 3600 * 2 );
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<title>Atalaya Studio</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="Cache-Control" CONTENT ="no-cache">
<meta name="robots" content="noindex, nofollow" />
<meta name="Googlebot-News" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<meta name="robots" content="noimageindex">
<META content="MSHTML 6.00.6000.16640" name=GENERATOR>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" type="image/x-icon" href="images/atalaya.ico">          
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.min.css">
<script src="js/md5.pack.js"></script>            
<script src="js/jquery.min.js"></script>            
<script src="js/load_captcha.min.js"></script>

<script>

    function Cambio_Clave(){
        document.location.href='seguridad/pwd/';	
    }
    
    function showModal(mensaje) {
        var salida = "<p align='center'>" + mensaje + "</p>";
        
        var resultados = document.getElementById('divMensaje');	
            
        resultados.innerHTML = salida;
        
        document.getElementById('openModal').style.display = 'block';
            
    }
    
    function CloseModal(p){
        document.getElementById('openModal').style.display = 'none';
    }
    

    function Validar_Usuario(){				
		var user = document.getElementById('Usuario').value; 
		var pass = document.getElementById('Contra').value;
		var securityCode = document.getElementById('SecurityCode').value;
		
		if (user==""){
			showModal("Debe indicar el usuario para iniciar sesión... Verifique");	
			document.getElementById('Usuario').focus; 
			return false
		}
		if (pass==""){
			showModal("Debe indicar la contraseña para iniciar sesión... Verifique");						
			document.getElementById('Contra').focus; 
			return false
		}			
		pass = md5(pass);
		document.getElementById('ifrm').src= "cgi/Validar_Usuario.php?idusuario="+user+"&idpass="+pass+'&securityCode='+securityCode;
    }

</script>
<style>
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
    width: 300px;
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

</style>
    
</head>
<body>

	<SCRIPT language=javascript src="js/validart.js"></SCRIPT>

    <div id="Contenedor">
    <div class="Icon"><img src="images/logo.png" width="120" height="100" loading="lazy"></div>                            
    	<h2 align="center">Atalaya Studio</h2>
        <div class="ContentForm">
        <!--<form action="" method="post" name="FormEntrar">-->
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
              <input type="number" class="form-control" name="Usuario" placeholder="Usuario" id="Usuario" aria-describedby="sizing-addon1" autocomplete="off" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
              <input type="password" name="Contra" id="Contra" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon1" autocomplete="off" required>
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" name="SecurityCode" id="SecurityCode" class="form-control" placeholder="Código de seguridad" aria-describedby="sizing-addon1" autocomplete="off" required>
            </div>
            <div class="input-group input-group-lg">
            <h4>
	              <img style="border: 1px solid #D3D0D0" src="cgi/get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'>                   
              <a href="javascript:void(0)" id="reloadCaptcha"><img src="images/recargar.jpg" /></a>&nbsp;Recargar c&oacute;digo
            </h4>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" onClick="Validar_Usuario()">Entrar</button>
			<button class="btn btn-lg btn-primary btn-block btn-signin" id="RestaurarLog" onClick="Cambio_Clave()">Restaurar Contraseña</button>
        <!--</form>-->
        </div>    
    </div>
    <iframe name="ifrm" id="ifrm" style="border: 0px; overflow:hidden; width:0%; height:0; display:none" scrolling="auto" src="" frameborder="0"></iframe>
    <div id="openModal" class="modalDialog">
      <div>
        <button title="Close" class="close" onClick="javascript:CloseModal(0);">X</button>
        <h2>Atalaya Studio</h2>
        <div id="divMensaje"></div>
      </div>
    </div>
</body>        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>        
</html>		
