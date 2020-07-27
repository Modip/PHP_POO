<?php
class DB
{
private $db;
public function __construct()
{
    $this->getConnection();

}

function getConnection(){
    $host = 'localhost';
    $user = 'root' ;
    $password = '';
    $dbname = 'bp2';
    $dsn = "mysql:host=$host;dbname=$dbname";
    try {
    
        $db = new PDO($dsn,$user, $password);
        
    }catch(PDOException $ex){
        die ('Error : '.$ex->getMessage());
    }
    return $db;
}
}

//  //Fonction pour afficher les clients qui sont dans la base
//  function afficherClient(){
   
//     $val = ('SELECT * FROM client_physique');
//     $db = getConnection();
//     return $db->query($val)->fetchAll();
    
//  }
//  //Fonction pour afficher les agences qui sont dans la base
//  function afficherAgence(){
//    $val1 = ('SELECT * FROM agence');
//    $db = getConnection();
//    return $db->query($val1)->fetchAll();
//  }
// //Fonction pour afficher les types comptes
//  function afficherTypecompte(){
//      $cpt = ('SELECT * FROM type_compte ');
//      $db = getConnection();
//      return $db->query($cpt)->fetchAll();
//  }

?>