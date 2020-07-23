<?php


class IngeniosModel extends CI_Model{


    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    
    public function getIngenios()
    {
        $query = $this->db->query("select * from ingenios");
        $data['ingenios'] = $query -> result_array();
        return $query->result_array;
    }
    
}
?>