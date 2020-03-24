<?php
class categorieDao{
  public static function GetAllCategorie(){
            $con2=new connexion2();
            $cont2=$con2->executerequete2("select * from tblcategorie");
            $con2->closeconnexion2();
            return $cont2;
  }

}
?>
