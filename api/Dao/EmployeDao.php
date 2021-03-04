<?php
 class EmployeDao{
    //fonction pour lister tous les employes
      public static function listeremploye(){
        $con=new connexion();

        $cont=$con->executerequete("select * from tblemploye");
        $con->closeconnexion();
        return $cont;
      }

      //fonction pour lister tous les employes en selectionnant l'id,nom_complet,telephone et le salaire
        public static function listeremploye2($iduti){
          $con=new connexion();
          $cont=$con->executerequete("select id_emp,nom_complet,telephone,salaire,etat,email,telephone from tblemploye where id_uti=$iduti");
          $con->closeconnexion();
          return $cont;
        }
        //fonction pour afficher tous les groupes sanguins
          public static function affichergroupesanguin(){
            $con=new connexion();
            $cont=$con->executerequete("select id_groupe_san,groupe from tblgroupesanguin");
            $con->closeconnexion();
            return $cont;
          }


        //fonction pour inserer des employes
      public static function ajouteremploye($emp){
        $con=new connexion();
        $con->executeactualisation("insert into tblemploye (id_emp,nom_complet,email,telephone,sexe,id_type_condition_mat,id_type_groupe_san,id_type_niveau_et,id_ville,adresse,id_poste_actuel,id_poste_ancien,salaire,etat,date_ajout,date_update)
        values('" . $emp->idemp . "','" . $emp->nomcomplet . "','" . $emp->email . "','" . $emp->tel . "','" . $emp->sexe . "','" . $emp->idtpcond . "','" . $emp->idgs . "',
        '".$emp->idtpniv . "','" . $emp->idville . "','" . $emp->adresse . "','" . $emp->idpostact . "','". $emp->idpostanc . "','" . $emp->salaire . "','" . $emp->etat . "',NOW(),
        '". $emp->dateup ."')");

        $con->closeconnexion();
      }

            public static function bloke($emp){
                $con=new connexion();
                $con->executeactualisation("update tblemploye set etat=0 where id_emp='$emp->idemp'");
                $con->closeconnexion();

            }
            public static function debloke($emp){
                $con=new connexion();
                $con->executeactualisation("update tblemploye set etat=1 where id_emp='$emp->idemp'");
                $con->closeconnexion();

            }

            public static function editeremploye($emp){
                      $con=new connexion();
                      $con->executeactualisation("update tblemploye set nom_complet='$emp->nomcomplet',email='$emp->email',telephone='$emp->tel',sexe='$emp->sexe',
                      id_type_condition_mat=$emp->idtpcond,id_type_groupe_san=$emp->idgs,id_type_niveau_et=$emp->idtpniv,id_ville=$emp->idville,adresse='$emp->adresse',
                      id_poste_actuel=$emp->idpostact,id_poste_ancien='$emp->idpostanc',salaire='$emp->salaire',date_update=NOW() where id_emp='$emp->idemp'");
                      $con->closeconnexion();

            }

            //fonction pour afficher tous les groupes sanguins
              public static function getetatemploye($emp){
                $con=new connexion();
                $cont=$con->executerequete("select etat from tblemploye where id_emp='$emp->idemp'");
                $con->closeconnexion();
                return $cont[0];
              }

              //fonction pour afficher tous les groupes sanguins
                public static function getemailandphone($emp){
                  $con=new connexion();
                  $cont=$con->executerequete("select email,telephone from tblemploye where email='$emp->email' or telephone=$emp->tel");
                  $con->closeconnexion();
                  return $cont[0];
                }




      // public static function supprimerbyid($id){
      //     $con=new connexion();
      //     $con->executeactualisation("delete from role where id=$id");
      //     $con->closeconnexion();
      //
      // }

  }
?>
