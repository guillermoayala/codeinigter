<?php


class CentralModel extends CI_Model{


    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_Entregas(){
        if(!empty($this->input->get("search"))){
          $this->db->like('FechaEntregado', $this->input->get("search"));
          $this->db->or_like('IdIngenio', $this->input->get("search")); 
          $this->db->or_like('IdEquipo', $this->input->get("search")); 
          $this->db->or_like('PesoTM', $this->input->get("search")); 
        }
        $query = $this->db->get("entregas");
        return $query->result();
    }


    public function Obtener_Entregas_II()
    {
        $query = $this->db->query("select en.IdEntrega,en.FechaEntrega,i.Nombre as Ingenio,eq.Nombre as Equipo,en.PesoTM from entregas en
        inner join equipos eq on en.IdEquipo = eq.IdEquipo
        inner join ingenios i on en.IdIngenio = i.IdIngenio");
        $data['entregas'] = $query -> result_array();
        return $query->result_array;
    }



    public function insert_entrada()
    {    
        $data = array(
            'FechaEntrega' => $this->input->post('FechaEntrega'),
            'IdIngenio' => $this->input->post('IdIngenio'),
            'IdEquipo' => $this->input->post('IdEquipo'),
            'PesoTM' => $this->input->post('PesoTM')


        );
        return $this->db->insert('entregas', $data);
    }


    public function update_entrega($id) 
    {
        $data=array(
            'FechaEntrega' => $this->input->post('FechaEntrega'),
            'IdIngenio' => $this->input->post('IdIngenio'),
            'IdEquipo' => $this->input->post('IdEquipo'),
            'PesoTM' => $this->input->post('PesoTM')
        );
        if($id==0){
            return $this->db->insert('entregas',$data);
        }else{
            $this->db->where('IdEntrega',$id);
            return $this->db->update('entregas',$data);
        }        
    }


    public function find_item($id)
    {
        return $this->db->get_where('entregas', array('IdEntrega' => $id))->row();
    }
    
    function getEntregaId($id)
    {
        $this->db->where('IdEntrega', $id);
        $query = $this->db->get('entregas');
        return $query->result_array();
    }

    function updateEntrega($id, $nombre)
    {
        $this->db->where('id', $id);
        $this->db->set('nombre', $nombre);
        return $this->db->update('editoriales');
    }



    public function delete_item($id)
    {
        return $this->db->delete('entregas', array('IdEntrega' => $id));
    }
}
?>