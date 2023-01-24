<?php
session_start();
if (isset($_POST['article_code']) and isset($_POST['r1']) and isset($_POST['r2']) and isset($_POST['r3']) and isset($_POST['r4'])){
    include_once __DIR__.'/../../../config/connection.php';
    $user=$_SESSION['username'];
    $article_code=$_POST['article_code'];
    $scientific_group=$_POST['scientific_group'];
    $r1=$_POST['r1'];
    $r2=$_POST['r2'];
    $r3=$_POST['r3'];
    $r4=$_POST['r4'];
    $sum=$r1+$r2+$r3+$r4;

    mysqli_query($connection_maghalat,"insert into ejmali (article_code, r1, r2, r3, r4, sum, level, rater, rate_date) values ('$article_code','$r1','$r2','$r3','$r4','$sum')");
}