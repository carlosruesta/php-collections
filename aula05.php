<?php

require_once 'Musica.php';
require_once 'Album.php';
require_once 'TocadorDeMusica.php';
require_once 'Ranking.php';

// Funcionamento como Collection Set
// Um Set somente aceita objetos
// Um Set não duplica objetos. Se adicionar 2 veces o mesmo objeto, o Set vai desconsiderar o segundo.
$albuns = new SplObjectStorage();

$divide = new Album("Divide");
$scorpion = new Album("Scorpion");

$musicasDivide = new SplFixedArray(2);
$musicasDivide[0] = new Musica("Shape of You");
$musicasDivide[1] = new Musica("Castle on the Hill");


$musicasScorpion = new SplFixedArray(3);
$musicasScorpion[0] = new Musica("Peak");
$musicasScorpion[1] = new Musica("Summer Games");
$musicasScorpion[2] = new Musica("Jaded");

$albuns->attach($divide);
$albuns->attach($scorpion);

$albuns[$divide] = $musicasDivide;
$albuns[$scorpion] = $musicasScorpion;

var_dump($albuns);

foreach($albuns as $album) {
    echo "Album: " . $album->getNome() . PHP_EOL;

    foreach($albuns[$album] as $musica) {
        echo "Musica: " . $musica->getNome() . PHP_EOL;
    }
    echo PHP_EOL;
}