<?php
//Modelo dois de conexão.
$hostname = "localhost";
$bd = "alunos";
$usuario = "root";
$senha = "";

$con = mysqli_connect($hostname, $usuario, $senha);
$banco = mysqli_select_db($con, $bd);

if(mysqli_connect_errno()){
    die("Falha de conexão com o banco de dados: " . mysqli_connect_errno() . "(" . mysqli_connect_errno() . ")");
}else
    echo "<strong>"."Conectado"."</strong>";


//Tratamento
if (!mysqli_set_charset($con, "utf8mb4")) {
    die("Falha ao definir o conjunto de caracteres: " . mysqli_error($con));
}
