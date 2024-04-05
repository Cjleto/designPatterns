<?php

namespace App\DecoratorPattern;

class Caffe extends Beverage
{


    protected float $cost = 1.2;
    protected string $description = 'Caffè';

    public function cost(): float
    {
        return $this->cost;
    }
}
