<!DOCTYPE html>
<html>
<head>
<title>Matriculas Online -  Colombo Americano</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="Cache-Control" CONTENT ="no-cache">
<meta name="robots" content="noindex, nofollow" />
<meta name="Googlebot-News" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<meta name="robots" content="noimageindex">
<META content="MSHTML 6.00.6000.16640" name=GENERATOR>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<LINK REL="SHORTCUT ICON" href="images/favicon.ico">            
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../../css/estilo.css">
<script src="../../js/md5.pack.js"></script>            
<script src="../../js/jquery.min.js"></script>            
<script src="../../js/load_captcha.js"></script>

<script>

    function Cambio_Clave(){
		var contra1 = document.getElementById('Contra1').value;	
		var contra2 = document.getElementById('Contra2').value;
		var usuario = document.getElementById('Usuario').value;
		
		if (usuario!='' && contra1!='' && contra2!=''){
 			idcontra1	= md5(contra1);
			idcontra2	= md5(contra2);  
		    document.getElementById('ifrm' ).src = "FuncionCambiarPassword.php?idcontra1="+idcontra1+'&idcontra2='+idcontra2+'&idusuario='+encodeURIComponent(usuario);  			
		} else {
			showModal('Debe Especificar la Contraseña 1 y la Contraseña 2... Verifique');	
			document.getElementById('Contra1').focus();
			return false;
		}
	
    }
    
    function showModal(mensaje) {
        var salida = "<p align='center'>" + mensaje + "</p>";
        
        var resultados = document.getElementById('divMensaje');	
            
        resultados.innerHTML = salida;
        
        document.getElementById('openModal').style.display = 'block';
            
    }
    
    function CloseModal(p){
        document.getElementById('openModal').style.display = 'none';
		top.location.href='/fmOnline/';	
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

BODY { background: url(../../images/ISO.png) fixed repeat}

</style>
    
</head>
<body>
    <div id="ContenedorC">
    <div class="Icon"><img src="../../images/LogoCCAM.png" width="180" height="70"></div>                            
    	<h3 align="center">Cambio de Contraseña</h3>    
        <div class="ContentForm">
        <!--<form action="" method="post" name="FormEntrar">-->
            <div class="input-group input-group-lg">
	            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
	              <input type="number" class="form-control" name="Usuario" placeholder="Usuario" id="Usuario" aria-describedby="sizing-addon1" autocomplete="off" required>
	        </div>
            <div class="input-group input-group-lg">
    	        <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
	              <input type="password" name="Contra1" id="Contra1" class="form-control" placeholder="Contraseña" aria-describedby="sizing-addon1" autocomplete="off" required>
	        </div>
            <div class="input-group input-group-lg">
	            <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
	              <input type="password" name="Contra2" id="Contra2" class="form-control" placeholder="Repita Contraseña" aria-describedby="sizing-addon1" autocomplete="off" required>
	        </div>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" name="SecurityCode" id="SecurityCode" class="form-control" placeholder="Código de seguridad" aria-describedby="sizing-addon1" autocomplete="off" required>
            </div>
            <div class="input-group input-group-lg">
                <h4>
                    <img style="border: 1px solid #D3D0D0" src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'>                   
                    <a href="javascript:void(0)" id="reloadCaptcha"><img src="../../images/recargar2.jpg" /></a>&nbsp;Recargar c&oacute;digo
                </h4>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" onClick="Cambio_Clave()">Cambiar Contraseña</button>
        <!--</form>-->
        </div>    
    </div>
    <iframe name="ifrm" id="ifrm" style="border: 0px; overflow:hidden; width:0; height:0; display:none" scrolling="auto" src="" frameborder="0"></iframe>
    <div id="openModal" class="modalDialog">
      <div>
        <button title="Close" class="close" onClick="javascript:CloseModal(0);">X</button>
        <h2>Matr&iacute;culas Online</h2>
        <div id="divMensaje"></div>
      </div>
    </div>
</body>        
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>        
</html>		
