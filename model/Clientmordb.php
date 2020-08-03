<?php

require_once "DB.php";
require_once "../entities/Clientmor.php";
class Clientmordb extends DB
{

    public function __construct()
    {
       parent::__construct();
    }
 //Insertion de client moral dans la base de donnee

    public function addClientmoral(Clientmor $clientmoral)
    {
        $sql = "INSERT INTO client_moral VALUES(NULL,'".$clientmoral->getRaisonsocial()."','".$clientmoral->getNommor()."','".$clientmoral->getAdressemor()."','".$clientmoral->getNumidentf()."','".$clientmoral->getTelmor()."', '".$clientmoral->getMailmor()."', '".$clientmoral->getLoginmor()."', '".$clientmoral->getPasswordmor()."')";

        return $this->db->exec($sql);
    }
}
