<?php
class groupesanguinDao{
  public static function GetGroupsanguins(){
            $con=new connexion();
            $cont=$con->executerequete("select * from tblgroupesanguin");
            $con->closeconnexion();
            return $cont;

  }

}


?>
