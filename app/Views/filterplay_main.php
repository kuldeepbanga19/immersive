<!--Loop impliment-->
<?php foreach($presentation_data as $value){
   //  var_dump($presentation_data);die;
     if($dill){
        $db=\Config\Database::connect();
        $tbname=$db->prefixTable("scenario_role_cate");
        $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $value['crisis_scenario_id']."")->getRow();
        if($max_role->max_role_no<2) {
            continue;
        }
      }
      ?>
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
                                         <?php  if($value['set_up_type']==3){

                                          //   $single_ep=$data['single_ep']=$db->query("SELECT singlep_id FROM  imr_player_assignment WHERE  userid=1 and singlep_id=". $value['id']."")->getResultArray();
                                          //   print_r($data['single_ep']);die;

                                          //   $value['singlep_id']
                                            ?>
                                           
                                            
                                          <a href="<?= base_url('/Presentation_player_setup/published_exercise/'.$value["id"])?>" class="underline"> 
                                              <?php 
                                          if($value['start_status']==1){?>
                                             
                                            <?php echo "Active";?>
                                             

                                             <?}
                                             else{
                                                echo "Not started";
                                             }
                                             
                                          }elseif($value['set_up_type']==1){
                                             // $value['singlep_id']
                                             ?>
                                          <a href="<?= base_url('/Single_player_setup/publishdata/'.$value["id"])?>" class="underline"> 
                                              <?php 
                                          if($value['start_status']==1){?>
                                             
                                            <?php echo "Active";?>
                                             

                                             <?}
                                             else{
                                                echo "Not started";
                                             }
                                             
                                          }else{?>
                                            
                                                 <?php 
                                             if($value['start_status']==1){?>
                                                
                                               <?php echo "Active";?>
                                                
   
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
               <?php }?>
               <!--End Loop impliment-->