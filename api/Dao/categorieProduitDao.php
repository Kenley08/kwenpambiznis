<?php
class categorieDao{
  public static function GetAllCategorie(){
            $con2=new connexion2();
            $cont2=$con2->executerequete2("select * from tblcategorie");
            $con2->closeconnexion2();
            return $cont2;
  }

  public static function GetCategorie($id){
            $con2=new connexion2();
            $cont2=$con2->executerequete2("SELECT tblcategorie_cr.Type_Cat from tblcategorie_cr JOIN tblannonce on tblcategorie_cr.Id_Cat_An=tblannonce.Id_Cat_An WHERE tblannonce.Id_An='$id'");
            $con2->closeconnexion2();
            return $cont2[0];
    }


}
?>
