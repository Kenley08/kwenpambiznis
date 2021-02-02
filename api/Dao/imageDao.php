<?php
class imageDao{
  public static function ajouterImage($image){
  $con2=new connexion2();
  $con2->executeactualisation2("insert into tblimage(Id_Img,Url,Type,Etat,Date_Ajout,Date_Update)
    values('" . $image->idimg. "','" . $image->url . "','" . $image->type . "',1,NOW(),NOW())");
  $con2->closeconnexion2();
}

public static function updateImage($image){
          $con2=new connexion2();
          $con2->executeactualisation2("update tblimage set Url='$image->url',Type='$image->type',Date_Update=NOW() where Id_Img='$image->idimg'");
          $con2->closeconnexion2();

}


}
?>
