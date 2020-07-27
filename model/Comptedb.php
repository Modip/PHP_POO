<?php



 //Fonction pour afficher les clients physiques qui sont dans la base
function afficherClient(){
   
    $val = ('SELECT * FROM client_physique');
    $db = getConnection();
    return $db->query($val)->fetchAll();
    
 }
 function afficherClientmor(){
   
  $val1 = ('SELECT * FROM client_moral');
  $db = getConnection();
  return $db->query($val1)->fetchAll();
  
}
 //Fonction pour afficher les agences qui sont dans la base
 function afficherAgence(){
   $val1 = ('SELECT * FROM agence');
   $db = getConnection();
   return $db->query($val1)->fetchAll();
 }
//Fonction pour afficher les types comptes
 function afficherTypecompte(){
     $cpt = ('SELECT * FROM type_compte ');
     $db = getConnection();
     return $db->query($cpt)->fetchAll();
 }
?>

?>