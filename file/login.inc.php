<form id="page-connexion" method="post">
    <div class="col-lg-6 col-md-12">
        <h1>Konekte</h1>
        <strong>Kwenpam biznis</strong> <br> <br>
        <?php
            if(!isset($_SESSION['id_uti'])){?>
                <div class="alert alert-primary" role="alert">
                    Pou konekte sou kwenpam biznis,<a href="https://www.kwenpam.com/login/?referer=http://localhost/kwenpambiznis/login" class="alert-link">konekte</a>, oubyen <a href="https://www.kwenpam.com/register/?referer=<?php echo "http://localhost/kwenpambiznis/login";?>" class="alert-link">kreye yon kont </a> sou kwenpam
                </div> <br>
            <?php }else  if(!$row){
                 echo "<div class='alert alert-primary' role='alert'>Nou kreye yon PIN otomatik pou ou, l&egrave; ou fin konekte, chanje li, sinon ou pap ka</div> <br>";
            }  
        ?> 
        <?php
            if(isset($mesaj)) 
                echo "<div class='alert alert-danger' role='alert'> $mesaj </div> <br>";
        ?> 
        <input type="password" name="pin"  value="<?php if(!$row){echo $e;}else{ echo $e="";}?>"   <?php if(!$row) echo 'disabled="disabled"'; ?> placeholder="Rantre PIN ou" class="form-control col-12">
        <br>
        <input type="submit" name="btnconnect"  value="konekte" class="btn btn-primary btn-small col-12"/>
    </div>
</form>
