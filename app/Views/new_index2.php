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

         .inprogress > b + a{
            display:none;
         }


.card-headerr p {
font-size: 0.77rem;
color: #8b8b8b;
}
.main-card-bx .card-title {
    font-size: 15px;
    margin: 4px 0 12px;
}
.listplay {
    font-size: 0.85rem;
}

      </style>
   </head>
   <body>
    
      <div class="container mt-5">
         <div class="row">
            <div class="col-md-12">
               <div class="tabset">
                  <!-- Tab 1 -->
                  <input type="radio" name="tabset" id="tab2" aria-controls="marzen" checked>
                  <label for="tab2">Assigned to me(<?php echo $assigned_to_me;?>)</label>
                  <!-- Tab 2 -->
                  
                  <!-- Tab 3 -->
                  <div class="tab-panels">
                     <section id="marzen" class="tab-panel">
                       
                    
                        <div class="row">
                          
                         
                           <div class="col-md-12">
                              <!--<h5 class="text-white text-center">You have nothing assigned to you</h5>
                              <p class="text-white text-center">You can challenge yourself with a variety of exercises or collections via the top nav</p>-->
                           </div>
                           <?php $counter=0; ?>
                          <?php foreach($assigneddata as $value){?>
                            <div class="col-md-3">
                              
                              <div class="card">
                                 <img src="<?=base_url();?>/images/card-img.png" class="card-img-top" alt="...">
                                 <div class="card-body">
                                    <div class="flx">
                                       <div class="card-headerr">
                                          <p><b>Custom Crisis Sim</b></p>
                                       </div>
                                       <div class="card-headerr">
                                          <p><b><?php if($value['set_up_type']==1){echo "Single Player";}elseif($value['set_up_type']==2){echo "Drill Player";}else{echo "Presenation Player";} ?></b></p>
                                       </div>
                                    </div>
                                    <h6 class="card-title"><b><?php echo $value['exercise_name']; ?></b></h6>

                                    
                                    <p class="card-text"><i class="fa fa-briefcase me-2" aria-hidden="true"></i>
                                    <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(industry_sector) FROM '.$supplist.'  WHERE id='. $value['crisis_scenario_id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                              //   var_dump($arr);die;
                                  foreach ($IndustoryData as $key => $companyVal) {
                                  if(in_array($companyVal['id'], $arr)){?>
                           <option data-value="<?php echo $companyVal['id']; ?>" value="<?php echo $companyVal['id']; ?>" selected>
                           <?php echo $companyVal['industory_name']; ?>
                             </option>
                                <?php  }
                              }  ?> 
                                 </p>
                                 
                                    <p class="card-text"><i class="fa fa-file-archive-o me-2" aria-hidden="true"></i>
                                 
                                 
                                    <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(attack_vector) FROM '.$supplist.'  WHERE id='. $value['crisis_scenario_id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                              //   var_dump($arr);die;
                                  foreach ($AttackData as $key => $attackVal) {
                                  if(in_array($attackVal['id'], $arr)){?>
                           <option data-value="<?php echo $attackVal['id']; ?>" value="<?php echo $attackVal['id']; ?>" selected>
                           <?php echo $attackVal['attack_name']; ?>
                             </option>
                                <?php  }
                              }  ?> 
                                 
                                 
                                 </p>
                                    <p class="card-text"><i class="fa-solid fa-skull-crossbones me-2" aria-hidden="true"></i>
                                 
                                    <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(threat_actor) FROM '.$supplist.'  WHERE id='. $value['crisis_scenario_id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                              //   var_dump($arr);die;
                                  foreach ($ThreatData as $key => $threat_actorVal) {
                                  if(in_array($threat_actorVal['id'], $arr)){?>
                           <option data-value="<?php echo $threat_actorVal['id']; ?>" value="<?php echo $threat_actorVal['id']; ?>" selected>
                           <?php echo $threat_actorVal['threat_name']; ?>
                             </option>
                                <?php  }
                              }  ?> 
                                 
                                 </p>
                                    <p class="card-text"><i class="fa fa-users me-2" aria-hidden="true"></i><?php  
                     $db=\Config\Database::connect();
                     $tbname=$db->prefixTable("scenario_role_cate");
                     $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $value['crisis_scenario_id']."")->getRow();
                     echo $max_role->max_role_no; if($max_role->max_role_no>1) {echo "roles";}else{echo "role";} ?></p>
                                    <div class="flx mt-4">
                                       <div class="inprogress">
                                          <b>
                                         <?php  if($value['set_up_type']==3){?>
                                          <a href="<?= base_url('/Presentation_player_setup/published_exercise/'.$value['id'])?>" class="underline"> 
                                              <?php 
                                          if($value['start_status']==1){?>
                                             
                                            <?php echo "In Progress";?>
                                             

                                             <?}
                                             else{
                                                echo "Not started";
                                             }
                                             
                                          }elseif($value['set_up_type']==1){?>
                                          <a href="<?= base_url('/Single_player_setup/publishdata/'.$value['id'])?>" class="underline"> 
                                              <?php 
                                          if($value['start_status']==1){?>
                                             
                                            <?php echo "In Progress";?>
                                             

                                             <?}
                                             else{
                                                echo "Not started";
                                             }
                                             
                                          }else{?>
                                            
                                                 <?php 
                                             if($value['start_status']==1){?>
                                                
                                               <?php echo "In Progress";?>
                                                
   
                                                <?}
                                                else{
                                                   echo "Not started";
                                                }
                                                
                                             }
                                          
                                          ?></b>
                                       </div>
                                       <div class="icon">
                                          <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
                           </div>

                           <?php $counter++;
                                 if($counter>=4){
                                 break; 
                                 }?>
                           <?php }?>
                         
                        </div>
                      
                        <div class="button">
                        <div class="assign">
                           <!-- <a href="#">Assign an Activity</a> -->
                        </div>
                        <div class="view-all">
                           <a href="<?=base_url();?>/Play_main/play_main">View all <i class="fa fa-chevron-right ms-2" aria-hidden="true" style="font-size: 13px;"></i></a>
                        </div>
                     </div>
                     </section>
                     <!-- <div class="button">
                        <div class="assign">
                            <a href="#">Assign an Activity</a> 
                        </div>
                        <div class="view-all">
                           <a href="#">View all <i class="fa fa-chevron-right ms-2" aria-hidden="true" style="font-size: 13px;"></i></a>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="row mt-5 mb-5">
            <div class="col-md-6">
              <div class="card">
                 <img src="<?=base_url();?>/images/card-img.png" class="card-img-top" alt="...">
                 <div class="card-body">
                    <div class="content text-center">
                      <h5><b>Recent Labs</b></h5>
                      <p class="mb-0">Just started, Great!</p>
                      <p>Complete a lab to get started.</p>
                    </div>
                 </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                 <img src="<?=base_url();?>/images/card-img.png" class="card-img-top" alt="...">
                 <div class="card-body">
                    <div class="content text-center">
                      <h5><b>Recent Labs</b></h5>
                      <p class="mb-0">Just started, Great!</p>
                      <p>Complete a lab to get started.</p>
                    </div>
                 </div>
              </div>
            </div>
         </div>
      </div>
   </body>
</html>