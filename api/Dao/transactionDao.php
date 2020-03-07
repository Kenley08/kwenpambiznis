<?php
   // require_once'../../api/Modele/Mconnexion.php';
   // require_once'../../api/Modele/Mtransaction.php';
 class transactionDao{
      public static function afficherkobous($id){
        $con=new connexion();
        $cont=$con->executerequete("select solde,id_bourse from tblbourse where id_uti=$id");
        $con->closeconnexion();
        return $cont[0];
      }


      public static function ajoutertransaction($transaction){
      $con=new connexion();
      $resultat=$con->executeactualisation("insert into tbltransaction (id_transaction,id_bourse,montant,id_etat_transaction,id_type_transaction,id_moyen_tran,order_id,transaction_id,description,date_ajout,date_update)
        values('" . $transaction->idtran . "','" . $transaction->idbourse . "','" . $transaction->montant . "','" . $transaction->idetattran . "','" . $transaction->idtypetran . "','" . $transaction->idmoyentran . "','" . $transaction->orderid . "','" . $transaction->transactionid . "',
        '" . $transaction->description . "',NOW(),'" . $transaction->dateupdate . "')");
        $con->closeconnexion();
        return $resultat;

}

      public static function listerbous($id){
        $con=new connexion();
        $cont=$con->executerequete("select solde,id_bourse from tblbourse where id_uti=$id");
        $con->closeconnexion();
        return $cont[0];
      }

          public static function UpdateEtatTransactionId($tran){
              $con=new connexion();
              $con->executeactualisation("update tbltransaction set id_etat_transaction=2,transaction_id='".$tran->transactionid . "'  where id_transaction=" . $tran->idtran);
              $con->closeconnexion();

          }

          public static function listertransaction(){
            $con=new connexion();
            $cont=$con->executerequete("SELECT tblbourse.id_uti,tbltransaction.montant,tbletattransaction.type,tbltypetransaction.type,tblmoyentransaction.moyen,tbltransaction.description,tbltransaction.date_ajout
          FROM tbltransaction
          	 join tbltypetransaction on tbltypetransaction.id_type_transaction=tbltransaction.id_type_transaction
               join tblmoyentransaction on tblmoyentransaction.id_moyen_tran=tbltransaction.id_moyen_tran
               join tbletattransaction on tbletattransaction.id_etat_transaction=tbltransaction.id_etat_transaction
                join tblbourse on tblbourse.id_bourse=tbltransaction.id_bourse
	  ");
            $con->closeconnexion();
            return $cont;
          }






  }
?>
