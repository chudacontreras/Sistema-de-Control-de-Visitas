<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Funcionarios');
                
                $this->load->library('funcionariosLib');
		
	$this->form_validation->set_message('required', 'Debe ingresar campo %s');
        
        $this->form_validation->set_message('my_validation', 'Este funcionario ya esta Registrado');
    }

	public function index() {
		$data['contenido'] = 'funcionarios/index';
		$data['titulo'] = 'funcionarios';
		$data['query'] = $this->Model_Funcionarios->all();
		$this->load->view('template', $data);
	}

	public function search() {
		$data['contenido'] = 'funcionarios/index';
		$data['titulo'] = 'funcionarios';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Funcionarios->allFiltered('funcionario.cedula', $value);
		$this->load->view('template', $data);
	}

	public function my_validation() {
		return $this->funcionarioslib->my_validation($this->input->post());
	}

	public function create() {
		$data['contenido'] = 'funcionarios/create';
		$data['titulo'] = 'Insertar funcionarios';
                $data['departamento'] = $this->Model_Funcionarios->get_departamentos(); /* Lista de los Perfiles */
		$this->load->view('template', $data);
	}

	public function insert() {
		$registro = $this->input->post();

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
                
                $this->form_validation->set_rules('cedula', 'Cedula', 'required|callback_my_validation');
               
                if ($this->form_validation->run() == FALSE) {
            $this->create();
        }
        else {
			$this->Model_Funcionarios->insert($registro);
			redirect('funcionarios/index');
        }
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);

		$data['contenido'] = 'funcionarios/edit';
		$data['titulo'] = 'Actualizar funcionarios';
		$data['registro'] = $this->Model_Funcionarios->find($id);
                $data['departamento'] = $this->Model_Funcionarios->get_departamentos(); /* Lista de los Perfiles */
		$this->load->view('template', $data);
	}

	public function update() {
		$registro = $this->input->post();

		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
                
            
                
		if($this->form_validation->run() == FALSE) {
			$this->edit($registro['id_funcionario']);
		}
		else {
			$this->Model_Funcionarios->update($registro);
			redirect('funcionarios/index');
		}
	}

	public function delete($id) {
		$this->Model_Funcionarios->delete($id);
		redirect('funcionarios/index');
	}

}

