<?php
class historiciteDao{
  public static function ajouterhistoricite($historicite){
    $con=new connexion();
    $con->executeactualisation("insert into tblhistoricite (id_his,id_uti,tab_utilise,action,date_ajout)
    values('" . $historicite->idhis . "','" . $historicite->iduti . "','" . $historicite->tabutilise . "','" . $historicite->action . "',NOW())");
    $con->closeconnexion();
  }
}

?>
