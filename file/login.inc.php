<form id="page-connexion" method="post">
    <div class="col-lg-6 col-md-12">
        <h1>Konekte</h1>
        <strong>Kwenpam biznis</strong> <br> <br>
        <?php
            if(!isset($_SESSION['id_uti'])){?>
                <div class="alert alert-primary" role="alert">
                    Pou konekte sou kwenpam biznis,<a href="http://kwenpam.com/login?referer=<?php echo $_SERVER['HTTP_REFERER'];?>" class="alert-link">konekte</a>, oubyen <a href="http://kwenpam.com/register?referer=<?php echo $_SERVER['HTTP_REFERER']?>" class="alert-link">kreye yon kont </a> sou kwenpam

                </div> <br>
            <?php }


        ?>

        <input type="text" name="pin"  value="<?php if(!$row){echo $e;}else{ echo $e="";}?>"   <?php if(!$row) echo 'disabled="disabled"'; ?> placeholder="Rantre PIN ou" class="form-control col-12">
        <br>
        <input type="submit" name="btnconnect"  value="konekte" class="btn btn-primary btn-small col-12"/>
    </div>
</form>
