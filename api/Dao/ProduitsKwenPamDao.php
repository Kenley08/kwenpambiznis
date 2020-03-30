<?php
  class produitDao{
        public static function listerproduits($id){
        $con2=new connexion2();
            //  $cont2=$con2->executerequete2("select * from tblannonce where Id_Uti='$id'");
        $cont2=$con2->executerequete2("  SELECT tblannonce.Id_An,tblannonce.Preciser,tblcategorie.Type_Cat,tblannonce.Description,tblannonce.Prix,tblannonce.Etat,tblannonce.id_mon,tblannonce.quantite
                                          FROM tblcategorie
                                          join tblannonce on tblcategorie.Id_Cat_An=tblannonce.Id_Cat_An WHERE tblannonce.Id_Uti='$id' order by tblannonce.date_ajout DESC");
              $con2->closeconnexion2();
              return $cont2;
        }

          public static function GetProduit($id){
                    $con2=new connexion2();
                    $cont2=$con2->executerequete2("select * from tblannonce where Id_An='$id'");
                    $con2->closeconnexion2();
                    return $cont2[0];
          }

          public static function UpdateProduct($annonce){
            $con2=new connexion2();
            $con2->executeactualisation2("update tblannonce set Id_Cat_An=$annonce->idcatann,Preciser='$annonce->presizyon',Prix=$annonce->pri,Id_Mon=$annonce->idmon,Etat=$annonce->etat,Negociable=$annonce->negociable,Description='$annonce->deskripsyon',quantite=$annonce->qtestock,Date_Update=NOW() where Id_An=$annonce->idann");
            $con2->closeconnexion2();

          }

  }

?>
