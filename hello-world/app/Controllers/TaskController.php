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
		echo view('create_task_view');
		echo view('layouts/footer');
	}

	public function addTask(){
		$request = \Config\Services::request();
		$taskModel = new TaskModel();
		$task = $request->getPost('task');
		$description = $request->getPost('description');
		$imageUrl = $request->getPost('imageUrl');
		$taskModel->addTask($task, $description, $imageUrl);
		return redirect()->to('/task');
	}
}