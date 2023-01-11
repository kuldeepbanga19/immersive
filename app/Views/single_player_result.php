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
      }
      .right{display: flex; justify-content: center;}
         .user{background: red; height: 30px; width: 30px; border-radius: 50%; padding: 8px; color: #fff;}
         .fa-caret-down{color: #fff;}
        .criss-sim{
           font-size: 1.5rem; 
          color: rgb(33, 37, 26);
          font-weight: 700;
          line-height: 1.2;
        }     
        .first-div h3{
         font-size: 1.3rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    line-height: 1.2;
        }
        .circle{
         height: 20px;
         width: 20px;
         background: rgb(97, 110, 123);
         border-radius: 50%;
         margin: auto;
        }
        .header-2{
             background-color: rgb(255, 255, 255);
    border-radius: 4px;
    border: 1px solid rgb(207, 213, 222);
    box-shadow: rgb(0 0 0 / 10%) 0px 1px 3px, rgb(0 0 0 / 6%) 0px 1px 2px;
    padding: 1.5rem 3rem;
    margin: 1.5rem 3rem;
    align-items: center;
        }
        .ul li{
         display: inline-block;
        }
        .ul li a{
         text-decoration: none;
         color: #fff;
         font-size: 14px;
        }
        .fa-angle-right{
         font-size: 14px;
         color: #fff;
         margin: 0px 5px;
        }
        .buttn{
         display: flex;
         align-items: center;
        }
        .buttn a{
             outline: none;
    cursor: pointer;
    display: inline-flex;
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
    text-decoration: none;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
    color: rgb(97, 110, 123);
    border: none;
    box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
        }
        .buttn .btnn{
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
        .roles h2{
             font-size: 1.5rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;
    text-align: center;
        }
        .teacher-txt h4{
     font-weight: 600; 
    width: 12.5rem;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
        }
        .teacher-txt span{
             color: rgb(33, 37, 26);
    font-weight: 600;
    text-align: center;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    line-height: 1;
    margin: auto;
    display: inline-block;
        display: inline-flex;
    flex-direction: row;
    height: 28px;
    background: rgb(228, 233, 240);
    border: 1px solid rgb(228, 233, 240);
    border-radius: 16px;
    padding: 0.25rem 0.5rem;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;

          }
          .roles-teacher{
                    padding: 2rem 0px;
    border-top: 1px solid rgb(207, 213, 222);
    text-align: left;
    max-width: 850px;
    margin: auto;
          }
          .assigned{
                font-size: 1.5rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;
    text-align: center;
          }
          .edit{
                outline: none;
    cursor: pointer;

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
          .bwfYEw {
    padding-bottom: 5rem;
    padding-top: 1rem;
}
.kSJJSc {
    background: rgb(255, 255, 255);
    border-top: 1px solid rgb(207, 213, 222);
    border-right: 1px solid rgb(207, 213, 222);
    border-left: 1px solid rgb(207, 213, 222);
    border-image: initial;
    border-radius: 4px 4px 0px 0px;
    padding: 0.5rem;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    border-bottom: none;
}
.gTZZqe {
    overflow-x: auto;
    width: 100%;
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
.kSJJSc + div table {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.fTUvm {
    caption-side: bottom;
    padding: 1rem;
    opacity: 0;
    position: absolute;
    left: -10000px;
    top: auto;
    width: 1px;
    height: 1px;
    overflow: hidden;
}
.zXTya {
    font-size: 0.875rem;
    color: rgb(97, 110, 123);
    font-weight: 500;
    line-height: 1.5;
}
.cvdzQK {
    background: rgb(247, 250, 255);
    border-bottom: 1px solid rgb(207, 213, 222);
    border-radius: 4px 4px 0px 0px;
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
.gbUTLY {
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    line-height: 0;
    vertical-align: middle;
    padding: 0.5rem;
    margin: -0.5rem 0px -0.5rem -0.5rem;
    transition: background-color 0.2s ease-out 0s;
    text-transform: uppercase;
}
.gbUTLY span {
    font-weight: 700;
    font-size: 0.875rem;
    color: rgb(97, 110, 123);
}
.gbUTLY svg {
    margin-left: 0.5rem;
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
.jRBWWf:last-of-type .sc-bXDlPE {
    border-bottom: 0px;
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
.fLWvJB {
    display: inline-flex;
    flex-direction: row;
    height: 28px;
    background: rgb(228, 233, 240);
    border: 1px solid rgb(228, 233, 240);
    border-radius: 16px;
    padding: 0.25rem 0.5rem;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}
.fLWvJB .sc-eCssSg {
    color: rgb(33, 37, 26);
    font-weight: 600;
    text-align: center;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    line-height: 1;
}
.gAZCwn {
    font-size: 0.875rem;
   }
   .hkLsKZ {
    background-color: rgb(255, 255, 255);
    box-sizing: border-box;
    width: 100%;
    border: 1px solid rgb(129, 143, 157);
    border-radius: 4px;
    color: rgb(33, 37, 26);
    padding: 1rem 1rem 1rem 3rem;
    margin: auto;
    font-size: 1rem;
    transition: border 0.3s ease 0s;
    outline: 0px;
}
.gaoYnn input {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
.hkLsKZ[type="search"] {
    appearance: textfield;
}
.kSJJSc input[type="search"] {
    background: rgb(228, 233, 240);
}
.alUSs {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    line-height: 0px;
    left: 1rem;
}
.nextbtn{
   outline: none;
    cursor: pointer;
    display: inline-flex;
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
    text-decoration: none;
    line-height: 1.25rem;
    padding: 0.5rem 1rem;
    background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
    color: rgb(97, 110, 123);
    border: none;
    box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
         }
         .pro {
            align-items: center;
    display: flex;
    margin-bottom: 12px;
}
.pro p{
   margin:0;
}
         .inprogress {
            text-decoration: none;
    color: rgb(245 245 245);
    background: #139874;
    padding: 2px 22px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    margin-left: 10px;
}
      </style>
       
        
   </head>
   <body>
   <input type="hidden" id="sp_id" value="<?=$set_up_id?>">
     <div class="container-fluid">
        <div class="header-2 d-flex justify-content-between">
           <div class="first-div">
              <p class="mb-0">Scenario</p>
              <h3><?=$scenario_name?></h3>
           </div>
            <div class="second-div">
              <p class="mb-2">Start date</p>
              <?php if($start_status == 1) { ?>
                <?php  echo date("d/m/Y",$exercise_start_date);?><?php } 
                          else { ?>
               <div style="height: 3px; width:15px; background: rgb(97, 110, 123);">
               </div>
                            <?php } ?>
            
            </div>
            <div class="third-div">
            <?php if($start_status == 1) { ?>
               <div class="circle" style="background:green;"></div>
              <p class="mb-0">Active</p>
              <?php } 
                          else { ?>
                 <div class="circle"></div>
              <p class="mb-0">Not Started</p>
                            <?php } ?>
            
           </div>
         </div>
     </div>
     <section style="width:100%; background:url(backg.png) rgb(27, 30, 74);">
        <div class="container" style="max-width: 53.125vw;">
            <div class="row pb-5">
               <div class="col-md-12 py-3">
                  <ul class="ul mb-0 ps-0">
                     <li><a href="#">Crisis Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li><a href="#">Manage</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li><a href="#"><?=$exercise_name?></a></li>
                  </ul>
               </div>
               <div class="col-md-12 py-3">
                  <div class="pro">
                  <p class="text-white">Exercise 
                                       <div class="inprogress">
                                          <b>
                                             Completed
                                        </b>
                                       </div></p>
                          </div>
                  <h3 class="text-white"><?=$exercise_name?></h3>
               </div>
               <div class="col-md-12 py-3">
                  <div class="buttn">
                  <?php if($start_status == 0) { ?>
                          
                          
                     <a href="javascript:void(0)"  onclick="exercise_start_status('<?php echo $set_up_id; ?>',1)" data-toggle="tooltip"  title="Hide User">Closed Exercise</i></a> 
                          <?php } 
                         
                         
                         
                         
                         else { ?>
                              <?php foreach($assignusers_val as $asv){ ?>
                                 <?php if($asv['userid']==$usernameID){?>

                                 <a href="<?= base_url('/Player_result/player_result/'.$set_up_id)?>" data-toggle="tooltip">View Your Result</i></a>

                                 <?php }

                                 else{?>
                                 <?php echo "";?>
                                 <?php }?>

                              <?php }?>
                                         

                            
                           <?php if($admin==null){?>

                            <?php echo""; ?>
                            
                            <?php }
                            
                            else{?>
                             <a href="#" data-toggle="tooltip"  style =" margin: 0px 20px;">View Results</i></a>

                                <a href="javascript:void(0)"  onclick="exercise_start_status('<?php echo $set_up_id; ?>',0)" data-toggle="tooltip"  title="Hide User">Close Exercise</i></a> 
                          
                          </div>
                                <?php }?>
                          
                          
                           
                          
                          <?php } ?>



                  </div>
               </div>
                <div class="col-md-12 py-3">
                  <div class="">
                    <p class="text-white">Overview</p>
                    <p class="text-white"><?=$scenario_briefing?></p>
                  </div>
               </div>
            </div>
        </div>
     </section>
     <div class="container py-4">
        <div class="row">
           <div class="col-md-12">
              <div class="roles mb-4">
                 <h2>Roles</h2>
              </div>
           </div>
           <div class="col-md-12">
              <div class="teacher-section d-flex justify-content-center mb-4">
              	<?php foreach($roles as $rv){?>
                 <div class="teacher me-4">
                     <div class="teacher-img text-center">
                        <img src="<?=base_url();?>/images/Avatar+1.png" class="mb-2">
                        <div class="teacher-txt">
                           <h4><?=$rv["job_title"]?></h4>
                           <span><?php if(isset($rolesinfo[$rv["scenario_role_id"]]))echo $rolesinfo[$rv["scenario_role_id"]];?></span>
                        </div>
                     </div>
                 </div>
                <?php }?>
               <!--   <div class="student ms-4">
                    <div class="teacher-img text-center">
                        <img src="<?=base_url();?>/images/Avatar+1.png"  class="mb-2">
                        <div class="teacher-txt">
                           <h4>student</h4>
                           <span>Executive</span>
                        </div>
                     </div>
                 </div> -->
              </div>
           </div>
            <div class="col-md-12 mt-4">
               <div class="roles-teacher">
                  <h5><?=$roles[0]["job_title"]?></h5>
                  <p><?=$roles[0]["responsiblity"]?></p>
               </div>
            </div>
           </div>
        </div>
     </div>
     <section style="background-color: rgb(232, 244, 247); padding-top: 5rem;">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <h4 class="assigned">Assigned Users</h4>
              </div>
              <div class="col-md-12">
                 <div class="Edit text-end">
                    <a href="#" class="edit text-decoration-none"><i class="fa fa-pencil me-2" aria-hidden="true"></i>Edit</a>
                    <div class="sc-dtwoBo eGLMAG">
   <div class="ListViewWrapperStyled-ggodje-0 bwfYEw">
      <div class="OptionsStyled-sc-1n17fk-0 kSJJSc print-buffer">
         <p class="sc-gKsewC HeaderTitleStyled-ggodje-2 jHMsnk hAqXKZ">Users</p>
         <div class="ListOptionsSecondaryStyled-sc-1n17fk-1 gCuWMf">
            <div class="SearchFormStyled-sc-2cb23w-0 gaoYnn no-print">
               <form novalidate="" data-qaid="form-table-search">
                  <div class="sc-dkIXFM fNTUgi">
                     <div class="sc-XhUPp kiNLFp">
                        <div>
                          
                           <div id="description-N0r2auRARjkebKqwk51QW" data-qaid="description-wrapper"></div>
                        </div>
                     </div>
                     <div class="sc-dtTInj bRFhLZ">
                        <div class="sc-dYzljZ hmokOK">
                           
                           <input type="search" id="field-1Kr5IRpQxlmrDX307qkSO" name="keywords" data-qaid="keywords-field" aria-required="false" aria-invalid="false" data-input="true" aria-describedby=" description-N0r2auRARjkebKqwk51QW" class="sc-gATInX hkLsKZ" value="">
                        </div>
                     </div>
                     <div aria-live="assertive"></div>
                  </div>
                  <div class="FormSubmitButtonWrapperStyled-sc-6dxyya-3 iRSVAk"></div>
               </form>
            </div>
         </div>
      </div>
      <div class="sc-jQbIHB gTZZqe">
         <table data-qaid="list-table" class="sc-fvhGYg iCcukv">
            <caption class="sc-ctaXAZ fTUvm">
               <p class="sc-eCssSg zXTya">Users</p>
               <p class="sc-eCssSg zXTya">A list of users that have been added to this exercise</p>
            </caption>
            <thead class="sc-GTWni cvdzQK" data-qaid="table-header">
               <tr>
                  <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-firstName" scope="col">Name</th>
                  <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-state" scope="col">Status</th>
                  <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-RESULT" scope="col" aria-sort="ascending">
                     <button type="button" aria-label="Sort by Score in descending order" data-qaid="button-column-sort" class="sc-eFubAy gbUTLY print-buffer">
                        <span class="sc-jSgupP bIldSS">Score</span>
                        <svg viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" aria-label="ascending order icon" aria-hidden="true" fill="#21251A" stroke="#21251A" data-qaid="icon-sortUp" focusable="false" role="img" style="color: rgb(33, 37, 26);">
                           <path d="M279 224H41c-21.4 0-32.1-25.9-17-41L143 64c9.4-9.4 24.6-9.4 33.9 0l119 119c15.2 15.1 4.5 41-16.9 41z"></path>
                        </svg>
                     </button>
                  </th>
                  <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-lastActivityAt" scope="col">Last Activity</th>
                  <th class="sc-fbNXWD sc-gsxnyZ hNBkpm gULHZc" data-qaid="column-header-results" scope="col">Results</th>
               </tr>
            </thead>
            <tbody data-qaid="list-table-body">
            <?php foreach($assignusers_val as $asv){ ?>
               <tr class="sc-eGCarw jRBWWf">
                  <td class="sc-fbNXWD sc-bXDlPE kcuJSO ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSJFZ2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0NyaXNpc1NpbTo6QXNzaWdubWVudC8xMzg5MDQ_ZXhwaXJlc19pbgY7AFRJIgxwdXJwb3NlBjsAVEkiDGRlZmF1bHQGOwBUSSIPZXhwaXJlc19hdAY7AFQw--9dddf7dc4d8c9492ecb2daa866709cafbc1324f7-0"><?=$asv['fname']?></td>
                  <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSJFZ2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0NyaXNpc1NpbTo6QXNzaWdubWVudC8xMzg5MDQ_ZXhwaXJlc19pbgY7AFRJIgxwdXJwb3NlBjsAVEkiDGRlZmF1bHQGOwBUSSIPZXhwaXJlc19hdAY7AFQw--9dddf7dc4d8c9492ecb2daa866709cafbc1324f7-1">
                     <div data-qaid="chip-Not Started" class="sc-lmoMRL fLWvJB ChipStyled-ggodje-1 gNpVcp"><span class="sc-eCssSg gAZCwn">
                        <?php if($asv['status']==0){
                           echo "Not Started";
                          
                        }
                        else{
                           echo "Completed";
                        }?>
                     </span></div>
                  </td>
                  <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSJFZ2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0NyaXNpc1NpbTo6QXNzaWdubWVudC8xMzg5MDQ_ZXhwaXJlc19pbgY7AFRJIgxwdXJwb3NlBjsAVEkiDGRlZmF1bHQGOwBUSSIPZXhwaXJlc19hdAY7AFQw--9dddf7dc4d8c9492ecb2daa866709cafbc1324f7-2">-</td>
                  <td class="sc-fbNXWD sc-bXDlPE hNBkpm ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSJFZ2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0NyaXNpc1NpbTo6QXNzaWdubWVudC8xMzg5MDQ_ZXhwaXJlc19pbgY7AFRJIgxwdXJwb3NlBjsAVEkiDGRlZmF1bHQGOwBUSSIPZXhwaXJlc19hdAY7AFQw--9dddf7dc4d8c9492ecb2daa866709cafbc1324f7-3"> <?php if($asv['end_date1']==''){
                     echo "-";
                  }else{
                     echo date('d/m/y',$asv['end_date1']);
                  } ?>  </td>
                  <td class="sc-fbNXWD sc-bXDlPE gWPNVM ffjFvC sc-fmlJLJ cPItqc" id="table-cell-BAh7CEkiCGdpZAY6BkVUSSJFZ2lkOi8vaW1tZXJzaXZlLWxhYnMtYXBpL0NyaXNpc1NpbTo6QXNzaWdubWVudC8xMzg5MDQ_ZXhwaXJlc19pbgY7AFRJIgxwdXJwb3NlBjsAVEkiDGRlZmF1bHQGOwBUSSIPZXhwaXJlc19hdAY7AFQw--9dddf7dc4d8c9492ecb2daa866709cafbc1324f7-4"></td>
               </tr>
             <?php }?>
            </tbody>
         </table>
      </div>
   </div>
</div>
                 </div>
              </div>
           </div>
        </div>
     </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script>

$(".nextbtn").click(function(){
            var spid=$("#sp_id").val();
            // alert(spid);
            window.location.href="<?=base_url()?>/Single_player_setup/review/"+spid;
                  });


                  
function exercise_start_status(id,start_status){ 
    // alert(start_status);
    $.ajax({
    type:"POST",
    url:"<?= site_url() ?>/Single_player_setup/exercise_start_status/"+id+"/"+start_status,
    dataType:"json",
    async: false,
    success:function(json){

      if(json.success){
        window.location.reload();
      }
    }

});
}
      </script>
   </body>
</html>