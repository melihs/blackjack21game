<?php

namespace Src;


class Game {

    private $delay;
    private $playerName;

    /**
     * Game constructor.
     *
     * @param $delay
     * @param $playerName
     */
    public function __construct($delay, $playerName) {
        $this->delay = $delay;
        $this->playerName = $playerName;
    }

    
}