<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistracionModel extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->library('Usuario');
    }
    
    public function getProvincias(){
        $this->load->library('Provincia');
        return $this->provincia->getProvincias();
    }
    
    public function getDepartamentos($idProvincia){
        $this->load->library('Departamento');
        return $this->departamento->getDepartamentoByIdProvincia($idProvincia);
    }
    
    public function getLocalidades($idDepartamento){
        $this->load->library('Localidad');
        return $this->localidad->getLocalidadesByIdDepartamento($idDepartamento);
    }
    
    public function getBarrios($idLocalidad){
        $this->load->library('Barrio');
        return $this->barrio->getBarriosByIdLocalidad($idLocalidad);
    }
    
    public function getInstrumentos() {
        $this->load->library('Instrumento');
        return $this->instrumento->getInstrumentos();
    }
    
    public function getEstilosMusicales() {
        $this->load->library('EstiloMusical');
        return $this->estilomusical->getEstilosMusicales();
    }
    
    public function validation($data) {
        switch($data['field']){
            case 'email': 
                $data = $this->usuario->getUsuarioByEmail($data['text']);
                return $this->createResponse($data, "Este email ya esta registrado");                
            case 'usuario': 
                $data = $this->usuario->getUsuarioByUsuario($data['text']); 
                return $this->createResponse($data, "Este usuario ya existe");
            default : 
                return $this->createResponse($data, "");
        }     
    }
    
    function createResponse($data, $message) {
        if(empty($data)) {
            $result["isValid"] = true;
            $result["message"] = "";
        } else {
            $result["isValid"] = false;
            $result["message"] = $message;
        }
        return $result;
    }
}

