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
    
    public function getProvincias(){
        $this->load->model('HomeModel');
        $result = $this->HomeModel->getProvincias();
        // creamos un array que pueda leer el select2
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data,$item);
        }
        echo json_encode($data);
    }
    
    public function getInstrumentos(){
        $this->load->model('HomeModel');
        $result = $this->HomeModel->getInstrumentos();
        // creamos un array que pueda leer el select2
        $data = array();
        foreach ($result as $value) {
            $item['id'] = $value->id;
            $item['text'] = $value->nombre;
            array_push($data,$item);
        }
        echo json_encode($data);
    }

}
