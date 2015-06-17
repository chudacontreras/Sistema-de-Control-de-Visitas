<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Departamentos extends CI_Model {

	function __construct() {
		parent::__construct();
    }

    function all() {
        $query = $this->db->get('departamentos');
        return $query->result();
    }

    function allFiltered($field, $value) {
        $this->db->like($field, $value);
        $query = $this->db->get('departamentos');
        return $query->result();
    }

    function find($id) {
    	$this->db->where('id_departamento', $id);
		return $this->db->get('departamentos')->row();
    }

    function insert($registro) {
    	$this->db->set($registro);
		$this->db->insert('departamentos');
    }

    function update($registro) {
    	$this->db->set($registro);
		$this->db->where('id_departamento', $registro['id_departamento']);
		$this->db->update('departamentos');
    }

    function delete($id) {
    	$this->db->where('id_departamento', $id);
		$this->db->delete('departamentos');
    }

}
