<?php
    include_once ("PHPMailer/src/PHPMailer.php");
    include_once ("PHPMailer/src/SMTP.php");    

    $pg = "contacto";

    function guardarCorreo($correo){
        $archivo = fopen("mails.txt", "a+"); 
        fwrite($archivo, $correo . ";\n"); //En linux \r
        fclose($archivo);
    }    

    if($_POST){ /* es postback */
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $mensaje = $_POST["txtComentarios"];
    
        //guardarCorreo($correo);

        if($nombre != "" && $correo != ""){
            $mail = new PHPMailer(true);

            $mail->IsSMTP();
            $mail->SMTPDebug = 0;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = "smtp.gmail.com"; // SMTP a utilizar
            $mail->Port = 465;
            $mail->Username = "rodrigo1998.rz@gmail.com";
            $mail->setFrom("rodrigo1998.rz@gmail.com", "Rodrigo Zapata");
            $mail->Subject = utf8_decode('Contacto Página Web');
            $mail->IsHTML(true);

            $mail->addAddress($correo);

            $mail->Body = "Recibi tu consulta, te respondere a la brevedad.";
            $mail->send();

    
            //Envía ahora un correo a nosotros con los datos de la persona
            $mail->ClearAllRecipients();
            $mail->addAddress("rodrigo1998.rz@gmail.com");
            $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
            $mail->Body = "Te escribio $nombre, cuyo correo es $correo, con el siguiente mensaje:<br><br>$mensaje";
           
            if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
                header('Location: confirmacion-envio.php');
            } else {
                $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
            }
        } else {
            $msg = "Complete todos los campos";
        }
    
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Mi Portfolio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="contacto">
    <div class="container contacto-main">
        <header>
            <?php include_once("menu.php"); ?>
        </header>
        <main class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row mt-3 mt-sm-4">
                <div class="col-sm-5 col-12 pr-3 pr-sm-5">
                    <p>Podés comunicarte conmigo a través de este formulario.</p>
                </div>
                <div class="col-sm-6 col-12 offset-sm-1">
                    <form action="" method="POST">
                        <div class="mb-2">
                            <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="mb-2">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtComentarios" id="txtComentarios" rows="8" class="form-control"
                                placeholder="Consulta..."></textarea>
                        </div>
                        <div class="d-inline">
                            <div class="mt-2 mt-sm-0">
                                <div class="g-recaptcha" data-sitekey="6LcS_8QZAAAAAE55JZregxpFmO8ARGKf9oGiESHB"></div>
                            </div><!--col-sm-6 col-12-->
                            <div class="mt-4 mt-sm-2 text-center text-sm-right"> <!--text-right para alinear a la derecha-->
                                <button type="submit" class="btn">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <footer class="container mt-2 mt-sm-0 px-0 pb-2 pb-sm-3">
        <?php include_once("footer.php"); ?>
    </footer>
</body>

</html>