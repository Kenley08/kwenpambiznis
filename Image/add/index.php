<?php
  require_once"../../api/Modele/Mconnexion_2.php";
  require_once"../../api/Modele/Mimage.php";
  require_once"../../api/Dao/imageDao.php";
  require_once"../../api/Modele/Mimageannonce.php";
  require_once"../../api/Dao/imageannonceDao.php";

  $image=new imageDao();
  $image->idimg="12334593438";
  $image->url="image/img2.jpg";
  $image->type=5;
  $image->dateup="";
  imageDao::ajouterImage($image);

  $imageann=new imageannonceDao();
  $imageann->idimgan="45595504575";
  $imageann->idimg=$image->idimg;
  $imageann->idan="21345676565";
  imageannonceDao::ajouteImageAnnonce($imageann);

  echo $mesaj="tt bgy byn pase ";
?>
