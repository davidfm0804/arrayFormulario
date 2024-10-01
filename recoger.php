<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recoger</title>
</head>
<body>
    <h1>Datos Recogidos</h1>
    <?php
       if (!empty($_POST['nombre'])){
        echo "<p>Nombre: ".$_POST['nombre']."</p>";
       }
       if (!empty($_POST['apellidos'])){
        echo "<p>Apellidos: ".$_POST['apellidos']."</p>";
        }
        if (!empty($_POST['genero'])){
        echo "<p>Genero: ".$_POST['genero']."</p>";
        }
        if (!empty($_POST['edad'])){
        echo "<p>Edad: ".$_POST['edad']."</p>";
        }
        if(isset($_POST['clase'])){
            echo "<p>Clase: ".$_POST['clase']."</p>";
        }
        if (isset($_POST['deportes'])){
        foreach($_POST['deportes'] as $indice =>$valor){
            echo "<p>Deporte: ".$valor."</p>";
        }}
        //echo "<p>".$_POST['deportes']."</p>";
        if (!empty($_POST['fecha_nacimiento'])){
        echo "<p>Fecha de nacimiento: ".$_POST['fecha_nacimiento']."</p>";
        }
        if (isset($_POST['terminos'])){
         echo "<p>Terminos: ".$_POST['terminos']."</p>";
        }
    ?>
</body>
</html>