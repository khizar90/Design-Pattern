<?php

namespace App\Repositories;
use App\Contracts\MyInterface;

class MyClass implements MyInterface {
    public function myMethod() {
        return 'Hello World';
    }
}