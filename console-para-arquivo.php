<?php

$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', PHP_EOL . $novoCurso, FILE_APPEND);
