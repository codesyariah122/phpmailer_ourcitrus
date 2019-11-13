<!DOCTYPE html>
<!-- 
All Work No Play Makes jack A dull Boy
@pujiermanto-codesyariah
@ourcitrus by pt.gemilang citrus berjaya
@copyright-2019
//Bumi Manusia
-->

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title;?> | <?=$this->fungsi->user_login()->username?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

<style>
.logo-mini{
font-family: 'Poiret One', cursive;
}
.logo-lg{
font-family: 'Poiret One', cursive;
}
</style>

</head>
<body class="skin-purple sidebar-mini">

<div class="wrapper">
  <header class="main-header">
    <a href="<?=base_url()?>dashboard" class="logo">
      <?=$logo_min;?> 
      <?=$logo_max;?>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 3 tasks</li>
                <li> 
                    <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress XS">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>   
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>

          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php if($this->session->userdata('userid') == 1 ): echo base_url('assets/dist/img/logo.png'); else: echo base_url('assets/dist/img/admin.png'); endif;?>" class="user-image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php if($this->session->userdata('userid') == 1 ): echo base_url('assets/dist/img/logo.png'); else: echo base_url('assets/dist/img/admin.png'); endif;?>" class="img-circle">
                <p>
                  <?=$this->fungsi->user_login()->name?>
                  <small> <?=$this->fungsi->user_login()->address?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= site_url(); ?>profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('admin/logout')?>" class="btn btn-default btn-flat bg-red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>