<?php

namespace ChocolateLib;

class ChocolateBar extends Snack
{
    public function __construct()
    {
        $this->name = 'Шоколад с орехами';
        $this->chocolate = 'Молочный';
        $this->toppings = ['орех', 'шоколад'];
    }
}
