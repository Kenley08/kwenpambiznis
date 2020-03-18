<?php
require_once'../api/Dao/EmployeDao.php';
$emp=new EmployeDao();
          //on passe l'objet des atrributs
          //$e="emp-".time()."".rand(1,100);
          $emp->idemp=$_POST[];
          $emp->nomcomplet=$_POST['nomcompletemp'];
          $emp->email=$_POST['emailemp'];
          $emp->tel=$_POST['telephoneemp'];
          $emp->sexe=$_POST['sexeemp'];
          $emp->idtpcond=1;
          $emp->idgs=3;
          $emp->idtpniv=2;
          $emp->idville=4;
          $emp->adresse="Tabarre";
          $emp->idpostact=2;
          $emp->idpostanc=5;
          $emp->salaire=$_POST['salaireemp'];
          $emp->etat=1;
          $emp->dateaj="";
          $emp->dateup="";
          EmployeDao::ajouteremploye($emp);

?>
