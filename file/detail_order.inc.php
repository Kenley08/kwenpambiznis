<?php
    if(isset($result)){
        if($result==1){
            echo "<div class='alert alert-success col-lg-9 col-md-12' role='alert'>Konfimasyon tranzaksyon an f&egrave;t av&egrave;k siks&egrave;. </div>";
        }else  if($result==2){
            echo "<div class='alert alert-warning col-lg-9 col-md-12' role='alert'>Konfimasyon tranzaksyon an f&egrave;t av&egrave;k siks&egrave;, men gen yon pwobl&egrave;m ki rive nan kreye fich tranzaksyon.</div>";
        }else{
            echo "<div class='alert alert-warning col-lg-9 col-md-12' role='alert'>Gen yon er&egrave; ki pase, nou pa arive konfime tranzaksyon ou an.</div>";
        }
    }
?> 
 <div class="row"  >    
    <div class="col-lg-9 col-md-12 bg-white">
        <form action="?" method="POST"> <br>
            <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label for="txtkantitekobdisponib" class=" form-control-label">K&ograve;b diponib (an goud)</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="txtkantitekobdisponib" name="kantitekobdispo" value="" placeholder="5055" disabled  class="form-control">
                </div>
             </div> 
            <a href="../"> <button type="button" class="btn btn-secondary btn-small" >Tounen</button>  </a>
            <!-- <button type="button" name="submit" class="btn btn-primary btn-small" id="btnvaliderdemandetransaction">Valide</button> -->
            <?php
                if(!isset($_GET['delivery'])){?>
                    <input type="submit" name="btnconfimer" value ="Konfime" class="btn btn-primary btn-small" />
                <?php } 
            ?> 
            <br><br>
        </div>
        </form>
    </div> 
</div>
