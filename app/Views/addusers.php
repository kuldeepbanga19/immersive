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
         .review{
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
         background-color: rgb(31, 199, 150);
         }
         .ol-two{
         background-color: rgb(31, 199, 150);
         }
         .ol-three{
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
         .ol-two::after{
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
         
         bottom: 0;
         background: linear-gradient(90deg, rgb(4, 45, 83), rgb(98, 15, 69));
         width: 100%;
         padding: 20px 10rem 20px 3rem;
         }
         .nextbtn{
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
         .backbtn{
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
    color: rgb(255, 255, 255);
    border: 1px solid rgb(255, 255, 255);
         }
         /*tab code*/
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
         .tabset > label {
         position: relative;
         display: inline-block;
         padding: 5px 15px 5px;
         border: 1px solid transparent;
         border-bottom: 0;
         cursor: pointer;
         font-weight: 600;
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
         .iCcukv {
         background: rgb(255, 255, 255);
         border: 1px solid rgb(207, 213, 222);
         border-radius: 4px;
         border-collapse: separate;
         border-spacing: 0px;
         font-size: 0.875rem;
         line-height: 1.5;
         min-width: 100%;
         width: 100%;
         }
         .cvdzQK {
         background: rgb(247, 250, 255);
         border-bottom: 1px solid rgb(207, 213, 222);
         border-radius: 3px 4px 0px 0px;
         font-weight: 700;
         font-size: 0.875rem;
         color: rgb(97, 110, 123);
         text-transform: uppercase;
         }
         .hNBkpm {
         border-style: solid;
         border-color: rgb(207, 213, 222);
         border-image: initial;
         border-width: 0px 0px 1px;
         text-align: left;
         vertical-align: middle;
         position: relative;
         white-space: nowrap;
         width: 1%;
         }
         .gULHZc {
         white-space: nowrap;
         padding: 0.5rem 1.5rem;
         }
         .gULHZc:first-child {
         border-radius: 4px 0px 0px;
         }
         .jRBWWf {
         transition: background 0.2s ease-out 0s;
         display: table-row;
         }
         .kcuJSO {
         border-style: solid;
         border-color: rgb(207, 213, 222);
         border-image: initial;
         border-width: 0px 0px 1px;
         text-align: left;
         vertical-align: middle;
         position: relative;
         width: 100%;
         }
         .ffjFvC {
         padding: 1rem 1.5rem;
         }
         .hNBkpm {
         border-style: solid;
         border-color: rgb(207, 213, 222);
         border-image: initial;
         border-width: 0px 0px 1px;
         text-align: left;
         vertical-align: middle;
         position: relative;
         white-space: nowrap;
         width: 1%;
         }
         .ffjFvC {
         padding: 1rem 1.5rem;
         }
         .gWPNVM {
         border-style: solid;
         border-color: rgb(207, 213, 222);
         border-image: initial;
         border-width: 0px 0px 1px;
         text-align: left;
         vertical-align: middle;
         position: relative;
         white-space: nowrap;
         width: 1%;
         }
         .homziv {
         outline: none;
         cursor: pointer;
         display: flex;
         -webkit-box-align: center;
         align-items: center;
         -webkit-box-pack: center;
         justify-content: center;
         font-size: medium;
         position: relative;
         user-select: none;
         transition: background-color 0.2s linear 0s;
         white-space: nowrap;
         border-radius: 4px;
         line-height: 1.25rem;
         background: transparent;
         color: rgb(0, 89, 165);
         border: 2px solid transparent;
         font-weight: 400;
         padding: 0.25rem 0.5rem;
         }
         .cPItqc .sc-hBEYos {
         display: inline-flex;
         margin-left: 0.5rem;
         }
         .cPItqc .sc-hBEYos:first-of-type {
         margin-left: 0px;
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
      	left:14px;
      }
         
      </style>
   </head>
   <body>
   	<input type="hidden" id="sp_id" value="<?=$sp_id?>">
   	<input type="hidden" id="scid" value="0">
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
               <div class="ol-first ol-two">
                  <span>
                     <svg aria-hidden="false" data-prefix="fas" data-icon="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" aria-label="Completed step" fill="#ffffff" stroke="#ffffff" data-qaid="steps-complete-icon" focusable="false" role="img" style="color: rgb(255, 255, 255);">
                        <path fill="currentColor" d="m173.898 439.404-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path>
                     </svg>
                  </span>
               </div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Settings</p>
            </li>
            <li data-qaid="stepsProgressDetailStep-2" class="li">
               <div class="ol-first ol-three"><span>3</span></div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Add Users</p>
            </li>
            <li data-qaid="stepsProgressDetailStep-3" class="li">
               <div class="ol-first-last ol-four"><span>4</span></div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Review</p>
            </li>
         </ol>
      </div>
      <div class="container mt-4">
         <div class="row">
            <div class="col-md-12">
               <div class="nav-heading">
                  <div class="tabset">
                     <!-- Tab 1 -->
                     <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                     <label for="tab1">Users</label>
                     <!-- Tab 2 -->
                     <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                     <label for="tab2">Assigned (0 Users)</label>
                     <div class="tab-panels">
                        <section id="marzen" class="tab-panel">

                           <table data-qaid="list-table" class="sc-fvhGYg iCcukv">
                              <thead class="sc-GTWni cvdzQK" data-qaid="table-header">
                                 <tr>
                                    <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-FIRST_NAME" scope="col">Name</th>
                                    <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-state" scope="col">Status</th>
                                    <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-actions" scope="col">Actions</th>
                                 </tr>
                              </thead>
                              <tbody data-qaid="list-table-body">
                              	<?php foreach($usersdata as $udata){?>
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTc5NDkzP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--6b6e02453df1129518163de01a59489483983df9-0"><?=$udata["firstname"];?></td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTc5NDkzP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--6b6e02453df1129518163de01a59489483983df9-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTc5NDkzP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--6b6e02453df1129518163de01a59489483983df9-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user">
                                       <?php if($userflagarray[$udata["id"]]) {?>
                                       <span class="addusers" data-value="<?=$udata["id"]?>" data-flag=1>remove</span>
                                       <?php } else{?>
                                        <span class="addusers" data-value="<?=$udata["id"]?>" data-flag=0>Add</span>  
                                       <?php }?>   
                                    </button></td>
                                  </tr>
                                 <?php }?>
                                 <!-- <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--90c20bba8167764de2e112c342508a49670f1c60-0">Salim Ramjean</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--90c20bba8167764de2e112c342508a49670f1c60-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--90c20bba8167764de2e112c342508a49670f1c60-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr>
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTQ5P2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--fe371416997d9b1ccc5ace67de1ae9a517ecea4e-0">Mohammed Obaid Shaikh</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTQ5P2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--fe371416997d9b1ccc5ace67de1ae9a517ecea4e-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTQ5P2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--fe371416997d9b1ccc5ace67de1ae9a517ecea4e-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr>
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMjAxMjAxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--4d12d79aac4fede0754759f93f9efbd53c945376-0">Parush Verma</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMjAxMjAxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--4d12d79aac4fede0754759f93f9efbd53c945376-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMjAxMjAxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--4d12d79aac4fede0754759f93f9efbd53c945376-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr> -->
                              </tbody>
                           </table>
                        </section>
                        <section id="rauchbier" class="tab-panel">
                           <table data-qaid="list-table" class="sc-fvhGYg iCcukv">
                              <thead class="sc-GTWni cvdzQK" data-qaid="table-header">
                                 <tr>
                                    <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-FIRST_NAME" scope="col">Name2</th>
                                    <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-state" scope="col">Status</th>
                                    <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-actions" scope="col">Actions</th>
                                 </tr>
                              </thead>
                              <tbody data-qaid="list-table-body">
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTc5NDkzP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--6b6e02453df1129518163de01a59489483983df9-0">AdminG AdminG</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTc5NDkzP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--6b6e02453df1129518163de01a59489483983df9-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTc5NDkzP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--6b6e02453df1129518163de01a59489483983df9-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr>
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--90c20bba8167764de2e112c342508a49670f1c60-0">Salim Ramjean</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--90c20bba8167764de2e112c342508a49670f1c60-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTMxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--90c20bba8167764de2e112c342508a49670f1c60-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr>
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTQ5P2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--fe371416997d9b1ccc5ace67de1ae9a517ecea4e-0">Mohammed Obaid Shaikh</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTQ5P2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--fe371416997d9b1ccc5ace67de1ae9a517ecea4e-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMTg4OTQ5P2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--fe371416997d9b1ccc5ace67de1ae9a517ecea4e-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr>
                                 <tr class="sc-eGCarw jRBWWf">
                                    <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMjAxMjAxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--4d12d79aac4fede0754759f93f9efbd53c945376-0">Parush Verma</td>
                                    <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMjAxMjAxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--4d12d79aac4fede0754759f93f9efbd53c945376-1"></td>
                                    <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSI3Z2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0FjY291bnQvMjAxMjAxP2V4cGlyZXNfaW4GOwBUSSIMcHVycG9zZQY7AFRJIgxkZWZhdWx0BjsAVEkiD2V4cGlyZXNfYXQGOwBUMA==--4d12d79aac4fede0754759f93f9efbd53c945376-2"><button class="sc-hBEYos homziv SmallButtonStyled-sc-1k8gsfy-0 dUAZSD" type="button" aria-label="Add" data-qaid="button-toggle-user"><span>Add</span></button></td>
                                 </tr>
                              </tbody>
                           </table>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-fixed">
         <div class="NavWrapperStyled-iws0ks-1 ktgAwU">
            <div class="sc-dtwoBo iVDulG">
               <div class="StepNavigationStyled-sc-1dcsn5y-0 eNIbAW d-flex"><button class="me-2 backbtn sc-hBEYos dTNVVm ButtonStyled-sc-1dcsn5y-1 gNJvbJ" type="button" aria-label="Back" data-qaid="button-prev-step" onclick="location.href='<?=$backurl?>'"><span>Back</span></button><button class="nextbtn" type="button" aria-label="Next Step: Settings" data-qaid="button-next-step"><span>Next Step: Review</span></button></div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
         });
      </script>
      <script>
         $(".addusers").click(function(){
         	// alert("hiid");
         	var sp_id=$("#sp_id").val();
         	
         	var userid=$(this).attr("data-value");
         	var chnge=$(this);
         	var urlval="<?=base_url()?>/Single_player_setup/assignusers";
            if($(this).attr("data-flag")==1){
            	urlval="<?=base_url()?>/Single_player_setup/removeusers";
            }
            $(this).text("");
            $(this).addClass("spin");
            setTimeout(()=>{
            	$.ajax({
         		method:"POST",
         		dataType:"json",
         		async:false,
         		url:urlval,
         		data:{sp_id:sp_id,userid:userid},
         		success:function(json){
         			if(json.success){
                        
         				chnge.text(json.textval);
         				var flg=json.flag;
         				chnge.attr("data-flag",flg);
         				chnge.removeClass("spin");
         			}
         		}

         	});

            },2000)
         


         })

         $(".nextbtn").click(function(){
            var spid=$("#sp_id").val();
            window.location.href="<?=base_url()?>/Single_player_setup/review/"+spid;
                  });
      </script>	
   </body>
</html>