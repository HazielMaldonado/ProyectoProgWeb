<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro? Se eliminarán los datos');
        }
    </script>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    include("conexion.php");
    //select  * from alumnos 
    $sql="select * from usuarios";
    $resultado=mysqli_query($conexion,$sql);
    ?>
    



    <h1>Lista de alumnos</h1>
    <a href="agregar.php">Nuevo Alumno</a><br> <br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Usuario</th>
                <th>Password</th>
            </tr>