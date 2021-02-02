<?php


 class administrationDao{
    public static function capteriduti($id){
    $con=new connexion();
    $cont=$con->executerequete("select id_admin,id_uti,pin,etat,date_ajout,date_update from tbladministration where id_uti=$id");
    $con->closeconnexion();
    return $cont[0];
  }


  //fonction pour creer un administrateur
public static function createadmin($admin){
  $con=new connexion();
  $resultat=$con->executeactualisation("insert into tbladministration (id_admin,id_uti,pin,etat,date_ajout,date_update)
  values('" . $admin->idadmin . "','" . $admin->iduti . "','" . $admin->pin . "','" . $admin->etat. "',NOW(),'" . $admin->dateup . "')");
  $con->closeconnexion();

  }
  //fonction pour update etat connexion administrateur
  public static function updateetat($admin){
      $con=new connexion();
      $con->executeactualisation("update tbladministration set etat='".$admin->etat . "' where pin='4288'" );
      $con->closeconnexion();
  }

    //fonction pour update etat connexion administrateur
    public static function getAdminByPin($pin,$iduti){
    $con=new connexion();
    $cont=$con->executerequete("select a.id_uti,a.id_admin from tbladministration a where a.pin='$pin' and a.id_uti='$iduti'");
    $con->closeconnexion();
    return $cont[0];
  }


   //fonction pour update etat connexion administrateur
   public static function updateDel($id){
    $con2=new connexion2();
    $con2->executeactualisation2("UPDATE `tblutilisateur` SET `Delete`=0 WHERE Id_Uti='$id'" );
    $con2->closeconnexion2();
}






}








?>
