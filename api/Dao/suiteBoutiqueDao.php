<?php
class suiteBoutiqueDao{

           public static function update($slogan,$id){
                     $con2=new connexion2();
                     $con2->executeactualisation2("update tblsuiteboutique set Slogan='$slogan',Date_Update=NOW() where Id_Bou='$id'");
                     $con2->closeconnexion2();
           }

}

?>
