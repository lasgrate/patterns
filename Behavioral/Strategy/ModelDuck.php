<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\FlyBehavior\FlyNoWay;
use Behavioral\Strategy\QuackBehavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo 'I\'am a model duck';
    }
}
