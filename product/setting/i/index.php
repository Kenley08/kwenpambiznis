<?php
session_start();
    require_once "../../../api/Dao/VilleDao.php";
    require_once "../../../api/Modele/Mconnexion.php";
    require_once "../../../api/Dao/livraisonDao.php";
    require_once "../../../api/Dao/detaillivraisonDao.php";
    ini_set('display_errors', 'Off');

  if(isset($_SESSION['productid']) && isset($_SESSION['descriptionliv']) && isset($_SESSION['nblivre'])){
        $iduti=$_SESSION['id_uti'];
        $idpro=$_SESSION['productid'];
        $deskripsyonliv=$_SESSION['descriptionliv'];
        $nblivre=$_SESSION['nblivre'];
        $etat=$_SESSION['etat'];
      //  $ville=$_POST['txtville'];
      //  $prixville=$_POST['txtprixviile'];

         $alea=time()."".rand(1,100);
         $livraison=new livraisonDao();
         $livraison->idliv=$alea;
         $livraison->idann=$idpro;
         $livraison->idlivreur=$iduti;
         $livraison->etat=$etat;
         $livraison->desc=$deskripsyonliv;
         $livraison->nbacc=$nblivre;
         $livraison->dateup="";

         $ale=time()."".rand(1,100);
         $detaillivraison=new detaillivraisonDao();
         $detaillivraison->iddetailliv=$ale;
         $detaillivraison->idliv=$livraison->idliv;
         $detaillivraison->dateup="";

        if(isset($_POST['btnvalide'])){
            //on va inserer dans la table de livraison
            //on passe l'objet des atrributs
            $detaillivraison->idville=$_POST['txtville'];
            $detaillivraison->prix=$_POST['txtprixville'];
            if(isset($livraison->idliv) && isset($livraison->idann) && isset($livraison->etat) && isset($livraison->desc) && isset($livraison->nbacc) && isset($livraison->dateup)
            && isset($detaillivraison->iddetailliv) && isset($detaillivraison->idliv) && isset($detaillivraison->idville)  && isset($detaillivraison->prix) && isset($detaillivraison->dateup)){
              //on va tester si cette annonce est deja paramatre
                $row=livraisonDao::getlivraison($idpro);
                        if($row[1]!=$idpro){
                         //echo $row[1];
                          livraisonDao::ajouterlivraison($livraison);
                          detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
                          $sikse="Paramet ou a modifye avek sikse.";
                          $mesaj="";
                        }else{
                        //  $row[1]=$idliv;
                          foreach(detaillivraisonDao::GetDetailLivraison($row[0]) as $r):
                            //echo  $r[2];
                            if($r[2]==$_POST['txtville']){
                                //echo  $r[2];
                                $sikse="";
                                $mesaj="Vil sa la deja.";
                            }
                          endforeach;
                          //on cherche si le mesaj n existe pas
                          if(!isset($mesaj)){
                            if($row[2]!=1){
                              $detaillivraison->idliv=$row[0];
                               detaillivraisonDao::ajouterdetaillivraison($detaillivraison);
                               $sikse="Ou ajoute yon lot vil pou livrezon pwodwi sila.";
                               $mesaj="";
                            }else{
                                 $mesaj="Ou te di deja ke se Kwenpam k ap jere livrezon a";
                            }

                           }

                          }


                        }


            }


       }


    if(!isset($mesaj) && !isset($sikse)){
      $mesaj="";
      $sikse="";

    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | Pwodwi | Param&egrave;t</title>
     <!-- Fontfaces CSS-->
    <link href="../../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../../css/main.css?v=33w2" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2 index-page-container2">
            <?php
                //insertion de l'entete de la page
               include '../../../file/header.inc.php';
                //insertion du menu gauche de la page
              include '../../../file/menu_left.inc.php';
                include '../../../file/setting_product_i.inc.php';
                include '../../../file/help_all.inc.php';
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
    </script>
    <!-- Main JS-->
    <script src="../../../js/main.js"></script>

    <script src="../../../js/index.js?v=142321"></script>
</body>
</html>

<script>
function enable_button()
    {
      if(document.getElementById("checkbox1").checked){
          document.getElementById("btnvalidate").disabled=false;
      }else{
          document.getElementById("btnvalidate").disabled=true;
      }
  }



        $(document).ready(function() {
          $("#btnvalid").hide();
          $("#radio3").click(function() {
            $("#btnvalid").show();
            $("#btnvalid").hide();
          });
          $("#rdioerp").click(function() {
            $("#btnvalid").hide();
            $("#btnvalidate").show();
          });
        });



</script>
