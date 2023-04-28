<?php

class CarBuilder
{
    public function make(CarBuilderInterface $car):Car
    {
        $car->start();
        $car->break();
        return $car;   
    }
}