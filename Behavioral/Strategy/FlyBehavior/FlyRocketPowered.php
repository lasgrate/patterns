<?php

namespace Behavioral\Strategy\FlyBehavior;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        echo 'I\'m flying with the rocket!';
    }
}
