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



  }
?>
