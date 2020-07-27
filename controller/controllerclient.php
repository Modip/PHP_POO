<?php

require_once('../model/Clientphysique.php');
if(isset($_POST['submit'])){
    
    extract($_POST);
    if($typeclient == '1')
    {
    //    $client = new $clientmor();
    //    $client->setnom($nomph);
        $a = addClientphysique($nomph, $prenomph, $telph, $salaire, $adresseph, $profession, $loginph, $passwordph, $emailph, $ninph);
        var_dump($a);
    }
    if($typeclient == '2'){
        $insert = addClientmoral($raisonsocial, $nommor, $adressemor, $adressemor, $telmor, $mailmor, $loginmor, $passwordmor); 
        var_dump($insert);
        die();
    }
}
?>