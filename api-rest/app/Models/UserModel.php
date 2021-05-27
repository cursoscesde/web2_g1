<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getUsers(){
        $sql = "SELECT * FROM users";
        $users = $this->db->query($sql)->getResult();
        return $users;
    }
}