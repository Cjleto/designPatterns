<?php

namespace App\ObserversPattern;

interface ObserverInterface
{
    public function update(): void;
}