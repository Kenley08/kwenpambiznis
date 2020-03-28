<?php
    class detaillivraisonDao{
      public static function ajouterdetaillivraison($detaillivraison){
        $con=new connexion();
      $con->executeactualisation("insert into tbldetaillivraison (id_detail_liv,id_liv,id_ville,prix,date_ajout,date_update)
        values('" . $detaillivraison->iddetailliv. "','" . $detaillivraison->idliv . "','" . $detaillivraison->idville . "','" . $detaillivraison->prix. "',NOW(),'" . $detaillivraison->dateup . "')");
        $con->closeconnexion();
      }

      public static function GetDetailLivraison($id){
                $con=new connexion();
                $cont=$con->executerequete("select * from tbldetaillivraison where id_liv='$id'");
                $con->closeconnexion();
                return $cont;

      }

    }
?>
