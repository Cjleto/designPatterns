<?php 

namespace App\ObserversPattern;

class DisplayCucina implements ObserverInterface
{

    use PropertyTrait;    

    private string $temperature;
    private string $pressure;

    public function __construct(
        private WeatherStation $weatherStation,
        private string $name
    ) {}

    public function update(): void
    {

        $this->temperature = $this->weatherStation->getTemperature();
        $this->pressure = $this->weatherStation->getPressure();

        echo "
            DisplayCucina: {$this->name} updated
            Temperature: {$this->temperature}
            Pressure: {$this->pressure}
            ";
        
    }
}