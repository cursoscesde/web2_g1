<?php

namespace App\Controllers;

class LoginController extends BaseController
{
	public function index()
	{
		echo view('layouts/header');
		echo view('login_view');
		echo view('layouts/footer');
	}
}
