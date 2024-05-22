<?php

$servidor = 'localhost';

$usuario = 'root';

$clave = '';

$baseDeDatoa = 'baselocal';

 

$conexion = mysqli_connect ($servidor, $usuario,$clave,$baseDeDatoa);




?>

 

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>




<h1>PROYECTO WEB</h1>

 

    <div>

        <br>

 

        <h2>Añadir Registro</h2>

 

   

 

        <form action="#" method="post" class="formulario">

           

            <br>

   

            <label for="nombre" class="label">Nombre:</label>

            <input type="text" name="nombre">

   

            <br>

            <br>

   

   

            <label for="email" class="label">Email:</label>

            <input type="email" name="email" >

   

            <br>

            <br>

   

       

            <input type="submit" name="Añadir" class="boton">

           

   

           

   

        </form>

        <br>

    </div>

 

    <div>

 

        <br>

 

        <h2>Eliminar Registro</h2>

 

        <form action="#" method="post" class="formulario">

 

            <br>

   

            <label for="id" class="label">ID a eliminar:</label>

            <input type="text" name="id">

           

            <br>

            <br>

   

            <input type="submit" value="Eliminar Registro" class="boton">

           

        </form>

        <br>

 

    </div>

   

</body>

</html>

 

   

   

   

   

    <?php

 

    if(isset($_POST['Añadir'])){

 

        $nombre = $_POST ['nombre'];

        $email = $_POST ['email'];

 

        $insertar = "INSERT INTO usuarios VALUES('','$nombre','$email')";

 

        if ($conexion->query($insertar) == TRUE) {

            echo "Registro exitoso:DDD";

        } else {

            echo "Error" . $insertar . "<br>" . $conexion->error;

        }

 

        $ejecutarinsertar = mysqli_query($conexion,$insertar);

 

     

 

    }

    ?>