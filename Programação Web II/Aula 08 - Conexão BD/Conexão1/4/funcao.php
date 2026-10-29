<?php
    define('HOST', '127.0.0.1');
    define('usuario', 'root');
    define('senha', '');
    define('DB', 'loja');
    define('charset', 'utf8');

    function DBConnect(){
        $sql = mysqli_connect(HOST, usuario, senha, DB)or die('Não foi possível conectar ao Banco');
        mysqli_set_charset($sql, charset) or die(mysqli_error($sql));

        return $sql;
    }

?>



