<?php
    define('HOST', '127.0.0.1');
    define('usuario', 'root');
    define('senha', '');
    define('DB', 'alunos');
    define('charset', 'utf8');

    function DBConnect(){
        $sql = mysqli_connect(HOST, usuario, senha, DB)or die('Não foi possível conectar ao Banco');
        mysqli_set_charset($sql, charset) or die(mysql_error($sql));

        return $sql;
    }

?>

<?php 
$testar = DBConnect();
    if($testar){
        echo "Conexão estabelecida com sucesso";
    }    
    else{
        echo "Conexão Falhou";    
    }

?>