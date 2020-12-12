<?php

?>
<header>
        <div class="container">
            <nav class="navbar navbar-expand-md px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                    aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item pr-5">
                            <a class="nav-link <?php echo $pg == "inicio"?"active":""; ?> active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link" <?php echo $pg == "sobre-mi"?"active":""; ?> href="sobre-mi.html">Sobre mí</a>
                        </li>
                        <li class="nav-item pr-5">
                            <a class="nav-link" <?php echo $pg == "proyectos"?"active":""; ?> href="proyectos.html">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo $pg == "contacto"?"active":""; ?> href="contacto.html">Contacto</a>
                        </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0">
                        <a href="files/Cv Rodrigo Zapata.pdf" target="_blank" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>
            </nav>