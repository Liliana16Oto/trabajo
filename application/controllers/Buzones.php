<?php

  class Buzones extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Buzon');
    }
    //funciones que reenderiza a vista index
    public function listado()
    {
      $data['buzones']=$this->Buzon->obtenerTodos();

      $this->load->view('header');
      $this->load->view('buzones/listado',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('buzones/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
              $datosNuevoBuzon=array(
                "primer_apellido_bu"=>$this->input->post('primer_apellido_bu'),
                "segundo_apellido_bu"=>$this->input->post('segundo_apellido_bu'),
                "nombre_bu"=>$this->input->post('nombre_bu'),
                "correo_bu"=>$this->input->post('correo_bu'),
                "comentario_bu"=>$this->input->post('comentario_bu')
              );
              if($this->Buzon->insertar($datosNuevoBuzon)){
              redirect ('buzones/listado');
            }else {
              "<h1> ERROR AL INSERTAR</h1>";
        }
    }
      // funcion para eliminar instructores
      public function eliminar($id_bu){
        if ($this->Buzon->borrar($id_bu)){//invocando al modelo
          redirect('buzones/listado');
        } else {
          echo "ERROR AL BORRAR :(";
        }

      }
  }//cierre de clase

 ?>
