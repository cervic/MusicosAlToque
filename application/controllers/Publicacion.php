<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublicacionController
 *
 * @author Muhuna
 */
class Publicacion extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view("PublicacionMusicoView");
    }
    
    public function banda(){
        $this->load->view("PublicacionBandaView");
    }
}
