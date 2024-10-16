<?php

require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger = 0;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
    }

    public function pickUp($pickUp_number)
    {
        $this->passenger += $pickUp_number; 
        $pick_num = strval($pickUp_number);
        return $pick_num . "人乗車しました。\n";
        
    }

    public function lower($lower_number)
    {
        $this->passenger -= $lower_number;
        $lower_num = strval($lower_number);
        if ($this->passenger >= 0) {
            return $lower_num . "人降車しました。\n";
        } else {
            return $lower_num . "人は降車できません。\n";
        }
    }

    public function information()
    {
        parent::information();
        if ($this->passenger >= 0) {
            echo "車の乗車人数:" . $this->passenger . "\n";
        } else {
            echo "エラー: 降車人数が0人未満です。\n";
        }
    }
}
