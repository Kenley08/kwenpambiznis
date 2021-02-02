<?php
    require_once "api/Dao/ProduitsKwenPamDao.php";
    require_once 'api/Modele/Mconnexion_2.php';
    require_once "api/Dao/commandeDao.php";
    require_once "api/modele/Mconnexion.php";
    ini_set('display_errors', 'Off');

 if($_GET['txtsearch']){
    $id=$_GET['txtsearch'];
    //$productid=$_GET['productid'];
    $ligne=produitDao::GetProduit($id);
    if($ligne){
        header("location:product/index.php?productid=$id");
    }else{
      //  $iduti='1507584121';
       // $idancom='56767667676';
       // $idan='1122334433';
       // $etat=0;
        //nou pral fe yo reche nan pou komande la
        $liy=commandeDao::getCommandeById($id);
         if($liy){
        //header("location:account/update/index.php");
        header("location:order/?id_com_an=$id");
        }else{
            header("location:nothingsearch.php");
        }
    
    }

}

?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <meta name="author" content="kwenpam">
       <title>Kwenpam | Dashboard</title>
        <!-- Fontfaces CSS-->
       <link href="css/font-face.css" rel="stylesheet" media="all">
       <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
       <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
       <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
   
       <!-- Bootstrap CSS-->
       <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
   
       <!-- Vendor CSS-->
       <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
       <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
       <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
       <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
       <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
       <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
       <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
       <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
   
       <!-- Main CSS-->
       <link href="css/theme.css" rel="stylesheet" media="all">
       <link href="css/main.css?v=1" rel="stylesheet" media="all">
   </head>
   <body class="animsition">
       <div class="page-wrapper">
           <div class="page-container2 index-page-container2">
               <?php
                   //insertion de l'entete de la page
                   include 'file/header.inc.php';
               
                   echo "<br><br><p style='margin-left:90px;'>Aucun resultat</p>";
                   
                   //insertion du menu gauche de la page
                 include 'file/menu_left.inc.php';
                   include 'file/footer.inc.php';
               ?>
           </div>
       </div>
   
       <script src="vendor/jquery-3.2.1.min.js"></script>
       <!-- Bootstrap JS-->
       <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
       <script src="vendor/animsition/animsition.min.js"></script>
       <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
       <!-- Main JS-->
       <script src="js/main.js"></script>
   </body>
   </html>
   
    </div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="/js/main.js"></script>
</body>
</html>
