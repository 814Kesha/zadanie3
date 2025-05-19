<?php

namespace ChocolateLib;

use ChocolateLib\Snack;
class Twix extends Snack
{
    public function __construct()
    {
        $this->name = 'Твих';
        $this->chocolate = 'Обычный';
        $this->toppings = ['нуга', 'карамель'];
    }
}