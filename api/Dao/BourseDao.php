<?php
   require_once'../../../api/Modele/Mconnexion.php';
   require_once'../../../api/Modele/Mbourse.php';
 class BourseDao{

        //fonction pour inserer des bourses
      public static function ajouterbourse($bourse){
        $con=new connexion();
      $con->executeactualisation("insert into tblbourse (id_bourse,id_type_bourse,id_uti,solde,etat,date_ajout,date_update)
        values('" . $bourse->idbourse . "','" . $bourse->idtypebourse . "','" . $bourse->iduti . "','" . $bourse->solde. "','" . $bourse->etat . "',NOW(),'" . $bourse->dateup . "')");
        $con->closeconnexion();
      //  return $resultat;
      }

      public static function testeridut($id){
        $con=new connexion();
        $cont=$con->executerequete("select etat from tblbourse where id_uti=$id");
        $con->closeconnexion();
        return $cont[0];
      }

      public static function afficherkobous($id){
        $con=new connexion();
        $cont=$con->executerequete("select solde from tblbourse where id_uti=$id");
        $con->closeconnexion();
        return $cont[0];
      }

  }
?>
