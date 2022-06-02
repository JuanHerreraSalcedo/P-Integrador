<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Acudiente</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7ecad0e979.js" crossorigin="anonymous"></script>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Acudiente</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="acudiente.php"><i class="fa fa-user fa-lg"></i>Inicio</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">
            <li><a class="app-menu__item" href="acudiente.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
            <li><a class="app-menu__item" href="calendario_acudiente.php"><i class="fa-solid fa-calendar-days"></i><span class="app-menu__label">Calendario</span></a></li>
            <li><a class="app-menu__item" href="estudiantes_acu.php"><i class="fa-solid fa-child"></i><span class="app-menu__label">Estudiantes</span></a></li>
            <li><a class="app-menu__item" href="Profesores_acu.php"><i class="fa-solid fa-chalkboard-user"></i><span class="app-menu__label">Profesores</span></a></li>
            <li><a class="app-menu__item" href=""><i class="fa-solid fa-exclamation"></i><span class="app-menu__label">Reportes</span></a></li>
            <li><a class="app-menu__item" target="_blank" href="https://meet.google.com/kii-hgto-tmk"><i class="fa-solid fa-phone"></i><span class="app-menu__label">Reuniones</span></a></li>
            <li><a class="app-menu__item" href="correo_acu.php"><i class="fa-solid fa-envelope"></i><span class="app-menu__label">Correos</span></a></li>
            <li><a class="app-menu__item" href="index.php"><i class="fa-solid fa-right-from-bracket"></i><span class="app-menu__label">Cerrar sesión</span></a></li>
            
        </ul>
    </aside>
    <main class="app-content">
        <div class="app-title">
            <!-- Codigo de main aqui -->
        </div>
        <h1>Formulario de contacto</h1>
<div class="contact">
	<div class="contact-main">
	<form method="post">
		<h3>Tu correo electrónico</h3>
		<input type="email" placeholder="Ingresa tu correo electrónico" class="hola"  name="email" required />
		
		<h3>Tu nombre</h3>
		<input type="text" placeholder="Ingresa tu nombre" class="hola"  name="customer_name" required />
		<h3>Asunto</h3>
		<input type="text" placeholder="Ingresa el asunto del correo" class="hola"  name="subject" required />
		<h3>Mensaje</h3>
		<textarea  name="message" placeholder="Escribe tu mensaje" required></textarea>
		<?php
			if (isset($_POST['send'])){
				include("sendemail.php");//Mando a llamar la funcion que se encarga de enviar el correo electronico
				
				/*Configuracion de variables para enviar el correo*/
				$mail_username="";//Correo electronico saliente ejemplo: tucorreo@gmail.com
				$mail_userpassword="";//Tu contraseña de gmail
				$mail_addAddress="info@obedalvarado.pw";//correo electronico que recibira el mensaje
				$template="email_template.html";//Ruta de la plantilla HTML para enviar nuestro mensaje
				
				/*Inicio captura de datos enviados por $_POST para enviar el correo */
				$mail_setFromEmail=$_POST['customer_email'];
				$mail_setFromName=$_POST['customer_name'];
				$txt_message=$_POST['message'];
				$mail_subject=$_POST['subject'];
				
				sendemail($mail_username,$mail_userpassword,$mail_setFromEmail,$mail_setFromName,$mail_addAddress,$txt_message,$mail_subject,$template);//Enviar el mensaje
			}
		?>
	</div>
	<div class="enviar">
		<div class="contact-check">
			
		</div>
        <div class="contact-enviar">
		  <input type="submit" value="Enviar mensaje" name="send">
		</div>
		<div class="clear"> </div>
		</form>
</div>
</div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
        if (document.location.hostname == 'pratikborsadiya.in') {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
        }
    </script>
</body>

</html>