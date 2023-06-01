<?php

class Agenda extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor
  function insertar($datos)
  {
    return $this->db->insert("agenda",$datos);
  }
  //Funcion que reenderizala viksta index
  function obtenerTodos(){
    $listadoAgendas=$this->db->get("agenda");

    if($listadoAgendas->num_rows()>0){
      return $listadoAgendas->result();
    }else {
      return false;
    }
  }
   //borrar instructores
    function borrar($id_ag){
      $this->db->where("id_ag",$id_ag);
      return $this->db->delete("agenda");
    }
}//no borrar cierre de la clase

 ?>
