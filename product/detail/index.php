<?php
  session_start();
  require_once "../../api/Dao/categorieProduitDao.php";
  require_once "../../api/Dao/ProduitsKwenPamDao.php";
  //require_once'../api/Modele/Memploye.php';
  require_once '../../api/Modele/Mannonce.php';
  require_once '../../api/Modele/Mconnexion_2.php';
  ini_set('display_errors', 'Off');

  if(isset($_GET['productid']) && isset($_GET['etat'])){
    $_SESSION['productid']=$_GET['productid'];
    $_SESSION['etat']=$_GET['etat'];
    $id=$_SESSION['productid'];
  
    
  }


  //n ap delete image la
  if(isset($_GET['Id_Img'])){
    $idImg=$_GET['Id_Img'];
    produitDao::deleteImage($idImg);
    $sikse="Imaj la siprime";
  }


  if(isset($_POST['btnmodifye']))
  {
    
     $annonce=new Mannonce();
     $annonce->idann=$id;
     $annonce->idcatann=$_POST['txtkategori'];
     $annonce->presizyon=$_POST['txtpresizyon'];
     $annonce->pri=$_POST['txtpri'];
     $annonce->idmon=$_POST['txtlajan'];
     $annonce->etat=$_POST['txtkalite'];
     $annonce->negociable=$_POST['txtnegosyab'];
     $annonce->qtestock=$_POST['txtestok'];
     // $_POST['txtdeskripsyon']="fdgdfgdfgdfgdg";
     $annonce->deskripsyon=$_POST['txtdeskripsyon'];
     $pri=$_POST['txtpri'];
     $quantite=$_POST['txtestok'];
             if(isset($annonce->idann) && isset($annonce->idcatann) && isset($annonce->pri) && isset($annonce->presizyon) && isset($annonce->idmon)
           && isset($annonce->etat) && isset($annonce->negociable) && isset($annonce->deskripsyon) && isset($annonce->qtestock)){

                if(preg_match('/^[0-9]*$/',$pri)){
                  //on teste si la quantite antre dans le champ ne contient pas de lettres
                    if(preg_match('/^[0-9]*$/',$quantite)){
                      produitDao::UpdateProduct($annonce);
                      $sikse="Modifikasyon an f&egrave;t avek siks&egrave;"; 
                    }else{
                      $mesaj="Kantite a pa sipoze gen l&egrave;t ladan";
                    }

                }else{
                  $mesaj="Pri ou mete a pa sipoze gen l&egrave;t ladan"; 
                }

             }
  } 


  if(isset($_GET['elim']) && isset($_GET['productid'])){
  //$idProduct='1576344723';
  produitDao::deleteProduct($_GET['productid']);
    //header('Location:../setting');


  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | Pwodwi | Detay</title>
     <!-- Fontfaces CSS-->
    <link href="../../css/font-face.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../css/main.css?v=23" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2">
            <?php
                include '../../file/header.inc.php';
                // include '../../file/info.inc.php'; 
               include '../../file/detail_product.inc.php'; include '../../file/footer.inc.php';?>
     
        </div>
        <?php
            //insertion du menu gauche de la page
           include '../../file/menu_left.inc.php';
        ?>
    </div>
    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="../../vendor/animsition/animsition.min.js"></script>
    <script src="../../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../vendor/select2/select2.min.js">
    </script>
    <script src="../../js/main.js"></script>
</body>
</html>
