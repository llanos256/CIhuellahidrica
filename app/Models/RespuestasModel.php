<?php
namespace App\Models;
use CodeIgniter\Model;

class RespuestasModel extends Model
{
   protected $table = 'respuesta'; //tabla en BD
   protected $allowedFields =['id','descripcion','created','modified','preguntas_id','persona_id'];
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
}