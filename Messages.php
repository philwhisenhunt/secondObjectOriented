<?

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
        //add $person to the staff collection 
    }
}

class Staff {
    
}