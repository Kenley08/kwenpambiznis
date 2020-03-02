<?php
require_once'../../api/Modele/Mconnexion.php';
require_once'../../api/Modele/Madministration.php';

 class administrationDao{
    public static function capteriduti($id){
    $con=new connexion();
    $cont=$con->executerequete("select id_uti from tbladministration where id_uti=$id");
    $con->closeconnexion();
    return $cont[0];
  }


}



?>
