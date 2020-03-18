<?php
class typeNiveauDao{
  public static function GetNiveau(){
            $con=new connexion();
            $cont=$con->executerequete("select * from tblniveauetude");
            $con->closeconnexion();
            return $cont;

  }

}


?>
