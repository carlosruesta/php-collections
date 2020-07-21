<?php

class TocadorDeMusica
{

    private SplDoublyLinkedList $musicas;
    private SplStack $historico;
    private SplQueue $filaDeDownloads;
    private Ranking $ranking;

    public function __construct()
    {
        $this->musicas = new SplDoublyLinkedList();
        $this->historico = new SplStack();
        $this->filaDeDownloads = new SplQueue();
        $this->ranking = new Ranking();
    }

    public function adicionarMusicas(SplFixedArray $musicas)
    {
        for ($musicas->rewind(); $musicas->valid(); $musicas->next()) {
            $this->musicas->push($musicas->current());
        }
        $this->musicas->rewind();
    }

    public function tocarMusica()
    {
        if ($this->musicas->isEmpty()) {
            echo "O tocador não tem nenhuma música!";
        }
        $this->musicas->current()->tocar();
        $this->adicionarMusicaNoHistorico($this->musicas->current());
    }

    public function adicionarMusica($musica)
    {
        $this->musicas->push($musica);
    }

    public function avancarMusica()
    {
        $this->musicas->next();
        if (!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function voltarMusica()
    {
        $this->musicas->prev();
        if (!$this->musicas->valid()) {
            $this->musicas->rewind();
        }
    }

    public function exibirMusicas()
    {
        for ($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) {
            echo "Música: " . $this->musicas->current() . PHP_EOL;
        }
        $this->musicas->rewind();
    }

    public function exibirQuantidadeDeMusicas()
    {
        echo "Existem {$this->musicas->count()}  músicas do tocador";
    }

    public function adicionarMusicaNoComecoDaPlaylist($musica)
    {
        $this->musicas->unshift($musica);
    }

    public function removerMusicaDoComecoDaPlaylist($musica)
    {
        $this->musicas->shift();
    }

    public function removerMusicaDoFinalDaPlaylist($musica)
    {
        $this->musicas->pop();
    }

    public function adicionarMusicaNoHistorico($musica)
    {
        $this->historico->push($musica);
    }

    public function tocarUltimaMusicaTocada()
    {
        echo "Tocando do histórico: " . $this->historico->pop() . PHP_EOL;
    }

    public function baixarMusicas()
    {
        if($this->musicas->isEmpty()) {
            echo "Nenhuma música encontrada para baixar" . PHP_EOL;
        }

        for ($this->musicas->rewind(); $this->musicas->valid(); $this->musicas->next()) {
            $this->filaDeDownloads->enqueue($this->musicas->current());
        }

        for ($this->filaDeDownloads->rewind(); $this->filaDeDownloads->valid(); $this->filaDeDownloads->next()) {
            echo "Baixando: {$this->filaDeDownloads->current()}" . PHP_EOL;
        }
    }

    public function exibeRanking() {
        foreach($this->musicas as $musica) {
            $this->ranking->insert($musica);
        }
        foreach($this->ranking as $musica) {
            echo $musica->getNome() . " - " . $musica->getVezesTocada() . PHP_EOL;
        }
    }
}