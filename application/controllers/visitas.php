<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visitas extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Visitas');
                
		
    }

	public function index() {
		$data['contenido'] = 'visitas/index';
		$data['titulo'] = 'Registro de Visitas';
		$data['query'] = $this->Model_Visitas->all();
		$this->load->view('template', $data);
	}
        
        public function crear() {
            
            $data['contenido'] = 'visitas/crear_visita';
            $data['titulo'] = 'Insertar Visitantes';
            $this->load->view('template', $data);
    
    
    
        }

	

}
