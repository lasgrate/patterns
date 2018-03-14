<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\FlyBehavior\FlyRocketPowered;

class MiniDuckSimulator
{
    public static function test() {
        $mallardDuck = new MallardDuck();
        $mallardDuck->performQuack();
        $mallardDuck->performFly();

        $modelDuck = new ModelDuck();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new FlyRocketPowered());
        $modelDuck->performFly();
    }
}
