 <h6 style="float:left;color:skyblue;"  ><b><?php echo count($published_crisis)-$count;?> scenario found</b></h6>
<!-- <h6 style="float:left;color:skyblue;" id="dis" style="display:none;"><b> scenario found</b></h6> -->
<?php 
foreach($published_crisis as $published){?>
    <?php if($dill){
        $db=\Config\Database::connect();
        $tbname=$db->prefixTable("scenario_role_cate");
        $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['id']."")->getRow();
        if($max_role->max_role_no<2) {
          
            continue;
        }
      }
        ?>
       
                  <!--Loop impliment-->
                  <div class="col-md-3">
                     <div class="card">

                     <!-- <div class="abhi<?=  $published['id'];?>"> -->
                         <img class="card-img-top" src="<?=base_url();?>/images/card.png" alt="Card image" style="width:100%">
                         <div class="card-body">
                           <h6 class="card-title"><b><?php echo $published['scenrio_title'];?></b></h6>
                           <p class="card-text mb-0" style="font-size: 14px;">
                        
                        
                           <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(industry_sector) FROM '.$supplist.'  WHERE id='. $published['id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                                  foreach ($IndustoryData as $key => $companyVal) {
                                  if(in_array($companyVal['id'], $arr)){?>
                           <option data-value="<?php echo $companyVal['id']; ?>" value="<?php echo $companyVal['id']; ?>" selected>
                           <input type="hidden" name="" value="<?= $companyVal['industory_name'];?>" class="indus">
                           <?php echo $companyVal['industory_name']; ?>
                             </option>
                                <?php  }
                              }  ?> 
                        
                        
                        </p>





                          
                           <p class="card-text mb-0" style="font-size: 14px;"> <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(attack_vector) FROM '.$supplist.'  WHERE id='. $published['id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                                  foreach ($AttackData as $key => $attackVal) {
                                  if(in_array($attackVal['id'], $arr)){?>
                           <option data-value="<?php echo $attackVal['id']; ?>" value="<?php echo $attackVal['id']; ?>" selected>
                           <?php echo $attackVal['attack_name']; ?>
                             </option>
                                <?php  }
                               }  ?> </p>
                           <p class="card-text mb-0" style="font-size: 14px;">     <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(threat_actor) FROM '.$supplist.'  WHERE id='. $published['id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                                  foreach ($ThreatData as $key => $threatVal) {
                                  if(in_array($threatVal['id'], $arr)){?>
                           <option data-value="<?php echo $threatVal['id']; ?>" value="<?php echo $threatVal['id']; ?>" selected>
                           <?php echo $threatVal['threat_name']; ?>
                             </option>
                                <?php  }
                                 }  ?> </p>
                           <p class="card-text mb-0" style="font-size: 14px;"><?php  
                     $db=\Config\Database::connect();
                     $tbname=$db->prefixTable("scenario_role_cate");
                     $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['id']."")->getRow();
                     echo $max_role->max_role_no; if($max_role->max_role_no>1) {echo "roles";}else{echo "role";} ?></p>


                           
                           <!-- <a href="#" class="btn btn-primary stretched-link">See Profile</a> -->
                         </div>


                     <!-- </div> -->
                       </div>
                  </div>
                  <!--End Loop impliment-->
                  <?php }?>