<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


      <link rel="icon" type="image/x-icon" href="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg">


      <style type="text/css">
         .right{display: flex; justify-content: center;}
         .user{background: red; height: 30px; width: 30px; border-radius: 50%; padding: 8px; color: #fff;}
         .fa-caret-down{color: #fff;}
         /*
         CSS for the main interaction
         */
         .tabset > input[type="radio"] {
         position: absolute;
         left: -200vw;
         }
         .tabset .tab-panel {
         display: none;
         }
         .tabset > input:first-child:checked ~ .tab-panels > .tab-panel:first-child,
         .tabset > input:nth-child(3):checked ~ .tab-panels > .tab-panel:nth-child(2),
         .tabset > input:nth-child(5):checked ~ .tab-panels > .tab-panel:nth-child(3),
         .tabset > input:nth-child(7):checked ~ .tab-panels > .tab-panel:nth-child(4),
         .tabset > input:nth-child(9):checked ~ .tab-panels > .tab-panel:nth-child(5),
         .tabset > input:nth-child(11):checked ~ .tab-panels > .tab-panel:nth-child(6) {
         display: block;
         }
         /*
         Styling
         */
         .tabset > label {
         position: relative;
         display: inline-block;
         padding: 15px 15px 25px;
         border: 1px solid transparent;
         border-bottom: 0;
         cursor: pointer;
         font-weight: 600;
         }
         .tabset > label::after {
         content: "";
         position: absolute;
         left: 15px;
         bottom: 10px;
         width: 22px;
         height: 4px;
         background: #8d8d8d;
         }
         .tabset > label:hover,
         .tabset > input:focus + label {
         color: #06c;
         }
         .tabset > label:hover::after,
         .tabset > input:focus + label::after,
         .tabset > input:checked + label::after {
         background: #06c;
         }
         .tabset > input:checked + label {
         border-color: #ccc;
         border-bottom: 1px solid #fff;
         margin-bottom: -1px;
         }
         .tab-panel {
         padding: 30px 0;
         border-top: 1px solid #ccc;
         }
         /*
         Demo purposes only
         */
         .flx{
         display: flex;
         justify-content: space-between;
         }
         .card-headerr p{
         font-size: 0.875rem;
         }
         .card-title{
         width: 200px;
         white-space: nowrap;
         overflow: hidden;
         text-overflow: ellipsis;
         }
         .card-text{
         margin-bottom: 5px;
         }
         .tabset {
         max-width: 100%;
         }
         .tab-panels{
         background: rgb(13, 15, 37);
         padding: 25px;
         }
         .inprogress a{
         text-decoration: none;
         color: rgb(42, 51, 168);
         background: rgb(235, 236, 251);
         border-radius: 16px;
         padding: 0.25rem 0.5rem;
         }
         .icon a{
         color: #000;
         }
         .button{
         display: flex;
         align-items: center;
         justify-content: end;
         }
         .assign-btn a{
         cursor: pointer;
         display: inline-flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border: 2px solid transparent;
         outline: rgb(207, 213, 222) solid 1px;
         outline-offset: -2px;
         box-sizing: border-box;
         border-radius: 4px;
         font-weight: 600;
         font-size: 1rem;
         line-height: 1.5rem;
         color: #fff;
         text-decoration: none;
         background: rgba(255, 255, 255, 0);
         padding: 0.5rem 1rem;
         }
         .view-all a{
         color: #fff;
         text-decoration: none;
         }
         .logout{
            color: #fff;
            text-decoration: none;
            margin-left: 30px;
         }
         .logout:hover{
            color: #fff;

         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-sm" style="background: #10122b;">
         <div class="container-fluid">
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
               <!-- <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url();?>/Manage/manage">Manage</a>
               </li> -->
              <!--  <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url("User/user");?>">Users</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-white" href="<?=base_url("Role/index");?>">Role</a>
               </li>
               -->
            </ul>
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
     
   </body>
</html>