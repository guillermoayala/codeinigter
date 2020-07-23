<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Central extends CI_Controller {


   public $itemCRUD;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
     public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('CentralModel');
      $this->load->model('EquiposModel');
      $this->load->model('IngeniosModel');



      $this->entregas = new CentralModel;
      $this->equipos = new EquiposModel;
      $this->ingenios = new IngeniosModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
        $data['entregas'] = $this->entregas->obtener_Entregas_II();
       

       $this->load->view('theme/header');       
       $this->load->view('entregas',$data);
       
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($id)
   {
      $item = $this->entregas->find_item($id);


      $this->load->view('theme/header');
      $this->load->view('central/show',array('IdEntrega'=>$item));
      $this->load->view('theme/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
    $equipos['equipos'] = $this->equipos->getEquipos();
    $ingenios['ingenios'] = $this->ingenios->getIngenios();

   
    
      $this->load->view('theme/header');
      $this->load->view('create', $equipos + $ingenios);
      $this->load->view('theme/footer');   

   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('FechaEntrega', 'FechaEntrega', 'required');
        $this->form_validation->set_rules('IdIngenio', 'IdIngenio', 'required');
        $this->form_validation->set_rules('IdEquipo', 'IdEquipo', 'required');
        $this->form_validation->set_rules('PesoTM', 'PesoTM', 'required');




        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Central/create'));
        }else{
           $this->entregas->insert_entrada();
           redirect(base_url('Central/index'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id = null)
   {

       $data['entregas'] = $this->entregas->getEntregaId($id);
       $id = $this->input->get('id');

       $this->load->view('theme/header');
       $this->load->view('edit', $data);
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
        $this->form_validation->set_rules('FechaEntrega', 'FechaEntrega', 'required');
        $this->form_validation->set_rules('IdIngenio', 'IdIngenio', 'required');
        $this->form_validation->set_rules('IdEquipo', 'IdEquipo', 'required');
        $this->form_validation->set_rules('PesoTM', 'PesoTM', 'required');


        


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('Central/edit/'.$id));
        }else{ 
          $this->entregas->update_item($id);
          redirect(base_url('Central'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $item = $this->entregas->delete_item($id);
       redirect(base_url('Central'));
   }

   
}