<?php

namespace Observer;

use Observer\Display\CurrentConditionDisplay;

class WeatherStation
{
    public static function main()
    {
        $weatherData = new WeatherData();
        $currentDisplay = new CurrentConditionDisplay($weatherData);
//        $statisticDisplay = new StatisticDisplay($weatherData);
//        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 31.4);
        $weatherData->setMeasurements(78, 90, 32.0);
    }
}
