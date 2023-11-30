<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGREGAR</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){

            $nombre=$_POST['nombre'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $correo=$_POST['correo'];
            $nombre_usuario=$_POST['nombre_usuario'];
            $password=$_POST['password'];
            
            include("conexion.php");

            $sql= "insert into usuarios(nombre,direccion,telefono,correo,nombre_usuario,password) values('".$nombre."','".$direccion."','".$telefono."','".$correo."','".$nombre_usuario."','".$password."')";

            $resultado=mysqli_query($conexion,$sql);
            
            if($resultado){
                echo " <script language = 'JavaScript'>
                        alert('Los datos fueron ingresados correctamente a la BD');
                        location.assign('index.php');
                        </script>";

            }else {

                echo " <script language = 'JavaScript'>
                        alert('Los datos NO fueron ingresados correctamente a la BD');
                        location.assign('index.php');
                        </script>";

            }
            
        }else{

        }
    ?>
    <h1>Agregar Nuevo Alumno</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="">Nombre:</label>
    <input type="text" name="nombre"> <br>
    <label for="">Direccion</label>
    <input type="text" name="direccion"> <br>
    <label for="">Telefono</label>
    <input type="text" name="telefono"> <br>
    <label for="">Correo</label>
    <input type="text" name="correo"> <br> 
    <label for="">Nombre_usuario</label>
    <input type="text" name="nombre_usuario"> <br>   
    <label for="">Password</label>
    <input type="text" name="password"> <br>   
    

    <input type="submit" name="enviar" value="AGREGAR">
    <a href="index.php"> Regresar</a>
    </form>
</body>
</html>


