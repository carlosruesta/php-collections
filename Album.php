<?php

class Album
{
    private string $nome;

    public function __construct (string $nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function __toString() : string
    {
        return $this->nome;
    }
}