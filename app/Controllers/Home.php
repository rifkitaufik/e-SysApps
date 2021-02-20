<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'e-Sys Application'
		];
		return view('index', $data);
	}
}
