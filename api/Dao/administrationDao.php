<?php

  public static function afficherkobous($id){
    $con=new connexion();
    $cont=$con->executerequete("select solde,id_bourse from tblbourse where id_uti=$id");
    $con->closeconnexion();
    return $cont[0];
  }


?>
