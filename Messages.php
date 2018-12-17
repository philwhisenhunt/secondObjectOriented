<?php

class Person {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

}

class Business {
    protected $staff;
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }
}

class Staff {
    protected $members = [];

    //You can defauly to array if it is not required that a staff have members. 
    public function __construct($members = [])
    {
        $this->members = $members;
    }
    public function add(Person $person)
    {
        $this->members[] = $person;
    }
    
}

$jeffrey = new Person('Jeffrey Way');
$staff = new Staff([$jeffrey]);
$laracasts = new Business($staff);

// $laracasts->hire($jeffrey);
$laracasts->hire(new Person('Jane Doe'));

var_dump($staff);