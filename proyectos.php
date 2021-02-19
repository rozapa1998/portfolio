<?php
    $pg = "proyectos";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos | Mi Portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="proyectos">
    <div class="container proyectos-main">
        <header>
            <?php include_once("menu.php"); ?>
        </header>
        <main class="container">
            <div class="row pt-2 pt-sm-4 mb-3 mb-sm-0">
                <div class="col-sm-7 col-12">
                    <h1>Mis proyectos</h1>
                    <div class="my-2 mt-sm-4 mb-sm-5">
                        <p>Estos son algunos de los trabajos que desarrolle durante mi curso de programacion, para mas de mis trabajos podes visitar mi github!<br>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around">
                <div class="col-sm-4 col-12 p-0 pb-5 mb-4 mb-sm-0 div">
                    <img src="images/abm.png" class="m-3">
                    <h2 class="pl-3 py-3">ABM CLIENTES</h2>
                    <p class="pl-3 pr-4 pt-2">Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                    <div class="btn-group mb-3">
                        <div class="col-6">
                            <a href="" target="_blank" class="btn">VER ONLINE</a>
                        </div>
                        <div class="col-6">
                            <a href="https://github.com/rozapa1998/abmClientes" target="_blank" class="btn code" >CÓDIGO FUENTE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-0 pb-5 mb-4 mb-sm-0 div">
                    <img src="images/sgv.png" class="m-3">
                    <h2 class="pl-3 py-3">SISTEMA DE GESTIÓN DE VENTAS</h2>
                    <p class="pl-3 pr-4 pt-2">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</P>
                    <div class="btn-group mb-3">
                        <div class="col-6">
                        <a href="" target="_blank" class="btn">VER PROYECTO</a>
                        </div>
                        <div class="col-6">
                            <a href="https://github.com/rozapa1998/abmVentas" target="_blank" class="btn code" >CÓDIGO FUENTE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-0 pb-5 mb-4 mb-sm-0 mt-lg-4 mt-xl-0 div">
                    <img src="images/pi.png" class="m-3">
                    <h2 class="pl-3 py-3">PROYECTO INTEGRADOR</h2>
                    <p class="pl-3 pr-4 pt-2">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                    <div class="btn-group mb-3">
                        <div class="col-6">
                            <button type="submit" class="btn">VER PROYECTO</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn code">CÓDIGO FUENTE</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="container">
        <?php include_once("footer.php"); ?>
    </footer>
</body>
</html>