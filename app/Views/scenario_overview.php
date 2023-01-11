<!DOCTYPE html>

   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

      <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/stylesheet.css"> 

<link rel="icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/Capture.svg">
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
                              <button class="buttn" onclick="save_overview()">Save</button>
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
               
               <div class="form">
               <form id="update_user" name="update_user" class="p-4">
               <span id="editUserErrmsg_" style="color: red; font-weight: bold;"></span> 
                  <!-- <form action="/action_page.php" class="p-4"> -->
                  <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
                     <div class="mb-2">
                       <label for="fname" class="mb-2"><b>Scenario Title:</b></label>
                       <input type="text" name="name" class="form-control" value="<?php echo $user_obj['scenrio_title']; ?>">
                     </div>
                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Industry Sector:</b></label>
                       <select name="industry" id="cars" class="w-100 form-control">
                        <option value="" disabled selected>Choose Industry Sector</option>
                       <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(industry_sector) FROM '.$supplist.'  WHERE id='. $user_obj['id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                                  foreach ($IndustoryData as $key => $companyVal) {
                                  if(in_array($companyVal['id'], $arr)){?>
                           <option data-value="<?php echo $companyVal['id']; ?>" value="<?php echo $companyVal['id']; ?>" selected>
                           <?php echo $companyVal['industory_name']; ?>
                             </option>
                                <?php  }
                                else{ ?>
                       <option data-value="<?php echo $companyVal['id']; ?>" value="<?php echo $companyVal['id']; ?>"><?php echo $companyVal['industory_name']; ?>
                        </option>
                               <?php   } }  ?> 
                               
                               
                               
                       </select>
                     </div>

                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Attack Vector:</b></label>
                       <select name="attack" id="cars" class="w-100 form-control">
                        <option value="" disabled selected>Choose Attack Vector</option>
                       <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(attack_vector) FROM '.$supplist.'  WHERE id='. $user_obj['id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                                  foreach ($AttackData as $key => $attackVal) {
                                  if(in_array($attackVal['id'], $arr)){?>
                           <option data-value="<?php echo $attackVal['id']; ?>" value="<?php echo $attackVal['id']; ?>" selected>
                           <?php echo $attackVal['attack_name']; ?>
                             </option>
                                <?php  }
                                else{ ?>
                       <option data-value="<?php echo $attackVal['id']; ?>" value="<?php echo $attackVal['id']; ?>"><?php echo $attackVal['attack_name']; ?>
                        </option>
                               <?php   } }  ?> 
                               
                               
                               
                       </select>
                     </div>

                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Threat Actor:</b></label>
                       <select name="threat" id="cars" class="w-100 form-control">
                        <option value="" disabled selected>Choose Threat Actor</option>

                       <?php  
                         $db = \Config\Database::connect();
                         $supplist = $db->prefixTable('crisis_scenrio'); 
                         $query = $db->query('SELECT GROUP_CONCAT(threat_actor) FROM '.$supplist.'  WHERE id='. $user_obj['id'].'')->getRow();
                        foreach ($query as $key => $queryVal) {
                                $arr =   explode(",", $queryVal) ;
                                } 
                                  foreach ($ThreatData as $key => $threatVal) {
                                  if(in_array($threatVal['id'], $arr)){?>
                           <option data-value="<?php echo $threatVal['id']; ?>" value="<?php echo $threatVal['id']; ?>" selected>
                           <?php echo $threatVal['threat_name']; ?>
                             </option>
                                <?php  }
                                else{ ?>
                       <option data-value="<?php echo $threatVal['id']; ?>" value="<?php echo $threatVal['id']; ?>"><?php echo $threatVal['threat_name']; ?>
                        </option>
                               <?php   } }  ?> 
                               
                               
                               
                       </select>
                     </div>

                     <div class="mb-2">
                       <label for="lname" class="mb-2"><b>Briefing:</b></label>
                       <textarea id="w3review" name="briefing" rows="6" cols="100" class="w-100 form-control"  value="<?php echo $user_obj['briefing']; ?>"><?php echo $user_obj['briefing']; ?></textarea>
                     </div>


                    <!-- <input type="submit" value="Next: Role" class="d-block ms-auto submit-btn"> -->
                    <button type="button" id="btnSave" onclick="save()" class="d-block ms-auto submit-btn">Role</button>
                    <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                  </form> 
               </div>
            </div>
            <div class="col-md-3 third">
               <div class="right-sidebar">
                  <div class="content-rigth">
                     <h6><b>Overview</b></h6>
                     <p>Write an overview of your scenario. Set the scene, considering what has happened, who is involved, and what the potential impact might be.</p>
                  </div>
            
                  <div class="content-rigth">
                     <h6><b>Scenario details</b></h6>
                     <p>Write an overview of your scenario. Set the scene, considering what has happened, who is involved, and what the potential impact might be.</p>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="<?php base_url(); ?>/immersive/public/js/scenario_overview.js"></script>
     

