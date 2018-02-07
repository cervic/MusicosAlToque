<?php

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
            $this->CI->db->select('id,nombre');
            $this->CI->db->where(array("id_departamento" => $idDepartamento)); 
            $result = $this->CI->get('localidades');
            
            return $result;
        }catch (Exception $e){
            return $e;
        }
    }    
}
