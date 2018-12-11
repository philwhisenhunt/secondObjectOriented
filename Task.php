<?php

class Task {
    public $title;
    public $description;
   

    public $completed = false;

    public function __construct($title, $description)
    {
        $this->description = $description;  
        $this->title = $title;  
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Learn OOP'); 
$task->complete();

var_dump($task->completed);