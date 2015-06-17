<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Visitas extends CI_Model {

	function __construct() {
		parent::__construct();
    }

    function all() {
        $this->db->select('visita.* , visitante.nombre as visitante_nombre,visitante.telefono_mov as visitante_telefono, visitante.apellido as visitante_apellido, funcionario.nombre as funcionario_nombre, departamentos.nombre as departamentos_nombre');
        $this->db->from('visita');
        $this->db->join('visitante', 'visita.visitante_idvisitante = visitante.id_visitante', 'left');
        $this->db->join('funcionario', 'visita.funcionario_idfuncionario = funcionario.id_funcionario', 'left');
        $this->db->join('departamentos', 'visita.departamentos_iddepartamento = departamentos.id_departamento', 'left');
        

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
