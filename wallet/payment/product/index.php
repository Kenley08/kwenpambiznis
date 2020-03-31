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
 
  if(isset($_GET['idan']) || isset( $_SESSION['id_an_pay'])){
      if($_SESSION['id_an_pay']){
        $idan= $_SESSION['id_an_pay'];  
      }else{
        $idan=$_GET['idan'];
        $_SESSION['id_an_pay']=$_GET['idan'];
      } 
       $ligne=produitDao::GetProduit($idan);
       if(!$ligne){
          header("Location:https://kwenpam.com/error/"); 
       } 
       if($ligne[3]==1){$mon="Goud";$chanje=$ligne[5];}else{$chanje=($ligne[5]*100);$mon="Dola ameriken / $chanje Goud <a href='https://www.brh.ht/taux-du-jour/'>Referans : BRH</a>";} 
       $_SESSION['id_type_commande']=$_POST['radios'];
        // //on va tester les champs si ils sont vides
        if(isset($_POST['btnvalide'])){
          $id_commande=time().''.rand(1,1000).''.rand(1,1000);
          //liste des informations necessaire
          $_SESSION['adresse_commande_client']=$_POST['nomvilleclient'].', '.$_POST['txtadresse'];
          //nap teste eske kliyan an ap pase pran pwodwi an oubyen yap livre li ba li
          if($_SESSION['id_type_commande']==1){
            $_SESSION['email_commande_vendeur']="p-email";
            $_SESSION['nom_commande_vendeur']="p-nom";
            $_SESSION['adresse_commande_vendeur']="p-adresse";
          }else{
            $_SESSION['email_commande_vendeur']="l-email";
            $_SESSION['nom_commande_vendeur']="l-nom";
            $_SESSION['adresse_commande_vendeur']="l-adresse";
          }
          $_SESSION['adresse_commande_vendeur']=$_POST['txtemail'];
          $_SESSION['nom_commande_client']=$_POST['txtnomcomplet'];
          $_SESSION['prix_total_commande_client']=$_POST['prixtotalachat'];
          $_SESSION['prix_commande_client']=$ligne[5].' '.$mon;
          $_SESSION['categorie_commande_client']=$ligne[16];
          $_SESSION['precision_commande_client']=$ligne[7];
          $_SESSION['email_commande_client']=$_POST['txtemail'];
          $_SESSION['quantite_commande_client']=1;
          $_SESSION['phone_commande_client']=$_POST['txttelephone'];
          $_SESSION['id_commande_client']=$id_commande;
          $_SESSION['amount_pay_client']=$_POST['prixtotalachat'];
          /////////////////////////////////////////////////////
          $transaction=new transactionDao();
          //on va tester les champs si ils sont vides
            $idtran=time().''.rand(1,1000);
            $idorder=time().''.rand(1,1000);
            $transaction->idtran=$idtran;
            $transaction->idbourse="";
            $transaction->montant=$_POST['prixtotalachat'];
            $transaction->idetattran=1;
            $transaction->idtypetran=1;
            $transaction->idmoyentran=2;
            $transaction->orderid=$idorder;
            $transaction->transactionid="";
            $transaction->description="Demand komand ".$ligne[7];
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
                                                            // $sikse="Tranzaksyon an ajoute.";
                                                            // $mesaj="";
                                                            // $sikse2="";
                                                            $_SESSION['order_id']=$idorder;
                                                            $_SESSION['id_transaction']=$idtran;
                                                            //header("location:moncash/verification/?payment_client&id=$idorder");
                                                         }
                                                }
                                                //////////////////////////////////////////////////////////////////////////////////////////
                                                //on fait cette boucle pour predre tou les transaction qui sont a zero pour ce numero de telephone
                                                      while($row[9]==0){
                                                        //on teste si le l'id du produit choisi a egale a celui de trouve dans la ligne de commande trouve a partir du telephone
                                                        //on le teste avec la session qui stocke l'id de l'uti
                                                        if($_SESSION['id_an_pay']==$row[1]){
                                                          //on affiche le message sinon on va peut inserer dans les deux tables
                                                          $mesaj="Ou gen yon k&ograve;mand ki f&egrave;t deja sou pwodui sila.";
                                                          // $sikse="";
                                                          // $sikse2="";
                                                        }else{
                                                          //on va inseres dans les deux tables
                                                          transactionDao::ajoutertransaction($transaction);
                                                          commandeDao::ajoutercommande($commande);
                                                          //$sikse="Tranzaksyon an ajoute.";
                                                          // $mesaj="";
                                                          // $sikse2="";
                                                          $_SESSION['order_id']=$idorder;
                                                          $_SESSION['id_transaction']=$idtran;
                                                         // header("location:moncash/verification/?payment_client&id=$idorder");
                                                        }
                                                          $row[9]++;
                                                        }
                                              }
                                            endforeach;

                                            //on teste si le sikse et $mesaj n exsite pas pour qu'on puise ajouter la transaction
                                            //quand on a pas trouve la colonne dans la table commande on va ajouter pour cette via cette partie de code
                                            if(!isset($mesaj)){
                                              transactionDao::ajoutertransaction($transaction);
                                              commandeDao::ajoutercommande($commande);
                                                // $sikse2="Tranzaksyon an ajoute.";
                                                // $sikse="";
                                                // $mesaj="";
                                                $_SESSION['order_id']=$idorder;
                                                $_SESSION['id_transaction']=$idtran;
                                                //header("location:moncash/verification/?payment_client&id=$idorder");
                                           }

                                      }else{
                                            $mesaj="Nimewo telef&ograve;n lan pa dwe gen piti chif.";
                                            }//on teste maintenant la longeur du chaine
                                        }else{
                                      $mesaj = "Nimewo telef&ograve;n la dwe genyen chif selman.";
                                  }

                             }else{
                           $mesaj="Non konple an dwe gen l&egrave;t s&egrave;lman";
                         }
                        }


          } 
          }
      }else{
        header("Location:https://kwenpam.com/error/");
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
    <link href="../../../css/main.css?v=333383" rel="stylesheet" media="all"> 
</head>
<body class="animsition"> 
    <div class="page-wrapper"> 
         <div id="entete-paiement">  
              <img src="../../../images/system/2.png" alt="imaj sistem sekirize">  
              <strong>Kwenpam</strong> P&egrave;man sekirize 
        </div>
        <div style="margin-top:0px;border:1px solid transparent;">
          <?php
              include '../../../file/payment_product.inc.php';
          ?>
        </div> 
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
  $(document).ready(function(){  
    //on teste si le client fait la livraison 
    $(".radio input").click(function(){ 
        val=this.id;
        if(val==="radio3"){
          $("#divprilivrezon").hide();
          prifinal= $("#inputpritotalsanlivrezon").val(); 
        }else  if(val==="radio4"){
          $("#divprilivrezon").show();
          prifinal= $("#inputpritotaaveklivrezon").val();  
        }
        $("#inputpritotal").val(prifinal);
        $("#pritotal").text(prifinal); 
    });

    //on teste si le client change de ville et on capte la ville
    $("#txtville").change(function(){
      $("#nomvilleclient").val($("#txtville option:selected").text());
    });
  });   
</script>
