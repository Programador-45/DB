<?php 
#comentario2
include 'conexion.php';

if(isset($_POST["name"])||isset($_POST["email"])){


    $name = $_POST["name"];
    $email = $_POST["email"];    
    $sql = ("INSERT INTO `datos` (`NOMBRE`,`EMAIL`) VALUES ('$name', '$email');");

    $enviar = mysqli_query($conexion,$sql);
    
}
include ("index.php")

?>