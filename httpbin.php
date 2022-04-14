<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-From: PHP\r\nContent-Type: Text/plain",
        'content' => 'Teste do corpo da requisicao'
    ]
]);

echo file_get_contents('https://httpbin.org/post', false, $contexto);
