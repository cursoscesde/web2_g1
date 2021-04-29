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

    function deleteTask($id){
        $sql = "DELETE FROM tasks WHERE id={$id}";
        $this->db->query($sql);
    }

    function getTask($id){
        $sql = "SELECT * FROM tasks WHERE id={$id}";
        $task = $this->db->query($sql);
        return $task->getResult();
    }
    function updateEditedTask($id, $task, $description, $imageUrl){
        $sql = "UPDATE tasks set task='{$task}', description='{$description}', image_url='{$imageUrl}' WHERE id={$id}";
        $this->db->query($sql);
    }
}