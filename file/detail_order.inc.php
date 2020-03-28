 <div class="row"  >    
    <div class="col-lg-9 col-md-12 bg-white">
            <br> <h4>Enf&ograve;masyon pwodwi</h4> <br>
            <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Kategori</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="Sandal" disabled  class="form-control">
                </div>
             </div>  
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Presizyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="Sandal kawouthcou" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Kantite</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="1" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Kalite</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="Nef" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">deskripsyon</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea rows="5" placeholder="Sandal" disabled  class="form-control">bon bagay </textarea>
                </div>
             </div>
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Pri total</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="5000 goud" disabled  class="form-control">
                </div>
             </div>   
            <br> <h4>Enf&ograve;masyon acht&egrave;</h4> <br>
            <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Non konpl&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="Eustache Y." disabled  class="form-control">
                </div>
             </div>  
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">Telef&ograve;n</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="47239162" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">imel</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="eus@gmail.com" disabled  class="form-control">
                </div>
             </div> 
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">vil</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="delmas" disabled  class="form-control">
                </div>
             </div>  
             <div class="row form-group">
                <div class="col col-md-3"> 
                    <label   class=" form-control-label">adr&egrave;s konpl&egrave;</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text"   placeholder="Kafoufey, jerel batay" disabled  class="form-control">
                </div>
             </div>  
             <!--Enfomasyon sou moun kap vann pwodwi an, si se yon konpayi livrezon kap verifye enfomasyon yo lap wel, si se moun kap vann lan li pap afiche-->
             <?php 
                if(!isset($_GET['delivery'])){?>
                     <br> <h4>Enf&ograve;masyon vand&egrave; a</h4> <br>
                    <div class="row form-group">
                        <div class="col col-md-3"> 
                            <label   class=" form-control-label">Non konpl&egrave;</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="Eustache Y." disabled  class="form-control">
                        </div>
                    </div>  
                    <div class="row form-group">
                        <div class="col col-md-3"> 
                            <label   class=" form-control-label">Telef&ograve;n</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="47239162" disabled  class="form-control">
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col col-md-3"> 
                            <label   class=" form-control-label">imel</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="eus@gmail.com" disabled  class="form-control">
                        </div>
                    </div> 
                    <div class="row form-group">
                        <div class="col col-md-3"> 
                            <label   class=" form-control-label">vil</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="delmas" disabled  class="form-control">
                        </div>
                    </div>  
                    <div class="row form-group">
                        <div class="col col-md-3"> 
                            <label   class=" form-control-label">adr&egrave;s konpl&egrave;</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"   placeholder="Kafoufey, jerel batay" disabled  class="form-control">
                        </div>
                    </div> 
                <?php }
             ?>
             <a href="../"> <button type="button" class="btn btn-secondary btn-small" >Tounen</button>  </a> 
        <?php
            if(!isset($_GET['delivery'])){?>
                <input type="submit" name="btnconfimer" value ="Konfime" class="btn btn-primary btn-small" />
            <?php } 
        ?> <br> <br>
   
</div>
