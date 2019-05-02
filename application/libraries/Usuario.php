<?php

class Usuario {
    protected $CI;
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function save($campos){
        // Validaciones codeignither
        $this->CI->form_validation->set_rules('txtUsuario', 'Usuario', 'is_unique[usuario.nombre_usuario]',
                array ('is_unique' => 'Ya existe este usuario'));
        $this->CI->form_validation->set_rules('txtEmail', 'Email', 'is_unique[usuario.email]',
                array ('is_unique' => 'Ya existe este email'));        
        
        try{
            if($this->CI->form_validation->run()){
                $this->CI->db->insert('usuario', $campos);
                $insert_id = $this->CI->db->insert_id();

                return array(
                    'isValid' => true,
                    'usuario' => $campos['nombre_usuario'],
                    'id' => $insert_id
                );        
            }else{
                return $this->getErrorsSave();
            }
        }catch(Exception $e){
            return $e;
        }
    }
    
    public function getUsuarioByEmail($email) {
                try{            
            $this->CI->db->where(array('email' => $email));
            $consulta = $this->CI->db->get('usuario');                       
            return  $consulta->row();
        }catch(Exception $e){
            return $e;
        }
    }
    
    public function getUsuarioByEmailAndPassword($campos){
        try{            
            $this->CI->db->where(array('email' => $campos['email'],
                                       'password' => $campos['password']));
            $consulta = $this->CI->db->get('usuario');
            
            
            return  $consulta->row();
        }catch(Exception $e){
            return $e;
        }
    }
    
    function getErrorsSave(){
        $errors = array(
            'isValid' => false,
            'txtUsuario' => form_error('txtUsuario'),
            'txtEmail' => form_error('txtEmail')
        );
        
        return $errors;
    }   
}

