<!DOCTYPE html>
<html lang="en">
<head>
<title>Immersivelabs</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Css File Added by Ak-->
<link href="<?=base_url();?>/assets/img/Capture.svg" rel="icon" type="image/x-icon">
<link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/stylesheet.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
<!--End Css File Added by Ak-->

<script src="https://yatharthritiitschool.com/immersive/assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
      <nav class="navbar navbar-expand-sm" style="background: #10122b;">
         <div class="container-fluid">
            <div class="d-flex gap-4">
            <img src="https://yatharthritiitschool.com/immersive/public/assets/img/Capture.svg" width="40px" alt="">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url();?>/User/new_index">Launchpad</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="#">Reports</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url();?>/Crisis_Sim/crisis">Exercise</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url();?>/Manage/manage">Manage</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url("User/user");?>">Users</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url("Role/index");?>">Role</a>
               </li>
            </ul>
            </div>
            <div class="right col-md-3">
               <div class="notification">
                  <i class="fa fa-bell text-white" aria-hidden="true"></i>
               </div>
               <div class="question mx-3">
                  <i class="fa fa-question-circle text-white" aria-hidden="true"></i>
               </div>
               <div class="profile">
                  <span class="user"><?= $firstletter.$lastletter?></span>
                  <i class="fa fa-caret-down" aria-hidden="true"></i>
                  <a href="<?php echo base_url('User/logout'); ?>" class="logout">Logout</a>
               </div>
            </div>
         </div>
      </nav>

      