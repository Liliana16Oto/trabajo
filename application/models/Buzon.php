<?php

class Buzon extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un comentario
  function insertar($datos)
  {
    return $this->db->insert("buzon",$datos);
  }
  //Funcion que reenderizala vista listado
  function obtenerTodos(){
    $listadoBuzones=$this->db->get("buzon");

    if($listadoBuzones->num_rows()>0){
      return $listadoBuzones->result();
    }else {
      return false;
    }
  }
   //borrar instructores
    function borrar($id_bu){
      $this->db->where("id_bu",$id_bu);
      return $this->db->delete("buzon");
    }
}//no borrar cierre de la clase

 ?>
