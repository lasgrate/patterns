<?php

namespace Behavioral\Strategy\QuackBehavior;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo 'Squeak';
    }
}