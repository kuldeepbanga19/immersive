<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/stylesheet.css"> 

<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/Capture.svg">
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
    height: 72px;
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
                  <button class="save ms-2" onclick="exit()">Save & Exit</button>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-sm" style="background: rgb(27, 30, 74);">
         <div class="container-fluid">
            <ul class="navbar-nav col-md-4">
               <li class="nav-item">
                  <a class="nav-link text-white" href="#"> <img src="<?= base_url(); ?>/assets/img/Capture.svg" width="40px"alt=""> Create Scenario</a>
               </li>
            </ul>
            <div class="Untitled col-md-4 text-center">
               <!-- abhishek -->
               <h6 class="text-white mb-0"><?php if(isset($user_obj)){echo $user_obj['scenrio_title'].'-'.$user_obj['id'];}?></h6> 
            </div>
            <div class="right col-md-4">
               <div class="exit me-4">
                  <a href="#" class="saveexit"><p class="text-white mb-0">Save & Exit<i class="fa fa-times ms-2" aria-hidden="true"></i></p></a>
               </div>
            </div>
         </div>
      </nav>
      <div class="second-header">
         <div class="row">
              
            <div class="col-md-7 ms-auto">
               <div class="row align-items-center">
                  <div class="col-md-3">
                     <div class="create-view">
                        <div class="create">
                           <a href="#" class="text-dark"><b>Create</b></a>
                        </div>
                        <div class="tree-view">
                           <a href="#" class="text-dark"><b>Tree View</b></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row align-items-center">
                        <div class="col-md-6 text-end">
                           <p class=" cont mb-0">
                              Last saved <?php if(isset($user_obj)){
                                 echo gettime($time);
                              }?> </p>
                        </div>
                        <div class="col-md-2 text-center">
                           <p class="mb-0 pribtn"><a href="<?= base_url('/Scenario_preview/scenario_preview/'.$user_obj['id'])?>">Preview</a></p>
                        </div>
                        <div class="col-md-4">
                           <div class="save-review">
                              <button class="buttn" onclick="save_role12()">Save</button>
                              <button class="review" onclick="review()">Review</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid mt-4">
        
         <div class="row clone">
            <div class="col-md-3 first">
               <div class="navigation">
                  <nav>
                     <ul class="ul">
                        <li class=""><a href="#" onclick="overview_save()">Overview</a></li>
                        <li class=""><a href="#" onclick="save_role()">Roles</a></li>
                        <li class=""><a href="#" onclick="save_feed()">Feedback</a></li>
                        <li class=""><a href="#" onclick="save_rank()">Ranking</a></li>
                        <li class=""><a href="#" onclick="save_analysis()">Analysis</a></li>
                        <li class=""><a href="#" onclick="save_perform()">Performance Indicators</a></li>
                     </ul>
                  </nav>
                  <!-- abhishek -->
                  <nav>
                     <div class="col-md-3">
                        <div class="nav-heading">
                           <h6><b>Injects</b></h6>
                        </div>
                     </div>
                     <ul class="ul Injects">
                        <?php if(isset($scenar_injects)){
                           $count=1; 
                           foreach($scenar_injects as $injects)  {?>
                          
                           <li class="py-2 mb-2 d-flex justify-content-between align-items-center add-inject" id="inject"><a href="#" onclick="save_inject('<?=$injects->scenario_id.'/'.$injects->id;?>')"><?=$injects->title?></a></li>  
                        <?php $count++; }} ?>  
                        <li class="add-inject"><a href="#" onclick="save_new_inject()">Add Inject</a></li>
                     </ul>
                  </nav>
                  <nav>
                     <div class="col-md-3">
                        <div class="nav-heading">
                           <h6><b>Ending</b></h6>
                        </div>
                     </div>
                     <ul class="ul">
                        <li class=""><a href="#" onclick="save_epilogue()">Epilogue</a></li>
                     </ul>
                  </nav>
                  <nav>
                     <div class="col-md-3">
                        <div class="nav-heading">
                           <h6><b>Summary</b></h6>
                        </div>
                     </div>
                     <ul class="ul">
                        <li class=""><a href="<?= base_url('/Scenario_summary/scenario_summary/'.$user_obj['id'])?>" onclick="save_summary()">View Summary</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
          
            </div>
         </div>
      </div>
     

      <div class="container-fluid mt-4">
       
         <div class="row">
        
            <div class="col-md-6 second">
            <span id="editUserErrmsg_" style="color: red; font-weight: bold;"></span> 
               <div class="form pt-3">
                  
               <form id="update_user" name="update_user" class="p-4">
               
               <input type="hidden" name="id" id="id" value="<?php echo $user_obj1['id']; ?>">
               <input type="hidden" name="count" id="count" value="<?=$rolecount;?>">
               
               <div id="dynamic_field">

                  <!-- <form action="/action_page.php" class="p-4"> -->
                    
                     
                 
                     <?php if(isset($scenario_role_cate))
                  {
                       
                    foreach ($scenario_role_cate as $key => $rolevalue) { ?>

                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Role Category:</b></label><br>
                       <select name="scenario_role<?=$rolevalue['id']?>" id="cars" class="w-100 form-control">
                        <option value =""></option>
                       <?php  
                                    $val=$rolevalue["scenario_role_id"];
                                  foreach ($Scenario_role as $key => $scenario_role) {
                                  if($scenario_role['id']==$val){?>
                           <option data-value="<?php echo $scenario_role['id']; ?>" value="<?php echo $scenario_role['id']; ?>" selected>
                           <?php echo $scenario_role['scenario_role_name']; ?>
                             </option>
                                <?php  }
                                else{ ?>
                       <option data-value="<?php echo $scenario_role['id']; ?>" value="<?php echo $scenario_role['id']; ?>"><?php echo $scenario_role['scenario_role_name']; ?>
                        </option>
                               <?php   } }  ?> 
                               
                               
                               
                       </select>
                     </div>

                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Job Title:</b></label><br>

                       
                       <textarea id="w3review" name="briefing<?=$rolevalue['id']?>" rows="6" cols="100" class="w-100 form-control"><?php 
                       
                    
                       
                       {
                        if($rolevalue['crisis_scenario_id']==$user_obj1['id']){
                           echo $rolevalue['job_title'];
                        }
                          
                        else{
                           echo "";
                        }
                       }
                       
                       
                       
                       ?></textarea>
                     </div>


                     <style>
                        .nopad {
	padding-left: 0 !important;
	padding-right: 0 !important;
}
/*image gallery*/
.image-checkbox {
	cursor: pointer;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	border: 4px solid transparent;
	margin-bottom: 0;
	outline: 0;
   position: relative;
}
.image-checkbox input[type="checkbox"] {
	display: none;
}

.image-checkbox-checked {
	border-color: #4783B0;
}
.image-checkbox .fa {
  position: absolute;
  color: #4A79A3;
  background-color: #fff;
  padding: 10px;
  top: 0;
  right: 0;
}
.image-checkbox-checked .fa {
  display: block !important;
}
                     </style>
                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Role Avatar:</b></label><br>
                       <ul class="ul-flex avt">
                     
                     <!-- <label class="image-checkbox">  
                           <input type="checkbox" name="img1<?=$rolevalue['id']?>" value="1"> 
                              <img src="<?=base_url();?>/images/Avatar+1.png" width="100">
                              <i class="fa fa-check hidden"></i>
                     </label> -->

                        <!-- <label class="image-checkbox">
                        <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" />
                        <input type="checkbox" name="image[]" value="" />
                        <i class="fa fa-check d-none"></i>
                      </label> -->

                     <?php if($rolevalue['avatar_id']==1){?>
                        <li><img src="<?=base_url();?>/images/default_avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="1" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/default_avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="1" ></input>
                        <?php
                        }
                        ?>
                        
                        <?php if($rolevalue['avatar_id']==2){?>
                        <li><img src="<?=base_url();?>/images/Avatar+1.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="2" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Avatar+1.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="2" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==3){?>
                        <li><img src="<?=base_url();?>/images/Avatar+2.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="3" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Avatar+2.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="3" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==4){?>
                        <li><img src="<?=base_url();?>/images/Avatar+3.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="4" checked></input>
                        <?php }
                        else{
                           ?>
                       <li><img src="<?=base_url();?>/images/Avatar+3.png" width="100"></li> <input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="4" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==5){?>
                        <li><img src="<?=base_url();?>/images/Avatar+4.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="5" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Avatar+4.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="5" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==6){?>
                        <li><img src="<?=base_url();?>/images/Avatar+5.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="6" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Avatar+5.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="6" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==7){?>
                        <li><img src="<?=base_url();?>/images/Avatar+6.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="7" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Avatar+6.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="7" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==8){?>
                        <li><img src="<?=base_url();?>/images/Communication_Megaphone_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="8" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Communication_Megaphone_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="8" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==9){?>
                        <li><img src="<?=base_url();?>/images/Cyber_Security_Lock_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="9" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Cyber_Security_Lock_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="9" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==10){?>
                        <li><img src="<?=base_url();?>/images/Executive_Chair_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="10" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Executive_Chair_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="10" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==11){?>
                        <li><img src="<?=base_url();?>/images/Extra_Computer_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="11" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Extra_Computer_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="11" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==12){?>
                        <li><img src="<?=base_url();?>/images/Extra_File_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="12" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Extra_File_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="12" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==13){?>
                        <li><img src="<?=base_url();?>/images/Extra_Lock_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="13" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Extra_Lock_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="13" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==14){?>
                        <li><img src="<?=base_url();?>/images/Extra_Money_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="14" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Extra_Money_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="14" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==15){?>
                        <li><img src="<?=base_url();?>/images/Extra_Phone_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="15" checked></input>
                        <?php }
                        else{
                           ?>
                       <li><img src="<?=base_url();?>/images/Extra_Phone_Avatar.png" width="100"></li> <input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="15" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==16){?>
                        <li><img src="<?=base_url();?>/images/Finance_Calculator_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="16" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Finance_Calculator_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="16" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==17){?>
                        <li><img src="<?=base_url();?>/images/Human_Resources_Pen_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="17" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Human_Resources_Pen_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="17" ></input>
                        <?php
                        }
                        ?>
                         <?php if($rolevalue['avatar_id']==18){?>
                        <li><img src="<?=base_url();?>/images/Legal_Hammer_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="18" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Legal_Hammer_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="18" ></input>
                        <?php
                        }
                        ?>
                        <?php if($rolevalue['avatar_id']==19){?>
                       <li><img src="<?=base_url();?>/images/Operations_Cogs_Avatar.png" width="100"> </li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="19" checked></input>
                        <?php }
                        else{
                           ?>
                        <li><img src="<?=base_url();?>/images/Operations_Cogs_Avatar.png" width="100"></li><input type="checkbox" name="img1<?=$rolevalue['id']?>"  value="19" ></input>
                        <?php
                        }
                        ?>
                       </ul>
                     </div>
                     <div class="mb-4">
                       <label for="lname" class="mb-2"><b>Responsibilities:</b></label><br>
                       <textarea id="w3review" name="response<?=$rolevalue['id']?>" rows="6" cols="100" class="w-100 form-control"><?php 
                       
                     //   foreach($scenario_role_cate as $key => $riti)
                       
                       {
                        if($rolevalue['crisis_scenario_id']==$user_obj1['id']){
                           echo $rolevalue['responsiblity'];
                        }
                        
                        else{
                           echo "";
                        }
                        
                       }
                       
                       
                       
                       ?></textarea>
                     </div>
                   
                     <?php }
                  }    
                ?>
                     
                     
               </div>
                     <!-- <button class="add-role"><span>Add another Role</span></button> -->

                     <div class="form-group">        
      <div class="col-sm-offset-2">
        <button type="button" name="add" id="add" class="add-role" onclick="save11()"><span>Add another Role</span></button>
      </div>
    </div>
                    <div class="footer">
                     <button type="button" aria-label="Back: Overview" data-qaid="button-back" class="back-overview me-2" onclick="save_back()"><span>Back: Overview</span></button>
                     <!-- <input type="submit" value="Next: Feedback" class="d-block ms-auto submit-btn"> -->
                     <button type="button" id="btnSave" onclick="save()" class="d-block ms-auto submit-btn">Feedback</button>
                     <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                     </div>
                  </form> 
               </div>
            </div>
            <div class="col-md-3 third">
               <div class="right-sidebar">
                  <div class="content-rigth">
                     <h6><b>Roles</b></h6>
                     <p>Who is the user playing as in this scenario? Provide some context for this role by considering some of their responsibilities, who they manage, and who they report to.</p>
                  </div>
               </div>
             
            </div>
         </div>
      </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="<?php base_url(); ?>/immersive/public/js/scenario_role_cate.js"></script>
     

<script type="text/javascript">

// to add more multiple roles in database

    function save11(id)
    {
      var id =$("#id").val();

          $.ajax({
            url : "<?=base_url();?>/Scenario_role_cate/addRole/" + id,
            type: "POST",
            data: $('#update_user').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {  var it=json['insertid'];
                  var i=1//response
                 $('#dynamic_field').append('<div id="row'+i+'"><div class="mb-4"><label for="lname"><b>Role Category:</b></label><br><select name="scenario_role'+it+'" id="cars" class="w-100"><option value =""></option><?php foreach ($Scenario_role as $key => $scenario_role) {?><option data-value="<?php echo $scenario_role['id']; ?>" value="<?php echo $scenario_role['id']; ?>"><?php echo $scenario_role['scenario_role_name']; ?></option><?php   }   ?> </select></div><div class="mb-4"><label for="lname"><b>Job Title:</b></label><br><textarea id="w3review" name="briefing'+it+'" rows="6" cols="100" class="w-100"></textarea></div><div class="mb-4"><label for="lname"><b>Role Avatar:</b></label><br><ul class="ul-flex"><li><img src="<?=base_url();?>/images/default_avatar.png" width="100"></li><input type="checkbox" name="img1'+it+'" value="1"> </input><li><img src="<?=base_url();?>/images/Avatar+1.png" width="100"></li><input type="checkbox" name="img1"  value="2"></input><li><img src="<?=base_url();?>/images/Avatar+2.png" width="100"></li><input type="checkbox"  name="img1" value="3"></input><li><img src="<?=base_url();?>/images/Avatar+3.png" width="100"></li><input type="radio" name="img1"  value="4"> </input> <li><img src="<?=base_url();?>/images/Avatar+4.png" width="100"></li><input type="checkbox" name="img1"  value="5"></input> <li><img src="<?=base_url();?>/images/Avatar+5.png" width="100"></li><input type="checkbox"  name="img1" value="6"></input><li><img src="<?=base_url();?>/images/Avatar+6.png" width="100"></li><input type="checkbox" name="img1"  value="7"> </input> <li><img src="<?=base_url();?>/images/Communication_Megaphone_Avatar.png" width="100"></li><input type="checkbox"  name="img1" value="8"></input><li><img src="<?=base_url();?>/images/Cyber_Security_Lock_Avatar.png" width="100"></li><input type="checkbox"  name="img1" value="9"></input> <li><img src="<?=base_url();?>/images/Executive_Chair_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="10" ></input> <li><img src="<?=base_url();?>/images/Extra_Computer_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="11" ></input> <li><img src="<?=base_url();?>/images/Extra_File_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="12" ></input> <li><img src="<?=base_url();?>/images/Extra_Lock_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="13" ></input> <li><img src="<?=base_url();?>/images/Extra_Money_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="14" ></input><li><img src="<?=base_url();?>/images/Extra_Phone_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="15" > </input> <li><img src="<?=base_url();?>/images/Finance_Calculator_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="16" ></input><li><img src="<?=base_url();?>/images/Human_Resources_Pen_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="17" > </input><li><img src="<?=base_url();?>/images/Legal_Hammer_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="18" > </input> <li><img src="<?=base_url();?>/images/Operations_Cogs_Avatar.png" width="100"></li><input type="checkbox"  name="img1"value="19" ></input></ul></div><div class="mb-4"><label for="lname"><b>Responsibilities:</b></label><br><textarea id="w3review" name="response'+it+'" rows="6" cols="100" class="w-100"></textarea> </div><div class="form-group"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div></div>');
               
              }
                     
            }
        });
    }

         </script>
         <script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  

     $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id"); 
           var res = confirm('Are You Sure You Want To Delete This?');
           if(res==true){
           $('#row'+button_id+'').remove();  
           $('#'+button_id+'').remove();  
           }
      });  
  
    });  
</script>


<script>
$(".image-checkbox").each(function () {
  if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
    $(this).addClass('image-checkbox-checked');
  }
  else {
    $(this).removeClass('image-checkbox-checked');
  }
});

// sync the state to the input
$(".image-checkbox").on("click", function (e) {
  $(this).toggleClass('image-checkbox-checked');
  var $checkbox = $(this).find('input[type="checkbox"]');
  $checkbox.prop("checked",!$checkbox.prop("checked"))

  e.preventDefault();
});
</script>
  
