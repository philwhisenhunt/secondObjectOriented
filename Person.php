<?php

class Person {
    public $name;
    public $age;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

$john = new Person('John Doe');
$john->setAge = 30;

var_dump($john);