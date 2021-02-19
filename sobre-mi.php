<?php
    $pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi | Mi portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="sobre-mi">
    <div class="main">
        <div class="container">
            <header>
                <?php include_once("menu.php"); ?>
            </header>
            <main class="container pb-4 pb-sm-5">
                <div class="row pb-0 pb-sm-5">
                    <div class="col-sm-6 col-12 mb-5 mb-sm-0">
                        <h1>Sobre mi</h1>
                        <p class="mb-5 mt-4">Hola, mi nombre es Rodrigo tengo 22 años, soy un desarrollador web y programador de juegos, dentro de esta pagina te mostrare cuales son mis aptitudes.</p>
                        <div class="row">
                            <div class="col-4 iconos">
                                <a href="https://github.com/rozapa1998" target="_blank" title="Github"><i class="fab fa-github mr-2"></i></a>
                                <a href="https://ar.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="col-8 text-left align-self-center">
                                <a href="files/CV.txt" download="CV Rodrigo.txt" class="descarga-cv rounded-pill px-2 px-sm-4 py-2 py-sm-3">DESCARGÁ MI CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 text-center">
                        <img src="images/yo.png" alt="" style="filter: drop-shadow(5px 5px 10px #444);">
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="tecnologias pb-4 pb-sm-5">
        <section class="container pt-4">
            <div class="row my-5">
                <div class="col-12 text-sm-left text-center">
                    <h2>Tecnologías de programación</h2>
                </div>
            </div>
            <div class="row justify-content-center justify-content-sm-start">
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/javascript.png" alt="">
                        <p>Javascript</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/php.png" alt="">
                        <p>PHP</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/html5.png" alt="">
                        <p>HTML5</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/react-js.png" alt="">
                        <p>React.js</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/jquery.png" alt="">
                        <p>jQuery</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/bootstrap.png" alt="">
                        <p>Bootstrap</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/laravel.png" alt="">
                        <p>Laravel</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/maria-db.png" alt="">
                        <p>MariaDB</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/css.png" alt="">
                        <p>CSS</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/mysql.png" alt="">
                        <p>MySQL</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/apache.png" alt="">
                        <p>Apache</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/git.png" alt="">
                        <p>Git</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/heidi-sql.png" alt="">
                        <p>Heidi SQL</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/sublime-text.png" alt="">
                        <p>Sublime Text</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/xampp.png" alt="">
                        <p>XAMPP</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/word.png" alt="">
                        <p>Word</p>
                    </div>
                </div>
                <div class="col-sm-2 col-6 px-2 text-center">
                    <div class="card mb-4 py-3">
                        <img src="images/excel.png" alt="">
                        <p>Excel</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="personal">
        <section class="container pt-4 pb-5">
            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-8 col-lg-6 px-0 m-4 m-sm-0 m-md-4 m-lg-0">
                    <div class="row mx-2 bg-white">
                        <div class="col-auto pl-0">
                            <i class="fas fa-comment-alt p-5 m-0"></i>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="descr pt-3">
                                <h3>IDIOMAS</h3>
                                <p>INGLES - Intermediate B2<br>ESPAÑOL - Nativo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6 px-0 m-4 m-sm-0 m-md-4 m-lg-0">
                    <div class="row mx-2 bg-white">
                        <div class="col-auto pl-0">
                            <i class="fas fa-star p-5 m-0"></i>
                        </div>
                        <div class="col-auto align-self-center">
                            <div class="descr pt-3">
                                <h3>HOBBIES</h3>
                                <p>Gimnasio<br>Literatura de Fantasia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="laboral mb-5">
        <section class="container">
            <div class="row mt-5 pl-sm-5 title">
                <div class="col-12 col-sm-2 col-xl-1 align-self-center text-center text-sm-left">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="col-12 col-sm-10 col-xl-11 align-self-center text-center text-sm-left">
                    <h2 class="m-0 align-self-center">Experiencia laboral</h2>
                </div>
            </div>
            <div class="row justify-content-center justify-content-lg-start mt-5">
                <div class="col-sm-6 col-12 px-0 mb-4 mb-sm-0">
                    <div class="row mx-2 bg-white">
                        <div class="col-12 col-sm-3 col-md-4 col-lg-3 pl-sm-0 pt-3 pt-sm-0 text-center">
                            <b><svg class="bd-placeholder-img rounded-circle mt-sm-4 ml-sm-4" width="100" height="100" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#fffff"></rect>
                                <text x="17%" y="57%" fill="white">JN°45</text>
                            </svg></b>
                        </div>
                        <div class="col-12 col-sm-9 col-md-12 col-lg-9 align-self-center">
                            <div class="descr pt-3">
                                <h4 class="m-0">Auxiliar Esribiente</h4>
                                <h5>Juzgado Criminal y Correccional N°45</h5>
                                <h6 class="my-2">JUL 2018 - DIC 2020</h6>
                                <ul class="text-left pl-3">
                                    <li>Atencion de mesa de entradas.</li>
                                    <li>Redaccion de escritos.</li>
                                    <li>Remision de expedientes.</li>
                                </ul>
                            </div>
                            <div class="row pr-4 pb-4">
                                <div class="col-12 text-right">
                                    <a href="" target="_blank" class="btn px-4 py-2">VER EMPRESA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-12 px-0 d-none">
                    <div class="row mx-2 bg-white">
                        <div class="col-12 col-sm-3 col-md-4 col-lg-3 pl-sm-0 pt-3 pt-sm-0 text-center">
                            <b><svg class="bd-placeholder-img rounded-circle mt-sm-4 ml-sm-4" width="100" height="100" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#fffff"></rect>
                                <text x="17%" y="57%" fill="white">LOGO</text>
                            </svg></b>
                        </div>
                        <div class="col-12 col-sm-9 col-md-12 col-lg-9 align-self-center">
                            <div class="descr pt-3">
                                <h4 class="m-0">Desarrollador web</h4>
                                <h5>DePC Suite</h5>
                                <h6 class="my-2">DIC 2020 - PRESENTE</h6>
                                <ul class="text-left pl-3">
                                    <li>Desarrollador web.</li>
                                    <li style="color: white;"></li>
                                    <li style="color: white;"></li>
                                </ul>
                            </div>
                            <div class="row pr-4 pb-4">
                                <div class="col-12 text-right">
                                    <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" class="btn px-4 py-2">VER EMPRESA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="estudios py-5">
        <section class="container">
            <div class="row mt-sm-5 pl-sm-5 title">
                <div class="col-12 col-sm-2 col-xl-1 align-self-center text-center text-sm-left">
                    <i class="fas fa-graduation-cap align-self-center"></i>
                </div>
                <div class="col-12 col-sm-10 col-xl-11 pl-sm-4 align-self-center text-center text-sm-left">
                    <h2 class="m-0 align-self-center">Estudios</h2>
                </div>
            </div>
            <div class="row justify-content-center justify-content-lg-start mt-5">

                <div class="col-sm-6 col-12 px-0 mb-4 mb-sm-0">
                    <div class="row mx-2 bg-white">
                        <div class="col-12 col-sm-3 col-md-4 col-lg-3 pl-sm-0 pt-3 pt-sm-0 text-center">
                            <b><svg class="bd-placeholder-img rounded-circle mt-sm-4 ml-sm-4" width="100" height="100" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#e20000"></rect>
                                <text x="17%" y="57%" fill="white"> IMD</text>
                            </svg></b>
                        </div>
                        <div class="col-12 col-sm-9 col-md-12 col-lg-9 align-self-center">
                            <div class="descr pt-3">
                                <h4 class="m-0">Secundario</h4>
                                <h5>Instituto Monseñor Dillon</h5>
                                <h6 class="my-2">2010 - 2015</h6>
                                <ul class="text-left pl-3">
                                    <li>Egresado en "Bachiller en Letras y Ciencias sociales"</li>
                                </ul>
                            </div>
                            <div class="row pr-4 pb-4">
                                <div class="col-12 text-right">
                                    <a href="http://www.monsdillon.esc.edu.ar/" target="_blank" class="btn px-4 py-2">VER INSTITUCIÓN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-12 px-0">
                    <div class="row mx-2 bg-white">
                        <div class="col-12 col-sm-3 col-md-4 col-lg-3 pl-sm-0 pt-3 pt-sm-0 text-center">
                            <b><svg class="bd-placeholder-img rounded-circle mt-sm-4 ml-sm-4" width="100" height="100" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#e20000"></rect>
                                <text x="17%" y="57%" fill="white">UMai</text> <!-- logo de la unlu -->
                            </svg></b>
                        </div>
                        <div class="col-12 col-sm-9 col-md-12 col-lg-9 align-self-center">
                            <div class="descr pt-3">
                                <h4 class="m-0">Universitario</h4>
                                <h5>Universidad Maimonides</h5>
                                <h6 class="my-2">MAR 2018 - PRESENTE</h6>
                                <ul class="text-left pl-3">
                                    <li>Licenciatura en Tecnologia Multimedial.</li>
                                    <li style="color: white;"></li>
                                </ul>
                            </div>
                            <div class="row pr-4 pb-4">
                                <div class="col-12 text-right">
                                    <a href="https://multimedia.maimonides.edu/videojuegos-2021/?gclid=CjwKCAiA57D_BRAZEiwAZcfCxTz1Y_hi9blGTw44EREg5LFgmO_7TBop_TiYS9qVDgUxisphK5WTBRoCUlcQAvD_BwE" target="_blank" class="btn px-4 py-2">VER INSTITUCIÓN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-12 px-0 pt-3">
                    <div class="row mx-2 bg-white">
                        <div class="col-12 col-sm-3 col-md-4 col-lg-3 pl-sm-0 pt-3 pt-sm-0 text-center">
                            <b><svg class="bd-placeholder-img rounded-circle mt-sm-4 ml-sm-4" width="100" height="100" preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="#e20000"></rect>
                                <text x="17%" y="57%" fill="white">DePC</text>
                            </svg></b>
                        </div>
                        <div class="col-12 col-sm-9 col-md-12 col-lg-9 align-self-center">
                            <div class="descr pt-3">
                                <h4 class="m-0">Curso</h4>
                                <h5>DePC Suite</h5>
                                <h6 class="my-2">AGO 2020 - PRESENTE</h6>
                                <ul class="text-left pl-3">
                                    <li>Curso de programación web Full Stack.</li>
                                    <li style="color: white;"></li>
                                </ul>
                            </div>
                            <div class="row pr-4 pb-4">
                                <div class="col-12 text-right">
                                    <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank" class="btn px-4 py-2">VER INSTITUCIÓN</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="footer">
        <div class="container">
            <footer class="px-0 pb-sm-3">
                <?php include_once("footer.php"); ?>
            </footer>
        </div>
    </div>
</body>
</html>