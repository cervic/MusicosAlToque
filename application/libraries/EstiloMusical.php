<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class EstiloMusical {
    protected $CI;
    
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function getEstilosMusicales() {
        try {
            $this->CI->db->select("id, nombre");
            $result = $this->CI->db->get("estilos_musicales");
            return $result->result();
        } catch (Exception $ex){
            return $ex;
        }
    }
}
