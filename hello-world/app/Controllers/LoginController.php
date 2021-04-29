<?php

namespace App\Controllers;

class LoginController extends BaseController
{
	public function index()
	{
		$session = session();
		$session->destroy();
		echo view('layouts/header');
		echo view('login_view');
		echo view('layouts/footer');
	}

	public function signIn()
	{
		$session = session();
		$newdata = [
			'username'  => 'johndoe',
			'email'     => 'johndoe@some-site.com',
			'rol' => "admin"
		];
		$session->set($newdata);
		return redirect()->to('/task/create');
	}
}
