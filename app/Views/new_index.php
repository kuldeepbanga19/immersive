      <div class="container mt-5">
         <div class="row">
            <div class="col-md-12">
               <div class="tabset">
                  <!-- Tab 1 -->
                  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                  <label for="tab1">Managed by me(<?php echo $manage_by_me;?>)</label>
                  <!-- Tab 2 -->
                  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                  <label for="tab2">Assigned to me(<?php echo $assigned_to_me;?>)</label>
                  <!-- Tab 3 -->
                  <div class="tab-panels">
                     <section id="marzen" class="tab-panel border-top-0 p-0">
                        <div class="row main-card-bx filter_data2">
                        <?php foreach($presentation_data as $value){?>
                           <div class="col-md-3">
                              <div class="card">
                                 <img src="<?=base_url();?>/images/card-img.png" class="card-img-top" alt="...">
                                 <div class="card-body ">
                                    <div class="flx">
                                       <div class="card-headerr">
                                          <p class="sm-head mb-1">
                                             <b>Custom Crisis Sim</b>
                                          </p>
                                       </div>
                                       <div class="card-headerr">
                                          <p class="sm-head mb-1">
                                             <b><?php if($value['set_up_type']==1){echo "Single Player";}elseif($value['set_up_type']==2){echo "Drill Player";}else{echo "Presenation Player";} ?></b>
                                          </p>
                                       </div>
                                    </div>
                                    <h6 class="card-title">
                                       <b><?php echo $value['exercise_name']; ?></b>
                                    </h6>
                                    <p class="card-text d-flex align-items-center listplay">
                                       <i class="fa fa-briefcase me-2" aria-hidden="true"></i>
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
                                 
                                    <p class="card-text d-flex align-items-center listplay">
                                       <i class="fa fa-file-archive-o me-2" aria-hidden="true"></i>
                                 
                                 
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
                                    <p class="card-text d-flex align-items-center listplay">
                                       <i class="fa fa-exclamation-circle	 me-2" aria-hidden="true"></i>
                                 
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
                                    <p class="card-text d-flex align-items-center listplay">
                                       <i class="fa fa-users me-2" aria-hidden="true"></i>
                                       <?php  
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
                                          
                                          ?></a></b>
                                          
                                       </div>
                                       <div class="icon">
                                          <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
                           </div> <?php }?>
                         
                           <div class="button mt-4">
                              <div class="assign-btn me-3">
                                 <a href="#"><i class="fa fa-plus me-2" aria-hidden="true"></i>Assign an activity</a>
                              </div>
                              <div class="view-all ms-2">
                                 <a href="<?=base_url();?>/Manage/manage">View all <i class="fa fa-chevron-right ms-2" aria-hidden="true" style="font-size: 13px;"></i></a>
                              </div>
                           </div>
                        </div>
                     </section>
                     <section id="rauchbier" class="tab-panel">
                        <div class="row  main-card-bx filter_data2">
                           <div class="col-md-12">
                           </div>
                           <?php $counter=0; ?>
                          <?php foreach($assigneddata as $value){?>
                            <div class="col-md-3">
                              <div class="card">
                                 <img src="<?=base_url();?>/images/card-img.png" class="card-img-top" alt="...">
                                 <div class="card-body">
                                    <div class="flx">
                                       <div class="card-headerr">
                                          <p class="sm-head mb-1">
                                             <b>Custom Crisis Sim</b>
                                          </p>
                                       </div>
                                       <div class="card-headerr">
                                          <p class="sm-head mb-1">
                                             <b><?php if($value['set_up_type']==1){echo "Single Player";}elseif($value['set_up_type']==2){echo "Drill Player";}else{echo "Presenation Player";} ?></b>
                                          </p>
                                       </div>
                                    </div>
                                    <h6 class="card-title">
                                       <b><?php echo $value['exercise_name']; ?></b>
                                    </h6>
                                    <p class="card-text d-flex align-items-center listplay">
                                       <i class="fa fa-briefcase me-2" aria-hidden="true"></i>
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
                                    <p class="card-text d-flex align-items-center listplay"><i class="fa fa-file-archive-o me-2" aria-hidden="true"></i>
                                 
                                 
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
                                    <p class="card-text d-flex align-items-center listplay">
                                       <i class="fa fa-exclamation-circle	 me-2" aria-hidden="true"></i>
                                 
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
                                    <p class="card-text d-flex align-items-center listplay"><i class="fa fa-users me-2" aria-hidden="true"></i><?php  
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
                                          
                                          ?></a></b>
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
                        <div class="view-all mt-4">
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
         <div class="row mt-3 mb-5">
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
