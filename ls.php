<?php

$diretorioAtual = dir('.');
$arquivo = $diretorioAtual->read();

while ($arquivo) {
    echo $arquivo . PHP_EOL;
}
