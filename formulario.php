<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulario ejercicio php</title>
        <link rel="stylesheet" href="estilos.css" type="text/css">

        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    </head>


    <body>
        <div class="mi_form">
            <!-- FORMULARIO -->
            <form action="" method="POST">

                <h2>Formulario de registro</h2>

                <!-- nombre -->
                <div class="datos">
                    <label for="nombre">Nombre <span><em>(requerido)</em></span></label>
                    <input type="text" name="nombre" class="mi_form_input" required>
                </div>
                 <!-- apellido -->
                 <div class="datos">
                    <label for="apellido">Apellido <span><em>(requerido)</em></span></label>
                    <input type="text" name="apellido" class="mi_form_input" required>
                </div>
                
                <!-- email -->
                <div class="datos">
                    <label for="email">Email <span><em>(requerido)</em></span></label>
                    <input type="email" name="email" class="mi_form_input" required>
                </div>
              
                <!--boton envio  -->
                <input type="submit" name="submit" value="Crear cuenta" class="btn">
            
<?php
if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="cursophp";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO usuario (nombre, apellido, email)
    VALUES ('$nombre', '$apellido', '$email')";

    if($conn->query($sql)===TRUE){
        echo "New record created success";

    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>


            </form>
            <!--FIN DEL FORMULARIO -->


            

        </div>    

    </body>


</html>