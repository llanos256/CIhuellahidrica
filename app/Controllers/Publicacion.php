<?php

namespace App\Controllers;
use App\Models\PublicacionesModel;

class publicacion extends BaseController
{
	protected $model;

    public function __construct()
    {
        $this->model = new PublicacionesModel();//creo objeto modelo
    }

    public function guardar()
    {
        $request = \Config\Services::request();
        $data=[
            'titulo'=>$request->getVar('titulo'),
            'descripcion'=>$request->getVar('descripcion'),
            'persona_id'=>session()->get('userid'),
            'created' => date('Y-m-d G:i:s'),
            'modified' => date('Y-m-d G:i:s')
        ];
        $this->model->insertar($data);

        $db = \Config\Database::connect();
        if($db->affectedRows()>0)
          {
          echo " Registro guardado";
          return redirect()->to(site_url('admin/publicaciones'));
          }
         else
         {
            echo "Error no se pudo guardar";
            return redirect()->to(site_url('admin/publicaciones'));
         }
    }
    public function viewdetalle($id)
    {
        //$consulta=$this->model->consulta2($id);
        //$data=$consulta->getResult('array');
        // $row2=$consulta->getResult('array');
        // foreach($consulta->getResult('array') as $row){
        //  $idpublicacion=$row['id'];
        //  $titulo=$row['titulo'];
        //  $descripcion=$row['descripcion'];
        //  }
        $data['contenido']='huellahidrica/comentario';
        $data['consulta']=$this->model->consulta2($id);
		return view('huellahidrica/index',$data);
        

    }
    public function viewdetalleAdmin($id)
    {
        //$consulta=$this->model->consulta2($id);
        //$data=$consulta->getResult('array');
        // $row2=$consulta->getResult('array');
        // foreach($consulta->getResult('array') as $row){
        //  $idpublicacion=$row['id'];
        //  $titulo=$row['titulo'];
        //  $descripcion=$row['descripcion'];
        //  }
        $data['contenido']='admin/detallePublicaciones';
        $data['consulta']=$this->model->consulta2($id);
		return view('admin/index',$data);
        

    }
    public function detalle($id)
    {
       $consulta=$this->model->consulta2($id);
       //$data=$consulta->getResult('array');
       foreach($consulta->getResult('array') as $data){
        $idpublicacion=$data['id'];
        $titulo=$data['titulo'];
        $descripcion=$data['descripcion'];
        }
          ?>
          <tr>
          <td><hr></td>
          </tr>
          <tr>

              <td> TITULO:: <?php echo $titulo; ?>
              <input id="idpublicacion" type="hidden" value="<?php echo $idpublicacion?>">

              </td>
          </tr>
          <tr>
            <td> DESCRIPCION:: <?php echo $descripcion; ?> </td>

          </tr>
          <tr>
          <td>

          <input type="text" placeholder="comentar"><input type="submit"value="Enviar">
          </td></tr>
          <tr>


          </tr>
      
          <?php
        
    }
}