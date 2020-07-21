<?php

class Musica
{
    private string $nome;
    private int $vezesTocada;
    
    public function __construct (string $nome)
    {
        $this->nome = $nome;
        $this->vezesTocada = 0;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getVezesTocada()
    {
        return $this->vezesTocada;
    }

    public function tocar()
    {
        echo "Tocando música: ". $this->nome . PHP_EOL;
        $this->vezesTocada++;
    }

    public function __toString() : string
    {
        return $this->nome;
    }
}