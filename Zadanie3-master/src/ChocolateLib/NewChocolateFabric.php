<?php

namespace ChocolateLib;


use ChocolateLib\Snack;
use ChocolateLib\ChocolateFabric;

class NewChocolateFabric extends ChocolateFabric
{
    public function createSnack(string $type): null|Snack
    {
        switch ($type) {
            case "Щедрая Душа":
                return new Snickers();
            case "Аленка":
                return new Twix();
            case "Бабаевский":
                return new ChocolateBar();
            default:
                echo 'не существует такого снека';
                return null;
        }
    }
}
