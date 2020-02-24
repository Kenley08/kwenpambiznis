<?php
   require_once'../../Modele/Mconnexion.php';
   //require_once'../../Modele/Mbourse.php';
 class MmoyentransactionDao{
    public static function affichermoyen(){
        $con=new connexion();
        $cont=$con->executerequete("select * from tblmoyentransaction");
        $con->closeconnexion();
        return $cont;
      }

  }
?>
