<?php
$Titulo=$_POST['Titulo'];
$Contenido=$_POST['Descripción'];
$Imagen=$_POST['Imagen'];
$Stock=$_POST['Stock'];
$Precio=$_POST['Precio'];
$Plataforma=$_POST['Plataforma'];
$ESRB=$_POST['ESRB'];
if(empty($Titulo) or empty($Contenido) or empty($Imagen) or empty($Stock) or empty($Precio) or empty($Plataforma) or empty($ESRB)){
    $error='<i style="color:tomato">Por favor, llene todos los campos</i>';
}else{
try{
            $conn= new PDO('mysql:host=localhost;dbname=ambdb','root','');
        }catch(PDOException $prueba_error){
            echo "Error: " . $prueba_error->getMessage();
        }
        $statement=$conn->prepare('SELECT * FROM productos WHERE Titulo=:Title');
        $statement->execute(array(':Title'=>$Titulo));
        $resultado=$statement->fetch();
        if($resultado==false){
            $statement=$conn->prepare('INSERT INTO productos (Titulo,Plataforma,Descripcion,Imagen,Stock,Precio,ESRB) values (:Titulo,:Plataforma,:Descripcion,:Imagen,:Stock,:Precio,:ESRB)');
            $statement->execute(array(':Titulo'=>$Titulo,':Plataforma'=>$Plataforma,':Descripcion'=>$Contenido,':Imagen'=>$Imagen,':Stock'=>$Stock,':Precio'=>$Precio,':ESRB'=>$ESRB));
            $error='<i style="color:lawngreen">Nuevo producto guardado exitosamente</i>';
        }else{
            $error='<i style="color:tomato">El producto ya existe en la base de datos</i>';
        }
    }
require "Home.php";
?>