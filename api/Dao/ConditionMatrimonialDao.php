<?php
class conditionmatDao{
  public static function getconditionmat(){
            $con=new connexion();
            $cont=$con->executerequete("select * from tblconditionmatrimonial");
            $con->closeconnexion();
            return $cont;

  }

}


?>
