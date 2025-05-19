<?php

namespace ChocolateLib;

class ChocolateBar extends Snack
{
    public function __construct()
    {
        $this->name = 'Шоколадная баранка';
        $this->chocolate = 'Молочный';
        $this->toppings = ['корица', 'ваниль', 'шоколад'];
    }
}