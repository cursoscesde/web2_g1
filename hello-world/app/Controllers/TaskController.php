<?php

namespace App\Controllers;
use App\Models\TaskModel;
class TaskController extends BaseController
{
	public function index()
	{
        $task = new TaskModel();
        $resultTasks = $task->readTasks();
		$data = array(
			"tasks" => $resultTasks,
		);
		echo view('layouts/header');
		echo view('task_view', $data);
		echo view('layouts/footer');
	}
	public function create(){
		echo view('layouts/header');
		echo "Create task";
		echo view('layouts/footer');
	}
}