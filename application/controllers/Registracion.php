<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Login
 *
 * @author acarapi01
 */


class Registracion extends CI_Controller{        
    
    function __construct(){
        parent::__construct();
        $this->load->model('RegistracionModel');
    }
    
    public function index(){
        $this->load->view('layout/Encabezado');
        $this->load->view('RegistracionView');
        $this->load->view('layout/PiePagina');
    }
    
    public function getProvincias(){        
        $result = $this->RegistracionModel->getProvincias();
        // creamos un array que pueda leer el select2
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data,$item);
        }
        echo json_encode($data);
    }
    
    public function getDepartamentos(){        
        $idProvincia = $this->input->post("idProvincia");
        $result = $this->RegistracionModel->getDepartamentos($idProvincia);
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        echo json_encode($data);
    }
    
    public function getLocalidades(){        
        $idDepartamento = $this->input->post("idDepartamento");
        $result = $this->RegistracionModel->getLocalidades($idDepartamento);
        // creamos un array que pueda leer el select2
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        echo json_encode($data);
    }
    
    public function getBarrios(){
        $idLocalidad = $this->input->post("idLocalidad");
        $result = $this->RegistracionModel->getBarrios($idLocalidad);
        // creamos un array que pueda leer el select2
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        echo json_encode($data);
    }
    
    public function getInstrumentos() {
        $result = $this->RegistracionModel->getInstrumentos();
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        echo json_encode($data);
    }
    
    public function getEstilosMusicales() {
        $result = $this->RegistracionModel->getEstilosMusicales();
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        
        echo json_encode($data);
    }
    
    public function validationField() {
        $data = $this->input->post('data');        
        $result = $this->RegistracionModel->validation($data);
        echo json_encode($result);
    }
    
    
    /*public function guardar(){        
        $this->load->helper('form');
        $this->load->model('RegistracionModel');                                          
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
        $data = $this->RegistracionModel->guardar($usuario);
        echo json_encode($data);             
    }  */  
}