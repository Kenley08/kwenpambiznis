<?php
    class detaillivraisonDao{
      public static function ajouterdetaillivraison($detaillivraison){
        $con=new connexion();
      $con->executeactualisation("insert into tbldetaillivraison (id_detail_liv,id_liv,id_ville,prix,date_ajout,date_update)
        values('" . $detaillivraison->iddetailliv. "','" . $detaillivraison->idliv . "','" . $detaillivraison->idville . "','" . $detaillivraison->prix. "',NOW(),'" . $detaillivraison->dateup . "')");
        $con->closeconnexion();
      }
    }
?>
