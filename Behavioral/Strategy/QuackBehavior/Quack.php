<?php

namespace Behavioral\Strategy\QuackBehavior;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo 'Quack';
    }
}
