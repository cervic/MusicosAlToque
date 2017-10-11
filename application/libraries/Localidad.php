<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Localidad
 *
 * @author Muhuna
 */
class Localidad {
    protected $CI;
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function getLocalidadesByIdDepartamento($idDepartamento){
        try{
            $this->CI->select('id,nombre');
            $this->CI->where(array("id_departamento" => $idDepartamento)); 
            $result = $this->CI->get('localidades');
            
            return $result;
        }catch (Exception $e){
            return $e;
        }
    }
}
