<?php

require_once('Player.php');
require_once('Deck.php');

class GameHandler{

    const NUM_PLAYERS = 4;

    private $players;

    public function __construct()
    {
        $this->players = array();
        for ($i=0; $i<self::NUM_PLAYERS; $i++){
            $this->players[] = new Player();
        }
        Player::$deck = new Deck();
        $this->setup();
        $this->mainLoop();
    }

    private function setup()
    {
        Player::$deck->shuffle();
    }

    private function mainLoop()
    {
        $this->players[0]->draw();
        $this->mainLoop();
    }
}

new GameHandler();