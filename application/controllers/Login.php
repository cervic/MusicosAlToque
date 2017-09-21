<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//session_start();
/**
 * Description of Login
 *
 * @author Cesar
 */
class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }   
    
    public function index(){
        $this->load->view('LoginView');
    }
    
    public function ingresar(){
        $this->load->helper('form');         
        $this->load->model('LoginModel');         
        
        $this->setValidations();
        
        if($this->form_validation->run()==TRUE){
     
            $usuario['email'] = $this->input->post('txtEmail');
            $usuario['password'] = $this->input->post('txtPassword');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
            
            $usuario_db = $this->LoginModel->getUsuario($usuario);
            if(empty($usuario_db)){
                $data = array('isValid' => false, 'login' => '<p>usuario y/o contraseña incorrectos</p>' );
            }else{
                $session_data = array(
                    'id' => $usuario_db->id,
                    'usuario' => $usuario_db->nombre_usuario,
                    'email' => $usuario_db->email
                );
                $data = array('isValid' => true);
                $this->session->set_userdata('logged_in', $session_data);
            }
            
        }else{
            $data = $this->getErrors();
        }
        
        echo json_encode($data);
    }
    
    public function cerrar_session(){
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();               
    }
    
    function setValidations(){
        $this->form_validation->set_rules('txtEmail','email','required',
                array('required' => 'Por favor ingrese su email'));
        $this->form_validation->set_rules('txtPassword','password','required',
                array('required' => 'Por favor ingrese su password'));
    }
    
    function getErrors(){
        $errors = array(
            'isValid' => false,
            'txtEmail' => form_error('txtEmail'),
            'txtPassword' => form_error('txtPassword')
        );
        
        return $errors;
    }
    
    
}
