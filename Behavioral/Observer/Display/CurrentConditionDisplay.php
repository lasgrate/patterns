<?php

namespace Observer\Display;

use Observer\DisplayElement;
use Observer\Observer;
use Observer\Subject;

class CurrentConditionDisplay implements Observer, DisplayElement
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    /**
     * @var Subject
     */
    private $weatherData;

    /**
     * CurrentConditionDisplay constructor.
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->display();
    }

    public function display()
    {
        echo 'Current conditions: '
            . $this->temperature . 'F'
            . $this->pressure . 'Pa'
            . $this->humidity . '% humidity';
    }
}
