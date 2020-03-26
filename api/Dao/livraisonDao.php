<?php
    class livraisonDao{
      public static function ajouterlivraison($livraison){
        $con=new connexion();
      $con->executeactualisation("insert into tbllivraison (id_liv,id_an,etat,description,nb_accepte_livre,date_ajout,date_update)
        values('" . $livraison->idliv . "','" . $livraison->idann . "','" . $livraison->etat . "','" . $livraison->desc. "','" . $livraison->nbacc . "',NOW(),'" . $livraison->dateup . "')");
        $con->closeconnexion();
      }
    }
?>
