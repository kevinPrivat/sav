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
        $data['title'] = 'Liste Clients';
        $this->load->view('template/header', $data);
        $this->load->view('client/clientView', $data);
        $this->load->view('template/footer');
    }

    public function client($id = 1)
    {
        $data['client'] = $this->client_model->get_client($id);
        //var_dump($data['client']);
        $data['title'] = $data['client']['nomClient'];
        $this->load->view('template/header', $data);
        $this->load->view('client/oneclient', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nomClient', 'NomClient', 'required');
        $this->form_validation->set_rules('numTel', 'NumTel', 'required');
        $this->form_validation->set_rules('adresse', 'Adresse', 'required');
        $this->form_validation->set_rules('numTel', 'NumTel', 'required');
        $this->form_validation->set_rules('mail', 'Mail', 'required');


        $data['title'] = 'formulaire clients';
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('client/Create');
            $this->load->view('template/footer');
        }else {
            $this->client_model->setClient();
            $this->load->view('client/success');
        }
    }   

    public function update($id) 

    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data ['title'] = 'Créer un nouveau client';
        $data ['client'] = $this->client_model->get_client($id);

        $this->form_validation->set_rules('nomClient', 'Nom Client', 'required');
        $this->form_validation->set_rules('numClient', 'Num Client', 'required');
        $this->form_validation->set_rules('mail', 'Email Client', 'required');
        $this->form_validation->set_rules('adresse', 'Adresse Client', 'required');
        $this->form_validation->set_rules('numTel', 'Tel Client', 'required');
        
        if ($this->form_validation->run() === FALSE) 
    {

        $this->load->view('template/header', $data);
        $this->load->view('client/update', $data);
        $this->load->view('template/footer');
    } else {
        $this->news_model->update($id);
        $this->load->view('client/success');
    }

    }
    public function delete($id) 
    {
        $this->client_model->deleteClient($id);
        $this->load->view('client/success');
    }
}