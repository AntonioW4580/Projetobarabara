<?php 

$usuario = "root";
$senha = "";
try{
$conn=new PDO('mysql:host=localhost;dbname=id21510833_tonho', 'id21510833_tabelatestephp', '@Tonho123');

$conn -> SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
     echo "erro".$e->getmessage();
}



?>
