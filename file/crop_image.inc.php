<?php
            if(isset($mesaj)){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $mesaj;?>
                </div>
            <?php }else if(isset($sikse)){?>
                <div class="alert alert-primary" role="alert">
                    <?php echo $sikse;?>
                </div>
            <?php }
        ?>

        

<?php
         if($croppath){
            echo "<img src='". $croppath ."' />";
        }else{
           echo "<img src='../../../images/temp/$nomfichier'  id='previewimage'>";
    
        }
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="x1" value="" />
<input type="hidden" name="y1" value="" />
<input type="hidden" name="w" value="" />
<input type="hidden" name="h" value="" /><br><br>

<?php
   if(!$sikse){
      echo "<input type='submit' name='btnsavecrop'  value='Anrejistre'  style='background-color:blue;border-radius:6px; width:100px;'>";
   }
   
?>

<input type="submit" name ="btnok" value="Ok" style="background-color:green;border-radius:6px; width:100px;">

<!-- <input type="submit" name ="btnsavecrop" value="Anrejistre" style="background-color:blue;border-radius:6px; width:100px;"> -->
<input type="submit" name ="btnretounen" value="Retounen" style="background-color:yellow;border-radius:6px; width:100px;">

</form>