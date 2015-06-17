<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Visitante extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Visitante');
                $this->load->library('visitanteLib');
		
	$this->form_validation->set_message('required', 'Debe ingresar campo %s');
        $this->form_validation->set_message('valid_email', 'Campo %s no es un eMail valido');
        $this->form_validation->set_message('my_validation', 'Este Visitante ya esta Registrado');
    }

	public function index() {
		$data['contenido'] = 'visitante/index';
		$data['titulo'] = 'Visitantes';
		$data['query'] = $this->Model_Visitante->all();
		$this->load->view('template', $data);
	}

	public function search() {
		$data['contenido'] = 'visitante/index';
		$data['titulo'] = 'Visitantes';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Visitante->allFiltered('visitante.cedula', $value);
		$this->load->view('template', $data);
	}

	public function my_validation() {
		return $this->visitantelib->my_validation($this->input->post());
	}

	public function create() {
		$data['contenido'] = 'visitante/create';
		$data['titulo'] = 'Insertar Visitante';
		$this->load->view('template', $data);
	}

	public function insert() {
		$registro = $this->input->post();

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
                $this->form_validation->set_rules('apellido', 'Apellido', 'required');
                $this->form_validation->set_rules('cedula', 'Cedula', 'required|callback_my_validation');
                $this->form_validation->set_rules('email', 'eMail', 'required|valid_email');
                $this->form_validation->set_rules('telefono_mov', 'Telefono Celular', 'required');
                $this->form_validation->set_rules('telefono_loc', 'Telefono Local', 'required');
                $this->form_validation->set_rules('institucion', 'Institucion', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        }
        else {
			$this->Model_Visitante->insert($registro);
			redirect('visitante/index');
        }
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);

		$data['contenido'] = 'visitante/edit';
		$data['titulo'] = 'Actualizar Visitante';
		$data['registro'] = $this->Model_Visitante->find($id);
		$this->load->view('template', $data);
	}

	public function update() {
		$registro = $this->input->post();

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
                $this->form_validation->set_rules('apellido', 'Apellido', 'required');
                $this->form_validation->set_rules('email', 'eMail', 'required|valid_email');
                $this->form_validation->set_rules('telefono_mov', 'Telefono Celular', 'required');
                $this->form_validation->set_rules('telefono_loc', 'Telefono Local', 'required');
                $this->form_validation->set_rules('institucion', 'Institucion', 'required');
		if($this->form_validation->run() == FALSE) {
			$this->edit($registro['id']);
		}
		else {
			$this->Model_Visitante->update($registro);
			redirect('visitante/index');
		}
	}

	public function delete($id) {
		$this->Model_Visitante->delete($id);
		redirect('visitante/index');
	}

}
