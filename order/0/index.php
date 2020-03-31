<?php
    $url =explode('/',$_SERVER['REQUEST_URI']);
    $_SESSION['id_transaction']=$url[3];
    header("Location:../detail");
