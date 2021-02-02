<div class="container" style="background:white">
        

<?php
            if(isset($mesaj)){?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $mesaj;?>
                </div>
            <?php }?>
                
   </br></br>     
        
<div class="row m-t-30">
    <!-- <div class="col-md-12" style="background-color:black"> -->
    <div class="text-pub" id="step-1-new-ads" style="background:none;" >
             Antre PIN ou a pou w ka siprime kont la<br> <br> 
             <form action="" method="post"  class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtpin" class=" form-control-label">PIN</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtpin" required placeholder="1234" class="form-control">
                </div>
                
            </div>

            <div class="row form-group">
                <div class="radio" style="margin-left:7px;" >
                        <label for="radio" class="form-check-label"  style="font-size:14px; font-weight:bold">
                            <input type="radio" id="checkbox1" name="radios" value="option4"  class="form-check-input" onclick="enable_button()"  >j'ai lu et j'accepte les termes et conditions
                        </label>
                        
                    </div>
            </div>

            <div class="row form-group">
             <input type="submit" class="btn btn-primary btn-small" value="Siprime Kont" disabled  name="btnmodifiercompte" id="modifiercompte">
            </div>
    <!-- </div> -->
    </form>
    </div>
</div>
