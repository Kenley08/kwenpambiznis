<?php
    class utilisateurDao{
            
            public static function getByUsername($username){
                $con2=new connexion2();
                $cont2=$con2->executerequete2("select d.Email,d.Telephone
                from tblutilisateur u
                inner join tblprofil p on p.Id_uti=u.Id_Uti
                inner join tbladresse d on d.Id_adr=p.Id_Adr
                where u.username='$username'");
                $con2->closeconnexion2();
                return $cont2[0];
            }

             //fonction pour update etat connexion administrateur
        public static function updatePassword($newpass,$password){
            $con2=new connexion2();
            $con2->executeactualisation2("update tblutilisateur set Password='$newpass' where Password ='$password'" );
            $con2->closeconnexion2();
        }
        
}
?>