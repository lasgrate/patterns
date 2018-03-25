<?php

namespace Observer;

class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    private $observers;

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
     * @var bool
     */
    private $changed;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $i = array_search($observer, $this->observers);

        if ($i >= 0) {
            unset($this->observers[$i]);
        }
    }

    public function notifyObserver()
    {
        if (!$this->changed) return;

        foreach ($this->observers as $observer) {
            if ($observer instanceof Observer) {
                $observer->update($this->temperature, $this->humidity, $this->pressure);
            }
        }

        $this->changed = false;
    }

    /**
     * @param bool $change
     */
    public function setChanged(bool $change)
    {
        $this->changed = $change;
    }

    public function measurementsChanged()
    {
        $this->setChanged(true);
        $this->notifyObserver();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

    // Other method of WeatherData
}
