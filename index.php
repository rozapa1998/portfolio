<?php
    $pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Mi portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="inicio">
    <main class="container">
        <header>
            <?php include_once("menu.php"); ?>
        </header>
        <div class="row bloque-inicio align-items-end justify-content-center">
            <div class="row justify-content-center">
                <div class="col-10 mb-3 mb-sm-5">
                    <div class="row search">
                        <div class="col-10 col-sm-11 pr-0 align-self-center">
                            <h1 class="p-2 m-0">Hola mi nombre es <span class="destacado">Rodrigo</span>, soy programador full-stack.</h1>
                        </div>
                        <div class="col-1 p-0 m-0 text-center align-self-center border-left">
                            <i class="fas fa-search ml-2 ml-sm-0 p-sm-2"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mb-5">
                    <a class="btn" href="proyectos.php">MIRÁ MI TRABAJO</a>
                </div>
            </div>
        </div>
    </main>
    <footer class="container px-sm-0">
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>