<?php
namespace App\Models;
use CodeIgniter\Model;

class ComentariosModel extends Model
{
   protected $table = 'comentarios'; //tabla en BD
   protected $allowedFields =['id','descripcion','created','modified','publicaciones_id','persona_id'];
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
   public function consulta($id)
   {
    $this->distinct();
    $this->select('c.descripcion,pe.nickname,pe.nombre');
    $this->from('comentarios c');
    $this->join('publicaciones p','c.publicaciones_id=p.id');
    $this->join('persona pe','c.persona_id=pe.id');
    $this->orderBy("c.created", "desc");
    $this->where('p.id',$id);
    $resultado=$this->get();
    return $resultado;
   }
}