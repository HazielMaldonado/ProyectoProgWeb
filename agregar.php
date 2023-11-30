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

