<?php

class Deck{
    const HEART = 0;
    const DIAMOND = 1;
    const SPADE = 2;
    const CLUB = 3;

    public $cardArray;

    private $isEmpty;

    public function __construct()
    {
        $this->cardArray = array();
        for ($i = 1; $i <= 13; $i++){
            for ($j = 0; $j <= 3; $j++){
                $this->cardArray[] = array(
                    'faceValue' => $i,
                    'suit' => $j
                );
            }
        }
    }

    public function shuffle()
    {
        shuffle($this->cardArray);
    }
}