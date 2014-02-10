<?php

namespace Model;

class Game
{
    protected $word;

    public function start()
    {
        $this->word = new Word();
    }
}