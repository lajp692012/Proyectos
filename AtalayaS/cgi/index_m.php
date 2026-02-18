<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atalaya Studio</title>
  <link rel="stylesheet" href="../css/stylesm.min.css">
  <link rel="icon" type="image/x-icon" href="../images/atalaya.ico">
  <script>
  
	async function Cargar_Comentarios() {

		try {
			// 1. Obtener el archivo
			let respuesta = await fetch('comentarios.html');
			// 2. Convertir a texto
			let datos = await respuesta.text();
			// 3. Insertar en el DIV
			document.getElementById('Cuerpo_ppal').innerHTML = datos;
		} catch (error) {
			console.error('Error al cargar la página:', error);
		}
	}

	async function Cargar_Nosotros() {

		try {
			// 1. Obtener el archivo
			let respuesta = await fetch('nosotros.html'); 
			// 2. Convertir a texto
			let datos = await respuesta.text();
			// 3. Insertar en el DIV
			document.getElementById('Cuerpo_ppal').innerHTML = datos;
		} catch (error) {
			console.error('Error al cargar la página:', error);
		}
	}
	
	async function Cargar_Contacto() {
		try {
			// 1. Obtener el archivo
			let respuesta = await fetch('contacto.html');
			// 2. Convertir a texto
			let datos = await respuesta.text();
			// 3. Insertar en el DIV
			document.getElementById('Cuerpo_ppal').innerHTML = datos;
		} catch (error) {
			console.error('Error al cargar la página:', error);
		}
	}
	
	async function Cargar_eDesarrollo() {
		try {
			// 1. Obtener el archivo
			let respuesta = await fetch('eDesarrollo.html');
			// 2. Convertir a texto
			let datos = await respuesta.text();
			// 3. Insertar en el DIV
			document.getElementById('Cuerpo_ppal').innerHTML = datos;
		} catch (error) {
			console.error('Error al cargar la página:', error);
		}
	}

	async function Cargar_Listado_Cliente() {
		try {
			// 1. Obtener el archivo
			let respuesta = await fetch('lClientes.html');
			// 2. Convertir a texto
			let datos = await respuesta.text();
			// 3. Insertar en el DIV
			document.getElementById('Cuerpo_ppal').innerHTML = datos;
		} catch (error) {
			console.error('Error al cargar la página:', error);
		}
	}
</script>
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="logo"><img src="../images/logo.png" width="75" height="80" loading="lazy"><br><!--Atalaya Studio--></div>
      <button class="toggle" aria-label="Abrir menú">&#9776;</button>
      <ul class="menu">
        <li><a href="index_m.php">Inicio</a></li>
        <li class="submenu">
          <a href="#servicios">Servicios ▾</a>
          <ul class="dropdown">
            <li><a href="javascript:Cargar_eDesarrollo();">Diseño y Desarrollo Web</a></li>
            <li><a href="javascript:Cargar_eDesarrollo();">Aplicaciones Móviles</a></li>
            <li><a href="javascript:Cargar_eDesarrollo();">SEO</a></li>
          </ul>
        </li>
        <li><a href="javascript:Cargar_Nosotros();">Nosotros</a></li>
        <li><a href="javascript:Cargar_Comentarios();">Comentarios</a></li>
        <li><a href="javascript:Cargar_Contacto();">Contacto</a></li>
        <li><a href="../seguridad/logout.php">Cerrar Sesión</a></li>
      </ul>
    </nav>
  </header>
  <div id="Cuerpo_ppal">
	<h1 align="center"><img src="../images/logo.png" width="440" height="480" loading="lazy" ></h1>
  </div>
  <script>
    // Alternar menú en móviles
    const toggle = document.querySelector(".toggle");
    const menu = document.querySelector(".menu");

    toggle.addEventListener("click", () => {
      menu.classList.toggle("active");
    });

    // Alternar submenús en móviles
    const submenus = document.querySelectorAll(".submenu > a");
    submenus.forEach(link => {
      link.addEventListener("click", e => {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          link.nextElementSibling.classList.toggle("open");
        }
      });
    });
  </script>
</body>
</html>
