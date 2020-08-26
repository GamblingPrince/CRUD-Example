<?php
$GameName=$_POST['OgName'];
$GamePlatform=$_POST['OgPlatform'];
try{
    $conn= new PDO('mysql:host=localhost;dbname=ambdb','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql='DELETE from productos where Titulo='.'"'.$GameName.'"'.'and Plataforma='.'"'.$GamePlatform.'"';
    $statement=$conn->prepare($sql);
    $statement->execute();
    $error='<i style="color:lawngreen">Producto Borrado Exitosamente</i>';
}catch(PDOException $prueba_error){
    $error='<i style="color:tomato">Error al Borrar el producto</i>';
    echo "Error: " . $prueba_error->getMessage();
}
require "Delete.php";
?>