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
        $this->load->view('layout/Encabezado');
        $this->load->view('ResultadosView');
        $this->load->view('layout/PiePagina');
    }
}