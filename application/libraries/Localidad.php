<?php

/**
 * Description of Localidad
 *
 * @author Cesar Acarapi
 */
class Localidad {
    protected $CI;
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function getLocalidadesByIdDepartamento($idDepartamento){
        try{
            $this->CI->db->select('id,nombre');
            $this->CI->db->where('id_departamento', $idDepartamento); 
            $result = $this->CI->db->get('localidades');            
            return $result->result();
        }catch (Exception $e){
            return $e;
        }
    }    
}
