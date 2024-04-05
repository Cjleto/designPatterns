<?php 

namespace App\ObserversPattern;
class DisplaySalotto implements ObserverInterface
{

    use PropertyTrait;

    private string $pressure;

    public function __construct(
        private WeatherStation $weatherStation,
        private string $name
    ) {}

    public function update(): void
    {

        $this->pressure = $this->weatherStation->getPressure();

        echo "
            DisplaySalotto: {$this->name} updated
            Pressure: {$this->pressure}
            ";
    }
}