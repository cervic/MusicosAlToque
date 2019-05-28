<?php

class ResultadoModel extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->library('Musico');
    }
    
    public function getResultados($filtros) {
        return $this->musico->getMusicosPorFiltros($filtros);
    }
}
