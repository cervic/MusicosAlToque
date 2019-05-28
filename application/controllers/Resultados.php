<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resultados
 *
 * @author Facundo_2
 */
class Resultados extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data['response'] = $this->buscar();
        
        $this->load->view('layout/Encabezado');
        $this->load->view('ResultadosView', $data);
        $this->load->view('layout/PiePagina');
        json_encode($data);
    }
    
    public function buscar() {
        $this->load->model('ResultadoModel');
        $filtros['musico.id_instrumento_musical'] = $this->input->post('cboIntrumento');
        $filtros['provincias.id'] = $this->input->post('cboProvincia');
        $result = $this->ResultadoModel->getResultados($filtros);
        return $result;
    }
}
