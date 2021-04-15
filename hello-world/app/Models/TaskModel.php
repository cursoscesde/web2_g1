<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    function addTask(){
        $name = "estudiar sql";
        $description = "Repasar javascript, sql y php para proyecto";
        $date = "14/04/2021";
        $sql = "INSERT INTO tareas (name, description, date) VALUES ('{$name}', '{$description}', '{$date}')";
        $this->db->query($sql);
    }

    function readTasks(){
        $sql = "SELECT * FROM tareas";
        $tasks = $this->db->query($sql);
        return $tasks->getResult();
    }
}