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
.percent{
    background: #e6eef6;
    padding: 30px;
    text-align: center;
}







/*body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  display: flex;
  justify-content: center;
  height: 100vh;
  background: #0d0c2d;
}

.container {
  display: grid;
  grid-template-columns: repeat(1, 160px);
  grid-gap: 80px;
  margin: auto 0;
}

*/
.box {
  width: 50%;
}

.box h2 {
  display: block;
  text-align: center;
  color: #fff;
}
.box .chart {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  font-size: 40px;
  line-height: 127px;
  height: 160px;
  color: #fff;
}

.box canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  width: 100%;
}

.percent2{
   background: #669bc9;
}
.percent3{
   background: #fbcde9;
}
.percent4{
   background: #f4c4c2;
}
.executive{
       background: #e7e7e7;
    border-radius: 50px;
       padding: 5px 12px;
}
.great-answer{
   border: 1px solid green;
    color: green;
    border-radius: 50px;
    padding: 2px 10px;
}
.progess{
       background: #aac8e1;
    padding: 10px;
    margin-bottom: 19px;
}
.answer-box {
      background: #ebecfb;
    padding: 15px 15px 15px 35px;
    border: 2px solid #9197e6;
    margin-bottom: 20px;
    border-radius: 10px;
}
.conduct{
   position: relative;
}
.conduct:before{
      position: absolute;
    content: "";
    height: 12px;
    width: 12px;
    /* background: red; */
    left: -19px;
    border: 3px solid #3440d2;
    border-radius: 50%;
    top: 7px;
}
.first-part {
    background: #f7faff;
    padding: 15px 20px;
    margin-bottom: 15px;
}
a.custom-btn {
       background: #1b1e4a;
    padding: 10px 10px;
    border-radius: 8px;
    width: 100%;
    display: block;
    color: #fff;
    text-align: center;
    text-decoration: none;
}
.somewhat{
   background: #ffc107 !important;
   color: #000 !important;
}
.answer-left{
   max-width: 80%;
   width: 80%;
}
.answer-rigth {
    margin: auto;
    border-left: 1px solid #c9c7c7;
    height: 70px;
    display: flex;
    align-items: center;
}
.answer-rigth a{
       border: 1px solid #7179be;
    border-radius: 27px;
    color: #7179be;
    text-decoration: none;
    margin-left: 50px;
    padding: 10px 20px;
}
.create-answer{

    border: 1px solid #7179be;
    border-radius: 27px;
    color: #7179be;
    text-decoration: none;
    margin-left: 50px;
    padding: 3px 15px;

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
  
      <div class="second-header">
         <div class="row justify-content-between">
            <div class="col-md-4">
               <h4>Results</h4>
            </div>
            <div class="col-md-2">
                <div class="create-view">
                  <div class="create">
                  <a href="#" class="saveexit"><p class="text-dark mb-0">Exit<i class="fa fa-times ms-2" aria-hidden="true"></i></p></a>
                     <a href="#" class="text-dark">EXERCISE TIME: <?php if(round(abs($end_date - $start_date) / 60,2)==0){echo "-";}else{echo round(abs($end_date - $start_date) / 60,2). " minute";} ?></a><br>
                     <a href="#" class="text-dark">EXERCISE STARTED:</a><br>
                     <a href="#" class="text-dark"><b><?= date('d M y',$start_date)?></b></a><br>
                     <a href="#" class="text-dark">EXERCISE COMPLETED:</a><br>
                     <a href="#" class="text-dark"><b><?= date('d M y',$end_date)?></b></a>
                  </div>
                 <!--  <div class="tree-view">
                     <a href="#" class="text-dark"><b>Tree View</b></a>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid mt-4">
         <div class="row mb-3">
            <div class="col-md-3">
               <div class="nav-heading">
                  <h6><b>Navigation</b></h6>
               </div>
            </div>
      <!--       <div class="col-md-9">
               <div class="nav-heading d-flex justify-content-between">
                  <h6><b>Overview</b></h6>
                  <button type="submit" class="submit-btn">Export CSV</button>
               </div>
            </div> -->
           
         </div>
         <div class="row">
         <div class="col-md-3">
               <div class="navigation">
                  <nav>
                     <ul class="ul">
                    
                        <li class="py-3 d-flex justify-content-between align-items-center"><a href="<?= base_url('/Player_result/player_result/'.$player_setup_id)?>">Overview</a><i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
                        <?php if(($response->feedback_type)==2){
                           $count=1; 
                           foreach($scenar_injects as $injects)  {?>
                           <li class="py-3 d-flex justify-content-between align-items-center add-inject"><a href="<?= base_url('/Player_result/inject_result/'.$player_setup_id.'/'.$injects->id)?>"><?=$injects->title?></a><i class="fa " aria-hidden="true"></i></li>  
                        <?php $count++; }} ?>  
                       
                     </ul>
                  </nav>
                 
               </div>
            </div>
            <div class="col-md-9">
               <div class="first-part">
                  <div class="exercise mb-4 d-flex">
                     <div class="before-img" style="margin-right: 15px;">
                        <img src="<?=base_url();?>/images/Avatar+1.png" width="50">
                     </div>
                       <div class="ml-4">
                           <h6><b><?= $user_name?> <?= $user_name2?></b></h6>
                           <p><?= $role_name ?></p>
                           <span class="executive"><b><?=$scenario_role_name?></b></span>
                       </div>
                  </div>
                  <div class="universal-activity">
                     <span class="executve mb-3 d-block">Inject <?=$inject_num?></span>
                     <h6><b><?=$inject_name?></b></h6>
                     <p><?=$inject_desc?></p>
                  </div>
                  <h6 class="mb-3"><b>Your Answer</b></h6>
                  <div class="answer-box">
                     <p class="mb-0">Option <?=$option_order?></p>
                     <p class="mb-0 conduct"><?=$option_title?></p>
                     <p class="mb-0"><?=$option_description?></p>
                  </div>
               </div>

               <div class="first-part">
               <?php if($result_option_confidence!=0){?>
                  <div class="universal-activity">
                     <h6><b>Your confidence in your response</b></h6>
                  </div>
                  
                  <div class="buttons my-4">
                     <div class="row">
                        <div class="col-md-2">
                           <?php if($result_option_confidence==1){?>
                           <a href="#" class="custom-btn somewhat">Not at all confident</a>
                          <? }
                          else{?>
                           <a href="#" class="custom-btn">Not at all confident</a>
                          <?php }?>
                        </div>
                         <div class="col-md-2">

                         <?php if($result_option_confidence==2){?>
                           <a href="#" class="custom-btn somewhat">Not very confidentnt</a>
                          <? }
                          else{?>
                          <a href="#" class="custom-btn">Not very confidentnt</a>
                          <?php }?>


                           
                        </div>
                         <div class="col-md-2">

                         <?php if($result_option_confidence==3){?>
                           <a href="#" class="custom-btn somewhat">Somewhat confident</a>
                          <? }
                          else{?>
                          <a href="#" class="custom-btn">Somewhat confident</a>
                          <?php }?>
                        </div>
                         <div class="col-md-2">

                         <?php if($result_option_confidence==4){?>
                           <a href="#" class="custom-btn somewhat">confident</a>
                          <? }
                          else{?>
                          <a href="#" class="custom-btn">confident</a>
                          <?php }?>

                           
                        </div>
                         <div class="col-md-2">

                         <?php if($result_option_confidence==5){?>
                           <a href="#" class="custom-btn somewhat">Very confident</a>
                          <? }
                          else{?>
                          <a href="#" class="custom-btn">Very confident</a>
                          <?php }?>
                          
                        </div>
                     </div>
                  </div>

                  <?php }?>
                  <?php if($another_option){?>
                     <h6 class="mb-3"><b>Other Option</b></h6>
                  <? }?>
                  <?php 
                           $count=1; 
                           foreach($another_option as $ano)  {?>
                 
                
                 
                           
                           <div class="answer-bx d-flex bg-white p-3 align-items-center" style="border-radius: 10px; border: 1px solid #c9c7c7;">
                     <div class="answer-left">
                        <p class="mb-0">Option <?=$ano['order_no']?></p>
                        <p class="mb-0"><b><?=$ano['option_title'] ?></b></p>
                        <p class="mb-0"><?=$ano['option_description'] ?></p>
                     </div>
                     <div class="answer-rigth">
                     <?php if($ano['option_rank']==1){?>
                           <a href="#"  style="border-color:red; color:red"class="create-answer">Weak answer</a>


                        <?php }
                        elseif($ano['option_rank']==2){?>
                           <a href="#" class="create-answer">Okay answer</a>


                        <?php }
                         elseif($ano['option_rank']==3){?>
                           <a href="#" class="create-answer">Good answer</a>


                        <?php }
                         elseif($ano['option_rank']==4){?>
                           <a href="#" style="border-color:green; color:green" class="create-answer">Great answer</a>


                        <?php }
                        
                        else{
                           ?>  

                       <?php } ?>
                     </div>
                  </div>
                           
                           <?php $count++; } ?>  



              
                 
                
               </div>


               <div class="first-part"> 
                  <div class="universal-activity">
                     <h6><b>Participents responses</b></h6>
                     <?php 
                           $count=1; 
                           foreach($all_option as $all)  {?>
                 
                
                 
                           
                       
                  <div class="flx d-flex justify-content-between align-items-center">
                     <p class="mb-0"><?=$all['order_no']?> <?=$all['option_title'] ?></p>
                       
                        <?php if($all['option_rank']==1){?>
                           <a href="#"  style="border-color:red; color:red"class="create-answer">Weak answer</a>


                        <?php }
                        elseif($all['option_rank']==2){?>
                           <a href="#" class="create-answer">Okay answer</a>


                        <?php }
                         elseif($all['option_rank']==3){?>
                           <a href="#" class="create-answer">Good answer</a>


                        <?php }
                         elseif($all['option_rank']==4){?>
                           <a href="#" style="border-color:green; color:green" class="create-answer">Great answer</a>


                        <?php }
                        
                        else{
                           ?>  

                       <?php } ?>
                     </div>

                       <div class="progress my-3">
                        
                         
                         <?php if($all['id']==$result_option_id){?>
                           <div class="progress-bar" style="width:100%"></div>

                        <?php }
                        else{
                           ?> <div class="progress-bar" style="width:0%"></div>
                       <?php } ?>
                       </div> 
                           <?php $count++; } ?>  
                      
                     
                   
                     
                  </div>

                 

                <?php if($result_option_justifcation){?>

                
                  <div class="universal-activity">
                     <h6><b>Participant's Justification Response</b></h6>
                  </div>
                 <div class="feedback-box bg-white p-3 border">
                    <p><?=$result_option_justifcation?></p>
                 </div>
                 <?php } ?>
                 
               </div>

               <div class="first-part"> 
                  <div class="universal-activity">
                     <h6><b>Feedback</b></h6>
                  </div>
                 <div class="feedback-box bg-white p-3 border">
                    <p><?=$option_feedback?></p>
                 </div>
               </div>



            </div>
      
         </div>
      </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" integrity="sha512-DHNepbIus9t4e6YoMBSJLwl+nnm0tIwMBonsQQ+W9NKN6gVVVbomJs9Ii3mQ+HzGZiU5FyJLdnAz9a63ZgZvTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script type="text/javascript">
         $(document).ready(function(){
            $(".popup").hide();
            $(".saveexit").click(function(){
               $(".popup").show();
            });
            $(".cancel, .popup").click(function(){
               $(".popup").hide();
            });
       
  $('.chart').easyPieChart({
    size: 200,
    barColor: "#17d3e6",
    scaleLength: 0,
    lineWidth: 10,
    trackColor: "#373737",
    lineCap: "circle",
    animate: 2000,
  });

         });
      </script>
       <script  type="text/javascript">
            function exit(id)
    {
      var id =$("#id").val();
      // alert(id);
      window.location.replace("<?=base_url();?>/User/new_index");
    }

      </script>
   </body>
</html>