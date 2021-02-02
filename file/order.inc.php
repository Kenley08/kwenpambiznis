<div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">Tout pwopriyete</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
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
            <!-- <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                <i class="zmdi zmdi-plus"></i>Ajoute nouvo pwodwi</button> -->
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                <select class="js-select2" name="type">
                    <option selected="selected">Export</option>
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
                        <th>Tip</th>
                        <th>Presizyon</th>
                        <th>Deskripsyon</th>
                        <th>Eta</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                   // foreach(produitDao::listerproduits($iduti) as $ligne):
                       //////////////////////////////////////////////////
                        // $_SESSION['id_an']=$row[0];
                       $ligne=commandeDao::getCommandeById($idcom);
                            //$_SESSION['id_an_com']=$ligne[0];
                          //  while($row[0]==$ligne[1]){
                              //echo $ligne[0]."<br/>";
                               //echo $ligne[9]."<br/>";

                          // $ligne2=produitDao::GetProduit($ligne[1]);
                      ?>
                    <tr>
                        <td><?php
                          // if($ligne[8]==1){
                          //   echo "Rezevasyon";
                          // }else if($ligne[8]==2){
                          //   echo "Livrezon";
                          // }
                          echo $ligne[1];
                        //
                        ?>
                      </td>
                        <td><?php

                          // if($ligne[8]==1){
                          //   echo "1 Rezevasyon ".$ligne2[7];
                          // }else if($ligne[8]==2){
                          //   echo "1 livrezon ".$ligne2[7];
                          // }
                          echo $ligne[2];

                        ?>
                      </td>
                        <td><?php echo $ligne[3]; ?></td>
                        <td class="denied">
                          <?php
                            // if($ligne[9]==1){
                            //   echo "trete deja";
                            // }else{
                            //   echo "poko trete";
                            // }
                           ?>
                        </td>
                        <td>fjgfgfkg
                        </td>
                    </tr>
                    <?php
                            //$ligne[1]++;
                        //}
                      //  endforeach;
                     // endforeach;
                    ?>
                </tbody>
            </table>
            


        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
