<?php
  class adresseDao{
    public static function updateAdresse($adresse){
              $con2=new connexion2();
              $con2->executeactualisation2("update tbladresse set Id_Dep='$adresse->depart',Commune='$adresse->com',Adresse='$adresse->adr',Email='$adresse->email',Telephone='$adresse->tel',Site_Web='$adresse->siteweb',Date_Update=NOW() where Id_adr='$adresse->idadr'");
              $con2->closeconnexion2();

    }

    
    public static function getAdresse($id){
      $con2=new connexion2();
      $cont2=$con2->executerequete2("SELECT * from tbladresse WHERE Id_adr='$id'");
      $con2->closeconnexion2();
      return $cont2[0];
}

  }
?>
