<?php

class Client extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->model('client_model');
    }

     //--------------------------------------------------------------------------------------------//
    //-------------------Récupère les infos dans la bdd en fonction de l'id-----------------------//
   //____________________________________________________________________________________________//
    public function views()
    {
        $data['clients'] = $this->client_model->get_client();

        $this->load->view('template/header');
        $this->load->view('clientView');
        $this->load->view('template/footer');
    }

}