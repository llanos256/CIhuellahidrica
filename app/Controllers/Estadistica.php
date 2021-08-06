<?php

namespace App\Controllers;

class Estadistica extends BaseController
{
	public function index()
	{
		$data['contenido']='estadistica/presentacion';
		return view('huellahidrica/index',$data);
	}
	public function viewencuesta()
	{
		$data['contenido']='estadistica/encuesta';
		return view('huellahidrica/index',$data);
	}
	public function respuesta()
	{
		$data['contenido']='estadistica/respuesta';
		return view('huellahidrica/index',$data);
	}
}