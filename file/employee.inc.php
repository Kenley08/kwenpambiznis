
<?php
       require_once "../api/Dao/EmployeDao.php";
 ?>

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
            <a href="new/">
                <button class="au-btn au-btn-icon au-btn--blue au-btn--small">
                <i class="zmdi zmdi-plus"></i>Ajoute nouvo anplwaye</button>
            </a>
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
          <?php
        //    $r="emp-".time()."".rand(1,100);
          //  echo $r;
          ?>
          <form action="" method="post" >
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>K&ograve;danp.</th>
                        <th>Non konpl&egrave;</th>
                        <th>Telef&ograve;n</th>
                        <th>Sal&egrave;</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                  <?php foreach(EmployeDao::listeremploye2() as $row): ?>
                    <tr>
                      <td><?php echo $row[0] ?></td>
                      <td><?php echo $row[1] ?></td>
                      <td><?php echo $row[2] ?></td>
                      <td><?php echo $row[3]?></td>

                    <td>
              <button type="button" name="btnupdateetat" class="btn btn-secondary btn-sm" data-toggle="modal">bloke</button>
                <!-- <input type="submit" name="btnupdateetat" class="btn btn-secondary btn-sm" value="Bloke"  data-toggle="modal"/> -->
                            <a href="update/?id=<?=$row[0]?>"><button type="button" class="btn btn-primary btn-sm" >Modifye</button> </a>
                        </td>
                    </tr>

                    <?php endforeach;?>
                    </form>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
