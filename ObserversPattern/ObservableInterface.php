<?php

namespace App\ObserversPattern;

interface ObservableInterface
{
    public function add(ObserverInterface $observerInterface): void;
    public function remove(ObserverInterface $observerInterface): void;
    public function notify(): void;
}