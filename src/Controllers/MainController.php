<?php

namespace Controller;

use core\Controller;

Class MainController extends Controller
{
	public function index()
	{
		return $this->render('Main/index', ['name' => 111], 'layout');
	}
}