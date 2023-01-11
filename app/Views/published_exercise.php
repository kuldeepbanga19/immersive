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
                  <ul class="ul mb-0 ps-0 dfsdgsgdsfdf">
                     <li><a href="#">Crisis Home</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li><a href="#">Manage</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                     <li><a href="#"><?=$exercise_name?></a></li>
                  </ul>
               </div>
               <div class="col-md-12 py-3">
                  <p class="text-white mb-0 fs-6 fw-bold">Exercise</p>
                  <h3 class="text-white fs-4"><?=$exercise_name?></h3>
               </div>
               <div class="col-md-12 py-3">
                  <div class="buttn">
                  <input type="hidden" id="sp_id" value="<?=$set_up_id?>">
                  <?php if($start_status == 0) { ?>
                          <a href="javascript:void(0)" onclick="exercise_start_status('<?php echo $set_up_id; ?>',1)" data-toggle="tooltip">Start Exercise</i></a> 
                          
                           <?php if($admin==null){?>

                            <?php echo""; ?>
                            
                            <?php }
                            
                            else{?>
                               <div class="StepNavigationStyled-sc-1dcsn5y-0 eNIbAW d-flex"><button class="nextbtn" type="button" aria-label="Edit" data-qaid="button-next-step"><span>Edit</span></button></div>
                                <?php }?>

                          <?php } 
                         
                         
                         
                         
                         else { ?>
                       <div class="d-flex gap-3">
                       <a href="javascript:void(0)"  onclick="play_presentation()" data-toggle="tooltip">Play</i></a>
                          <a href="javascript:void(0)"  onclick="exercise_start_status('<?php echo $set_up_id; ?>',0)" data-toggle="tooltip"  title="Hide User">Close Exercise</i></a> 
                       </div>
                          
                          <?php } ?>

                  </div>
               </div>
                <div class="col-md-12 py-3">
                  <div class="">
                    <p class="text-white mb-0 fs-6 fw-bold">Overview</p>
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
               <?php if(isset($rolesinfo)){ 
                       foreach($roles as $rd){
                        ?>
                  <h5><?=$rd["job_title"]?></h5>
                  <p><?=$rd["responsiblity"]?></p>
                  <?php } }?>
               </div>
            </div>
           </div>
        </div>
     </div>
    
<script src="<?= base_url() ?>/assets/js/3.6.0/jquery.min.js"></script>
<script>
$(".nextbtn").click(function(){
    var spid=$("#sp_id").val();
    // alert(spid);
    window.location.href="<?=base_url()?>/Presentation_player_setup/review/"+spid;
});

function exercise_start_status(id,start_status){ 
    // alert(start_status);
    $.ajax({
    type:"POST",
    url:"<?= site_url() ?>/Presentation_player_setup/exercise_start_status/"+id+"/"+start_status,
    dataType:"json",
    async: false,
    success:function(json){

      if(json.success){
        window.location.reload();
      }
    }
});
}
function play_presentation(){
    var spid=$("#sp_id").val();
    window.location.href="<?=base_url()?>/Play_presentation/play_presentation/"+spid;
}
      </script>
   </body>
</html>