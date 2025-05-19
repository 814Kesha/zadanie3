<?php

namespace ChocolateLib;

use ChocolateLib\Snack;
class Twix extends Snack
{
    public function __construct()
    {
        $this->name = 'Щедрая Душа';
        $this->chocolate = 'Молочный';
        $this->toppings = ['Шоколад', 'карамель'];
    }
}
