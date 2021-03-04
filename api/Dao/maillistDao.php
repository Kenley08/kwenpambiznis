<?php
class maillistDao{
    public static function add($maillist){
    $con2=new connexion2();
    $result=$con2->executeactualisation2("insert into tblmaillist(id_mail_list,mail_list,id_cat_an,etat,date_ajout,date_update)
        values('" . $maillist->id. "','" . $maillist->mail_list . "','" . $maillist->id_cat_an . "',1,NOW(),NOW())");
    return $result;
    $con2->closeconnexion2();
}

public static function update($maillist){
          $con2=new connexion2();
          $result=$con2->executeactualisation2("update tblmaillist set etat=0,date_update=NOW() where mail_list='$maillist->mail_list'");
          return $result;
          $con2->closeconnexion2();

}

public static function update2($maillist){
    $con2=new connexion2();
    $result=$con2->executeactualisation2("update tblmaillist set etat=1,date_update=NOW() where mail_list='$maillist->mail_list'");
    return $result;
    $con2->closeconnexion2();

}

public static function get(){
    $con2=new connexion2();
    $cont2=$con2->executerequete2("SELECT mail_list,id_cat_an from tblmaillist  WHERE etat=1  ");
    $con2->closeconnexion2();
    return $cont2;
}

public static function getByEmail($mail){
    $con2=new connexion2();
    $cont2=$con2->executerequete2("SELECT mail_list,id_cat_an from tblmaillist  WHERE etat=1  and mail_list='$mail' ");
    $con2->closeconnexion2();
    return $cont2[0];
}




}
?>