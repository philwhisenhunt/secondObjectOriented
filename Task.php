<?php

class Task {
    public $description;

    public function __construct($description)
    {
        $this->description = $description;    
    }
}

$task = new Task('Learn OOP');
$task2 = new Task('Pick up groceries');

var_dump($task2->description);