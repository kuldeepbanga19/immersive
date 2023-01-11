<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://yatharthritiitschool.com/immersive/assets/css/stylesheet.css"> 

  <link rel="icon" type="image/x-icon" href="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg">

      
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
                  <a class="nav-link text-white" href="#"> <img src="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg" width="40px"alt=""> Create Scenario</a>
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
                              <button class="buttn">Save</button>
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
                        <li class=""><a href="<?= base_url('/Scenario/singleUser/'.$user_obj['id'])?>">Overview</a></li>
                        <li class=""><a href="<?= base_url('/Scenario_role_cate/scenario_role_cate/'.$user_obj['id'])?>">Roles</a></li>
                        <li class=""><a href="<?= base_url('/Scenario_feedback/scenario_feedback/'.$user_obj['id'])?>">Feedback</a></li>
                        <li class=""><a href="<?= base_url('/Scenario_ranking/scenario_ranking/'.$user_obj['id'])?>">Ranking</a></li>
                        <li class=""><a href="<?= base_url('/Scenario_analysis/scenario_analysis/'.$user_obj['id'])?>">Analysis</a></li>
                        <li class=""><a href="<?= base_url('/Scenario_performance/scenario_performance/'.$user_obj['id'])?>">Performance Indicators</a></li>
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
                           <li class="py-2 mb-2 d-flex justify-content-between align-items-center add-inject"><a href="<?=base_url()?>/inject/index/<?=$injects->scenario_id?>/<?=$injects->id?>"><?=$injects->title?></a></li>  
                        <?php $count++; }} ?>  
                        <li class="add-inject"><a href="<?=base_url()?>/inject/create/<?=$user_obj['id']?>">Add Inject</a></li>
                     </ul>
                  </nav>
                  <nav>
                     <div class="col-md-3">
                        <div class="nav-heading">
                           <h6><b>Ending</b></h6>
                        </div>
                     </div>
                     <ul class="ul">
                        <li class=""><a href="<?= base_url('/Scenario_epilogue/scenario_epilogue/'.$user_obj['id'])?>">Epilogue</a></li>
                     </ul>
                  </nav>
                  <nav>
                     <div class="col-md-3">
                        <div class="nav-heading">
                           <h6><b>Summary</b></h6>
                        </div>
                     </div>
                     <ul class="ul">
                        <li class=""><a href="<?= base_url('/Scenario_summary/scenario_summary/'.$user_obj['id'])?>">View Summary</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
          
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $(document).ready(function(){
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

      <script  type="text/javascript">
            function exit(id)
    {
      var id =$("#id").val();
      window.location.replace("<?=base_url();?>/Scenario/new/" + id);
    }

    function review(id){
      var id =$("#id").val();
      window.location.replace("<?=base_url();?>/Scenario_summary/scenario_summary/" + id);
    }
      </script>
   </body>
</html>