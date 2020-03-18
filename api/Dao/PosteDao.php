<?php
class posteDao{
  public static function GetPoste(){
            $con=new connexion();
            $cont=$con->executerequete("select * from tblposte");
            $con->closeconnexion();
            return $cont;

  }

}
?>
