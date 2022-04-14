<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo mb_convert_encoding($linha[0], 'UTF-8') . PHP_EOL;
}
