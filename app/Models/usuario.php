<?php namespace App\Models;
use CodeIgniter\Model;
class usuario extends Model{
    public function obtenernombre($data){
        $usuario =$this->db->table('t_agenda');
        $usuario->where($data);
return $usuario->get()->getResultArray();

    }


    public function listarnombres(){
       
        $Nombres=$this->db->query("SELECT * FROM t_agenda");
        return $Nombres->getResult();

    }

    public function insertar($datos){
        $Nombres=$this->db->table('t_agenda');
        $Nombres->insert($datos);

        return $this->db->insertId();
    }

    public function obtenerdatos($data){
        $Nombre =$this->db->table('t_agenda');
        $Nombre->where($data);
return $Nombre->get()->getResultArray();

    }
    public function actualizar($data, $idnombre){
        $Nombre =$this->db->table('t_agenda');
        $Nombre->set($data);
        $Nombre->where('id_contacto', $idnombre);
        return $Nombre->update();
    }

    public function eliminar($data){
        $Nombre =$this->db->table('t_agenda');

        $Nombre->where($data);
        return $Nombre->delete();

    }

////////////////////////7
    public function obtenernombre1($data){
        $usuario =$this->db->table('t_categoria');
        $usuario->where($data);
return $usuario->get()->getResultArray();

    }


    public function listarnombres1(){
       
        $Nombres=$this->db->query("SELECT * FROM t_categoria");
        return $Nombres->getResult();

    }

   

    public function insertar1($datos){
        $Nombres=$this->db->table('t_categoria');
        $Nombres->insert($datos);

        return $this->db->insertId();
    }

    public function obtenerdatos1($data){
        $Nombre =$this->db->table('t_categoria');
        $Nombre->where($data);
return $Nombre->get()->getResultArray();

    }
    public function actualizar1($data, $idnombre){
        $Nombre =$this->db->table('t_categoria');
        $Nombre->set($data);
        $Nombre->where('id_categoria', $idnombre);
        return $Nombre->update();
    }

    public function eliminar1($data){
        $Nombre =$this->db->table('t_categoria');

        $Nombre->where($data);
        return $Nombre->delete();

    }

function mostrar($valor){
    $this->db->like("nombre",$valor);
   $consulta= $this->db->get("t_categoria");
return $consulta->result();
}


}
    