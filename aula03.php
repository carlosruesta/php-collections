<?php

require 'TocadorDeMusica.php';

$musicas = new SplFixedArray(4);
$musicas[0] = "One Dance";
$musicas[1] = "Closer";
$musicas[2] = "rockstar";
$musicas[3] = "Love Yourself";

$tocador = new TocadorDeMusica();

$tocador->baixarMusicas();

$tocador->adicionarMusicas($musicas);

$tocador->baixarMusicas();