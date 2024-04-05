<?php

namespace App\ObserversPattern;

trait PropertyTrait {
    public function getProperty (string $property): mixed
    {
        
        return $this->{$property};
    }
}