<?php

namespace App\ObserversPattern;

use App\ObserversPattern\ObservableAbstract;


class WeatherStation extends ObservableAbstract
{

    private string $temperature = "0";
    private string $pressure = "10";

    public function __construct()
    {
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getPressure(): string
    {
        return $this->pressure;
    }

    public function setTemperature(string $temperature): WeatherStation
    {
        $this->temperature = $temperature;
        return $this;
    }

    public function setPressure(string $pressure): WeatherStation
    {
        $this->pressure = $pressure;
        return $this;
    }

}