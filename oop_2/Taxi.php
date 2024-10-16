<?php

class Taxi extends Car
{
    private $passenger;
    private $pickUp_number;
    private $lower_number;

    public function __construct($name, $number, $color)
    {
        parent::__construct($name, $number, $color);
        $this->passenger = 0;
    }

    public function pickUp($pickUp_number)
    {
        $pick_num = strval($pickUp_number);
        $this->passenger += $pick_num; 
        echo $pick_num . "人乗車しました。\n";
        
    }

    public function lower($lower_number)
    {
        $lower_num = strval($lower_number);
        $this->passenger -= $lower_num;
        if ($this->passenger >= 0) {
            echo $lower_num . "人降車しました。\n";
        } else {
            echo $lower_num . "人は降車できません。\n";
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
