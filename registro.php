<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <?php if (!empty($_message)) : ?>
        <p><?php $message ?></p>

    <?php endif; ?>

</body>

</html>

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
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <!--<link rel="stylesheet" href="CSS/registro.css">-->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/7ecad0e979.js" crossorigin="anonymous"></script>
    <link rel="icon" href="assest/favicon.ico">
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="home.php">Inicio</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="home.php"><i class="fa fa-user fa-lg"></i>Inicio</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <ul class="app-menu">
            <li><a class="app-menu__item" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Inicio</span></a></li>
            <li><a class="app-menu__item" href="registro.php"><i class="fa-solid fa-user-plus"></i><span class="app-menu__label">Crear usuarios</span></a></li>
            <li><a class="app-menu__item" href=""><i class="fa-solid fa-exclamation"></i><span class="app-menu__label">Reportes</span></a></li>
            <li><a class="app-menu__item" target="_blank" href="https://meet.google.com/kii-hgto-tmk"><i class="fa-solid fa-phone"></i><span class="app-menu__label">Reuniones</span></a></li>
            <li><a class="app-menu__item" href="calendario_admin.php"><i class="fa-solid fa-calendar-days"></i><span class="app-menu__label">Calendario</span></a></li>
            <li><a class="app-menu__item" href="index.php"><i class="fa-solid fa-right-from-bracket"></i><span class="app-menu__label">Cerrar sesión</span></a></li>
        </ul>
    </aside>

    <main class="app-content">
        <div class="app-title">
            <form action="./php/index.php" method="POST">
                <h1>Registro de usuarios</h1>
                <input type="text" name="nombre" placeholder="Ingresa el nombre" required>
                <input type="text" name="username" placeholder="Ingresa el usuario" required>
                <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
                <input type="password" name="confirm_password" placeholder="Confirma tu contraseña" required>
                <input type="text" name="estado" placeholder="Ingrese el estado" required>
                <input type="number" name="id_rol" placeholder="Ingrese el rol">
                <input type="submit" value="send" />
            </form>
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