<?php

namespace App\Controllers;
use App\Models\PersonaModel;

class Persona extends BaseController
{
	protected $model;
 
    public function __construct()
    {
        $this->model = new PersonaModel();//creo objeto modelo
    }
    public function index()
	{
        $data['registros']=$this->model->getDataAdmin();
        $data['contenido']='persona/listapersona';
		return view('admin/index',$data);
	}
    public function listausuario()
    {
        $data['registros']=$this->model->getDataUsuario();
        $data['contenido']='persona/listausuario';
		return view('admin/index',$data);
    }
    public function guardar()
    {  
        $request = \Config\Services::request();
        $clave=$request->getVar('password');//encrypta el password
        $data=[
            'nombre'=>$request->getVar('nombre'),
            'apellido'=>$request->getVar('apellido'),
            'nickname'=>$request->getVar('nickname'),
            'email'=>$request->getVar('email'),
            'contrasena'=>$clave,
            'created'=>date('Y-m-d H:i:s'),
            'modified'=>date('Y-m-d H:i:s'),
            'tipo_id'=>1
        ];
        $this->model->insertar($data);
        
        $db = \Config\Database::connect();
        if($db->affectedRows()>0)
        {
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Ok</strong> Registro actualizado.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
       <?php
        }
         else
         {
           ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> No se pudo actualizar.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
       <?php
         }  
    }
    public function eliminar($id) 
    {
        $this->model->eliminar($id);
        echo "registro eliminado";
        return redirect()->to(site_url('persona/listausuario'));
    }
}