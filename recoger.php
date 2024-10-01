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
       if (!empty($_GET['nombre'])){
        echo "<p>Nombre: ".$_GET['nombre']."</p>";
       }
       if (!empty($_GET['apellidos'])){
        echo "<p>Apellidos: ".$_GET['apellidos']."</p>";
        }
        if (!empty($_GET['genero'])){
        echo "<p>Genero: ".$_GET['genero']."</p>";
        }
        if (!empty($_GET['edad'])){
        echo "<p>Edad: ".$_GET['edad']."</p>";
        }
        if(isset($GET_['clase'])){
            echo "<p>Clase: ".$_GET['clase']."</p>";
        }
        if (isset($_GET['deportes'])){
        foreach($_GET['deportes'] as $indice =>$valor){
            echo "<p>Deporte: ".$valor."</p>";
        }}
        //echo "<p>".$_GET['deportes']."</p>";
        if (!empty($_GET['fecha_nacimiento'])){
        echo "<p>Fecha de nacimiento: ".$_GET['fecha_nacimiento']."</p>";
        }
        if (isset($_GET['terminos'])){
         echo "<p>Terminos: ".$_GET['terminos']."</p>";
        }
    ?>
</body>
</html>