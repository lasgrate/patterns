<?php

namespace Behavioral\Strategy\QuackBehavior;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo '<< Silence >>';
    }
}
