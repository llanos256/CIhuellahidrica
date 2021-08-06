<?php

namespace App\Controllers;

use App\Models\PersonaModel;

class Auth extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PersonaModel(); //creo objeto modelo
    }
    public function index()
    {
        $data['contenido'] = 'auth/login';
        return view('huellahidrica/index', $data);
    }
    public function registro()
    {
        return view('auth/registro');
    }
    public function guardar()
    {
        $request = \Config\Services::request();
        $clave = $request->getVar('password'); //encrypta el password
        $data = [
            'nombre' => $request->getVar('nombre'),
            'apellido' => $request->getVar('apellido'),
            'nickname' => $request->getVar('nickname'),
            'email' => $request->getVar('email'),
            'contrasena' => $clave,
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'potable' => $request->getVar('check'),
            'tipo_id' => 2
        ];
        $save = $this->model->insertar($data);
        if ($save) {
            return redirect()->to(site_url('auth')); //login
        } else {
            return redirect()->to(site_url('auth/registro')); //registro
        }
    } //end guardar
    public function login()
    {
        $request = \Config\Services::request();
        $clave = $request->getVar('password'); //encrypta el password
        $correo = $request->getVar('username');
        $user_info = $this->model->validar($clave, $correo);
        if ($user_info) {
            $user = $user_info['nombre'];
            $id = $user_info['id'];
            //--crear las variables de sesión
            session()->set('userid', $id);
            session()->set('username', $user);
            session()->set('user', $correo);
            return redirect()->to(site_url('home')); //listado de vehiculo
        } else {
            return redirect()->to(site_url('auth'));
        }
    }
    public function loginAdmin()
    {
        $request = \Config\Services::request();
        $clave = $request->getVar('password'); //encrypta el password
        $correo = $request->getVar('username');
        $tipo = 1;
        $user_info = $this->model->validarAdmin($clave, $correo, $tipo);
        if ($user_info) {
            $user = $user_info['nombre'];
            $id = $user_info['id'];
            //--crear las variables de sesión
            session()->set('userid', $id);
            session()->set('username', $user);
            session()->set('user', $correo);
            session()->set('tipo', $tipo);
            return redirect()->to(site_url('admin/viewindex_admin')); //listado de vehiculo
        }else {
            return redirect()->to(site_url('admin'));
        }
    }
    public function logout()
    {
        if (session()->has('userid')) {
            session()->remove('userid');
            session()->remove('username');
            return redirect()->to(site_url('home'));
        }
    } //end logout
}
