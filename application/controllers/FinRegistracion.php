<?php

class FinRegistracion extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $response = $this->createUser();
        $data['response'] = $response;
        $this->load->view("layout/Encabezado");
        $this->load->view("FinRegistracionView", $data);
        $this->load->view("layout/PiePagina");

    }
    
    public function createUser() {
        $this->load->model('FinRegistracionModel');                                          
        $usuario['nombre'] = $this->input->post("form-nombre");
        $usuario['apellido'] = $this->input->post("form-apellido");
        $usuario['id_localidad'] = $this->input->post("form-localidad");
        $usuario['id_barrio'] = $this->input->post("form-barrio");
        $usuario['nombre_usuario'] = $this->input->post("form-usuario");
        $usuario['email'] = $this->input->post("form-email");
        $usuario['password'] = $this->input->post("form-password");
        $usuario['instrumento'] = $this->input->post("form-instrumento");
        $usuario['fechaNacimiento'] = $this->input->post("form-fecha-nacimiento");
        $usuario['artistaBanda'] = $this->input->post("form-artista-banda");
        $usuario['estiloMusical'] = $this->input->post("form-estilo-musical");
        $data = $this->FinRegistracionModel->guardar($usuario);
        
        if(array_key_exists('usuario', $data)) {
            return $message = "Se registró con éxito a Músicos al toque";
        } else {
            return $message = "Ocurrio un problema mientras se realizaba la registración";
        }
    }
}

