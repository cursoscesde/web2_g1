<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
	public function getUsers(){
        $userModel = new UserModel();
        $users = $userModel->getUsers();
        $response = array("status"=>"ok", "users"=>$users);
        echo json_encode($response);
    }
}