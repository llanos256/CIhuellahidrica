<?php
namespace App\Models;
use CodeIgniter\Model;

class PreguntasModel extends Model
{
   protected $table = 'preguntas'; //tabla en BD
   protected $allowedFields =['id','descripcion','created','modified','encuesta_id'];
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
   public function consulta()
   {
       $this->distinct();
       $this->select("pr.id,pr.descripcion");
       $this->from("preguntas pr");
       $resultado=$this->get();
       return $resultado;
   }
}