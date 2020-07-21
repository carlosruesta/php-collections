<?php

// array de tamanhao fixo
$musicas = new SplFixedArray(2);
$musicas[0] = "musica 1";
$musicas[1] = "musica 2";
$musicas->setSize(4);

$musicas[2] = "musica 3";
$musicas[3] = "musica 4";

//echo $musicas->count();
//
//echo $musicas->getSize();

require 'TocadorDeMusica.php';

$tocador = new TocadorDeMusica();
$tocador->adicionarMusicas($musicas);

$tocador->tocarMusica();

$tocador->adicionarMusica("Havana");

$tocador->avancarMusica();

$tocador->tocarMusica();

$tocador->exibirMusicas();