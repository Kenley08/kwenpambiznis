<form class="row" id="midle-new-ads" action="" method="POST">
    <div class="col-lg-9 col-md-12"> 
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
       
        
          <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txttip" class=" form-control-label">Tip</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="txttip" class="form-control">
                              <?php 
                                  
                              foreach(typeboutiqueDao::getType() as $liy):
                                
                                if(($ligne[14] ==$liy[0])){
                                  echo "<option selected='selected' value='$liy[0]'>$liy[1]</option>";
                                 }else {  

                                    if(($_POST['txttip']==$liy[0])){
                                          echo "<option selected  value='$liy[0]'>$liy[1]</option>";
                                       }else{
                                        echo "<option value='$liy[0]'>$liy[1]</option>";
                                       }

                                    
                                 }
                            endforeach;?>
                            </select>
                        </div>
                </div>
                  

                  

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtnon" class=" form-control-label">Non</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtnon"  value="<?php 
                    if($sikse){
                        echo $_POST['txtnon'];
                    }else{
                        echo $ligne[6];
                    }
                    
                   ?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>

            <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="txtdepatman" class=" form-control-label">Depatman</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="txtdepatman" class="form-control">
                              <?php 
                              
                             // $row=adresseDao::getAdresse($id);
                              foreach(departementDao::getInfo() as $row):
                            if($ligne[7]==$row[0]){
                                echo "<option selected='selected' value='$row[0]'>$row[1]</option>";
                            }
                            else{
                                
                                if(($_POST['txtdepatman']==$row[0])){
                                    echo "<option selected  value='$row[0]'>$row[1]</option>";
                                 }else{
                                    echo "<option value='$row[0]'>$row[1]</option>";
                                 }

                                
                            }
        
                                    // echo "<option value='$row[0]'>$row[1]</option>";
                                 
                            endforeach;?>
                            </select>
                        </div>
                </div>
                  

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="txtkomin" class=" form-control-label">Komin</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtkomin"  value="<?php  
                    if($sikse){
                        echo $_POST['txtkomin'];
                    }else{
                        echo $ligne[8];
                    }?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>

            <div class="row form-group">
            <div class="col col-md-3">
                    <label for="txtadres" class=" form-control-label">Adr&egrave;s</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtadres"  value="<?php 
                    if($sikse){
                        echo $_POST['txtadres'];
                    }else{
                        echo $ligne[9];
                    }
                    
                    ?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>
            
            <div class="row form-group">
            <div class="col col-md-3">
                    <label for="txtimel" class=" form-control-label">imel</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" name="txtimel"  value="<?php 
                   if($sikse){
                    echo $_POST['txtimel'];
                }else{
                    echo $ligne[10];
                }
                    
                    ?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>


            <div class="row form-group">
            <div class="col col-md-3">
                    <label for="txttelephone" class=" form-control-label">Telef&ograve;n</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txttelephone"  value="<?php
                    if($sikse){
                        echo $_POST['txttelephone'];
                    }else{
                        echo $ligne[11];
                    }
                    
                    ?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                </div>
            </div>

            <div class="row form-group">
            <div class="col col-md-3">
                    <label for="txtsitweb" class=" form-control-label">Sit w&egrave;b</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="txtsitweb"  value="<?php

                    if($sikse){
                        echo $_POST['txtsitweb'];
                    }else{
                        echo $ligne[12];
                    }

                    ?>" placeholder="Ex: 500" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                    
                </div>
            </div>



            <div class="row form-group">
            <div class="col col-md-3">
                    <label for="txtslogan" class=" form-control-label">Slogan</label>
                </div>
                <div class="col-12 col-md-9">
                <input type="text" name="txtslogan"  value="<?php if($sikse){
                        echo $_POST['txtslogan'];
                    }else{
                        echo $ligne[13];
                    }?>" placeholder="Ex:Bon pwodi,bon satisfaksyon" class="form-control" required>
                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                    
                </div>
            </div>
            
            <a href="../"  class="btn btn-secondary btn-small">Anile </a> 
          
            <input type="submit" class="btn btn-primary btn-small" value="Modifye" name="btnmodifye"/>
           
           
    </div>
</form>
<br> <br>

