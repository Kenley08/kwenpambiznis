<?php
    session_start();
    require_once "../../api/Modele/Mconnexion.php";
    require_once "../../api/Modele/Mconnexion_2.php";
    require_once "../../api/Dao/administrationDao.php";
    require_once "../../api/Modele/Madministration.php";
   // require_once "../../api/Modele/Mlivraison.php";

   $_SESSION['id_uti']='1507584121';
   if(isset($_SESSION['id_uti'])){
    $iduti= $_SESSION['id_uti'];
   }
   
   if(isset($_POST['btnmodifiercompte'])){
       $pin=$_POST['txtpin'];
       $ligne=administrationDao::getAdminByPin($pin,$iduti);

       //nou pral fe yon update nan tab administrateur a pou pou nou ka siprime kont la
       if($ligne[0]){
        $iduser=$ligne[0];
        administrationDao::updateDel($iduser);
        header("Location:../../login/");
       }
       else{
           $mesaj="PIN ou antre a pa bon";
       }
      
       
       echo $ligne[0]."</br>";
     
        //echo "yes yes yes";
   }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <meta name="author" content="kwenpam"> 
    <title>Kwenpam | Tablo b&ograve; | Itilizat&egrave; | Modifye</title>
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
    <link href="../../css/main.css?v=33w2" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2 index-page-container2">
            <?php 
                //insertion de l'entete de la page
                include '../../file/header.inc.php'; 
                //insertion du menu gauche de la page
                include '../../file/menu_left.inc.php';
                include '../../file/delete_account.inc.php';
                include '../../file/help_all.inc.php'; 
            ?>
        </div>  
    </div>
 
    <!-- Jquery JS-->
    <script src="../../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../../vendor/bootstrap-4.1/bootstrap.min.js"></script>  
    <script src="../../vendor/animsition/animsition.min.js"></script> 
    <script src="../../vendor/perfect-scrollbar/perfect-scrollbar.js"></script> 
    <script src="../../vendor/select2/select2.min.js">
    </script> 
    <!-- Main JS-->
    <script src="../../js/main.js"></script>

    <script src="../../js/index.js?v=142321"></script>
</body>
</html>

<script>

      function enable_button()
    {
      if(document.getElementById("checkbox1").checked){
          document.getElementById("modifiercompte").disabled=false;
      }else{
          document.getElementById("modifiercompte").disabled=true;
      }
    }

</script>