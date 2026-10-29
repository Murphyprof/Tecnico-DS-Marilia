<?php
//declare(strict_types=1) 
// //força a tipagem de dados, se não for respeitada, gera um erro
declare(strict_types=1);

function checkNum(int $number): bool
{
    if ($number > 1) {
        throw new InvalidArgumentException('O valor deve ser 1 ou inferior.');
    }

    return true;
}

try {
    $numero = 2;
    checkNum($numero);

    echo 'O número é válido: ' . $numero;
} catch (Throwable $erro) {
    $mensagem = htmlspecialchars($erro->getMessage(), ENT_QUOTES, 'UTF-8');
    echo '<strong>Erro:</strong> ' . $mensagem;
}
