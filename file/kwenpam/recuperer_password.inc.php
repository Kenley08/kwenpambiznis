<div class="container" style="background:white">
    
<?php
            if(isset($mesaj)){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $mesaj;?>
                </div>
            <?php }else{?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $sikse;?>
             </div>
            <?php }?>

                
   </br></br>     
        
<div class="row m-t-30">
    <!-- <div class="col-md-12" style="background-color:black"> -->
    <div class="text-pub" id="step-1-new-ads" style="background:none;" >
             Antre Non Itilizat&egrave; a <br> <br> 
             <form action="" method="post"  class="form-horizontal">
            <div class="row form-group">
                
                <div class="col-12 col-md-9">
                    <input type="text" name="txtusername" required placeholder="Non Itilzat&egrave;" class="form-control">
                </div>
                
            </div>

    
            <div class="row form-group">
             <input type="submit" class="btn btn-primary btn-small" value="Rekipere"  name="btnrekipere" >
            </div>
    <!-- </div> -->
    </form>
    </div>
</div>
