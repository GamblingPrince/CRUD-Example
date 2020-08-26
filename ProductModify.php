<?php
$GameImg=$_POST['ImagenMod'];
$GameName=$_POST['TituloMod'];
$GameDesc=$_POST['DescMod'];
$GamePrice=$_POST['PrecioMod'];
$GameStock=$_POST['StockMod'];
$GameESRB=$_POST['ESRBMod'];
$GamePlatform=$_POST['PlataformaMod'];
$OgName=$_POST['OgName'];
$OgPlat=$_POST['OgPlatform'];
try{
    $conn= new PDO('mysql:host=localhost;dbname=ambdb','root','');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql='UPDATE productos SET Titulo='.'"'.$GameName.'"'.', Plataforma='.'"'.$GamePlatform.'"'.', Imagen='.'"'.$GameImg.'"'.', ESRB='.'"'.$GameESRB.'"'.', Descripcion='.'"'.$GameDesc.'"'.', Precio='.'"'.$GamePrice.'"'.', Stock='.'"'.$GameStock.'"'.' WHERE Titulo='.'"'.$OgName.'"'.' and Plataforma='.'"'.$OgPlat.'"';
    $statement=$conn->prepare($sql);
    $statement->execute();
    $error='<i style="color:lawngreen">Producto Modificado Exitosamente</i>';
}catch(PDOException $prueba_error){
    $error='<i style="color:tomato">Error al modificar el producto</i>';
    echo "Error: " . $prueba_error->getMessage();
}
require "Modify.php";
?>