<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <?php
    if(isset($_POST['enviar'])){
        //aqui entra cuando se presiona el boton de enviar
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $nombre_usuario=$_POST['nombre_usuario'];
        $password=$_POST['password'];

        //update alumnos set nombre=$nomvre,nocontrol=$nocontrol where id=$id
        $sql="update usuarios set nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',correo='".$telefono."',nombre_usuario='".$nombre_usuario."',password='".$password."'where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);

        if($resultado){
            echo "<script language='JavaScript'> 
            alert('Los datos se actualizaron correctamente');
            location.assign('index.php');
            </script>";
        }else{
            echo "<script language='JavaScript'> alert('Los datos NO se actualizaron correctamente');
            location.assign('index.php');
            </script>";

        }
        mysqli_close($conexion);
    }else{
        $id=$_GET['id'];
        $sql="select * from usuarios where id='".$id."'";
        $resultado=mysqli_query($conexion,$sql);

        $fila=mysqli_fetch_assoc($resultado);
        $nombre=$fila["nombre"];
        $direccion=$fila["direccion"];
        $telefono=$fila["telefono"];
        $correo=$fila["correo"];
        $nombre_usuario=$fila["nombre_usuario"];
        $password=$fila["password"];

        mysqli_close($conexion);

    }
