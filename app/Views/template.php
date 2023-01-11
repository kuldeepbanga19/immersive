<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
        .dis{
         display: none;
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
      <div class="container-fluid mt-4">
         <div class="row">
            <div class="col-md-3">
               <div class="nav-heading">
                  <h6><b>Filters</b></h6>
               </div>
            </div>
            <div class="col-md-6">
               <div class="nav-heading text-center">
                  <h5><b>Select a scenario template</b></h5>
                
               </div>
            </div>
            <div class="col-md-3">
               <!-- <div class="nav-heading">
                  <h6>Navigation</h6>
               </div> -->
            </div>
         </div>
         <div class="row">
            <div class="col-md-3">
               <div class="navigation">
                  <nav>
                     <ul class="ul">
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Scenario name or contents</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide">
                              <input type="text" name="search" style="padding: 0.3rem;" placeholder="What are you looking for?" class="common_select search">
                           </div>
                        </div>
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Exercise Compatibilitys</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide" style="display: flex;">
                              <input type="checkbox" name="dill" style="padding: 0.3rem;" class="common_select dill">
                              <p class="mb-0 ms-2">Drill(<?php 
                              $count=0;
                             
                              foreach($published_crisis as $published){
                                 $db=\Config\Database::connect();
                                 $tbname=$db->prefixTable("scenario_role_cate");
                                 $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['id']."")->getRow();
                                 if($max_role->max_role_no>1) { $count=$count+1;}
                              }
                              echo $count;?>)</p>
                           </div>
                          
                        </div>
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Industry Sector</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide">
                              <?php if (isset($industory_nam)){?>
                           <?php foreach($industory_nam as $key){?>
                                 <div class="d-flex">
                                    <input type="checkbox" name="industry" class="common_select industry" style="padding: 0.3rem;" value="<?= $key["id"];?>">
                                    <p class="mb-0 ms-2"><?php echo $key["industory_name"];
                                    $db=\Config\Database::connect();
                                    $max_no=$db->query("SELECT COUNT(*) as max_non from yatharth_immersive.imr_crisis_scenrio where publish_status='1' and industry_sector=".$key["id"])->getRow();
                                    // var_dump($max_no->max_non);die;
                                    echo " (".$max_no->max_non.")";
                                    ?></p>
                                 </div>
                                 <?php }}?>
                           </div>
                        </div>
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Attack Vector</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide">
                           <?php if (isset($attack_nam)){?>
                           <?php foreach($attack_nam as $key){?>
                                 <div class="d-flex">
                                 <input type="checkbox" name="attack" class="common_select attack" style="padding: 0.3rem;" value="<?= $key["id"];?>">
                                    <p class="mb-0 ms-2"><?php echo $key["attack_name"];
                                    $db=\Config\Database::connect();
                                    $max_no=$db->query("SELECT COUNT(*) as max_non from yatharth_immersive.imr_crisis_scenrio where publish_status='1' and attack_vector=".$key["id"])->getRow();
                                    // var_dump($max_no->max_non);die;
                                    echo " (".$max_no->max_non.")";
                                    ?></p>
                                 </div>
                                 <?php }}?>
                           </div>
                           </div>
                           <div class="nav-one">
                          
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Threat Actor</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide">
                           <?php if (isset($threat_nam)){?>
                           <?php foreach($threat_nam as $key){?>
                                 <div class="d-flex">
                                 <input type="checkbox" name="threat" class="common_select threat" style="padding: 0.3rem;" value="<?= $key["id"];?>">
                                    <p class="mb-0 ms-2"><?php echo $key["threat_name"];
                                    $db=\Config\Database::connect();
                                    $max_no=$db->query("SELECT COUNT(*) as max_non from yatharth_immersive.imr_crisis_scenrio where publish_status='1' and threat_actor=".$key["id"])->getRow();
                                    // var_dump($max_no->max_non);die;
                                    echo " (".$max_no->max_non.")";
                                    ?></p>
                                 </div>
                                 <?php }}?>
                           </div>
                           </div>
                        </div>
                        </div>
                   
                     </ul>
                  </nav>
                  <div class="col-md-9">
               <div class="row filter_data">
               <h6 style="float:left;color:skyblue;"><b><?php echo count($published_crisis);?> scenario found</b></h6>
               <?php foreach($published_crisis as $published){?>
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
                     <!-- <input type="hidden" name=""> -->


                           
                           <!-- <a href="#" class="btn btn-primary stretched-link">See Profile</a> -->
                         </div>


                     <!-- </div> -->
                       </div>
                  </div>
                  <!--End Loop impliment-->
                  <?php }?>
               </div>
               
            </div>
                
               </div>
            </div>
            
           
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script type="text/javascript">
         // var searchvaal="";
         $(document).ready(function(){
            $(".popup").hide();
            $(".saveexit").click(function(){
               $(".popup").show();
            });
            $(".cancel, .popup").click(function(){
               $(".popup").hide();
            });
            $(".nav-one a").click(function(){
               $(this).find("i").toggleClass("fa-caret-down fa-caret-up");
                $(this).parents(".nav-one").find(".slide").slideToggle();
            });
         });


         $(document).ready(function(){
         // $(".industry").click(function(){
         // $('.industry:checkbox:checked').each(function(){
         //       	// if($(this).val()!=$(".indus").val())
         //            alert($(this).val());
                  
         //             });
         //          });
         // filter_data();	


         // function filter_data()
         // {
         //    var action='';
         //    var industry=get_filter('industry');
         //    var attack=get_filter('attack');
         //    var threat=get_filter('threat');
         //    $.ajax({
         //       url:"scenario.php",
         //       method:"POST",
         //       data:{action:action,industry:industry,attack:attack,threat:threat},
         //       success:function(data){
         //          $('.filter_data').html(data);
         //       }
         //    });
         // }

         
         // function get_filter(class_name)
         // {
         //    var filter=[];
         //    $('.'+class_name+':checked').each(function(){
         //       filter.push($(this).val());
         //    });
         //    return alert(filter);
         // }

         // $('.common_select').click(function(){
         //    filter_data(); 
         // });
         window["threat"]=Array();
         window["attack"]=Array();
         window["industry"]=Array();
         window["dill"]=Array();
         // window["search"]="";
         $(".common_select").click(function(){
           
            if ($(this).prop('checked')==false){ 
               
              
               var value=$(this).val();
               if($(this).prop('name')=='threat'){
                  var arrname="threat";
               }
               else if($(this).prop('name')=='attack'){
                  var arrname="attack";
               }
               else if($(this).prop('name')=='dill'){
                  var arrname="dill";
               }
               else{
                  var arrname="industry";
                  
               }
                      
               for( var i = 0; i < window[arrname].length; i++){ 
    
                 if ( window[arrname][i] === value) { 

                  window[arrname].splice(i, 1); 
                  }

                 }
             }
             else{
                if($(this).prop('name')=='threat'){
                  var arrname="threat";
                  window[arrname].push($(this).val());
                }
                else if($(this).prop('name')=='attack'){
                  var arrname="attack";
                  window[arrname].push($(this).val());

                }
                else if($(this).prop('name')=='dill'){
                  var arrname="dill";
                  window[arrname].push($(this).val());

                }
                else{
                  var arrname="industry";
                  window[arrname].push($(this).val());

                }
              
             }
            // console.log(searchvaal);
            var threatvaal=window["threat"];
            var attackvall=window["attack"];
            var industryvall=window["industry"];
            var dillvall=window["dill"];
            var searchvaal=$('.search').val().trim();
            // console.log(searchvaal);

            // $('.search').on('keyup',function(){
            // var searchvaal=$(this).val();
            // })

            $.ajax({
               method:"POST",
               async:false,
               dataType:"json",
               url:"<?=base_url()?>/Scenario/getfilterscenario",
               data:{threatvaal:threatvaal,attackvall:attackvall,industryvall:industryvall,dillvall:dillvall,searchvaal:searchvaal},
               success:function(json){
                  if(json.success){
                     $(".filter_data").html(json.filterddata);
                  }
               }

            })
         })
         
         $('.search').on('keyup',function(){
            var searchvaal=$(this).val().trim();

            var threatvaal=window["threat"];
            var attackvall=window["attack"];
            var industryvall=window["industry"];
            var dillvall=window["dill"];
            // window["dill"]=Array();
            // console.log(window["industry"]);

            // var dillvall=window["dill"];
            // console.log(dillvall);

            $.ajax({
               method:"POST",
               async:false,
               dataType:"json",
               url:"<?=base_url()?>/Scenario/getfilterscenario",
               // data:{searchvaal:searchvaal},
               data:{threatvaal:threatvaal,attackvall:attackvall,industryvall:industryvall,dillvall:dillvall,searchvaal:searchvaal},
               success:function(json){
                  if(json.success){
                     $(".filter_data").html(json.filterddata);
                  }
               }

            })
         });

         // $(".dill").click(function(){
         //          $(".hid").hide();
         //       });
        
         // $('.dill').click(function() {
         //         $(".hid").toggle(this.checked);
         //         $("#dispaly").hide();
         //            });

         // if($('.dill').prop('checked')) {
         //           $("#dispaly").hide();
         //           $(".hid").show();
         //      } else {
         //       $("#dispaly").show();
         //           $(".hid").hide();   
         //             }
      });
            
      </script>
   </body>
</html>