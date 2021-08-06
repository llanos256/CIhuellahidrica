<?php
namespace App\Models;
use CodeIgniter\Model;

class PublicacionesModel extends Model
{
   protected $table = 'publicaciones'; //tabla en BD
   protected $allowedFields =['id','titulo','descripcion','created','modified','persona_id'];
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
       $this->select("P.id, p.titulo, p.descripcion");
       $this->from("publicaciones p");
       //$this->join('comentarios c','p.id=c.publicaciones_id');
       $this->orderBy("p.created","desc");
       $resultado=$this->get();
       return $resultado;
   }
   public function consulta2($id)
   {
    $this->select("P.id, p.titulo, p.descripcion");
    $this->from("publicaciones p");
    $this->where('p.id',$id);
    $resultado=$this->get();
    return $resultado;
   }
}
