 <!-- STATISTIC-->
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="statistic__item">
            <h2 class="number"><?php
            if(isset($_SESSION['id_uti'])){
              foreach(transactionDao::countretraittransaction($idbourse) as $ro):
                  echo $ro[0];
                endforeach;
            }
            ?></h2>
            <span class="desc">retr&egrave;</span>
            <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="statistic__item">
            <h2 class="number"><?php
            if(isset($_SESSION['id_uti'])){
              foreach(transactionDao::counttransaction($idbourse) as $r):
                  echo $r[0];
                endforeach;
            }

            ?></h2>
            <span class="desc">tranzaksyon</span>
            <div class="icon">
                <i class="zmdi zmdi-calendar-note"></i>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="statistic__item">
            <h2 class="number"><?php
              if(isset($_SESSION['id_uti'])){
                  echo $row[1];
              }
                ?></h2>

            <span class="desc">goud disponib</span>
            <div class="icon">
                <i class="zmdi zmdi-money"></i>
            </div>
        </div>
    </div>
</div>
<a href="transaction/" class="btn btn-primary btn-small" >Lis tranzaksyon</a>
<!-- END STATISTIC-->
