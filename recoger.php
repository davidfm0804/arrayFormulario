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
        echo "<p>".$_GET['nombre']."</p>";
       }
        echo "<p>".$_GET['apellidos']."</p>";
        echo "<p>".$_GET['genero']."</p>";
        echo "<p>".$_GET['edad']."</p>";
        if(isset($GET_['clase'])){
            echo "<p>".$_GET['clase']."</p>";
        }
        if (isset($_GET['deportes'])){
        foreach($_GET['deportes'] as $indice =>$valor){
            echo "<p>".$valor."</p>";
        }}
        //echo "<p>".$_GET['deportes']."</p>";
        echo "<p>".$_GET['fecha_nacimiento']."</p>";
        if (isset($_GET['terminos'])){
         echo "<p>".$_GET['terminos']."</p>";
        }
    ?>
</body>
</html>