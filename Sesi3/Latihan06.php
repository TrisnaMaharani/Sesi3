<?php
    $mhs=array(
        array("Ardika","222347215","Denpasar"),
        array("Wahyu Hidayat","222347067","Malang"),
        array("Santi Kireana","222347342","Surabayar"),
        array("Zizi","222347112","Flores")
    );
    header("Content-Type: application/json");
    echo json_encode($mhs);