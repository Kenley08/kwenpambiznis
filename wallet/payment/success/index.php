<?php
require_once'../../../api/Modele/Mconnexion.php';
require_once'../../../api/Modele/Mtransaction.php';
require_once'../../../api/Dao/transactionDao.php';

$tran=new transaction();
$tran->idtran="158301035050";
$tran->transactionid="121212121213";
//
transactionDao::UpdateEtatTransactionId($tran);
if(isset($tran->idtran) && isset($tran->transactionid)){
  echo "Li update";
}else {
    echo "Li pa update";
}

?>
