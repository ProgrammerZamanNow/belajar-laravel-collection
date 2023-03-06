<?php

namespace App\Data;

class Person
{
    var string $name;

    public function __construct(string $name){
        $this->name = $name;
    }
}
