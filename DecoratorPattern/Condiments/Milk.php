<?php

namespace App\DecoratorPattern\Condiments;

use App\DecoratorPattern\Beverage;
use App\DecoratorPattern\CondimentDecorator;

class Milk extends CondimentDecorator {


    protected string $description = 'milk';
    protected float $cost = 0.5;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return "{$this->beverage->getDescription()} + {$this->description}";
    }

    public function cost (): float
    {
        return $this->beverage->cost() + $this->cost;

    }

}