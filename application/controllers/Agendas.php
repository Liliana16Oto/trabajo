<?php

  class Agendas extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Agenda');
    }
    //funciones que reenderiza a vista index
    public function listado()
    {
      $data['instructores']=$this->Agenda->obtenerTodos();

      $this->load->view('header');
      $this->load->view('agendas/listado',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('agendas/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
              $datosNuevoInstructor=array(
                "dia_ag"=>$this->input->post('dia_ag'),
                "mes_ag"=>$this->input->post('mes_ag'),
                "dia_ag"=>$this->input->post('dia_ag')
              );
              if($this->Instructor->insertar($datosNuevoInstructor)){
              redirect ('instructores/index');
            }else {
              "<h1> ERROR AL INSERTAR</h1>";
        }
    }
      // funcion para eliminar instructores
      public function eliminar($id_ins){
        if ($this->Instructor->borrar($id_ins)){//invocando al modelo
          redirect('instructores/index');
        } else {
          echo "ERROR AL BORRAR :(";
        }

      }
  }//cierre de clase

 ?>
