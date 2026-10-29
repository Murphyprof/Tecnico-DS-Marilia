<?php

$hostname = "localhost";
$BD = "loja";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $BD);
if($mysqli->connect_errno){
    echo "Falha de conexão: (".$mysqli->connect_errno . ") " . $mysqli->connect_error;
} else
    echo "Conectado"."<br>";