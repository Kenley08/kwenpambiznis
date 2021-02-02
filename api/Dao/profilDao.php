<?php
  class profilDao{
    public static function getInfoProfil($id){
      $con2=new connexion2();
      $cont2=$con2->executerequete2("SELECT p.Id_Prof,a.Id_Adr,p.Nom,p.Prenom,a.Email,a.Telephone,p.Secteur_Activite,a.Departement,a.Commune,a.Adresse,a.Site_Web from tblprofil p
                                    INNER join tbladresse a on p.Id_Adr=a.Id_adr WHERE p.id_uti='$id'");
      $con2->closeconnexion2();
      return $cont2[0];
    }

    public static function updateProfil($profil){
            $con2=new connexion2();
            $con2->executeactualisation2("update tblprofil set Nom='$profil->nom',Prenom='$profil->prenom',Secteur_Activite='$profil->secteuract',Date_Ajout=NOW(),Date_Update=NOW() where Id_Prof=$profil->idprofil");
            $con2->closeconnexion2();
  }

  }
?>
