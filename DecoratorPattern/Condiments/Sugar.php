<?php

namespace App\DecoratorPattern\Condiments;

use App\DecoratorPattern\Beverage;
use App\DecoratorPattern\CondimentDecorator;

class Sugar extends CondimentDecorator
{


    protected string $description = 'sugar';
    protected float $cost = 0.21;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }



    public function cost(): float
    {
        return $this->beverage->cost() + $this->cost;
    }
}
