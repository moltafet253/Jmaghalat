<?php
include_once 'config/connection.php';
include_once 'build/php/functions.php';
session_start();
$urlofthispage=$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if (!isset($_SESSION['islogin'])){
    $operation="Access Denied";
    logsend($operation,$urlofthispage,$connection_maghalat);
    header("location: index.php?errorlog");
}
@$user=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>پنل مدیریت</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="dist/css/custom-style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Persian Data Picker -->
    <link rel="stylesheet" href="/dist/css/persian-datepicker.min.css">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="../../dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="../../dist/css/custom-style.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
<!--    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">-->
<!--        <!-- Left navbar links -->-->
<!--        <ul class="navbar-nav">-->
<!--            به سامانه ارزیابی جشنواره مقالات علمی حوزه خوش آمدید-->
<!--        </ul>-->
<!--    </nav>-->
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <center>
                <span class="brand-text font-weight-bold">سامانه جشنواره مقالات علمی حوزه</span>
            </center>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <div>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">محمد عاشوری</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?php include_once __DIR__.'/menus.php'; ?>
                <!-- /.sidebar-menu -->
            </div>
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.content-header -->
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">صفحه اصلی</h3>
            </div>
            <!-- /.card-header -->
        </div>