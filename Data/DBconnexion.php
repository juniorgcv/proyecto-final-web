<?php

$servidor="sql304.infinityfree.com";
$BaseDeDatos="if0_34564355_datablibreria";
$usuario="if0_34564355";
$contrasenia="oIVuMwYZ0J";

try{ 
    $conexion= new PDO("mysql:host=$servidor;bdname=$BaseDeDatos",$usuario,$contrasenia);
    $conexion->exec("USE $BaseDeDatos");
}catch(Exception $ex){
    echo $ex->getMessage();
}

?>

