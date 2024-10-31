<?php

$con = new mysqli('mysql', 'root', '123456', 'mysql');

if($con){
    echo "Koneksi sukses ke database";
}