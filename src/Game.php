<?php

namespace Src;


class Game
{
    private $playerName;
    private $delay;

    public function __construct($delay,$playerName) {
        $this->playerName = $playerName;
        $this->delay = $delay;

    }


}