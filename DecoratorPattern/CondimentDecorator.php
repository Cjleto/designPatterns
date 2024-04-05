<?php

namespace App\DecoratorPattern;

abstract class CondimentDecorator extends Beverage{
    protected Beverage $beverage;
    protected float $cost;

    abstract public function __construct(Beverage $beverage);

    public function getDescription(): string
    {
        return "{$this->beverage->getDescription()} + {$this->description}";
    }

}