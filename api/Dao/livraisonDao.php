<?php
    class livraisonDao{
      public static function ajouterlivraison($livraison){
        $con=new connexion();
      $con->executeactualisation("insert into tbllivraison (id_liv,id_an,id_livreur,etat,description,nb_accepte_livre,date_ajout,date_update)
        values('" . $livraison->idliv . "','" . $livraison->idann . "','" . $livraison->idlivreur . "','" . $livraison->etat . "','" . $livraison->desc. "','" . $livraison->nbacc . "',NOW(),'" . $livraison->dateup . "')");
        $con->closeconnexion();
      }


      public static function getlivraison($id){
        $con=new connexion();
        $cont=$con->executerequete("select * from tbllivraison where id_an='$id'");
        $con->closeconnexion();
        return $cont[0];
      }

      public static function getAlllivraison(){
        $con=new connexion();
        $cont=$con->executerequete("select * from tbllivraison");
        $con->closeconnexion();
        return $cont;
      }
}
?>
