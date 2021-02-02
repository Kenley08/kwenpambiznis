<?php
class boutiqueDao{
          public static function GetInfoBoutique($id){
                     $con2=new connexion2();
                     $cont2=$con2->executerequete2("SELECT b.Id_Bou,t.Type_Bou,b.Id_Img,i.Url,i.Type,b.NomC,b.Nom_Bou,a.Id_Dep,a.Commune,a.Adresse,a.Email,a.Telephone,a.Site_web,s.Slogan,t.Id_Type_Bou
                     FROM tblboutique b
                     INNER join  tbltypeboutique t on b.Id_Type_Bou=t.Id_Type_Bou
                     inner join tblimage i on i.Id_Img=b.Id_Img
                     inner join tbladresse a on a.Id_adr=b.Id_Adr
                     inner join tblsuiteboutique s on s.Id_Bou =b.Id_Bou
                     WHERE Id_Uti='$id'");
                     $con2->closeconnexion2();
                     return $cont2;
           }

           public static function getBoutique($id){
            $con2=new connexion2();
            $cont2=$con2->executerequete2("SELECT b.Id_Bou,t.Type_Bou,b.Id_Img,i.Url,i.Type,b.NomC,b.Nom_Bou,a.Id_Dep,a.Commune,a.Adresse,a.Email,a.Telephone,a.Site_web,s.Slogan,t.Id_Type_Bou,b.Id_Adr
            FROM tblboutique b
            INNER join  tbltypeboutique t on b.Id_Type_Bou=t.Id_Type_Bou
            inner join tblimage i on i.Id_Img=b.Id_Img
            inner join tbladresse a on a.Id_adr=b.Id_Adr
            inner join tblsuiteboutique s on s.Id_Bou =b.Id_Bou
            WHERE b.Id_Bou='$id'");
            $con2->closeconnexion2();
            return $cont2[0];
  }

           public static function updateBoutique($boutique){
                     $con2=new connexion2();
                     $con2->executeactualisation2("update tblboutique set Id_Type_Bou=$boutique->idtypebou,Nom_bou='$boutique->nombou',Date_Update=NOW() where Id_Bou='$boutique->idbou'");
                     $con2->closeconnexion2();
           }

           

}

?>
