<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Provincia
 *
 * @author Muhuna
 */
class Provincia {
    protected $CI;
    
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function getProvincias(){
        try{
            $this->CI->db->select('id, nombre');
            $result = $this->CI->db->get('provincias');
            return $result->result();
        }catch(Exception $e){
            return $e;
        }
    }
}
