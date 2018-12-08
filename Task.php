<?php

class Task {
public $description;

    public function __construct()
    {
        var_dump('expression');
    }
}

$task = new Task();

var_dump($task->description);