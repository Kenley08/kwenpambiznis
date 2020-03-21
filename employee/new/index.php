<?php
  //require_once"../../api/Connector/Connector.php";
  require_once'../../api/Modele/Memploye.php';
  require_once'../../api/Modele/Mconnexion.php';
  require_once'../../api/Dao/EmployeDao.php';
  require_once'../../api/Dao/ConditionMatrimonialDao.php';
  require_once'../../api/Dao/GroupeSanguinDao.php';
  require_once'../../api/Dao/typeNiveauDao.php';
  require_once'../../api/Dao/VilleDao.php';
  require_once'../../api/Dao/PosteDao.php';
  ini_set('display_errors', 'Off');
if(!isset($mesaj) && !isset($sikse)){
  $mesaj="";
  $sikse="";

}
      if(isset($_POST['btnadd'])){
        $emp=new EmployeDao();
                  //on passe l'objet des atrributs
                  $e="emp-".time()."".rand(1,100);
                  $emp->idemp=$e;
                  $emp->nomcomplet=$_POST['nomcompletemp'];
                  $emp->email=$_POST['emailemp'];
                  $emp->tel=$_POST['telephoneemp'];
                  $emp->sexe=$_POST['sexe'];
                  $emp->idtpcond=$_POST['conditionmat'];
                  $emp->idgs=$_POST['groupesanguin'];
                  $emp->idville=$_POST['ville'];
                  $emp->adresse=$_POST['adresse'];
                  $emp->idtpniv=$_POST['nivo'];
                  $emp->idpostact=$_POST['postactuel'];
                  $emp->idpostanc=$_POST['postancien'];
                  $emp->salaire=$_POST['salaire'];
                  $emp->etat=1;
                  $emp->dateup="";

                  $nc=$_POST['nomcompletemp'];
                  $tel=$_POST['telephoneemp'];
                  $pa=$_POST['postancien'];
                  $sa=$_POST['salaire'];
                  $email=$_POST['emailemp'];
                  //  $nt =;
                  if(isset($emp->idemp) && isset($emp->nomcomplet) && isset($emp->email) && isset($emp->tel) && isset($emp->sexe)
                  && isset($emp->idtpcond) && isset($emp->idgs) && isset($emp->idville) && isset($emp->adresse) && isset($emp->idtpniv)
                 && isset($emp->idpostact) && isset($emp->idpostanc)  && isset($emp->salaire) && isset($emp->etat) && isset($emp->dateup)){
                   //on va tester si le nom contient entree ne contient pas de chiffres
                   if(preg_match ("/^[a-zA-Z\s]+$/",$nc)) {
                       //on va tester si le telephone contient seulment des chiffres entree ne contient pas de chiffres
                      if(preg_match('/^[0-9]*$/',$tel)){
                        //Coversion des chiffres de telephone en string
                        $t=strval($tel);
                        //on teste maintenant la longeur du chaine
                        if(strlen($t)==8){
                          //  on va tester maintenant si le champ poste ancien contient seulement des lettres et des virgules
                             if(preg_match ("/^[a-zA-Z\s\,]+$/",$pa)){
                               //on va tester si le salaire contient uniquement des chiffres
                             if(preg_match('/^[0-9]*$/',$sa)){
                               //on va maintenant tester si l'employe qui va enregistrer n'enregistre pas deja dans le systeme
                               //tester
                               $row=EmployeDao::getemailandphone($emp);
                               if($row[0]!=$email){
                                 if($row[1]!=$tel){
                                    //  $sikse="Mwen ka insere";
                                    EmployeDao::ajouteremploye($emp);
                                    $sikse="Anrejistreman an fet.";
                                 }else{
                                    $mesaj="Gen yon anploye ki anregistre ak telefon sa deja,tanpri mete yon lot.";
                                 }


                              //  echo $row[0];
                               }else{
                                 $mesaj="Gen yon anploye ki anregistre ak email sa deja,tanpri mete yon lot.";
                               }

                             }else{
                               $mesaj="Sale dwe genyen selman chif.";
                             }

                             }else{
                               $mesaj="Pos asyen an dwe gen let ak vigil selman.";
                             }

                        }else{
                            $mesaj="Nimewo telefon ou a dwe gen 8 chif.";
                        }


                      }else{
                          $mesaj = "Nimewo telefon la dwe genyen chif selman.";
                      }


                      }else{
                          $mesaj = "Non konple a dwe gen let selman.";
                      }


                    }else{
                        $mesaj="Anrejistreman pa fet,reyese anko.";
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
    <link href="../../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="../../vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../../css/theme.css" rel="stylesheet" media="all">
    <link href="../../css/main.css?v=33w2" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container2 index-page-container2">
            <?php
                //insertion de l'entete de la page
                //include '../../file/header.inc.php';
                //insertion du menu gauche de la page
                //include '../../file/menu_left.inc.php';
                include '../../file/new_employee.inc.php';
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
