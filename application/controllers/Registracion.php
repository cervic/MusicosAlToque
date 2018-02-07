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
        $idDepartamento = $this->input->post("idDepartamento");
        $result = $this->RegistracionModel->getDepartamentos($idDepartamento);
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        echo json_encode($data);
    }
    
    public function getLocalidades(){
        $this->load->model("RegistracionModel"); 
        $idLocalidad = $this->input->post("idlocalidad");
        $result = $this->RegistracionModel->getLocalidades($idLocalidad);
        // creamos un array que pueda leer el select2
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data, $item);
        }
        echo json_encode($data);
    }
    
    public function guardar(){        
        $this->load->helper('form');
        $this->load->model('RegistracionModel');  
        
        // Validaciones Cliente
        $this->setValidation();
                        
        if ($this->form_validation->run() == TRUE){
            $usuario['nombre'] = $this->input->post("txtNombre");
            $usuario['apellido'] = $this->input->post("txtApellido");
            $usuario['nombre_usuario'] = $this->input->post("txtUsuario");
            $usuario['email'] = $this->input->post("txtEmail");
            $usuario['password'] = $this->input->post("txtPassword");            
            $data = $this->RegistracionModel->guardar($usuario);            
        }   
        else{            
            $data = $this->getErrors();
        }
        echo json_encode($data);       
    }
    
    function setValidation()
    {
        $this->form_validation->set_rules('txtNombre', 'Nombre', 'required',
                array ('required' => 'Por favor ingrese su Nombre'));
        $this->form_validation->set_rules('txtApellido', 'Apellido', 'required',
                array ('required' => 'Por favor ingrese su Apellido'));
        $this->form_validation->set_rules('txtUsuario', 'Usuario', 'required',
                array ('required' => 'Por favor ingrese su Usuario'));
        $this->form_validation->set_rules('txtEmail', 'Email', 'required',
                array ('required' => 'Por favor ingrese su Email'));
        $this->form_validation->set_rules('txtPassword', 'Password', 'required|matches[txtConfirmPassword]',
                array ('matches' => 'Las contraseñas ingresadas no coinciden',
                       'required' => 'Por favor ingrese su password'));     
        $this->form_validation->set_rules('txtConfirmPassword', 'ConfirmPassword', 'required',
                array ('required' => 'Por favor reingrese su password'));        
    }
    
    function getErrors(){
        $errors = array(
            'isValid' => false,            
            'txtNombre' => form_error('txtNombre'),
            'txtApellido' => form_error('txtApellido'),
            'txtUsuario' => form_error('txtUsuario'),
            'txtEmail' => form_error('txtEmail'),                        
            'txtPassword' => form_error('txtPassword'),
            'txtConfirmPassword' => form_error('txtConfirmPassword')
            );
        return $errors;                
    }
}
    

   
