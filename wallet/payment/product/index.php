<?php
  session_start();
  require_once '../../../api/Modele/Mconnexion.php';
  require_once '../../../api/Modele/Mtransaction.php';
  require_once '../../../api/Modele/Mcommande.php';
 require_once '../../../api/Dao/transactionDao.php';
 require_once '../../../api/Dao/ProduitsKwenPamDao.php';
  require_once '../../../api/Dao/commandeDao.php';
  require_once '../../../api/Modele/Mconnexion_2.php';
  require_once '../../../api/Dao/villeDao.php';
  ini_set('display_errors', 'Off');

  if(isset($_GET['idan'])){
      $_SESSION['id_an_pay']=$_GET['idan'];
       $idan=$_GET['idan'];


   $ligne=produitDao::GetProduit($idan);
  // //on va tester les champs si ils sont vides
        if(isset($_POST['btnvalide'])){
          $transaction=new transactionDao();
          //on va tester les champs si ils sont vides
            $idtran=time().''.rand(1,1000);
            $idorder=time().''.rand(1,1000);
            $transaction->idtran=$idtran;
            $transaction->idbourse="";
            $transaction->montant=$ligne[5];
            $transaction->idetattran=1;
            $transaction->idtypetran=1;
            $transaction->idmoyentran=2;
            $transaction->orderid=$idorder;
            $transaction->transactionid="";
            $transaction->description="Demand komand prodwi ".$ligne[0]."Deskripsyon ".$ligne[8];
            $transaction->dateupdate="";

            if((isset($transaction->idtran)) && (isset($transaction->idbourse)) && (isset($transaction->montant)) && (isset($transaction->idetattran)) && (isset($transaction->idtypetran)) && (isset($transaction->idmoyentran)) && (isset($transaction->orderid))
          && (isset($transaction->transactionid)) &&  (isset($transaction->description)) && (isset($transaction->dateupdate))){
                      //  transactionDao::ajoutertransaction($transaction);
                      $_SESSION['id_tran']=$idtran;
                        //on stock les attributs du transaction dans des Session
                        $nc=$_POST['txtnomcomplet'];
                        $tel=$_POST['txttelephone'];
                        if(isset($tel) && isset($nc)){
                             if(preg_match ("/^[a-zA-Z\s]+$/",$nc)){
                               //on va tester le format telephone
                                      if(preg_match('/^[0-9]*$/',$tel)){
                                        //on convertit le telephone en chaine de caractere
                                          $t=strval($tel);
                                          if(strlen($t)>=8){
                                              //on attache les sesssions aux attributs de l'objet Commande
                                                     $commande=new commandeDao();
                                                     $idcom=time().''.rand(1,1000);
                                                     $commande->idcom=$idcom;
                                                     $commande->idann=$ligne[0];
                                                     $commande->idtran=$idtran;
                                                     $commande->nomcomplet=$nc;
                                                     $commande->telephone=$_POST['txttelephone'];
                                                     $commande->email=$_POST['txtemail'];

                                                     $commande->ville=$_POST['txtville'];
                                                     $commande->adresse=$_POST['txtadresse'];
                                                     $commande->idtypecom=$_POST['radios'];
                                                     $commande->etat=0;
                                                     $commande->dateup="";
                                            //on va faire une recherche a partir de ce numero telephone
                                              foreach(commandeDao::getCommande($tel) as $row):
                                              if($row){
                                                //On teste si etat de la commande recherche via le telephone de l'acheteur
                                                if($row[9]==1){

                                                          //test attributs de l objet commande
                                                          if(isset($commande->idcom) && isset($commande->idann)  && isset($commande->idtran) && isset($commande->nomcomplet) && isset($commande->telephone) && isset($commande->email) && isset($commande->ville)
                                                          && isset($commande->adresse)  && isset($commande->idtypecom)   && isset($commande->etat)  && isset($commande->dateup)){

                                                            //on va inseres dans les deux tables
                                                            transactionDao::ajoutertransaction($transaction);
                                                            commandeDao::ajoutercommande($commande);
                                                            $sikse="Tranzaksyon an ajoute.";
                                                            $mesaj="";
                                                            $sikse2="";
                                                            header("location:../success/?id_tran=$idtran");
                                                         }
                                                }
                                                //////////////////////////////////////////////////////////////////////////////////////////
                                                //on fait cette boucle pour predre tou les transaction qui sont a zero pour ce numero de telephone
                                                      while($row[9]==0){
                                                        //on teste si le l'id du produit choisi a egale a celui de trouve dans la ligne de commande trouve a partir du telephone
                                                        //on le teste avec la session qui stocke l'id de l'uti
                                                        if($_SESSION['id_an_pay']==$row[1]){
                                                          //on affiche le message sinon on va peut inserer dans les deux tables
                                                          $mesaj="Ou gen yon komand ki fet deja sou pwodui sila.";
                                                          $sikse="";
                                                          $sikse2="";
                                                        }else{
                                                          //on va inseres dans les deux tables
                                                          transactionDao::ajoutertransaction($transaction);
                                                          commandeDao::ajoutercommande($commande);
                                                          $sikse="Tranzaksyon an ajoute.";
                                                          $mesaj="";
                                                          $sikse2="";
                                                          header("location:../success/?id_tran=$idtran");
                                                        }
                                                          $row[9]++;
                                                        }
                                              }
                                            endforeach;

                                            //on teste si le sikse et $mesaj n exsite pas pour qu'on puise ajouter la transaction
                                            //quand on a pas trouve la colonne dans la table commande on va ajouter pour cette via cette partie de code
                                            if(!isset($sikse) && !isset($mesaj)){
                                              transactionDao::ajoutertransaction($transaction);
                                              commandeDao::ajoutercommande($commande);
                                                $sikse2="Tranzaksyon an ajoute.";
                                                $sikse="";
                                                $mesaj="";
                                                header("location:../success/?id_tran=$idtran");
                                           }

                                      }else{
                                            $mesaj="Nimewo telefon la pa dwe gen piti chif.";
                                            }//on teste maintenant la longeur du chaine
                                        }else{
                                      $mesaj = "Nimewo telefon la dwe genyen chif selman.";
                                  }

                             }else{
                           $mesaj="Non konple a dwe gen let selman";
                         }
                        }


          }







          }
      }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | Bous | Peye | Pwodwi</title>
     <!-- Fontfaces CSS-->
    <link href="../../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../../css/main.css?v=233" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
         <?php
            include '../../../file/payment_product.inc.php';
         ?>
    </div>
    <!-- Jquery JS-->
    <script src="../../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../../vendor/animsition/animsition.min.js"></script>
    <script src="../../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../../js/main.js"></script>
</body>
</html>

<script>
function enable_button()
    {
      if(document.getElementById("checkbox1").checked){
          document.getElementById("btnvalide").disabled=false;
      }else{
          document.getElementById("btnvalide").disabled=true;
      }
  }
  </script>
