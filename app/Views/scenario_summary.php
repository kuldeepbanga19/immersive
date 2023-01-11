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
         .inner-txt{padding: 2rem;}
         .flx{display: flex; justify-content: space-between;}
         .flx-content a{text-decoration: none;}
         .executive{
         background: rgb(97, 110, 123);
         border-radius: 20px;
         padding: 3px 9px;
         color: #fff;
         }
         .click{
         background:#efefef;
         height:auto;
         cursor:pointer;
         margin-top:10px;
         padding:10px;
         }
         .click i{
         color: #b7acac;
         font-size: 12px;
         margin-top: 5px;
         }
         .content{
         display:none
         }
         .rotate {
         transform: rotate(-180deg);
         /*transform: rotate(180deg);*/
         transition: .3s;
         }
         .rotate-reset {
         transform: rotate(0deg);
         transition: .3s;
         }
         p i{
         float:right
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
  
    
   <div class="col-md-9 second">
   <form id="update_user" name="update_user" class="p-4">
   <span style="color: red; font-weight: bold;" id="addUserErrmsg" class="errmsg cst-all-errors"></span>
   <input type="hidden" name="id" id="id" value="<?php echo $user_obj1['id']; ?>">
               <div class=" pt-0">
                  <p class="click col-lg-12"><b>Overview</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                           <input type="hidden" name="overview_title" id="overview_title" value="<?php echo $user_obj['scenrio_title']; ?>">
                              <p><b>Title: </b><?php echo $user_obj['scenrio_title']; ?></p>
                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario/singleUser/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                        <p><b>Briefing </b></p>
                        <input type="hidden" name="overview_briefing" id="overview_briefing" value="<?php echo $user_obj['briefing']; ?>">
                        <p><?php echo $user_obj['briefing']; ?></p>
                        <p><b>Industry Sector </b></p>
                        <input type="hidden" name="overview_industry" id="overview_industry" value="<?php if(isset($industryvalues[$user_obj['industry_sector']])) echo $industryvalues[$user_obj['industry_sector']]; ?>">
                        <p><?php if(isset($industryvalues[$user_obj['industry_sector']])) echo $industryvalues[$user_obj['industry_sector']];?></p>
                        <p><b>Attack Vector</b></p>
                        <input type="hidden" name="overview_attack_vector" id="overview_attack_vector" value="<?php if(isset($attackvalues[$user_obj['attack_vector']])) echo $attackvalues[$user_obj['attack_vector']]; ?>">
                        <p><?php if(isset($attackvalues[$user_obj['attack_vector']])) echo $attackvalues[$user_obj['attack_vector']];?></p>
                        <p><b>Threat Actor</b></p>
                        <input type="hidden" name="overview_threat_actor" id="overview_threat_actor" value="<?php if(isset($threatvalues[$user_obj['threat_actor']])) echo $threatvalues[$user_obj['threat_actor']]; ?>">
                        <p><?php if(isset($threatvalues[$user_obj['threat_actor']])) echo $threatvalues[$user_obj['threat_actor']];?></p>
                     </div>
                  </div>
               </div>
               <div class=" pt-0">
                  <p class="click col-lg-12"><b>Roles</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                    <?php if(isset($roles_datavals)){ 
                       foreach($roles_datavals as $rd){
                        ?>
                    <div class="dd">
                     <div class="inner-txt">

                        <div class="flx">
                           <div class="flx-content">
                              <div class="d-flex">
                                 <div class="img">
                                    <img src="<?=base_url();?>/images/Avatar+1.png" width="50">
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0"><b>Job Title: </b>
                                    <?=$rd["job_title"]?>
                                   </p>
                                 </div>
                              </div>
                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario_role_cate/scenario_role_cate/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                        <p><b>Responsibilities </b></p>
                        <p><?php if(isset($role_cate_values2[$user_obj['id']])) echo $role_cate_values2[$user_obj['id']];?></p>
                        <span class="executive"><?php if(isset($rolevalues[$rd['scenario_role_id']])) echo $rolevalues[$rd['scenario_role_id']];?></span>

                     </div>
                     <div class="inner-txt" style="border-top: 1px solid rgb(207, 213, 222);">
                        <p><b>Assigned injects </b></p>
                        <?php  $injectt=$inject_datavals[$rd['id']];
                           if($injectt){
                            $countr=1;
                        foreach($injectt as $asinj){?>
                            
                              <span class="executive">inject <?=$countr?></span>
                               <p><?=$asinj["title"] ?></p>
                           
                            
                             <!-- <span>There are not assigned injects</span>  -->
                             
                            
                        
                         <?php $countr++;}}
                         else{
                         ?>
                             <span>There are not assigned injects</span>
                         <?php }?>
                          
                     </div>
                
                  </div>
                       
                  <?php } }?>
              </div>
               </div>
               <div class=" pt-0">
                  <p class="click col-lg-12"><b>Feedback</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                              <p><b>Feedback: </b><?php if(isset($feed_proform[$user_obj['id']])){echo "yes";}else{echo "no";} ;?></p>
                              <p><b>Type: </b><?php if(isset($feed_proform[$user_obj['id']])){ if($feed_proform[$user_obj['id']]==1)
                                 {echo "With each option";}
                                 elseif($feed_proform[$user_obj['id']]==2){
                                    echo "With the result";}
                                    else{
                                       echo "yes";}
                                       } 
                                       else{ echo "no";}
                                ;?></p>
                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario_feedback/scenario_feedback/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" pt-0">
                  <p class="click col-lg-12"><b>Ranking</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                              <p><b>Rank responses: </b><?php if(isset($feed_proform1[$user_obj['id']])){ if($feed_proform1[$user_obj['id']]==1)
                                 {echo "yes";}
                                 elseif($feed_proform1[$user_obj['id']]==2){
                                   
                                       echo "no";}
                                       } 
                                       else{ echo "no";}
                                ;?></p>
                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario_ranking/scenario_ranking/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class=" pt-0">
                  <p class="click col-lg-12"><b>Analysis</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                              <p><b>Confidence: </b><?php if(isset($feed_proform2[$user_obj['id']])){ if($feed_proform2[$user_obj['id']]==1)
                                 {echo "Enabled";}
                                 elseif($feed_proform2[$user_obj['id']]==2){
                                   
                                       echo "Disabled";}
                                       } 
                                       else{ echo "Disabled";}
                                ;?></p>
                              <p><b>Justification: </b><?php if(isset($feed_proform3[$user_obj['id']])){ if($feed_proform3[$user_obj['id']]==1)
                                 {echo "Enabled";}
                                 elseif($feed_proform3[$user_obj['id']]==2){
                                   
                                       echo "Disabled";}
                                       } 
                                       else{ echo "Disabled";}
                                ;?></p>
                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario_analysis/scenario_analysis/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               

               <?php if($scenario_performance){
                  //  foreach($roles_datavals as $rd){
                  ?>
                <div class=" pt-0">
                  <p class="click col-lg-12"><b>Performance Indicator</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                  <?php if(isset($scenario_performance)){ 
                       foreach($scenario_performance as $performance){
                        ?>
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                           <p><b>Performance Title </b></p>
                         <p><?=$performance["performance_title"]?></p>

                         <p><b>Unit </b></p>
                         <p><?php if($performance["unit"]==1){
                           echo "$";
                         }
                         elseif($performance["unit"]==2){
                           echo "%";}
                           else{
                              echo $performance['custom_unit'];
                           }
                           ?></p>

                         <p><b>Starting Value </b></p>
                         <p><?php echo $performance['starting_value']; ?></p>

                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario_performance/scenario_performance/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                     </div>
                     
                  <?php } }?>
                  </div>

                  </div>
                  <?php } ?>
               
                  
                  <?php if($scenar_injects){
                  //  foreach($roles_datavals as $rd){
                  ?>
                  <div class=" pt-0">
                  <p class="click col-lg-12"><b>Injects</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>

                  <div class="content form">
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                           <?php if(isset($scenar_injects)){
                           $count=1; 
                           foreach($scenar_injects as $injects)  {?>
                           <div class="flx-content"><a href="<?=base_url()?>/inject/index/<?=$injects->scenario_id?>/<?=$injects->id?>"><?=$injects->title?></a><i class="fa " aria-hidden="true"></i>
                        
                           
                           <a href="<?=base_url()?>/inject/index/<?=$injects->scenario_id?>/<?=$injects->id?>"><b>Edit</b></a>                                 
                          
                           </div>  
                        <?php $count++; }} ?>  
                           </div>
                         
                        </div>
                     </div>
                  </div>

             

                  </div>
                  <?php }?>

               <div class=" pt-0">
                  <p class="click col-lg-12"><b>Ending</b>
                     <i class="fa fa-arrow-down rotate-reset arrow"></i>
                  </p>
                  <div class="content form">
                     <div class="inner-txt">
                        <div class="flx">
                           <div class="flx-content">
                              <p><b>Epilogue: </b></p>
                              <input type="hidden" name="epilogue_value" id="epilogue_value" value="<?php echo $epilogue1['epilogue_value']; ?>">
                              <p><?php echo $epilogue1['epilogue_value']?></p>
                           </div>
                           <div class="flx-content">
                              <a href="<?= base_url('/Scenario_epilogue/scenario_epilogue/'.$user_obj['id'])?>"><b>Edit</b></a>                                 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             
            </div>

            <div class="footer">
                   
                   <button type="button" id="btnSave" onclick="save()" class="d-block ms-auto submit-btn">Publish</button>
                   </div>

   </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            $(".click").click(function () {
             $(this).next("div.content").slideToggle("fast");
              $(this).find(".arrow").toggleClass('rotate');
               $(this).find(".arrow").toggleClass('rotate-reset');
             
           });


            $(".popup").hide();
            $(".saveexit").click(function(){
               $(".popup").show();
            });
            $(".cancel, .popup").click(function(){
               $(".popup").hide();
            });


            $( ".second" ).insertAfter( ".first" );
            $( ".third" ).insertAfter( ".second" );

         });
      </script>

<script type="text/javascript">

function save(id)
    { var id =$("#id").val();




      $.ajax({
            url : "<?=base_url();?>/Scenario_summary/updateSummary/" + id,
            type: "POST",
            data: $('#update_user').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                

               window.location.replace("<?=base_url();?>/Scenario/new/" + id);
              }
                 
              else
              {
                 $("#addUserErrmsg").html(json.msg);
                   $("#addUserErrmsg").html(json.msg + '<br/>');
 $("#addUserErrmsg").show();
               
              }    
            }
        });


      // var scen =$("#overview_title").val();
      // alert(scen);
      // window.location.replace("<?=base_url();?>/Scenario/new/" + id);
    }

         </script>
       
   </body>
</html>