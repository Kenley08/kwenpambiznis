<?php
  class imageannonceDao{
    public static function ajouterImageAnnonce($imageannonce){
    $con2=new connexion2();
    $con2->executeactualisation2("insert into tblimageannonce(Id_Img_An,Id_Img,Id_An)
      values('" . $imageannonce->idimgan. "','" . $imageannonce->idimg . "','" . $imageannonce->idan . "')");
    $con2->closeconnexion2();
    }
  }

?>
