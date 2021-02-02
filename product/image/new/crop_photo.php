<?php
session_start();
require_once "../../../api/Modele/Mconnexion_2.php";
require_once "../../../api/Dao/imageannonceDao.php";
require_once "../../../api/Modele/Mimageannonce.php";
require_once "../../../api/Modele/Mimage.php";
require_once "../../../api/Dao/imageDao.php";
/*
* Author : Amir Mustafa
* Email : amirengg15@gmail.com
* Subject : Crop photo using PHP and jQuery
*/

    // if(isset($_GET['productid'])){
    //     $productid=$_GET['productid'];
    // }



// Target siz
$targ_w = $_POST['targ_w'];
$targ_h = $_POST['targ_h'];
// quality
$jpeg_quality = 90;
// photo path
$src = $_POST['photo_url'];
// create new jpeg image based on the target sizes
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
// crop photo
imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
// create the physical photo
imagejpeg($dst_r,$src,$jpeg_quality);
// display the  photo - "?time()" to force refresh by the browser
echo '<img src="'.$src.'?'.time().'">';

if($src){
    //nnou pral move images ki nan dosye images

    //$despath='../../../images/';
   // echo $src.'?'.time();
  $nouveaufichier=@uniqid(basename($_FILES["name"]));
  $ext1=pathinfo($src,PATHINFO_EXTENSION);
  $newname=$nouveaufichier.".".$ext1;
  $despath='../../../images/'.$newname;
//nou move fichye imaj la nan dossier images ki nan baz la
  $fileMoved = rename($src, $despath);
  if($fileMoved){

    // echo $despath;
     //nou pral insere url  nan baz de donnee a

                        $id=time().rand(1,100).rand(1,100);
                        $id1=time().rand(1,100).rand(1,100);
                        //  $sikse=$nomfichier;
                      // n ap insere nan table image la ak imageannonce la
                        $img=new imageDao();
                        $img1=new imageannonceDao();

                        $img->idimg=$id;
                        $img->url=$newname;
                        $img->type=1;

                      
                        $img1->idimgan=$id1;
                        $img1->idimg=$img->idimg;
                        $img1->idan='1577303590';

                        if(($img->idimg) && isset($img->url) && isset($img->type) && isset($img1->idimgan) && isset( $img1->idimg) && isset($img1->idan)){    
                               imageDao::ajouterImage($img);
                               imageannonceDao::ajouterImageAnnonce($img1);
                               //n ap siprime imaj ki te kreye a nan dosye tanpon a
                            //   unlink( $filepath ) ;
                             //  $sikse="Imaj la anrejistre";
                        
                                 echo 'li insere';
                          }


    
  }

}

exit;
?>