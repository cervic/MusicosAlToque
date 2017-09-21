<?php

/**
 * Description of LoginModel
 *
 * @author Cesar Acarapi
 */
class LoginModel extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($usuario){
        $this->load->library('Usuario');
        $campos = array(
                        'email' => $usuario['email'],
                        'password' => $usuario['password']);
        
        return $this->usuario->getUsuarioByEmailAndPassword($campos);        
    }
}
