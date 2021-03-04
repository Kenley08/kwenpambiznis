<?php
  class produitDao{
        public static function listerproduits($id){
        $con2=new connexion2();
            //  $cont2=$con2->executerequete2("select * from tblannonce where Id_Uti='$id'");
        $cont2=$con2->executerequete2("SELECT tblannonce.Id_An,tblannonce.Preciser,tblcategorie_cr.Type_Cat,tblannonce.Description,tblannonce.Prix,tblannonce.Etat,tblannonce.id_mon,tblannonce.quantite
                                          FROM tblcategorie_cr
                                          join tblannonce on tblcategorie_cr.Id_Cat_An=tblannonce.Id_Cat_An WHERE tblannonce.Id_Uti='$id' and tblannonce.Activated=1 order by tblannonce.date_ajout DESC");
              $con2->closeconnexion2();
              return $cont2;
        }


        public static function getProduitsBoutique($id,$idbou){
          $con2=new connexion2();
              //  $cont2=$con2->executerequete2("select * from tblannonce where Id_Uti='$id'");
         $cont2=$con2->executerequete2(" SELECT a.Id_An,a.Preciser,c.Type_Cat,a.Description,a.Prix,a.Etat,a.id_mon,a.quantite,b.Id_Bou
                FROM tblcategorie_cr c
                inner join tblannonce a on a.Id_Cat_An=c.Id_Cat_An
                inner join tblannonceboutique n on n.Id_An=a.Id_An
                INNER JOIN tblboutique b on b.Id_Bou=n.Id_bou
             WHERE a.Id_Uti='$id' and n.Id_bou='$idbou' and a.Activated=1 order by a.date_ajout ");
                $con2->closeconnexion2();
                return $cont2;
          }

          // public static function GetProduit($id){
          //           $con2=new connexion2();
          //           $cont2=$con2->executerequete2("select * from tblannonce inner join tblcategorie_cr where tblannonce.Id_An='$id' and tblannonce.id_cat_an=tblcategorie_cr.id_cat_an");
          //           $con2->closeconnexion2();
          //           return $cont2[0];
          // }


          public static function GetProduit($id){
            $con2=new connexion2();
            $cont2=$con2->executerequete2("select * from tblannonce inner join tblcategorie_cr,tblimage,tblprofil,tbladresse,tblutilisateur  where tblprofil.id_adr=tbladresse.id_adr and tblprofil.id_uti=tblutilisateur.id_uti and tblannonce.activated=1 and tblutilisateur.id_uti=tblannonce.id_uti and tblimage.id_img=tblannonce.id_img and tblannonce.Id_An='$id' and tblannonce.id_cat_an=tblcategorie_cr.id_cat_an");
            $con2->closeconnexion2();
            return $cont2[0];
  }

        public static function GetImages($id){
          $con2=new connexion2();
          $cont2=$con2->executerequete2("select i.url,i.Id_Img from tblimage i inner join tblimageannonce m on m.Id_Img=i.Id_Img inner join tblannonce a on a.Id_An=m.Id_An WHERE m.Id_An='$id' and a.activated=1 and i.Etat=1");
          $con2->closeconnexion2();
          return $cont2;
      }

          public static function UpdateProduct($annonce){
            $con2=new connexion2();
            $con2->executeactualisation2("update tblannonce set Id_Cat_An=$annonce->idcatann,Preciser='$annonce->presizyon',Prix=$annonce->pri,Id_Mon=$annonce->idmon,Etat=$annonce->etat,Negociable=$annonce->negociable,Description='$annonce->deskripsyon',quantite=$annonce->qtestock,Date_Update=NOW() where Id_An=$annonce->idann");
            $con2->closeconnexion2();

          }

          public function deleteProduct($id){
            $con2=new connexion2();
            $con2->executeactualisation2("update tblannonce set Activated=0,Date_Update=Now() where Id_An='$id'");
            $con2->closeconnexion2();

          }

          public function deleteImage($id){
            $con2=new connexion2();
            $con2->executeactualisation2("update tblimage set Etat=0,Date_Update=Now() where Id_Img='$id'");
            $con2->closeconnexion2();

          }
//foction k ap vini ak annonce ke itilizate a ap fe search la pa rapo ak id a ke itilizate a ap pase nan search la
          public static function getProduct($table,$id){
            $con2=new connexion2();
            $cont2=$con2->executerequete2("select * from $table inner join tblcategorie_cr,tblimage,tblprofil,tbladresse,tblutilisateur  where tblprofil.id_adr=tbladresse.id_adr and tblprofil.id_uti=tblutilisateur.id_uti and tblannonce.activated=1 and tblutilisateur.id_uti=tblannonce.id_uti and tblimage.id_img=tblannonce.id_img and tblannonce.Id_An='$id' and tblannonce.id_cat_an=tblcategorie_cr.id_cat_an");
            $con2->closeconnexion2();
            return $cont2[0];
  }


  public static function getAbonneesProducts($idcat){
    $con2=new connexion2();
        //  $cont2=$con2->executerequete2("select * from tblannonce where Id_Uti='$id'");
    $cont2=$con2->executerequete2("SELECT tblannonce.Id_An,tblannonce.Preciser,tblcategorie_cr.Type_Cat,tblannonce.Description,tblannonce.Prix,tblannonce.Etat,tblannonce.id_mon,tblannonce.quantite,tblannonce.id_cat_an
                                      FROM tblcategorie_cr
                                      join tblannonce on tblcategorie_cr.Id_Cat_An=tblannonce.Id_Cat_An WHERE tblannonce.id_cat_an='$idcat' and tblannonce.Activated=1 and tblannonce.Date_Ajout>= DATE_SUB(CURDATE(),INTERVAL 7 DAY)");
          $con2->closeconnexion2();
          return $cont2;
    }


    public static function getOneAbonneesProducts($idcat,$mail){
      $con2=new connexion2();
          //  $cont2=$con2->executerequete2("select * from tblannonce where Id_Uti='$id'");
      $cont2=$con2->executerequete2("SELECT tblannonce.Id_An,tblannonce.Preciser,tblcategorie_cr.Type_Cat,tblannonce.Description,tblannonce.Prix,tblannonce.Etat,tblannonce.id_mon,tblannonce.quantite,tblannonce.id_cat_an
                                        FROM tblcategorie_cr
                                        join tblannonce on tblcategorie_cr.Id_Cat_An=tblannonce.Id_Cat_An 
                                        join tblmaillist on tblmaillist.id_cat_an=tblannonce.Id_Cat_An
                                        WHERE tblannonce.id_cat_an='$idcat'and tblmaillist.mail_list='$mail' and tblannonce.Activated=1 and tblannonce.Date_Ajout>= DATE_SUB(CURDATE(),INTERVAL 7 DAY)");
            $con2->closeconnexion2();
            return $cont2;
      }

      

   

        


          
        


  }

?>
