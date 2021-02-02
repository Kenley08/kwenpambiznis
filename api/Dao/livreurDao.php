<?php
  class livreurDao{
          //fonction pour inserer livreur
        public static function ajouterlivreur($livreur){
          $con=new connexion();
          $con->executeactualisation("insert into tbllivreur (id_livreur,nom_compagnie,logo,telephone1,telephone2,email,id_ville,adresse_complete,description,etat,date_ajout,date_modifier)
          values('" . $livreur->idlivreur . "','pc express','" . $livreur->logo . "','" . $livreur->tel1 . "','" . $livreur->tel2 . "','" . $livreur->email . "','" . $livreur->idville . "',
          '".$livreur->adressecomplete . "','" . $livreur->description . "','" . $livreur->etat . "',NOW(),'". $livreur->dateup . "')");

          $con->closeconnexion();
        }


        public static function GetLivreurByPin($pin,$email){
                 $con=new connexion();
                 $cont=$con->executerequete("select * from tbllivreur where pin='$pin' and email='$email'");
                 $con->closeconnexion();
                 return $cont[0];
       }
       public static function GetLivreurById($id){
                $con=new connexion();
                $cont=$con->executerequete("select l.nom_compagnie,l.telephone1,v.nom_ville,l.adresse_complete,l.email from tbllivreur l inner join tblville v where l.id_ville=v.id_ville and  id_livreur='$id'");
                $con->closeconnexion();
                return $cont[0];
      }

      public static function updatePin($pin,$id,$livreur){
            $con=new connexion();
             $con->executeactualisation("update tbllivreur set pin='$pin' where id_livreur='$id' and pin=" . $livreur->pin);
            $con->closeconnexion();

        }
        public static function GetLivreurByIdLivreur($id){
                 $con=new connexion();
                 $cont=$con->executerequete("select * from tbllivreur where id_livreur='$id'");
                 $con->closeconnexion();
                 return $cont[0];
       }

       public static function updateLivreurAccount($livreur){
                 $con=new connexion();
                 $con->executeactualisation("update tbllivreur set nom_compagnie='$livreur->nonkonpayi',logo='$livreur->logo',telephone1='$livreur->tel1',telephone2='$livreur->tel2',
                 email='$livreur->email',id_ville=$livreur->idville,pin='$livreur->pin',adresse_complete='$livreur->adrescomp',description='$livreur->desc',etat='$livreur->etat',date_modifier=NOW() where id_livreur='$livreur->idlivreur'");
                 $con->closeconnexion();
       }


  }
?>
