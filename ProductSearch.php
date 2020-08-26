<?php
$Titulo=$_POST['Titulo'];
$Plataforma=$_POST['Plataforma'];
$GameImg;
$GameName;
$GameDesc;
$GamePrice;
$GameStock;
$GameESRB;
$GamePlatform;
try{
    $conn= new PDO('mysql:host=localhost;dbname=ambdb','root','');
}catch(PDOException $prueba_error){
    echo "Error: " . $prueba_error->getMessage();
}
$statement=$conn->prepare('SELECT * from productos where Titulo=:T and Plataforma=:P');
$statement->execute(array(':T'=>$Titulo,':P'=>$Plataforma));
$statement->setFetchMode(PDO::FETCH_ASSOC);
$resultado=$statement->fetch();
if($resultado==false){
    $error='<i style="color:red">error</i>';
}else{
    $grantAccess='ok';
    $statement->execute(array(':T'=>$Titulo,':P'=>$Plataforma));
    $statement->setFetchMode(PDO::FETCH_ASSOC);
while($row=$statement->fetch()){
    $GameName=$row['Titulo'];
    $GamePlatform=$row['Plataforma'];
    $GameDesc=$row['Descripcion'];
    $GamePrice=$row['Precio'];
    $GameStock=$row['Stock'];
    $GameImg=$row['Imagen'];
    $GameESRB=$row['ESRB'];
}
}
require "Modify.php";
?>