<?php

$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'ISO-8859-1')), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim(mb_convert_encoding($curso, 'ISO-8859-1')), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);
