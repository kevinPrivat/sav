<?php 

class Client_model extends CI_Model 
    {
        public function ___construct()
        {
            $this->load->database();
        }


     //----------------------------------------------------------------------------------//
    //----------------Récupère les infos dans la bss en fonction de l'id----------------//
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
    }