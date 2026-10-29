<?php 
// Chamada.
include_once("funcao.php");

$testar = DBConnect();
    if($testar){
        echo "Conexão estabelecida com sucesso";
    }    
    else{
        echo "Conexão Falhou";    
    }

?>