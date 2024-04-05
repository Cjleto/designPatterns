<?php

namespace App\DecoratorPattern;

abstract class Beverage
{
    protected string $description = 'Unknown Beverage';
    protected string $currency = '€';


    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    abstract public function cost(): float;
}
