<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeModel
 *
 * @author Muhuna
 */
class HomeModel extends CI_Model {
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    public function getProvincias(){
        $this->load->library('Provincia');
        return $this->provincia->getProvincias();
    }
}
