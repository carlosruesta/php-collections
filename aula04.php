<?php

require_once 'Musica.php';
require_once 'TocadorDeMusica.php';
require_once 'Ranking.php';

$musicas = new SplFixedArray(4);

$musicas[0] = new Musica("One Dance");
$musicas[1] = new Musica("Closer");
$musicas[2] = new Musica("rockstar");
$musicas[3] = new Musica("Love Yourself");

$tocador = new TocadorDeMusica();
$tocador->adicionarMusicas($musicas);

echo "Lista de músicas" . PHP_EOL;
echo "-------------------------------" . PHP_EOL;
$tocador->exibirMusicas();

echo PHP_EOL;
echo "Tocando músicas" . PHP_EOL;
echo "-------------------------------" . PHP_EOL;

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->avancarMusica();

$tocador->tocarMusica();
$tocador->tocarMusica();
$tocador->tocarMusica();

$tocador->avancarMusica();

$tocador->tocarMusica();

echo PHP_EOL;
echo "Apresenta o ranking de músicas" . PHP_EOL;
echo "-------------------------------" . PHP_EOL;

$tocador->exibeRanking();