<?php
namespace App\Models;
use CodeIgniter\Model;

class PersonaModel extends Model
{
   protected $table = 'persona'; //tabla en BD
   protected $allowedFields =['id','nombre','apellido','nickname','email','contrasena','created','modified','potable','tipo_id'];
   //--- leer R
   public function getData($id = null)
   {
       if($id == null)
        {
            return $this->findAll(); // select * from vehiculos
        }
        return $this->where('id',$id)->first(); // select * from vehiculos where id =$id
   }
//------- Eliminar-------D

   public function eliminar($id)
   {
       return $this->where('id',$id)->delete();
   }
  //------Guardar---------C
   public function insertar($data)
   {
       return $this->insert($data);
   }
   //---- actualizar-------U
   public function actualizar($id,$data)
   {
       return $this->update($id,$data);
   }
   public function validar($clave,$correo)
   {
        $condicional=array('nickname'=>$correo,'contrasena'=>$clave);// correo=x and clave=c
        return $this->where($condicional)->first();
   }//end validar
   public function validarAdmin($clave,$correo,$tipo)
   {
    $condicional=array('nickname'=>$correo,'contrasena'=>$clave,'tipo_id'=>$tipo);// correo=x and clave=c
    return $this->where($condicional)->first();
   }
   public function getDataAdmin()
   {
    $this->distinct();
    $this->select('pe.id,pe.nombre,pe.apellido,pe.nickname,pe.email,t.rol');
    $this->from('persona pe');
    $this->join('tipo t','pe.tipo_id=t.id');
    $this->where('pe.tipo_id',1);
    $resultado=$this->get();
    return $resultado;
   }
   public function getDataUsuario()
   {
    $this->distinct();
    $this->select('pe.id,pe.nombre,pe.apellido,pe.nickname,pe.email,t.rol');
    $this->from('persona pe');
    $this->join('tipo t','pe.tipo_id=t.id');
    $this->where('pe.tipo_id',2);
    $resultado=$this->get();
    return $resultado;
   }
}

