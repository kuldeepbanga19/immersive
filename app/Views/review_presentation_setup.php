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
         background-color: rgb(31, 199, 150);
         }
         .ol-four{
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
         .ol-three::after{
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
         .box-parent{
            max-width: 61rem;
    width: 100%;
    display: flex;
    flex: 0 0 auto;
    flex-direction: column;
    margin-left: auto;
    margin-right: auto;
         }
         .kCmZZp {
    margin-bottom: 1rem;
}
.IUidp {
    font-size: 1.25rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;
}
.box-parent {
    background-color: rgb(255, 255, 255);
    border-radius: 4px;
    border: 1px solid rgb(207, 213, 222);
}
.iWprhc {
    display: flex;
    flex: 1 0 auto;
    flex-direction: column;
    --content-wrapper-spacing: 2rem;
    padding: 2rem;
}
.hdhdSL {
    padding-top: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgb(207, 213, 222);
}
.emGMCQ {
    display: flex;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.jHMsnk {
    font-size: 1rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.5;
}
.fVzMLV {
    outline: none;
    cursor: pointer;
    display: inline-flex;
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
    background: transparent;
    color: rgb(97, 110, 123);
    border: none;
    box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
    font-weight: 700;
    line-height: 1rem;
    padding: 0.5rem;
}
.fVzMLV svg {
    color: currentcolor;
    fill: currentcolor;
    stroke: currentcolor;
    min-width: 1em;
    margin-right: 0.5rem;
}
.dHersb {
    font-size: 1rem;
    color: rgb(97, 110, 123);
    font-weight: 500;
    line-height: 1.5;
}
.kREiuR {
    max-width: 61rem;
    width: 100%;
    display: flex;
    flex: 0 0 auto;
    flex-direction: column;
    margin-left: auto;
    margin-right: auto;
}
.laXpzF {
    padding-top: 1rem;
    display: flex;
    justify-content: right;
}
.bMvLfi {
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
.fCxuTn {
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
.kmUsKk {
    margin-right: 1rem;
}
      </style>
   </head>
   <body>
     
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
                  <button class="save ms-2"> <a href="#"  onclick="exit()"><p class="text-white mb-0">Save & Exit</p></a></button>
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
                  <a href="#" class="saveexit"><p class="text-white mb-0">Exit<i class="fa fa-times ms-2" aria-hidden="true"></i></p></a>
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
          
            <li data-qaid="stepsProgressDetailStep-3" class="li">
               <div class="ol-first-last ol-four"><span>3</span></div>
               <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Review</p>
            </li>
         </ol>
      </div>
      <div class="container mt-4">
         <div class="row">
            <div class="col-md-12">
               <div class="sc-dtwoBo kREiuR">
                  <div class="HeaderStyled-sc-3zsl3v-0 kCmZZp">
                     <h2 class="sc-iBPRYJ IUidp">Exercise Review</h2>
                  </div>

                 
                  <div class="box-parent">
                     <div class="sc-jUEnpm iWprhc ContentWrapperStyled-sc-3zsl3v-4 juzdua">
                        
                  <?php foreach($presentation_data as $presentation_data){?>
                    <form id="scenariodata"><input type="hidden" name="id" id="id" value="<?php echo $presentation_data['crisis_scenario_id']; ?>">
                    <input type="hidden" name="set_up_id" id="set_up_id" value="<?php echo $presentation_data['id']; ?>">
                  
                  </form>

                    <input type="hidden" name="id" id="id" value="<?php echo $presentation_data['crisis_scenario_id']; ?>">
                        <div class="BlockWrapperStyled-sc-1tpptqs-0 hdhdSL">
                           <div class="EditableWrapperStyled-sc-1tpptqs-1 emGMCQ">
                              <h3 class="sc-gKsewC jHMsnk">Exercise Title</h3>
                              <a class="sc-hBEYos fVzMLV" href="<?= base_url('/Presentation_player_setup/scenario_choose/'.$presentation_data['crisis_scenario_id'])?>" aria-label="Edit" data-qaid="button-edit-2">
                                 <svg aria-hidden="true" data-prefix="fas" data-icon="pencil-alt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" aria-label="edit" fill="currentColor" stroke="currentColor" data-qaid="icon-pencil" focusable="false" role="img">
                                    <title>edit</title>
                                    <path fill="currentColor" d="m497.9 142.1-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8 21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path>
                                 </svg>
                                 <span>Edit</span>
                              </a>
                           </div>
                           <p data-qaid="exercise-title" class="sc-gKsewC dHersb"><?php echo $presentation_data['exercise_name']; ?></p>
                        </div>
                        <div class="BlockWrapperStyled-sc-1tpptqs-0 hdhdSL">
                           <div class="EditableWrapperStyled-sc-1tpptqs-1 emGMCQ">
                              <h3 class="sc-gKsewC jHMsnk">Selected Scenario</h3>
                              <a class="sc-hBEYos fVzMLV" href="<?= base_url('/Presentation_player_setup/presentation_player/'.$presentation_data['crisis_scenario_id'])?>" aria-label="Edit" data-qaid="button-edit-1">
                                 <svg aria-hidden="true" data-prefix="fas" data-icon="pencil-alt" viewBox="0 0 512 512" width="1em" height="1em" aria-label="edit" fill="currentColor" stroke="currentColor" data-qaid="icon-pencil" focusable="false" role="img">
                                    <title>edit</title>
                                    <path fill="currentColor" d="m497.9 142.1-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8 21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path>
                                 </svg>
                                 <span>Edit</span>
                              </a>
                           </div>
                           <p data-qaid="selected-scenario" class="sc-gKsewC dHersb"><?php if(isset($crisis_scenriovalues[$presentation_data['crisis_scenario_id']]))echo $crisis_scenriovalues[$presentation_data['crisis_scenario_id']];?></p>
                        </div>
                    
                        <?php }?>

                     </div>
                  </div>


                  

                  <div class="ButtonWrapperStyled-sc-3zsl3v-2 laXpzF"><button class="sc-hBEYos bMvLfi BackButtonStyled-sc-3zsl3v-3 kmUsKk" type="button" aria-label="Back" data-qaid="button-back" onclick="save_back()"><span>Back</span></button><button type="button" aria-label="Confirm and Publish" data-qaid="button-finish" class="sc-hBEYos fCxuTn save-next"><span>Confirm and Publish</span></button></div>
               </div>
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



         function save_back(id)
    {
      var id =$("#id").val();
    //   alert(id);die();
      // alert(id);

      window.location.replace("<?=base_url();?>/Presentation_player_setup/scenario_choose/" + id);
    }

    $(".save-next").click(function(){
      	// 	var scen_data=$("#scenariodata").serialize();
            
           var scenid=$("#set_up_id").val(); 
         //   alert(scenid);die;
      		$.ajax({
      			method:"POST",
      			dataType:"json",
      			async:false,
      			data:$("#scenariodata").serialize(),
      			url:"<?=base_url()?>/Presentation_player_setup/publish",
      			success:function(json){
      				if(json.success){
      					// alert("hellooo");
                var spid=json.sp_id;
                var crisis_scenario_id=json.crisis_scenario_id;
                window.location.href="<?=base_url()?>/Presentation_player_setup/published_exercise/"+scenid;
      				}
      			}
      		})
      	})
      </script>
        <script  type="text/javascript">
            function exit(id)
    {
      var id =$("#id").val();
      // alert(id);die();



      $.ajax({
      			method:"POST",
      			dataType:"json",
      			async:false,
      			data:$("#scenariodata").serialize(),
      			url:"<?=base_url()?>/Presentation_player_setup/delete",
      			success:function(json){
      				if(json.success){
      					// alert("hellooo");
               //  var spid=json.sp_id;
               //  var crisis_scenario_id=json.crisis_scenario_id;
                window.location.href="<?=base_url()?>/Set_up_scenario/set_up";
      				}
      			}
      		})










      // window.location.replace("<?=base_url();?>/Set_up_scenario/set_up");
    }

      </script>
   </body>
</html>