<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    function addTask($task, $description, $imageUrl){
        
        $sql = "INSERT INTO tasks (task, description, image_url) VALUES ('{$task}', '{$description}', '{$imageUrl}')";
        $this->db->query($sql);
    }

    function readTasks(){
        $sql = "SELECT * FROM tasks";
        $tasks = $this->db->query($sql);
        return $tasks->getResult();
    }
}