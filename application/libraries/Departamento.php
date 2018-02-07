<?php


/**
 * Description of Departamento
 *
 * @author Cesar Acarapi
 */
 class Departamento {
    protected $CI;
    
    function __construct(){
        $this->CI =& get_instance();
    }
    
    public function getDepartamentoByIdProvincia($idProvincia){
        try{             
           $this->CI->db->select('id,nombre');
           $this->CI->db->where('id_provincia', $idProvincia);           
           $result = $this->CI->db->get('departamentos');
           return $result->result();
        }catch(Exception $e){
            return $e;
        }
    }
}
