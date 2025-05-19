<?php

require "vendor/autoload.php";

use ChocolateLib\ChocolateFabric;
use ChocolateLib\NewChocolateFabric;


$test = new NewChocolateFabric();
$test->orderSnack("Щедрая душа");
$test->orderSnack("Аленка");
$test->orderSnack("Бабаевский");
