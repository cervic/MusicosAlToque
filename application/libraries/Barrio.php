<?php

class Barrio {
    protected $CI;
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function getBarriosByIdLocalidad($idLocalidad){
        try{
            $this->CI->db->select('id,nombre');
            $this->CI->db->where('id_localidad', $idLocalidad); 
            $result = $this->CI->db->get('barrios');            
            return $result->result();
        }catch (Exception $e){
            return $e;
        }
    }    
}
