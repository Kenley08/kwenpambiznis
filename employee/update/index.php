<?php
require_once"../../api/Connector/Connector.php";
require_once"../../api/Modele/Memploye.php";
require_once'../../api/Modele/Mconnexion.php';
require_once'../../api/Dao/EmployeDao.php';
require_once'../../api/Dao/ConditionMatrimonialDao.php';
require_once'../../api/Dao/GroupeSanguinDao.php';
require_once'../../api/Dao/typeNiveauDao.php';
require_once'../../api/Dao/VilleDao.php';
require_once'../../api/Dao/PosteDao.php';

if(isset($_GET['id'])){
  if(isset($_POST['submit'])){
      $id=$_GET['id'];
        $emp=new employe();
        $emp->idemp=$id;
        $emp->nomcomplet=$_POST['nomcomplet'];
        $emp->email=$_POST['email'];
        $emp->tel=$_POST['telephone'];
        $emp->sexe=$_POST['sexe'];
        $emp->idtpcond=$_POST['conditionmat'];
        $emp->idgs=$_POST['groupesanguin'];
        $emp->idville=$_POST['ville'];
        $emp->adresse=$_POST['adresse'];
        $emp->idtpniv=$_POST['nivo'];
        $emp->idpostact=$_POST['postactuel'];
        $emp->idpostanc=$_POST['postancien'];
        $emp->salaire=$_POST['salaire'];
      //  $emp->etat=1;
      //  $emp->dateaj="";
      //


     if(isset($emp->idemp) && isset($emp->nomcomplet) && isset($emp->nomcomplet) && isset($emp->email) && isset($emp->tel) && isset($emp->sexe)
        && isset($emp->idtpcond) && isset($emp->idgs) && isset($emp->idville) && isset($emp->idpostact) && isset($emp->idpostanc) && isset($emp->salaire)
        && isset($emp->dateaj) && isset($emp->dateup)){
          EmployeDao::editeremploye($emp);
          $sikse="Modifikasyon an fet avek sikse.";
          $mesaj="";

     }
     else{
        $mesaj="Modification an pa fet,reseye anko.";
        $sikse="";
      }

    //  $requete="update tblemploye set nom_complet='$nc',email='$email',telephone='$tel',adresse='$adres',salaire='$salaire',date_update=NOW() where id_emp='$id'";
    // $requete="update tblemploye set nom_complet='$nc',email='$email',telephone='$tel',adresse='$adres',salaire='$salaire',date_update=NOW() where id_emp='$id'
 }
}
 if(!isset($mesaj) && !isset($ikse)){
   $mesaj="";
   $sikse="";
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="kwenpam">
    <title>Kwenpam | Tablo b&ograve; | Piblisite | Nouvo</title>
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
              //  include '../../file/header.inc.php';
                //insertion du menu gauche de la page
              //  include '../../file/menu_left.inc.php';

                include '../../file/employee_update.php';
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
