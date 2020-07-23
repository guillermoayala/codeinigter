<?php


class EquiposModel extends CI_Model{


    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function getEquipos()
    {
        $query = $this->db->query("select * from equipos");
        $data['ingenios'] = $query -> result_array();
        return $query->result_array;
    }
}
?>