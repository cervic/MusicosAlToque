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
    
    public function getMusicosPorFiltros($filtros) {
        try {            
            $this->CI->db->select('usuario.nombre_usuario as nombre_usuario, usuario.email, instrumentos.nombre as instrumento, estilos_musicales.nombre as estilo_musical, localidades.nombre as localidad');
            $this->CI->db->from('musico');
            $this->CI->db->join('usuario', 'musico.id_usuario = usuario.id');
            $this->CI->db->join('instrumentos', 'musico.id_instrumento_musical = instrumentos.id');
            $this->CI->db->join('localidades', 'musico.id_localidad = localidades.id');
            $this->CI->db->join('provincias', 'localidades.cod_provincia = provincias.codigo');
            $this->CI->db->join('estilos_musicales', 'usuario.id_estilo_musical = estilos_musicales.id');
            $this->CI->db->where($filtros);
            $query = $this->CI->db->get();
            return $query->result();
        } catch (Exception $ex) {
            return $ex;
        }
    }
}
