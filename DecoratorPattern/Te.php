<?php

namespace App\DecoratorPattern;

use App\DecoratorPattern\Beverage;

class Te extends Beverage {
    
    protected string $description = 'Tea';

    public function cost(): float {
        return 0.99;
    }
    
}