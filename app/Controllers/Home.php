<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['contenido']='huellahidrica/home';
		return view('huellahidrica/index',$data);
	}
	public function detalle()
	{
		
	}

}
