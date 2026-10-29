<?php
    //Conexão
    $banco = new PDO('mysql:host=localhost;dbname=nome_do_banco', 'username','password')or print (mysqli_connect_error());
    print "Conexão Efetuada com sucesso!";

	// try {
	// 	$banco = new PDO('mysql:host=localhost;dbname=nome_do_banco', 'username', 'password');
	// 	$banco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	print "Conexão Efetuada com sucesso!";
	// } catch (PDOException $e) {
	// 	print "Erro na conexão: " . $e->getMessage();
	// }

    //Inserção
    $banco = new PDO('mysql:host=localhost;dbname=nome_do_banco', 'username','password');
    $novo_cliente = array('nome'=>'José','departamento'=>'TI','unidade'=>'Paulista');
    $banco->prepare('INSERT INTO clientes (nome,departamento,unidade) VALUES (:nome,:departamento,:unidade)')->execute($novo_cliente);



 
//Dados de acesso
$host = "Nome_do_Host";
$dbn  = "Nome_da_Base";
$user = "Nome_do_Usuário";
$pass = "Senha_da_Base";
 
$tabela = "Nome_da_Tabela";
 
try
{
	//Conectar
	$ligacao = new PDO("mysql:dbname=$dbn; host=$host", $user, $pass);
	$ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
	//Em caso de pesquisas, via procedures
	//$pesq = "";
	//$sql = "CALL Nome_da_procedure()";
 
	//Em caso de querys
	$pesq = "Nome_do_Campo";
	$sql = "SELECT * FROM $tabela WHERE nome= :nome_param";
 
	$resultados = $ligacao->prepare($sql);
 
	//Definição de parâmetros
	$resultados->bindParam(":nome_param", $pesq, PDO::PARAM_STR);
	$resultados->execute();
 
	echo'<p>'.$sql.'</p><hr>';
 
	foreach($resultados as $linha)
	{
		echo '<p>';
		//Nome do campo na tabela pesquisada
		echo $linha["Nome_da_Coluna"];
		echo '</p>';
	}
 
	echo '<hr><p>Resultados: '.$resultados->rowCount().'</p>';
 
	//Desconectar
	$ligacao = null;
}
catch(PDOException $erro)
{
	echo $erro->getMessage();
}
 
?>

