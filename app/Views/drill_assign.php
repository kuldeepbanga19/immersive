<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
      <style type="text/css">
         body{
         background: rgb(249, 249, 250);
         margin: 0;
         }
         .right{display: flex; justify-content: end; align-items: center;}
         .user{background: red; height: 30px; width: 30px; border-radius: 50%; padding: 8px; color: #fff;}
         .fa-caret-down{color: #000;}
         .criss-sim{
         font-size: 1.5rem; 
         color: rgb(33, 37, 26);
         font-weight: 700;
         line-height: 1.2;
         }
         .second-header{
         padding: 1rem;
         background: rgb(255, 255, 255);
         border-bottom: 1px solid rgb(207, 213, 222);
         }
         .create-view{
         display: flex !important;
         justify-content: space-around;
         }
         .create-view .create a{
         text-decoration: none;
         }
         .create-view .tree-view a{
         text-decoration: none;
         }
         .buttn{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
         color: rgb(97, 110, 123);
         border: none;
         box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
         }
         .save-next{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
         color: rgb(255, 255, 255);
         border: 1.5px solid rgb(36, 45, 147);
         }
         .save-review{
         display: flex;
         justify-content: space-around;
         }
         .ul{list-style: none;}
         .ul li a{text-decoration: none; color: #000;}
         .form{
         background-color: rgb(255, 255, 255);
         border-radius: 4px;
         border: 1px solid rgb(207, 213, 222);
         box-shadow: rgb(0 0 0 / 10%) 0px 4px 6px -1px, rgb(0 0 0 / 6%) 0px 2px 4px
         }
         [type="text"],select{
         background-color: rgb(255, 255, 255);
         box-sizing: border-box;
         width: 100%;
         border: 1px solid rgb(129, 143, 157);
         border-radius: 4px;
         color: rgb(33, 37, 26);
         padding: 1rem;
         font-size: 1rem;
         transition: border 0.3s ease 0s;
         outline: 0px;
         }
         [type="date"]{
         background-color: rgb(255, 255, 255);
         box-sizing: border-box;
         width: 100%;
         border: 1px solid rgb(129, 143, 157);
         border-radius: 4px;
         color: rgb(33, 37, 26);
         padding: 1rem;
         font-size: 1rem;
         transition: border 0.3s ease 0s;
         outline: 0px;
         }
         .submit-btn{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
         color: rgb(255, 255, 255);
         border: 1.5px solid rgb(36, 45, 147);
         }
         .right-sidebar{
         max-width: calc(480px - 1rem);
         background: rgb(255, 255, 255);
         border: 1px solid rgb(207, 213, 222);
         box-shadow: rgb(0 0 0 / 10%) 0px 1px 3px, rgb(0 0 0 / 6%) 0px 1px 2px;
         border-radius: 4px;
         padding: 0.5rem;
         margin: 0px 1rem 1rem;
         }
         .content-rigth{
         background: rgb(247, 250, 255);
         border-radius: 4px;
         padding: 1rem;
         }
         .add-inject{
         border: 2px dashed rgb(207, 213, 222);
         padding: 10px;
         }
         .ul-flex{
         display: flex;
         flex-wrap: wrap;
         border: 2px dashed rgb(129, 143, 157);
         border-radius: 4px;
         padding: 1rem;
         list-style: none;
         }
         .ul-flex li{
         border: 1px solid rgb(129, 143, 157);
         padding: 0.25rem;
         border-radius: 4px;
         margin: 5px;
         }
         .add-role{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         width: 100%;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
         color: rgb(97, 110, 123);
         border: none;
         box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
         }
         .footer{
         display: flex;
         width: 100%;
         padding: 20px 0px;
         border-top: 1px solid #d9d6d6;
         -webkit-box-pack: end;
         margin-top: 20px;
         justify-content: flex-end;
         }
         .back-overview{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: transparent;
         color: rgb(97, 110, 123);
         border: none;
         box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
         }
         .next-feedback{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
         color: rgb(255, 255, 255);
         border: 1.5px solid rgb(36, 45, 147);
         }
         .saveexit{
         text-decoration: none;
         }
         .popup{
         position: fixed;
         height: 100%;
         width: 100%;
         background: rgba(0, 0, 0, 0.5);
         z-index: 999;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .popup-content{
         background: #fff;
         width: 40%;
         border-radius: 5px;
         padding: 20px;
         }
         .popup-header{
         display: flex;
         justify-content: space-between;
         }
         .popup-body{
         padding: 20px 0px;
         border-top: 1px solid #cdc9c9;
         border-bottom: 1px solid #cdc9c9;
         }
         .cancel{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: transparent;
         color: rgb(97, 110, 123);
         border: none;
         box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
         }
         .save{
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         background: linear-gradient(rgb(219, 58, 52) 0%, rgb(153, 41, 36) 100%);
         color: rgb(255, 255, 255);
         border: none;
         box-shadow: rgb(197 52 47) 0px 0px 0px 1px;
         }
         .popup-btn{
         display: flex;
         justify-content: end;
         }
         .ol{
         display: flex;
         flex: 1 1 auto;
         -webkit-box-pack: center;
         justify-content: center;
         max-width: 100%;
         }
         .second-header{
         background: linear-gradient(90deg, rgb(4, 45, 83), rgb(98, 15, 69)) 0% 0% / cover;
         }
         .li p{
         color: #fff;
         }
         .li{
         cursor: inherit;
         width: 170px;
         display: flex;
         flex-direction: column;
         -webkit-box-align: center;
         align-items: center;
         }
         .ol-first{
         height: 40px;
         width: 40px;
         display: flex;
         -webkit-box-pack: center;
         justify-content: center;
         -webkit-box-align: center;
         align-items: center;
         border-radius: 50%;
         position: relative;
         z-index: 2;
         background-color: rgba(255, 255, 255, 0.2);
         color: #fff;
         }
         .ol-first-last{
         height: 40px;
         width: 40px;
         display: flex;
         -webkit-box-pack: center;
         justify-content: center;
         -webkit-box-align: center;
         align-items: center;
         border-radius: 50%;
         position: relative;
         z-index: 2;
         background-color: rgba(255, 255, 255, 0.2);
         color: #fff;
         }
         .ol-one{
         background-color: rgb(31, 199, 150) !important;
         }
         .ol-two{
         background-color: rgb(235, 4, 147);
         }
         .ol-one::after{
         content: "";
         position: absolute;
         height: 4px;
         background-color: rgb(31, 199, 150) !important;
         width: 130px;
         left: 40px;
         margin-top: calc(20px);
         top: -2px;
         }
         .ol-first::after{
         content: "";
         position: absolute;
         height: 4px;
         background-color: rgba(255, 255, 255, 0.2);
         width: 130px;
         left: 40px;
         margin-top: calc(20px);
         top: -2px;
         }
         .footer-fixed{
         display: flex;
         -webkit-box-pack: end;
         justify-content: flex-end;
         position: fixed;
         bottom: 0;
         background: linear-gradient(90deg, rgb(4, 45, 83), rgb(98, 15, 69));
         width: 100%;
         padding: 20px 10rem 20px 3rem;
         }
         .footer button{
         outline: none;
         cursor: not-allowed;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         font-weight: 700;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         padding: 0.5rem 1rem;
         color: rgb(16 18 44 / 78%);
         border: 1.5px solid rgb(209, 210, 219);
         }
         /* 06-12-2022 */
         .choose-items-bx li {
         display: flex;
         align-items: center;
         justify-content: space-between;
         }
         .box-one-d ul {
         padding: 0;
         margin: 0;
         }
         .box-one-d ul li {
         list-style: none;
         }
         .box-one-d ul li a {
         text-decoration: none;
         padding: 10px 15px;
         display: block;
         color: #0e0e0e;
         font-size: 14px;
         border-radius: 4px;
         text-decoration: none;
         position: relative;
         transition: 0.4s;
         }
         .box-one-d ul li a:after {
         content: "\f107";
         font-family: 'FontAwesome';
         position: absolute;
         right: 5%;
         top: 26%;
         transform: rotate(-90deg);
         }
         .box-one-d ul li a.active {
         background: #CFD5DE;
         font-weight: 500;
         }
         .box-one-d ul li a:hover {
         background: #cfd5de50;
         transition: 0.4s;
         }
         .box-one-d label {
         font-size: 16px;
         font-weight: 500;
         margin-bottom: 10px;
         }
         .box-one-d {
         width: 100%;
         display: block;
         border: 1px solid lightgray;
         padding: 15px;
         border-radius: 4px;
         }
         .box-inner img {
         width: 65px;
         border-radius: 70px;
         }
         .box-inner {
         border: 1px solid lightgray;
         padding: 0 12px;
         border-radius: 4px;
         }
         .box-two-d {
         border: 1px solid lightgray;
         padding: 15px;
         border-radius: 4px;
         margin-top: 15px;
         }
         .cont1 {
         font-size: 12px;
         line-height: 17px;
         }
         .inner-bx-third img {
         width: 50px;
         }
         .custom-500 {
         font-weight: 500;
         }
         .small-text {
         font-size: 12px;
         }
         .cont {
         font-size: 14px;
         }
         .inner-bx-third {
         background: white;
         padding: 12px;
         border-radius: 4px;
         border: 1px solid lightgray;
         margin-top: 15px;
         transition: 0.4s;
         cursor: pointer;
         }
         .choose-items-bx .disabled {
         background: #f7f7f7;
         color: #5a5a5a;
         }
         .choose-items-bx .disabled .badge {
         color: #5a5a5a !important;
         }
         .action-bx {
         padding: 0 15px;
         }
         .choose-items-bx li {
         border: none;
         border-top: 1px solid lightgray !important;
         transition: 0.4s;
         cursor: pointer;
         }
         .choose-items-bx li:hover {
         transition: 0.4s;
         }
         .cussifdjcos{
         position: relative;
         }
         form.cussifdjcos .fa {
         position: absolute;
         top: 50%;
         left: 10%;
         transform: translate(-50%, -50%);
         z-index: 9999;
         }
         input.form-control.form-control-sm.py-0 {
         padding: 0 35px;
         }
         .inner-box2 {
         border: 1px solid lightgray;
         padding: 0;
         border-radius: 4px;
         margin: 20px 0 0;
         }
         .action-bx2 {
         padding: 4px 8px;
         border-bottom: 1px solid lightgray;
         }
         .inner-bx-third:hover {
         transform: translate(0, -5px);
         transition: 0.4s;
         }
      @keyframes spinner {
        0% {
          transform: translate3d(-50%, -50%, 0) rotate(0deg);
        }
        100% {
          transform: translate3d(-50%, -50%, 0) rotate(360deg);
        }
      }
       .spin::before {

        animation: 1.5s linear infinite spinner;
        animation-play-state: inherit;
        border: solid 5px #cfd0d1;
        border-bottom-color: #1c87c9;
        border-radius: 50%;
        content: "";
        height: 25px;
        width: 25px;
        position: absolute;
        top: 10%;
        left: 10%;
        transform: translate3d(-50%, -50%, 0);
        will-change: transform;
      }
      .spin{
         position: relative;
         right:1.5rem;
      }
      button.sc-hBEYos.fCxuTn {
    outline: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: medium;
    font-weight: 700;
    position: relative;
    user-select: none;
    transition: background-color 0.2s linear 0s;
    white-space: nowrap;
    border-radius: 4px;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
    color: rgb(255, 255, 255);
    border: 1.5px solid rgb(36, 45, 147);
    float: right;
    margin: 27px 0 0;
}
         /* 06-12-2022 */
      </style>
   </head>
   <body>
      <input type="hidden" id="spidv" value="<?=$singlep_id?>"/>
      <input type="hidden" id="role_idv" value="<?=$role_idv?>"/>
      <input type="hidden" id="assigned_user" value="<?=$assigned_user?>"/>
      
      
      <div class="popup">
         <div class="popup-content">
            <div class="popup-header mb-3">
               <div class="exit">
                  <h6><b>Exit?</b></h6>
               </div>
               <div class="times">
                  <i class="fa fa-times ms-2 cancel" aria-hidden="true"></i>
               </div>
            </div>
            <div class="popup-body">
               <p class="mb-0">Are you sure you want to exit?</p>
            </div>
            <div class="popup-footer mt-3">
               <div class="popup-btn">
                  <button class="cancel me-2">Cancel</button>
                  <button class="save ms-2">Save & Exit</button>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-sm" style="background: rgb(27, 30, 74);">
         <div class="container-fluid">
            <ul class="navbar-nav col-md-4">
               <li class="nav-item">
                  <a class="nav-link text-white" href="#">Create Scenario</a>
               </li>
            </ul>
            <div class="Untitled col-md-4 text-center">
               <h6 class="text-white">Set up an exercise</h6>
            </div>
            <div class="right col-md-4">
               <div class="exit me-4">
                  <a href="#" class="saveexit">
                     <p class="text-white mb-0">Exit<i class="fa fa-times ms-2" aria-hidden="true"></i></p>
                  </a>
               </div>
            </div>
         </div>
      </nav>
      <div class="second-header">
         <ol class="ol">
            <li data-qaid="stepsProgressDetailStep-0" class="li">
               <div class="ol-first ol-one">
                  <span>
                     <svg aria-hidden="false" data-prefix="fas" data-icon="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" aria-label="Completed step" fill="#ffffff" stroke="#ffffff" data-qaid="steps-complete-icon" focusable="false" role="img" style="color: rgb(255, 255, 255);">
                        <path fill="currentColor" d="m173.898 439.404-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                     </svg>
                  </span>
               </div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Choose Scenario</p>
            </li>
            <li data-qaid="stepsProgressDetailStep-1" class="li">
               <div class="ol-first ol-one"><span>2</span></div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Settings</p>
            </li>
            <li data-qaid="stepsProgressDetailStep-2" class="li">
               <div class="ol-first ol-two"><span>3</span></div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Add Users</p>
            </li>
            <li data-qaid="stepsProgressDetailStep-3" class="li">
               <div class="ol-first-last ol-four"><span>4</span></div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Review</p>
            </li>
         </ol>
      </div>
      <div class="container-fluid mt-4">
         <div class="row">
            <div class="col-lg-3">
               <div class="box-one-d">
                  <label for="">Roles</label>
                  <ul>
                     <?php foreach($s_roles as $sr){?>

                     <li><a href="<?=base_url()?>/Drill_player_setup/assignment/<?=$spid?>/<?=$sr->id?>" class="<?php if($sr->id==$active_job) echo 'active'?>"><?=$sr->job_title?></a></li>
                     <?php }?>
                     <!-- <li><a href="">Director of Cyber (Cybersecurety)</a></li>
                     <li><a href="">VP Of Communicatio</a></li>
                     <li><a href="">VP Oprations (Oprations)</a></li> -->
                  </ul>
               </div>
            </div>
            <div class="col-lg-6">
               <label class="fw-bold">Roles and Resposibilities</label>
               <div class="box-two-d">
                  <div class="box-inner">
                     <div class="row align-items-center justify-content-center">
                        <div class="col-2 pe-0">
                           <img src="https://i.pinimg.com/736x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" class="rounded-circle" alt="">
                        </div>
                        <div class="col-10 ps-0">
                           <p class="title mb-0"><span class="fw-bold">Job Title</span> : <?=$job_title?></p>
                           <p class="title mb-0"><span class="fw-bold">Category</span>  : <?=$category?></p>
                        </div>
                        <div class="col-12 mt-2">
                           <label class="fw-bold">Desciption</label>
                           <p class="cont1"><?=$description?></p>
                        </div>
                     </div>
                  </div>
                  <div class="inner-box2">
                     <div class="action-bx2 d-flex align-items-center mb-1">
                        <div class="col-8">
                           <p class="cont fw-bold  mb-0">Assign Users</p>
                        </div>
                        <div class="col-4">
                           <form action="" class="cussifdjcos">
                              <i class="fa fa-search" aria-hidden="true"></i>
                              <input class="form-control form-control-sm py-0" type="text" id="myInput">
                           </form>
                        </div>
                     </div>
                     <div class="action-bx d-flex mb-1">
                        <div class="col-6">
                           <p class="cont fw-bold  mb-0">Name</p>
                        </div>
                        <div class="col-6">
                           <p class="cont fw-bold float-end mb-0">Actions</p>
                        </div>
                     </div>
                     <div class="choose-items-bx p-0">
                        <ul class="list-group">
                           <?php foreach($user_data as $ud)  {?>
                           <li class="list-group-item li_<?=$ud['id']?>">
                              <?=$ud['firstname']?>
                              
                              <span class="text-dark usassign " data-val="<?=$ud['id']?>"><?php if($ud['id']==$assigned_user)echo "Assigned"; else echo "Assign"?></span>
                           </li>
                           <?php }?>
                           <!-- <li class="list-group-item ">
                              A second list item
                              <span class="badge text-dark">Assign</span>
                           </li>
                           <li class="list-group-item">
                              A third list item
                              <span class="badge text-dark">Assign</span>
                           </li> -->
                        </ul>
                     </div>

                  </div>
                  <button type="button" aria-label="Confirm and Publish" data-qaid="button-finish" class="sc-hBEYos fCxuTn" id="review_btn"><span>Next</span></button>
               </div>
            </div>
            <div class="col-lg-3">
               <label class="fw-bold">Tasks Involved</label>
               <div class="box-three-d">
                  <?php foreach($inject_array as $inj){?>
                  <div class="inner-bx-third d-flex align-items-center justify-content-center">
                     <div class="col-3">
                        <img src="https://i.pinimg.com/736x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <div class="col">
                        <span class="small-text mb-1">Jul 2, 2021 13:27</span>
                        <p class="mb-0 cont custom-500"><?=$inj->title;?></p>
                        <p class="cont1"></p><?=$inj->description?></p>
                     </div>
                  </div>
                  <? }?>
                  <!-- <div class="inner-bx-third d-flex align-items-center justify-content-center">
                     <div class="col-3">
                        <img src="https://i.pinimg.com/736x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <div class="col">
                        <span class="small-text mb-1">Jul 2, 2021 13:27</span>
                        <p class="mb-0 cont custom-500">Payment System Issues</p>
                        <p class="cont1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum.</p>
                     </div>
                  </div>
                  <div class="inner-bx-third d-flex align-items-center justify-content-center">
                     <div class="col-3">
                        <img src="https://i.pinimg.com/736x/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg" class="img-fluid rounded-circle" alt="">
                     </div>
                     <div class="col">
                        <span class="small-text mb-1">Jul 2, 2021 13:27</span>
                        <p class="mb-0 cont custom-500">Payment System Issues</p>
                        <p class="cont1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum.</p>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <!-- added by ak -->
      <script>
         $('.choose-items-bx li').click(function(){
                  // $(this).toggleClass('active');
                  
                  $(this).nextAll().toggleClass('disabled');
                  $(this).prevAll().toggleClass('disabled');
         });
         $('.usassign').click(function(){
            var uid=$(this).attr("data-val");
            var spid=$("#spidv").val();
            var role_idv=$("#role_idv").val();
            var ele=$(this); 
            $(this).text("");
            $(this).addClass("spin");
            setTimeout(()=>{
               $.ajax({
                  method:"POST",
                  async:false,
                  url:"<?=base_url()?>/Drill_player_setup/assignuser",
                  dataType:"json",
                  data:{uid:uid,spid:spid,role_idv:role_idv},
                  success:function(json){
                     if(json.success){
                       
                       ele.text(json.textv);
                     }
                  }

               });
                $(this).removeClass("spin");
               
                // $('.choose-items-bx li').css('pointer-events','none');
                 
            },1000);
         })
         //

         $("#review_btn").click(function(){
            var spid=$("#spidv").val();
            window.location.href="<?=base_url()?>/rvw/"+spid;
         })


         //
      </script>
      <!--enf added by ak -->
      <script type="text/javascript">
         $(document).ready(function(){
            $(".popup").hide();
            $(".saveexit").click(function(){
               $(".popup").show();
            });
            $(".cancel, .popup").click(function(){
               $(".popup").hide();
            });
            $(".nav-one a").click(function(){
               $(this).find("i").toggleClass("fa-caret-down fa-caret-up");
                $(this).parents(".nav-one").find(".slide").slideToggle();
            });
            $(".forms").hide();
             $(".yes").click(function(){
               $(".forms").show();
            });
             $(".no").click(function(){
               $(".forms").hide();
            });
         });
      </script>
      <script>
         $(document).ready(function(){

          var assigneduser=$("#assigned_user").val(); 
          if(assigneduser){
            // $(".usassign").css('pointer-events','none');
            $(".choose-items-bx li").addClass("disabled");
            $(".li_"+assigneduser).removeClass("disabled");
          //    $('.choose-items-bx li').css('pointer-events','none');
          }   
       

           $("#myInput").on("keyup", function() {
             var value = $(this).val().toLowerCase();
             $(".choose-items-bx ul li").filter(function() {
               $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
             });
           });
         });
               
      </script>
   </body>
</html>