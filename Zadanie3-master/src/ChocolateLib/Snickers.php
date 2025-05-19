<?php

namespace ChocolateLib;

use ChocolateLib\Snack;
class Snickers extends Snack
{
    public function __construct()
    {
        $this->name = 'Аленка';
        $this->chocolate = 'Молочный';
        $this->toppings = ['Шоколад'];
    }
}
