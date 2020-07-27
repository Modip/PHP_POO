<?php
class clientmor extends DB
{   
    private $id;
    private $nom;
    private $adresse;
    private $raison_social;
    private $numidentf;
    private $telephone;
    private $email;
    private $login;
    private $password;

    public function getid ()
    {
      return  $this->id ;
    }
    public function getnom ()
    {
      return  $this->nom ;
    }   
    public function getprenom ()
    {
      return  $this->prenom ;
    } 
    public function getadresse ()
    {
      return  $this->adresse ;
    } 
    public function raison_social ()
    {
      return  $this->raison_social ;
    }
    public function getnumidentif ()
    {
      return  $this->numidentf ;
    }   
    public function gettelphone ()
    {
      return  $this->telephone ;
    }
    public function getemail ()
    {
      return  $this->email ;
    }
    public function getlogin ()
    {
      return  $this->login ;
    }   
    public function getpassword ()
    {
      return  $this->password ;
    }

    public function setid ()
    {
      return  $this->id ;
    }
    public function setnom ()
    {
      return  $this->nom ;
    }   
    public function setprenom ()
    {
      return  $this->prenom ;
    } 
    public function setadresse ()
    {
      return  $this->adresse ;
    } 
    public function setraison_social ()
    {
      return  $this->raison_social ;
    }
    public function setnumidentif ()
    {
      return  $this->numidentf ;
    }   
    public function settelphone ()
    {
      return  $this->telephone ;
    }
    public function setemail ()
    {
      return  $this->email ;
    }
    public function setlogin ()
    {
      return  $this->login ;
    }   
    public function setpassword ()
    {
      return  $this->password ;
    }
}