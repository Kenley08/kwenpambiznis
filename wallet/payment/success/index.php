<?php
session_start();
require_once '../../../api/Modele/Mconnexion.php';
require_once '../../../api/Modele/Mtransaction.php';
require_once '../../../api/Dao/transactionDao.php';
include "../../../smtptester/class.phpmailer.php"; 
include '../../../api/Modele/sendmail.class.php';

//nap teste si transaction ID moncash voye a bon
if(isset($_GET['transactionId'])){
  $transactionid=$_GET['transactionId'];
  $tran=new transaction();
  if(isset($_SESSION['id_transaction'])){
    $tran->idtran=$_SESSION['id_transaction'];
    $tran->transactionid=$transactionid;
    if(isset($tran->idtran) && isset($tran->transactionid)){
    transactionDao::UpdateTransactionId($tran);
      //nap teste si gen yon komand dejan
      if(isset($_SESSION['id_commande_client'])){ 
            //nap vin ak tout done ki nesese pou nou voye imel yo ale
            $adresseclient=$_SESSION['adresse_commande_client'];
            $adressevendeur=$_SESSION['adresse_commande_vendeur'];
            $nomclient=$_SESSION['nom_commande_client'];
            $nomvendeur=$_SESSION['nom_commande_vendeur'];
            $prixtotal=$_SESSION['prix_total_commande_client'];
            $prix=$_SESSION['prix_commande_client'];
            $categorie=$_SESSION['categorie_commande_client'];
            $precision=$_SESSION['precision_commande_client'];
            $emailclient=$_SESSION['email_commande_client'];
            $quantite=$_SESSION['quantite_commande_client'];
            $emailvendeur=$_SESSION['email_commande_vendeur'];
            $phoneclient=$_SESSION['phone_commande_client'];
            $idcommande=$_SESSION['id_commande_client'];
            //nap teste si se kliyan an kap pase pran pwodwi an, oubyen yap livre li
            if($_SESSION['id_type_commande']==1){
              $decision="pou yo livre ou pwodwi an : $adresseclient";
            }else{
              $decision="wap pase pran pwodwi an : $adressevendeur";
            }
            //email acheteur
            $email=$emailclient;
            //email livreur
            $email_vendeur=$emailvendeur;
            //sujet acheteur
            $subject="Resepsyon komand";
            //sujet livreur
            $subject_vendeur="Demand konfimasyon";

            $host="mail.kwenpam.com";
            //information server mail pour acheteur
            $from="notifications-noreply@kwenpam.com";
            $username="notifications-noreply@kwenpam.com"; 
            $fromname="Kwenpam biznis";
            $password="Jesuschrist@2014";
            //ko mesaj pou moun ki achte a
            $body="<h2><strong>Kwenpam biznis</strong></h2><br/><br/>
                    Hello $nomclient, k&ograve;mand ou an pase av&egrave;k siks&egrave;. Ou di $decision. Ou peye <strong>$prixtotal</strong> pou s&egrave;is lans
                    <strong>Enf&ograve;masyon sou pwodwi an</strong> <br/>
                    Kategori : $categorie <br/>
                    Presizyon : $precision <br/>
                    Pri : $prix <br/>
                    Kantite : $quantite <br/> <br/>
                    <a href='https://kwenpam.com/business/order/$idcommande' class='btn btn-primary'>Detay k&ograve;mand</a>
                    <br/> <hr/> 
                    Si tout fwa ou gen yon kesyon oubyen yon sigjesyon ekri nou sou <a href='mailto:info@kwenpam.com?Subject=demand ed'>info@kwenpam.com</a>. Oubyen rele nou sou +509 4834-9386
            "; 
            //ko mesaj pou moun kap vann lan
            $body="<h2><strong>Kwenpam biznis</strong></h2><br/><br/>
                    Hello $nomvendeur, ou gen yon nouvo k&ograve;mand pou ou konfime. Konekte pou ou kapab f&egrave; sa. <br/> <br/>   
                    <strong>Enf&ograve;masyon sou pwodwi an</strong> <br/>
                    Kategori : $categorie <br/>
                    Presizyon : $precision <br/>
                    Pri : $prix <br/>
                    Kantite : $quantite <br/> <br/>
                    <strong>Enf&ograve;masyon acht&egrave;</strong> <br/>
                    Non konpl&egrave; : $nomclient <br/>
                    Telef&ograve;n : $phoneclient <br/>
                    Imel : $emailclient <br/>
                    Adr&egrave;s : $adresseclient<br/>
                    <a href='https://kwenpam.com/business/order/detail/?id=$idcommande' class='btn btn-primary'>Detay k&ograve;mand</a>
                    <br/> <hr/>  
            "; 
            if(sendmail($host,$username,$password,$from,$fromname,$subject,$email,$body)==1){
                if(sendmail($host,$username,$password,$fromr,$fromname,$subject_vendeur,$email_vendeur,$body_vendeur)==1){
                    $mesaj="Tout bagay byen pase";
                }else{
                    $mesaj="Tout bagay byen pase, men nou pa arive voye imel bay moun kap vann lan";
                } 
            }else{
                $mesaj="Nou pa arive voye okenn imel";
            }   
      } 
      //nap delete tout id tranzaksyon ak komand yo
      $_SESSION['id_commande_client']=NULL;
      $_SESSION['id_transaction']=NULL;
      $_SESSION['id_an_pay']=NULL;
    }else {
        $mesaj="Nou pa arive anrejistre enf&ograve;masyon yo pou ou.";
    }
  }else{
    $mesaj="Pa gen okenn tranzaksyon ki te k&ograve;manse deja.";
  }
}else{
  $mesaj="Nou pa arive rekipere tranzaksyon an";
} 
echo $mesaj;
?>
