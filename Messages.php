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
        $this->staff->add($person);
    }
}

class Staff {
    protected $members = []
    public function add(Person $person)
    {

    }
    
}