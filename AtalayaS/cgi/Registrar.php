<!DOCTYPE html>
<html>
<head>
<title>Registrar Datos de Manera Local</title>
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


<?
//Se reciben los datos suministrados en el formulario
$tNombre 	= $_POST['nombre'];
$tEmail 	= $_POST['email'];
$tTelefono 	= $_POST['telefono'];
$tAsunto 	= $_POST['asunto'];
$tMensaje	= $_POST['mensaje'];
?>
<body>
	 <div id="Contenedor">
     	<div class="Icon"><img src="../images/logo.png" width="120" height="100" loading="lazy"></div>                            
    	<h1 align="center">Atalaya Studio</h1>
        <div class="ContentForm">
            <h2 align="center">Registrando datos...</h2>
            
			<script>
                // Recibimos datos desde PHP
                let nombre 		= "<?php echo $tNombre; ?>";
                let email 		= "<?php echo $tEmail; ?>";
                let telefono 	= "<?php echo $tTelefono; ?>";
                let asunto 		= "<?php echo $tAsunto; ?>";
                let mensaje 	= "<?php echo $tMensaje; ?>";
        
                // Guardamos en LocalStorage
                localStorage.setItem("nombre", nombre);
                localStorage.setItem("email", email);
                localStorage.setItem("telefono", telefono);
                localStorage.setItem("asunto", asunto);						
                localStorage.setItem("mensaje", tema);
        
                // Guardamos en SessionStorage
                sessionStorage.setItem("sesionActiva", "true");
                
                //Mostramos datos registrados en pantalla
                document.write("Usuario guardado en LocalStorage:", localStorage.getItem("nombre"));
                document.write("Email guardado en LocalStorage:", localStorage.getItem("email"));
                document.write("Telefono guardado en LocalStorage:", localStorage.getItem("telefono"));
                document.write("Asunto guardado en LocalStorage:", localStorage.getItem("asunto"));
                document.write("Mensaje guardado en LocalStorage:", localStorage.getItem("mensaje"));
                      
                document.write("Estado de sesión en SessionStorage:", sessionStorage.getItem("sesionActiva"));
            </script>
		</div>
   </div>
</body>
</html>