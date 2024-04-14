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

    public function getUnionDescription()
    {
        $desc = $this->getDescription();

        $array = explode(' + ', $desc);

        $res = array_count_values($array);

        array_walk($res, function (&$value, $key) {
            $value = "x{$value} {$key}";
        });

        $str = implode(", ", $res);

        // substitute last comma with 'and'
        $str = preg_replace('/,([^,]*)$/', ' and$1', $str);


        return $str;
    }

    abstract public function cost(): float;
}
