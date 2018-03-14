<?php

namespace Behavioral\Strategy\FlyBehavior;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo 'I\'m flying!';
    }
}
