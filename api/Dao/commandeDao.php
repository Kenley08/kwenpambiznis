<?php
class commandeDao{
  public static function getCommande($telephone){
    $con=new connexion();
    $cont=$con->executerequete("select * from tblcommande where telephone='$telephone'");
    $con->closeconnexion();
    return $cont;
  }
  //fonction pour inserer des les commandes
  public static function ajoutercommande($commande){
    $con=new connexion();
    $con->executeactualisation("insert into tblcommande (id_commande,id_an,id_transaction,nom_complet,telephone,email,id_ville,adresse_complete,id_type_com,etat,date_ajout,date_update)
    values('" . $commande->idcom . "','" . $commande->idann . "','" . $commande->idtran . "','" . $commande->nomcomplet . "','" . $commande->telephone . "','" . $commande->email . "','" . $commande->ville . "',
     '". $commande->adresse . "','" . $commande->idtypecom . "','" . $commande->etat. "',NOW(),'" . $commande->dateup. "')");
    $con->closeconnexion();
  }



}

?>
