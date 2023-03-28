<?php
    //Model 1
    $age =array("Peter"=>"35","Ben"=>"37","Joe"=>"43",);

    //Model 2
    $age['AGUS']="35";
    $age['PERMANA']="65";
    $age['JARJIT']="30";
    $age['MEIMEI']="17";
    $age['AGNES']="29";

    header("Content-Type: application/json");
    echo json_encode($age);
    