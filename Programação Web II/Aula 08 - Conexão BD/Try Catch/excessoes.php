<?php

try {
    // Mensagem, código e exceção anterior são parâmetros opcionais.
    throw new Exception('Exceção capturada', 1);
} catch (Throwable $erro) {
    $mensagem = htmlspecialchars($erro->getMessage(), ENT_QUOTES, 'UTF-8');

    echo '<h1>Ocorreu um erro</h1>';
    echo '<strong>' . $mensagem . '</strong>';
} finally {
    echo '<p>Este trecho é executado no final.</p>';
}