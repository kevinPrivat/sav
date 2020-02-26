<?php 

class Client_model extends CI_Model 
    {
        public function __construct()
        {
            $this->load->database();
        }


     //----------------------------------------------------------------------------------//
    //----------------Récupère les infos dans la bdd en fonction de l'id----------------//
   //__________________________________________________________________________________//
        public function get_client(int $id = 0)
        {
            if ($id <= 0){
                $query = $this->db->get('client');
                return $query->result_array();
            }
            $query = $this->db->get_where('client', array('idClient' => $id));
            return $query->row_array();
        }

        // On créer une méthode qui sert à récupérer un client par son ID
        public function get_client_by_id($id = 0)
        {
            if ($id === 0)
            {
                $query = $this->db->get('client');
                return $query->result_array();
            }
            $query = $this->db->get_where('client', array('id' => $id));
            return $query->row_array();
        }


        public function setClient($id = 0) 
    {
        
            $data = array
            (
                'nomClient' => $this->input->post('nomClient'), 
                'numClient' => $this->input->post('numClient'),
                'adresse' => $this->input->post('adresse'),
                'numTel' => $this->input->post('numTel'),
                'mail' => $this->input->post('mail'),
            );
            if ($id <= 0) 
            {
            //insert
            $query = $this->db->insert('client', $data);
            return $query;
            }
            
            //update
            $this->db->where('idClient', $id);
            $query = $this->db->update('client', $data);

    }
}