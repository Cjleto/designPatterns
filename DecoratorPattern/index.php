<?php

require __DIR__ . '/../vendor/autoload.php';

use App\DecoratorPattern\Te;
use App\DecoratorPattern\Caffe;
use App\DecoratorPattern\Condiments\{Sugar, Milk};

$caffe = new Caffe();
echo "{$caffe->getDescription()}: {$caffe->getCurrency()} {$caffe->cost()}" . "<br>";

/* $te = new Te();

echo "{$te->getDescription()}: {$te->getCurrency()} {$te->cost()}"."<br>"; */


/* $caffe = new Sugar($caffe);
echo "{$caffe->getDescription()}: {$caffe->getCurrency()} {$caffe->cost()}" . "<br>";
$caffe = new Milk($caffe);
echo "{$caffe->getDescription()}: {$caffe->getCurrency()} {$caffe->cost()}" . "<br>";

$caffe = new Sugar($caffe);
echo "{$caffe->getDescription()}: {$caffe->getCurrency()} {$caffe->cost()}" . "<br>"; */

echo $caffe->getUnionDescription() . "";

dd($caffe);
