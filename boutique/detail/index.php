<?php
        require_once "../../api/Dao/boutiqueDao.php";
        require_once '../../api/Modele/Mboutique.php';
        require_once '../../api/Modele/Madresse.php';
        require_once '../../api/Modele/Msuiteboutique.php';
        require_once '../../api/Modele/Mconnexion_2.php';
        require_once '../../api/Dao/typeBoutiqueDao.php';
        require_once '../../api/Dao/departementDao.php';
        require_once '../../api/Dao/adresseDao.php';
        require_once '../../api/Dao/suiteBoutiqueDao.php';

      //  foreach(departementDao::getInfo() as $row):
         // echo $row[2];
       // endforeach;
  ini_set('display_errors', 'Off');

// if(isset($_POST['txtslogan'])){
 
//   $slogan=$_POST['txtslog'];
//  }

//nou fe vini ak done boutik la gras ak id boutik la
$id=$_GET['boutique_id'];

$ligne=boutiqueDao::getBoutique($id);

if(isset($_GET['boutique_id'])){
//nou fe vini ak done boutik la gras ak id boutik la
$id=$_GET['boutique_id'];

$ligne=boutiqueDao::getBoutique($id);

  if(isset($_POST['btnmodifye'])){
  //  $slogan=$_POST['txtslogan'];
       $boutique=new boutiqueDao();
       $adresse=new adresseDao();
      

        $boutique->idbou=$id;
        $boutique->idtypebou=$_POST['txttip'];
        $boutique->nombou=$_POST['txtnon'];

       $adresse->idadr=$ligne[15];
      $adresse->depart=$_POST['txtdepatman'];
      $adresse->com=$_POST['txtkomin'];
      $adresse->adr=$_POST['txtadres'];
      $adresse->email=$_POST['txtimel'];
      $adresse->tel=$_POST['txttelephone'];
      $adresse->siteweb=$_POST['txtsitweb'];
   
      $slogan=$_POST['txtslogan'];
      $tel=$_POST['txttelephone'];
  
     if(isset($boutique->idbou) && isset($boutique->idtypebou) && isset($boutique->nombou) && isset($adresse->idadr) && isset($adresse->depart) && isset($adresse->email)  && isset($adresse->tel) && isset($adresse->siteweb)){
    
       // n ap teste nimewo tel la avan
      if(preg_match('/^[0-9]*$/',$tel)){

        //
          //on va modifier l'objet employe
          boutiqueDao::updateBoutique($boutique);
          adresseDao::updateAdresse($adresse);
          suiteBoutiqueDao::update($slogan,$id);
          $sikse="Modifikasyon an fet avek sikse.";
          // $mesaj="";
      }else{
          $sikse="";
          $mesaj="Nimewo telefon la dwe gen chif selman";
         
      }
          


     }else{
       $mesaj="Modifikasyon an pa arive fet,tanpri reseye anko...";
     }


 }
}
//  if(!isset($mesaj) && !isset($ikse)){
//    $mesaj="";
//    $sikse="";
//  }
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
                include '../../file/info.inc.php'; 
               include '../../file/detail_boutique.inc.php'; 
                include '../../file/footer.inc.php';?>
     
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
