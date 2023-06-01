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
      $data['agendas']=$this->Agenda->obtenerTodos();

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
              $datosNuevoAgenda=array(
                "dia_ag"=>$this->input->post('dia_ag'),
                "mes_ag"=>$this->input->post('mes_ag'),
                "año_ag"=>$this->input->post('año_ag')
              );
              if($this->Agenda->insertar($datosNuevoAgenda)){
              redirect ('agendas/listado');
            }else {
              "<h1> ERROR AL INSERTAR</h1>";
        }
    }
      // funcion para eliminar instructores
      public function eliminar($id_ag){
        if ($this->Agenda->borrar($id_ag)){//invocando al modelo
          redirect('agendas/listado');
        } else {
          echo "ERROR AL BORRAR :(";
        }

      }
  }//cierre de clase

 ?>
