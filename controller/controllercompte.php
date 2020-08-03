<?php
require_once('../entities/Compte.php');
require_once('../model/Comptedb.php');
require_once('../model/DB.php');

class Controllercompte {
}
if(isset($_POST['ajouter']))
{

   extract($_POST);

   if($typeclient=='1')
   {

      $a = new Compte();

     // $a->setNumeroCte($numeroCte);
      $a->setClerib($clerib);
      $a->setAgence($agence);
      $a->setSolde($solde);
     // $a->setAgence($agence);
      //$a->setCltph_id($clph_id);
     // $a->setTypeCompte_id($typeCompe_id);
      $a->setDateou($dateou);
      $cp = new Comptedb();
      $rep = $cp->addCompteph($a);
      var_dump($rep);
      die();
      
   }

   if($typeclient=='2')
   {

      $b = new Compte();
      $b->setCleribmor($cleribmor);
      $b->setSoldemor($soldemor);
      $b->setDateoum($dateoum);

     // $a->setNumeroCte($numeroCte);
     // $b->setAgence($agence);
     // $b->setAgence($agence);
      //$b->setCltph_id($clph_id);
     //$b->setTypeCompte_id($typeCompe_id);
      $cm = new Comptedb();
      $rep2 = $cm->addComptemor($b);
      var_dump($rep2);
      die();
      
   }

   
   

}