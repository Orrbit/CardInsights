<?php

require_once('Deck.php');

class Player {

    private $hand;

    public static $deck;

    public function __construct()
    {
        $this->hand = array();
        if (!isset($deck)){
            $deck = new Deck();
        }
    }

    public function draw($drawAmount = 1)
    {
        for ($i = 0; $i < $drawAmount; $i++){
            $topCard = array_pop(Player::$deck->cardArray);
            print_r($topCard);
            if (is_null($topCard)){
                print("you've reached the last card");
                throw new Exception();
            }
            $this->hand[] = $topCard;
        }
    }
}