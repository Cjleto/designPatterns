<?php

namespace App\ObserversPattern;

abstract class ObservableAbstract
{
    private array $observers = [];

    public function add(ObserverInterface $observerInterface): void
    {
        $this->observers[] = $observerInterface;
    }

    public function remove(ObserverInterface $observerInterface): void
    {
        $this->observers = array_filter($this->observers, function ($observer) use ($observerInterface) {
            return $observer !== $observerInterface;
        });
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function getObservers(string $property = null): array
    {
        $res = $this->observers;

        if($property){
            $res = array_map(function ($observer) use ($property) {
                return $observer->getProperty($property);
            }, $res);
        }
        return $res;
    }

    
}