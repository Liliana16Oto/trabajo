<?php

  class Clientes extends CI_Controller
  {

    function __construct()
    {
       parent::__construct();
       //cargar modelo
       $this->load->model('Cliente');
    }
    //funciones que reenderiza a vista index
    public function listado()
    {
      $data['clientes']=$this->Cliente->obtenerTodos();

      $this->load->view('header');
      $this->load->view('clientes/listado',$data);
      $this->load->view('footer');
    }
    //funciones que reenderiza a vista nuevo
    public function nuevo()
    {
      $this->load->view('header');
      $this->load->view('clientes/nuevo');
      $this->load->view('footer');
    }
    public function guardar(){
              $datosNuevoCliente=array(
                "cedula_cli"=>$this->input->post('cedula_cli'),
                "primer_apellido_cli"=>$this->input->post('primer_apellido_cli'),
                "segundo_apellido_cli"=>$this->input->post('segundo_apellido_cli'),
                "nombre_cli"=>$this->input->post('nombre_cli'),
                "correo_cli"=>$this->input->post('correo_cli'),
                "telefono_cli"=>$this->input->post('telefono_cli'),
                "direccion_cli"=>$this->input->post('direccion_cli')
              );
              if($this->Cliente->insertar($datosNuevoCliente)){
              redirect ('clientes/listado');
            }else {
              "<h1> ERROR AL INSERTAR</h1>";
        }
    }
      // funcion para eliminar instructores
      public function eliminar($id_cli){
        if ($this->Cliente->borrar($id_cli)){//invocando al modelo
          redirect('clientes/listado');
        } else {
          echo "ERROR AL BORRAR :(";
        }

      }
  }//cierre de clase

 ?>
