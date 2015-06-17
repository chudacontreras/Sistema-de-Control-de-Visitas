<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Funcionarios extends CI_Model {

	function __construct() {
		parent::__construct();
    }

    function all() {
       $this->db->select('funcionario.* , departamentos.nombre as departamentos_nombre');
        $this->db->from('funcionario');
        $this->db->join('departamentos', 'funcionario.id_departamento = departamentos.id_departamento', 'left');

        $query = $this->db->get();
        return $query->result();

        
    }

    function allFiltered($field, $value) {
         $this->db->select('funcionario.* , departamentos.nombre as departamentos_nombre');
        $this->db->from('funcionario');
        $this->db->join('departamentos', 'funcionario.id_departamento = departamentos.id_departamento', 'left');
        $this->db->like($field, $value);

        $query = $this->db->get();
        return $query->result();
    }

    function find($id) {
    	$this->db->where('id_funcionario', $id);
		return $this->db->get('funcionario')->row();
    }

    function insert($registro) {
    	$this->db->set($registro);
		$this->db->insert('funcionario');
    }

    function update($registro) {
    	$this->db->set($registro);
		$this->db->where('id_funcionario', $registro['id_funcionario']);
		$this->db->update('funcionario');
    }

    function delete($id) {
    	$this->db->where('id_funcionario', $id);
		$this->db->delete('funcionario');
    }
    
    function get_departamentos() {
        $lista = array();
        $this->load->model('Model_Departamentos');
        $registros = $this->Model_Departamentos->all();
        foreach ($registros as $registro) {
            $lista[$registro->id_departamento] = $registro->nombre;
        }
        return $lista;
    }

    

}

