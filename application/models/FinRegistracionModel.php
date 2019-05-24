<?php


class FinRegistracionModel extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->library('Usuario');
    }
    
    public function guardar($usuario){        
        return $this->usuario->save($usuario);        
    }
}