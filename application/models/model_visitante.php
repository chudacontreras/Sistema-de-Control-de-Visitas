<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Visitante extends CI_Model {

	function __construct() {
		parent::__construct();
    }

    function all() {
        $this->db->select('visitante.* ');
        $this->db->from('visitante');
        

        $query = $this->db->get();
        return $query->result();
    }

    function allFiltered($field, $value) {
        $this->db->select('visitante.*');
        $this->db->from('visitante');
        $this->db->like($field, $value);

        $query = $this->db->get();
        return $query->result();
    }

    function find($id) {
    	$this->db->where('id_visitante', $id);
		return $this->db->get('visitante')->row();
    }

    function insert($registro) {
    	$this->db->set($registro);
		$this->db->insert('visitante');
    }

    function update($registro) {
    	$this->db->set($registro);
		$this->db->where('id_visitante', $registro['id_visitante']);
		$this->db->update('visitante');
    }

    function delete($id) {
    	$this->db->where('id_visitante', $id);
		$this->db->delete('visitante');
    }

    

}

