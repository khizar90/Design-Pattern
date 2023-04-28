<?php
namespace App\Contracts;
namespace App\Builder;


interface CarBuilderInterface
{
    public function start();
    public function break();
}