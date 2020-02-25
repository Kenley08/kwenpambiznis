<?php
  require_once'../Dao/EmployeDao.php';
  //require_once'../Modele/Memploye.php';

       switch ($_GET['a']){
         case 'ins':
         //on cree un nouveau objet employe
          $emp=new EmployeDao();
          //on passe l'objet des atrributs
          $e="emp-".time()."".rand(1,100);
          $emp->idemp=$e;

          $emp->nomcomplet=$_POST['nomcomplet'];
          $emp->email=$_POST['email'];
          $emp->tel=$_POST['telephone'];
          $emp->sexe=$_POST['sexe'];
          $emp->idtpcond=1;
          $emp->idgs=3;
          $emp->idtpniv=2;
          $emp->idville=4;
          $emp->adresse="Tabarre";
          $emp->idpostact=2;
          $emp->idpostanc=5;
          $emp->salaire=$_POST['salaire'];
          $emp->etat=1;
          $emp->dateaj="";
          $emp->dateup="";


          // //pour Ajouter les parametres a l'objet apres avoir recuperer les ids
          // $emp->nomcomplet=$_POST['nomcomplet'];
          // $emp->email=$_POST['email'];
          // $emp->tel=$_POST['telephone'];
          // $emp->sexe=$_POST['sexe'];
          // $emp->idtpcond=$_POST['conditionpatrimonial'];
          // $emp->idgs=$_POST['groupesanguin'];
          // $emp->idtpniv=$_POST['tpniv'];
          // $emp->idville=$_POST['ville'];
          // $emp->adresse=$_POST['adresse'];
          // $emp->idpostact=$_POST['postactuel'];
          // $emp->idpostanc=$_POST['denyejob'];
          // $emp->salaire=$_POST['salaire'];
          // $emp->etat=1;
          // $emp->dateaj="";
          // $emp->dateup="";

          EmployeDao::ajouteremploye($emp);
          break;

       }

    header("location: ../employee/index.php");



?>
