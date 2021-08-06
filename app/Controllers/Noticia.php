<?php

namespace App\Controllers;

class Noticia extends BaseController
{
	public function index()
	{
		$data['contenido']='noticia/index';
		return view('huellahidrica/index',$data);
	}
}