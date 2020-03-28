<?php
class villeDao{
  public static function GetVille(){
            $con=new connexion();
            $cont=$con->executerequete("select * from tblville");
            $con->closeconnexion();
            return $cont;

  }



}


?>
