<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departamentos extends CI_Controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Departamentos');
		$this->load->library('departamentosLib');

		$this->form_validation->set_message('norep', 'Existe otro registro con el mismo nombre');
	}

	public function index() {
		$data['contenido'] = 'departamentos/index';
		$data['titulo'] = 'Departamentos';
		$data['query'] = $this->Model_Departamentos->all();
		$this->load->view('template', $data);
	}

	public function search() {
		$data['contenido'] = 'departamentos/index';
		$data['titulo'] = 'Departamentos';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Departamentos->allFiltered('nombre', $value);
		$this->load->view('template', $data);
	}

	public function norep() {
		return $this->departamentoslib->norep($this->input->post());
	}

	public function create() {
		$data['contenido'] = 'departamentos/create';
		$data['titulo'] = 'Crear Perfil';
		$this->load->view('template', $data);
	}

	public function insert() {
		$registro = $this->input->post();

		$this->form_validation->set_rules('nombre', 'Nombre', 'callback_norep');
		if($this->form_validation->run() == FALSE) {
			$this->create();
		}
		else {
			$this->Model_Departamentos->insert($registro);
			redirect('departamentos/index');
		}
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);

		$data['contenido'] = 'departamentos/edit';
		$data['titulo'] = 'Actualizar Departamentos';
		$data['registro'] = $this->Model_Departamentos->find($id);
		$this->load->view('template', $data);
	}

	public function update() {
		$registro = $this->input->post();

		$this->form_validation->set_rules('nombre', 'Nombre', 'callback_norep');
		if($this->form_validation->run() == FALSE) {
			$this->edit($registro['id_departamento']);
		}
		else {
			$this->Model_Departamentos->update($registro);
			redirect('departamentos/index');
		}
	}

	public function delete($id) {
		$this->Model_Departamentos->delete($id);
		redirect('departamentos/index');
	}

}


