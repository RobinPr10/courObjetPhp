<?php
  echo"teste";
include "Personnage.php";
$pdo=new PDO("")

$Perso1=new Personnage(1,$pdo);
$Perso2=new Personnage(2,$pdo);

$Perso1->setNom("Thomas");
$Perso1->Presentetoi( );
$Perso2->Presentetoi( );

?>