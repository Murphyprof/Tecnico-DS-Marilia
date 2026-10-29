<?php
//Modelo três de conexão

$hostname = "localhost";
$bd = "alunos";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bd);
if($mysqli->connect_errno){
    echo "Falha de conexão: (" .$mysqli->connect_errno . ")" .$mysqli->connect_errno;  
}else {
    $mysqli->set_charset("utf8mb4");
    echo "Conectado"."<br>";
}
