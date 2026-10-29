<?php
echo "<h1>Exemplo 01</h1>";
//exemplo 01
try{
    intdiv(10,0);
}catch(throwable $t){
    var_dump($t); //erro sem tratamento MSG
    var_dump($t->getMessage()); //com tratamento
}finally{
    //executada tanto se try ou capth se executada
    echo "Try terminado";
}

echo "<h1>Exemplo 02</h1>";
//exemplo 02
try{
    intdiv(10,0);
    $x = (function():int{return "aa";})();
}catch(DivisionByZeroError $t){
   echo "Erro de divisão por zero"."<br>";
}catch(TypeError $t){
    echo "Erro de tipagem"."<br>";
}finally{
    //executada tanto se try ou capth se executada
    echo "Try terminado";
}

echo "<h1>Exemplo 03</h1>";
//exemplo 03 agrupar tipos de erros superior 7.1 php
try{
    intdiv(10,0);
    $x = (function():int{return "aa";})();
}catch(DivisionByZeroError | TypeError $t){
   echo "Erro de divisão por zero ou Erro de tipagem"."<br>";
}finally{
    //executada tanto se try ou capth se executada
    echo "Try terminado";
}
echo "<h1>Exemplo 04</h1>";
//exemplo 04 lançar uma excessão
function escolhaAluno (int $opcao) : ?string {

    $ofertas = ['Ana', 'Joana','João', 'Napoleão', 'Elizabeth'];
  
    if (!in_array($opcao, range(1,5))) {
      throw new OutOfRangeException("Aluno inválida");
    }
    return $ofertas[--$opcao];
  }
  try{
    echo escolhaAluno(6);
  }catch(throwable $t){
    echo "Ocorreu um erro";
    echo "Ocorreu um erro". "<br>" .  $t->getMessage();
  }
  