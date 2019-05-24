<?php

class Musico {
    protected $CI;
    function __construct() {
        $this->CI =& get_instance();
    }
    
    public function save($campos) {
        try {
            $this->CI->db->insert('musico', $campos);
            $insert_id = $this->CI->db->insert_id();
            
            return $insert_id;
        } catch (Exception $ex) {
            return $ex;
        }
    }
}
