<?php

class Task {
    public $description;

    public function __construct($description)
    {
        $this->description = $description;    
    }
}

$task = new Task('Learn OOP');

var_dump($task->description);