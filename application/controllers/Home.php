<?php

/**
 * Description of Home
 *
 * @author Cesar
 */
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('layout/Encabezado');
        $this->load->view('HomeView');
        $this->load->view('layout/PiePagina');
    }
    

}
