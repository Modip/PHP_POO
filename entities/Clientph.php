<?php
class clientph extends DB
{
    public $id;
    public $nom;
    public $prenom;
    public $salaire;
    public $adresse;
    public $profession;
    public $email;
    public $nci;
    public $login;
    public $password;


    public function getId()
    {
        return  $this->id;
    }
    public function getNom()
    {
        return  $this->nom;
    }
    public function getSalaire()
    {
        return  $this->salaire;
    }
    public function getAdresse()
    {
        return  $this->adresse;
    }
    public function getProfession()
    {
        return  $this->professionl;
    }
    public function getEmail()
    {
        return  $this->email;
    }

    public function getLogin()
    {
        return  $this->login;
    }
    public function getPassword()
    {
        return  $this->password;
    }

    public function setId($id)
    {
        return  $this->id;
    }
    public function setNom($nom)
    {
        return  $this->nom;
    }
    public function setSalaire($salaire)
    {
        return  $this->salaire;
    }
    public function setAdresse($adresse)
    {
        return  $this->adresse;
    }
    public function  setProfession($profession)
    {
        return  $this->professionl;
    }
    public function setEmail($email)
    {
        return  $this->email;
    }

    public function setLogin($login)
    {
        return  $this->login;
    }
    public function setPassword($password)
    {
        return  $this->password;
    }
}
