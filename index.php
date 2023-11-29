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

            </thead>
        <tbody>
            <?php
            while($filas=mysqli_fetch_assoc($resultado)){
            ?>
        <tr>
            <td><?php echo $filas['id'] ?></td>
            <td><?php echo $filas['nombre'] ?></td>
            <td><?php echo $filas['direccion'] ?></td>
            <td><?php echo $filas['telefono'] ?></td>
            <td><?php echo $filas['correo'] ?></td>
            <td><?php echo $filas['nombre_usuario'] ?></td>
            <td><?php echo $filas['password'] ?></td>
            <td>
            <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR </a>"; ?>
                -
                <?php echo "<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR </a>"; ?>
                 </td>
        </tr>
        <?php
            }
        ?>
        </tbody>

    </table>
    <?php
    mysqli_close($conexion);
    ?>
</body>
</html>
