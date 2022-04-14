<?php

require_once 'MeuFiltro.php';

use Alura\MeuFiltro;

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivoCursos, 'alura.partes');

echo fread($arquivoCursos, filesize('lista-cursos.txt'));
