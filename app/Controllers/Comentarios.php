<?php

namespace App\Controllers;
use App\Models\ComentariosModel;

class Comentarios extends BaseController
{
	protected $model;
 
    public function __construct()
    {
        $this->model = new ComentariosModel();//creo objeto modelo
    }
    public function guardar()
    {
        $request = \Config\Services::request();    
        //echo $request->gerVar('idpublicacion');
        $data=[
            'descripcion'=>$request->getVar('descripcion'),
            'created' => date('Y-m-d G:i:s'),
            'modified' => date('Y-m-d G:i:s'),
            'publicaciones_id'=>$request->getVar('idpublicacion'),
            'persona_id'=>session()->get('userid')
        ];
        
        $this->model->insertar($data);
        return redirect()->to(site_url('publicacion/viewdetalle/'.$request->getVar('idpublicacion')));
    }
}