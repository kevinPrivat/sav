<?php 

class ClientEntity {
    private $idClient;
    private $nomClient;
    private $numClient;
    private $mail;
    private $adresse;
    private $numTel;

    public function __construct(array $paramClient, $id = NULL)
    {
        if($id != NULL)
        {
            $this->idClient = $id;
        }
        $this->hydrate($data);
    }


    //
    public function hydrate(array $data) 
    {
        foreach ($data as $property => $value) 
        {
            $setterMethod = 'set'.ucfirst($property);
            if (property_exists($this, $setterMethod)) 
            {
                $this->{$setterMethod}(value);
            }
        }
    }


     //''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
    //-----------------------------GETTERS----------------------------//
   //________________________________________________________________//

    public function get_id_client()
    {
        return $this->idClient;
    }
    public function get_nom_Client()
    {
        return $this->nomClient;
    }
    public function get_num_client()
    {
        return $this->numClient;
    }
    public function get_mail_client()
    {
        return $this->mail;
    }
    public function get_adresse_client()
    {
        return $this->adresse;
    }
    public function get_num_tel()
    {
        return $this->numTel;
    }

     //''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''//
    //----------------------------SETTERS-----------------------------//
   //________________________________________________________________//

    public function set_nom_client(string $nomClient)
    {
        $this->nomClient = $nomClient;
    }
    public function set_num_client(int $numClient)
    {
        $this->numClient = $numClient;
    }
    public function set_mail_client(string $adresse)
    {
        $this->mail = $mail;
    }
    public function set_adresse_client(string $adresse)
    {
        $this->adresse = $adresse;
    }
    public function set_num_tel_client(string $numTel)
    {
        $this->numTel = $numTel;
    }
}