<?php

require __DIR__ . '/../vendor/autoload.php';


use App\ObserversPattern\DisplaySalotto;
use App\ObserversPattern\WeatherStation;
use App\ObserversPattern\DisplayCucina;

$station = new WeatherStation();

$display1 = new DisplayCucina($station, 'display1');
$display2 = new DisplayCucina($station, 'display2');
$display3 = new DisplaySalotto($station, 'display3Salotto');

$station->add($display1);
$station->add($display2);
$station->add($display3);

$observers = $station->getObservers();

/* dd($observers); */

$station->setTemperature('12')
    ->setPressure('20')
    ->notify();
