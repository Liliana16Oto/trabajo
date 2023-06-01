<?php

class Cliente extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor
  function insertar($datos)
  {
    return $this->db->insert("cliente",$datos);
  }
  //Funcion que reenderizala viksta index
  function obtenerTodos(){
    $listadoClientes=$this->db->get("cliente");

    if($listadoClientes->num_rows()>0){
      return $listadoClientes->result();
    }else {
      return false;
    }
  }
   //borrar instructores
    function borrar($id_cli){
      $this->db->where("id_cli",$id_cli);
      return $this->db->delete("cliente");
    }
}//no borrar cierre de la clase

 ?>
