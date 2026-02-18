<!DOCTYPE html>
<html>
<head>
<title>Mostrar Datos Almacenados de Manera Local</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META HTTP-EQUIV="Cache-Control" CONTENT ="no-cache">
<meta name="robots" content="noindex, nofollow" />
<meta name="Googlebot-News" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<meta name="robots" content="noimageindex">
<META content="MSHTML 6.00.6000.16640" name=GENERATOR>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" type="image/x-icon" href="../images/atalaya.ico">          
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../css/estilo.min.css">

</head>

<body>
	 <div id="Contenedor">
     	<div class="Icon"><img src="../images/logo.png" width="120" height="100" loading="lazy"></div>                            
    	<h1 align="center">Atalaya Studio</h1>
        <div class="ContentForm">
            <h2 align="center">Datos Registrados...</h2>            
        <script>
			let nombre 		= localStorage.getItem("nombre");
			let email 		= localStorage.getItem("email");
			let telefono 	= localStorage.getItem("telefono");
			let asunto 		= localStorage.getItem("asunto");
			let mensaje 	= localStorage.getItem("mensaje");
		
			if(usuario){
				document.ContentForm.innerHTML += '<p>Usuario Registrado: ${nombre}</p>';
				document.ContentForm.innerHTML += '<p>Email Registrado: ${email}</p>';
				document.ContentForm.innerHTML += '<p>Telefono Registrado: ${telefono}</p>';
				document.ContentForm.innerHTML += '<p>Asunto Registrado: ${asunto}</p>';
				document.ContentForm.innerHTML += '<p>Mensaje Registrado: ${mensaje}</p>';																
			}
		</script>
       </div>
     </div>
</body>
</html>