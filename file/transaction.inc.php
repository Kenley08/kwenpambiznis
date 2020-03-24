<div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">Tip</option>
                    <option value="0">Depo</option>
                    <option value="1">Acha</option>
                    <option value="2">Retr&egrave;</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="rs-select2--light rs-select2--sm">
                <select class="js-select2" name="time">
                    <option selected="selected">Jodia</option>
                    <option value="">3 Jou</option>
                    <option value="">1 Jou</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <button class="au-btn-filter">
                <i class="zmdi zmdi-filter-list"></i>Filtre</button>
        </div>
        <div class="table-data__tool-right">
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Rap&ograve;</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
    </div>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <!-- <th>Eta</th>  -->
                        <th>Kod Itiizate</th>
                        <th>montan</th>
                        <th>tip</th>
                        <th>eta</th>
                        <!-- <th>Non</th> -->
                        <th>moyen</th>
                        <th>Deskripsyon</th>
                        <th>Date</th>
                        <th> </th>
                        <!-- <th> </th> -->
                    </tr>
                </thead>
                <tbody>
                  <tr>

                  <?php

                   foreach(transactionDao::listertransaction($iduser) as $row):

                   ?>

                      <td><?php echo $row[1] ?></td>
                      <td><?php echo $row[2] ?></td>
                      <td><?php echo $row[3] ?></td>
                      <td><?php echo $row[4] ?></td>
                      <td><?php echo $row[5] ?></td>
                      <td><?php echo $row[6] ?></td>
                      <td><?php echo $row[7] ?></td>

                      <td>
                          <?php
                              if(($row[8]=="") || ($row[9]=="") || ($row[3]=="atant")){
                            echo '<form action="" method="post">';
                            echo '<input type="submit" id="idbtnvalide" name="btnvalide" class="btn btn-primary btn-small" value="konfime"/>';
                             echo '</form>';
                            // echo "ooooo";
                          }else{
                                  ?>
                                  <script type='text/javascript'>
                                       $(document).ready(function(){
                                          document.getElementById("idbtnvalide").style.dislay="none";

                                        });
                                    </script>

                                <?php } ?>
                              </td>

                  </tr>

                  <?php endforeach;?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
