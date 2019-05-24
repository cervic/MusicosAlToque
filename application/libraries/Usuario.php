<?php

class Usuario {
    protected $CI;
    protected $library;
            function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('Musico');
    }
    
    public function save($campos){        
        try{
            $this->CI->db->trans_start();
            $campos_usuario = array(
                'nombre' => $campos['nombre'],
                'apellido' => $campos['apellido'],
                'nombre_usuario' => $campos['nombre_usuario'],
                'email' => $campos['email'],
                'password' => $campos['password'],                  
                'fecha_nacimiento' => $campos['fechaNacimiento'],
                'id_estilo_musical' => $campos['estiloMusical'],                
            );            
            $this->CI->db->insert('usuario', $campos_usuario);
            $id_usuario = $this->CI->db->insert_id();
            $campos_musico = array(
                'id_usuario' => $id_usuario,
                'id_localidad' => $campos['id_localidad'],
                'id_barrio' => $campos['id_barrio'],
                'id_instrumento_musical' => $campos['instrumento']
            );
            $this->CI->musico->save($campos_musico);
            $this->CI->db->trans_complete();
            return array(                
                'usuario' => $campos['nombre_usuario'],
                'id' => $id_usuario
            );        
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
    
    public function getUsuarioByUsuario($usuario) {
        try{            
            $this->CI->db->where(array('nombre_usuario' => $usuario));
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

