<?php

namespace Behavioral\Strategy\FlyBehavior;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo 'I can\'t fly';
    }
}
