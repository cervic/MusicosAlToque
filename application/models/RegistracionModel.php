<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistracionModel extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function getProvincias(){
        $this->load->library('Provincia');
        return $this->provincia->getProvincias();
    }
    
    public function guardar($usuario){
        $this->load->library('Usuario');
        
        $campos = array(
            'nombre' => $usuario['nombre'],
            'apellido' => $usuario['apellido'],
            'nombre_usuario' => $usuario['nombre_usuario'],
            'email' => $usuario['email'],
            'password' => $usuario['password']            
        );
        
        return $this->usuario->save($campos);        
    }
}

