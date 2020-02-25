<?php
  require_once'../Dao/BourseDao.php';
  require_once'../Modele/Mbourse.php';

       switch ($_GET['a']){
         case 'ins':
         //on cree un nouveau objet employe
          $b=new BourseDao();
          //on passe l'objet des atrributs
          $bourse="bour-".time()."".rand(1,100);
          $bourse->idbourse=$b;

          $bourse->idtypebourse=1;
          $bourse->iduti=$_POST[''];
          $bourse->solde=$_POST[''];
          $bourse->etat=$_POST[''];
          $bourse->dateaj="";
          $bourse->dateup="";

          EmployeDao::ajouterbourse($bourse);
          break;
       }

    //header("location: ../employee/index.php");



?>
