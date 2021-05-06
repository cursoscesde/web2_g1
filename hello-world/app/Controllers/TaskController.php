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
	public function create()
	{
		$session = session();
		echo $session->get('username');
		if ($session->get('username') != "" || $session->get('username') != null) {
			echo view('layouts/header');
			echo view('create_task_view');
			echo view('layouts/footer');
		} else {
			echo "no tiene permisos para acceder";
		}
	}

	public function addTask()
	{
		$request = \Config\Services::request();
		$taskModel = new TaskModel();
		$task = $request->getPost('task');
		$description = $request->getPost('description');
		$file = $request->getFile('imageTask');
		$imageName = $file->getRandomName();
		$imageUrl = "";
		if ($file->isValid() && !$file->hasMoved()) {
			$file->move('./uploads/images/', $imageName);
			$imageUrl = base_url() . "/uploads/images/" . $imageName;
		}
		// $imageUrl = $request->getPost('imageUrl');

		$taskModel->addTask($task, $description, $imageUrl);

		return redirect()->to('/task');
	}

	public function deleteTask()
	{
		$taskModel = new TaskModel();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$taskModel->deleteTask($id);
		return redirect()->to('/public/task');
	}

	public function updateTask()
	{
		$taskModel = new TaskModel();
		$request = \Config\Services::request();
		$id = $request->getGet('id');
		$task = $taskModel->getTask($id);
		echo view('layouts/header');
		echo view('update_task', array("task" => $task[0]));
		echo view('layouts/footer');
	}

	public function updateEditedTask()
	{
		$taskModel = new TaskModel();
		$request = \Config\Services::request();
		$task = $request->getPost('task');
		$description = $request->getPost('description');
		$imageUrl = $request->getPost('imageUrl');
		$id = $request->getGet('id');
		$taskModel->updateEditedTask($id, $task, $description, $imageUrl);
		return redirect()->to('/task');
	}
}
