<?php

namespace Behavioral\Strategy;

use Behavioral\Strategy\FlyBehavior\FlyBehaviorInterface;
use Behavioral\Strategy\QuackBehavior\QuackBehaviorInterface;

abstract class Duck
{
    /**
     * @var FlyBehaviorInterface
     */
    protected $flyBehavior;

    /**
     * @var QuackBehaviorInterface
     */
    protected $quackBehavior;

    public abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim() {
        echo 'All ducks float, even decoys!';
    }

    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}
