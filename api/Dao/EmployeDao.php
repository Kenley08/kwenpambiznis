<?php
<<<<<<< HEAD
require_once'../../api/Modele/Mconnexion.php';
require_once'../../api/Modele/Memploye.php';
=======
  require_once '../api/Modele/Mconnexion.php';
  require_once '../api/Modele/Memploye.php';
>>>>>>> 3550438d0833ac3bae6dc8f21bfd013a043a6d70
 class EmployeDao{
    //fonction pour lister tous les employes
      public static function listeremploye(){
        $con=new connexion();

        $cont=$con->executerequete("select * from tblemploye");
        $con->closeconnexion();
        return $cont;
      }

      //fonction pour lister tous les employes en selectionaant l'id,nom_complet,telephone et le salaire
        public static function listeremploye2(){
          $con=new connexion();
          $cont=$con->executerequete("select id_emp,nom_complet,telephone,salaire from tblemploye");
          $con->closeconnexion();
          return $cont;
        }
        //fonction pour afficher tous les groupes sanguins
          public static function affichergroupesanguin(){
            $con=new connexion();
            $cont=$con->executerequete("select id_groupe_san,groupefrom tblgroupesanguin");
            $con->closeconnexion();
            return $cont;
          }

        //fonction pour inserer des employes
      public static function ajouteremploye($emp){
        $con=new connexion();
        $con->executeactualisation("insert into tblemploye (id_emp,nom_complet,email,telephone,sexe,id_type_condition_mat,id_type_groupe_san,id_type_niveau_et,id_ville,adresse,id_poste_actuel,id_poste_ancien,salaire,etat,date_ajout,date_update)
        values('" . $emp->idemp . "','" . $emp->nomcomplet . "','" . $emp->email . "','" . $emp->tel . "','" . $emp->sexe . "','" . $emp->idtpcond . "','" . $emp->idgs . "',
        '".$emp->idtpniv . "','" . $emp->idville . "','" . $emp->adresse . "','" . $emp->idpostact . "','". $emp->idpostanc . "','" . $emp->salaire . "','" . $emp->etat . "','". $emp->dateaj ."',
        '". $emp->dateup ."')");

        $con->closeconnexion();
      }

            public static function modifyeetat($emp){
                $con=new connexion();
                $con->executeactualisation("update tblemploye set etat=0 where id=" . $emp->idemp);
                $con->closeconnexion();

            }



      // public static function supprimerbyid($id){
      //     $con=new connexion();
      //     $con->executeactualisation("delete from role where id=$id");
      //     $con->closeconnexion();
      //
      // }
  }
?>
