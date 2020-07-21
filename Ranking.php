<?php

class Ranking extends SplHeap
{
    public function compare($musica1, $musica2)
    {
        if ($musica1->getVezesTocada() === $musica2->getVezesTocada()) {
            return 0;
        }
        if ($musica1->getVezesTocada() < $musica2->getVezesTocada()) {
            return -1;
        }
        return 1;
    }
}