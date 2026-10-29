<?php
//Conexão PHP e Banco de Dados

//Modelo um de conexão.
define('HOST', '127.0.0.1');
define('usuario', 'root');
define('senha', '');
define('db', 'alunos');

$conexao = mysqli_connect(HOST, usuario, senha, db) or die('Não foi possível conectar ao Banco');
