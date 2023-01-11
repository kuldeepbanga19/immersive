
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


   <style type="text/css">
      body {
         background:white;
         margin: 0;
         /* font-family: 'Montserrat', sans-serif !important; */
      }
 
/* 
      .user {
    background: #ffffff;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    padding: 8px;
    color: #10122b;
    display: inline-block;
    text-align: center;
    text-transform: uppercase;
    font-weight: 600;
} */
.fa-caret-down {
    color: #fff;
}

      .criss-sim {

         font-size: 1.5rem;
         color: rgb(33, 37, 26);
         font-weight: 700;
         line-height: 1.2;

      }

      .second-header {
         padding: 1rem;
         background: rgb(255, 255, 255);
         border-bottom: 1px solid rgb(207, 213, 222);
         height: 72px;
      }

      .create-view {
         display: flex !important;
         justify-content: space-around;
      }

      .create-view .create a {
         text-decoration: none;
      }

      .create-view .tree-view a {
         text-decoration: none;
      }

      .buttn {
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

      .review {
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

      .save-review {
         display: flex;
         justify-content: space-around;
      }

      .ul {
         list-style: none;
      }

      .ul li a {
         text-decoration: none;
         color: #000;
      }

      .form {
         background-color: rgb(255, 255, 255);
         border-radius: 4px;
         border: 1px solid rgb(207, 213, 222);
         box-shadow: rgb(0 0 0 / 10%) 0px 4px 6px -1px, rgb(0 0 0 / 6%) 0px 2px 4px
      }

      [type="text"],
      select {
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

      .submit-btn {
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

      .right-sidebar {
         max-width: calc(480px - 1rem);
         background: rgb(255, 255, 255);
         border: 1px solid rgb(207, 213, 222);
         box-shadow: rgb(0 0 0 / 10%) 0px 1px 3px, rgb(0 0 0 / 6%) 0px 1px 2px;
         border-radius: 4px;
         padding: 0.5rem;
         margin: 0px 1rem 1rem;
      }

      .content-rigth {
         background: rgb(247, 250, 255);
         border-radius: 4px;
         padding: 1rem;

      }

      .add-inject {
         border: 2px dashed rgb(207, 213, 222);
         padding: 10px;
      }

      .ul-flex {
         display: flex;
         flex-wrap: wrap;
         border: 2px dashed rgb(129, 143, 157);
         border-radius: 4px;
         padding: 1rem;
         list-style: none;
      }

      .ul-flex li {
         border: 1px solid rgb(129, 143, 157);
         padding: 0.25rem;
         border-radius: 4px;
         margin: 5px;
      }

      .add-role {
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

      .footer {
         display: flex;
         width: 100%;
         padding: 20px 0px;
         border-top: 1px solid #d9d6d6;
         -webkit-box-pack: end;
         margin-top: 20px;
         justify-content: flex-end;
      }

      .back-overview {
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

      .next-feedback {
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

      .saveexit {
         text-decoration: none;
      }

      .popup {
         position: fixed;
         height: 100%;
         width: 100%;
         background: rgba(0, 0, 0, 0.5);
         z-index: 999;
         display: flex;
         justify-content: center;
         align-items: center;
      }

      .popup-content {
         background: #fff;
         width: 40%;
         border-radius: 5px;
         padding: 20px;
      }

      .popup-header {
         display: flex;
         justify-content: space-between;
      }

      .popup-body {
         padding: 20px 0px;
         border-top: 1px solid #cdc9c9;
         border-bottom: 1px solid #cdc9c9;
      }

      .cancel {
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

      .save {
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
      .popup-btn {
         display: flex;
         justify-content: end;
      }
      .p-0{
padding: 0;
      }
      .navigation {
    padding: 14px 24px;
    background: #ffffff;
    border: 1px solid lightgray;
    border-radius: 5px;
    box-shadow: 0px 2px 12px #8080804a;
}
.nav-heading h6 {
    font-size: 20px;
}
ul.ul.p-0 li {
    font-size: 14px;
    font-weight: 400;
    color: #323232;
    text-transform: capitalize;
}
.slide p {
    font-size: 14px;
}
.navigation input[type="text"] {
    font-size: 14px;
}


/*****************akakakakak***************************/
.scont {
         font-size: 9px;
      }
   

   
      .list-type-head p {
         font-size: 12px;
         line-height: 20px;
         margin: 0;
      }
   
      .list-type-head p i {
         padding-right: 5px;
      }
   
      .stretched-link {
         margin: 16px 0 0;
         padding: 2px 15px;
         line-height: normal;
         font-size: 14px;
         -webkit-transform-origin-y: bottom;
         border-radius: 50px;
         background: #3541D2;
         border: none;
         box-shadow: 0px 3px 12px grey;
         position: relative;
      }
      .Custom-bx-card-inner{
         position: relative;
    cursor: pointer;
transition: all 0.4s;
      }
      .Custom-bx-card-inner:hover {
    transform: scale(1.05);
    transition: all 0.4s;

}

      .Custom-bx-card-inner::after {
    position: absolute;
    right: 7%;
    bottom: 3%;
    content: "\f105";
    font-family: 'FontAwesome';
    color: black;
    font-size: 18px;
}
h2.main-head {
    font-size: 24px;
    font-weight: 600;
    margin: 0 0 15px;
}
.gray-area-bx {
    background: #f7f7f7;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
}
ul#myTab {
    margin: 0 0 20px;
    padding: 0 40px;
}
.gray-area-bx li.nav-item button.active{
    border: none;
    border-bottom: 5px solid #58b4fa;
    background: transparent;
    font-weight: bold;
    color: black;
}
.gray-area-bx li.nav-item button{
    border: none;
    background: transparent;
    font-weight: bold;
    color: black;
}
.breadcume {
    font-size: 12px;
    font-weight: 500;
    border-bottom: 1px solid #ddd;
    padding: 0 0 5px;
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
               <button class="save ms-2">Save & Exit</button>
            </div>
         </div>
      </div>
   </div>


   <div class="container-fluid mt-4">


      <div class="row">
         <div class="col-12">
           <p class="breadcume">Crisis Sim > Play</p>
         </div>
      </div>

<div class="row">
   <div class="col-12">
      <h2 class="main-head">Play Exercise</h2>
   </div>
</div>


<div class="gray-area-bx">
   <div class="row">


<ul class="nav nav-tabs" id="myTab" role="tablist">
   <li class="nav-item" role="presentation">
     <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Execise</button>
   </li>
   <!-- <li class="nav-item" role="presentation">
     <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Catalogue</button>
   </li> -->
 </ul>
 <div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">






      <div class="row">
         <div class="col-md-3">
            <div class="navigation">
               <div class="nav-heading">
                  <h6><b>Filters</b></h6>
               </div>
               <nav>
                  <ul class="ul p-0 mb-0">
                     <div class="nav-one">
                        <a href="#" style="text-decoration: none; color: #000;">
                           <li class="py-2 d-flex justify-content-between align-items-center"><b>Scenario name or
                                 contents</b><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                        </a>
                        <div class="slide">
                           <input type="text" name="search" style="padding: 0.3rem;" placeholder="What are you looking for?" class="common_select search" >
                           <input type="hidden" name="hidden" value="<?php echo $selected_scen;?>" class="common_select dataid">
                        </div>
                     </div>
                     <div class="nav-one">
                        <a href="#" style="text-decoration: none; color: #000;">
                           <li class="py-2 d-flex justify-content-between align-items-center"><b>Exercise
                                 Compatibilitys</b><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                        </a>
                        <div class="slide" style="display: flex;">
                              <input type="checkbox" name="dill" style="padding: 0.3rem;" class="common_select dill">
                              <p class="mb-0 ms-2">Drill (<?php 
                              $count=0;
                           //   var_dump($presentation_data);die;
                              foreach($presentation_data as $published){
                                 $db=\Config\Database::connect();
                                 $tbname=$db->prefixTable("scenario_role_cate");
                                 $max_role=$data['max_role']=$db->query("SELECT count(crisis_scenario_id) as max_role_no FROM $tbname WHERE crisis_scenario_id=". $published['crisis_scenario_id']."")->getRow();
                                 // var_dump($max_role->max_role_no>1);die;
                                 if($max_role->max_role_no>1) { $count=$count+1;}
                              }
                              echo $count;
                              ?>)</p>
                           </div>
                     </div>
                     <div class="nav-one">
                        <a href="#" style="text-decoration: none; color: #000;">
                           <li class="py-2 d-flex justify-content-between align-items-center"><b>Industry Sector</b><i
                                 class="fa fa-caret-down" aria-hidden="true"></i></li>
                        </a>
                        <div class="slide">
                           <?php if (isset($industory_nam)){?>
                           <?php foreach($industory_nam as $key){?>
                                 <div class="d-flex">
                                    <input type="checkbox" name="industry" class="common_select industry" style="padding: 0.3rem;" value="<?= $key["id"];?>">
                                    <p class="mb-0 ms-2"><?php echo $key["industory_name"];
                                    $db=\Config\Database::connect();

                                    if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $selected_scen)->getResult()){


                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC)and industry_sector=".$key["id"]."")->getRow();
                               
                               
                                     }
                               
                                     elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $selected_scen)->getResult()){
                               
                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC)and industry_sector=".$key["id"]."")->getRow();
                               
                                     }
                                     else{
                               
                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0  ORDER BY usb.id DESC) and industry_sector=".$key["id"]."")->getRow();
                               
                               
                                     }
                                    // $max_no=$db->query("SELECT COUNT(*) as max_non FROM yatharth_immersive.imr_single_player_setup usb inner JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  join yatharth_immersive.imr_crisis_scenrio cse on usb.crisis_scenario_id=cse.id where cse.publish_status=1 and cse.industry_sector=".$key["id"]." AND usb.published_status=1 AND (imp.userid=1) AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getRow();
                                    // var_dump($max_no->max_non);die;
                                    echo " (".$max_no->max_non.")";
                                    ?></p>
                                 </div>
                                 <?php }}?>
                           </div>
                     </div>

                     <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Attack Vector</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide" style="">
                           <?php if (isset($attack_nam)){?>
                           <?php foreach($attack_nam as $key){?>
                                 <div class="d-flex">
                                 <input type="checkbox" name="attack" class="common_select attack" style="padding: 0.3rem;" value="<?= $key["id"];?>">
                                    <p class="mb-0 ms-2"><?php echo $key["attack_name"];
                                    $db=\Config\Database::connect();

                                    if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $selected_scen)->getResult()){


                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC)and attack_vector=".$key["id"]."")->getRow();
                               
                               
                                     }
                               
                                     elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $selected_scen)->getResult()){
                               
                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC)and attack_vector=".$key["id"]."")->getRow();
                               
                                     }
                                     else{
                               
                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0  ORDER BY usb.id DESC) and attack_vector=".$key["id"]."")->getRow();
                               
                               
                                     }
                                    // $max_no=$db->query("SELECT COUNT(*) as max_non FROM yatharth_immersive.imr_single_player_setup usb inner JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  join yatharth_immersive.imr_crisis_scenrio cse on usb.crisis_scenario_id=cse.id where cse.publish_status=1 and cse.attack_vector =".$key["id"]." AND usb.published_status=1 AND (imp.userid=1) AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getRow();
                                    // var_dump($max_no->max_non);die;
                                    echo " (".$max_no->max_non.")";
                                    ?></p>
                                 </div>
                                 <?php }}?>
                           </div>
                        </div>

                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;"><li class="py-2 d-flex justify-content-between align-items-center"><b>Threat Actor</b><i class="fa fa-caret-down" aria-hidden="true"></i></li></a>
                           <div class="slide" style="">
                           <?php if (isset($threat_nam)){?>
                           <?php foreach($threat_nam as $key){?>
                                 <div class="d-flex">
                                 <input type="checkbox" name="threat" class="common_select threat" style="padding: 0.3rem;" value="<?= $key["id"];?>">
                                    <p class="mb-0 ms-2"><?php echo $key["threat_name"];
                                    $db=\Config\Database::connect();

                                    if ($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE role_id=1 AND user_id='. $selected_scen)->getResult()){


                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC)and threat_actor=".$key["id"]."")->getRow();
                               
                               
                                     }
                               
                                     elseif($db->query('SELECT * FROM yatharth_immersive.imr_user_role WHERE ( role_id=2 or role_id=3) AND user_id='. $selected_scen)->getResult()){
                               
                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC)and threat_actor=".$key["id"]."")->getRow();
                               
                                     }
                                     else{
                               
                                       $max_no=$db->query("SELECT COUNT(*) as max_non FROM  imr_single_player_setup usb left join imr_crisis_scenrio ics on ics.id=usb.crisis_scenario_id  WHERE usb.id  IN (SELECT usb.id FROM imr_single_player_setup usb LEFT JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  WHERE usb.published_status=1 AND imp.userid=$selected_scen AND imp.status=0  ORDER BY usb.id DESC) and threat_actor=".$key["id"]."")->getRow();
                               
                               
                                     }
                                    // $max_no=$db->query("SELECT COUNT(*) as max_non FROM yatharth_immersive.imr_single_player_setup usb inner JOIN imr_player_assignment imp ON usb.id=imp.singlep_id  join yatharth_immersive.imr_crisis_scenrio cse on usb.crisis_scenario_id=cse.id where cse.publish_status=1 and cse.threat_actor =".$key["id"]." AND usb.published_status=1 AND (imp.userid=1) AND imp.status=0 OR usb.set_up_type=3 ORDER BY usb.id DESC")->getRow();
                                    // var_dump($max_no->max_non);die;
                                    echo " (".$max_no->max_non.")";
                                    ?></p>
                                 </div>
                                 <?php }}?>
                           </div>
                        </div>
                  </ul>
               </nav>


            </div>
         </div>

         <div class="col-md-9">
            <div class="row main-card-bx filter_data2">
               <!--Loop impliment-->
               <?php foreach($presentation_data as $value){?>
                <div class="col-md-3">
                  
                              
                              <div class="card mb-3">
                                 <img src="<?=base_url();?>/images/card-img.png" class="card-img-top" alt="...">
                                 <div class="card-body">
                                    <div class="flx">
                                       <div class="card-headerr">
                                          <p class="sm-head mb-1"><b>Custom Crisis Sim</b></p>
                                       </div>
                                       <div class="card-headerr">
                                          <p class="sm-head mb-1"><b><?php if($value['set_up_type']==1){echo "Single Player";}elseif($value['set_up_type']==2){echo "Drill Player";}else{echo "Presenation Player";} ?></b></p>
                                       </div>
                                    </div>



                                    <h6 class="card-title"><b><?php echo $value['exercise_name']; ?></b></h6>

                                    
                                    <p class="card-text d-flex align-items-center listplay" >
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
                           <span data-value="<?php echo $companyVal['id']; ?>" value="<?php echo $companyVal['id']; ?>" selected>
                           <?php echo $companyVal['industory_name']; ?>
                                  </span>
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
                           <span data-value="<?php echo $attackVal['id']; ?>" value="<?php echo $attackVal['id']; ?>" selected>
                           <?php echo $attackVal['attack_name']; ?>
                             </span>
                                <?php  }
                              }  ?> 
                                 
                                 
                                 </p>
                                    <p class="card-text d-flex align-items-center listplay"><i class="fa fa-exclamation-circle	 me-2" aria-hidden="true"></i>
                                 
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
                           <span data-value="<?php echo $threat_actorVal['id']; ?>" value="<?php echo $threat_actorVal['id']; ?>" selected>
                           <?php echo $threat_actorVal['threat_name']; ?>
                             </span>
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
                                          <a href="<?= base_url('/Presentation_player_setup/published_exercise/'.$value['usbid'])?>" class="underline"> 
                                              <?php 
                                                if($value['start_status']==1){?>
                                                <?php echo "Active";?>
                                                   <?}
                                                   else{
                                                      echo "Not started";
                                                   }
                                                   
                                             
                                          }elseif($value['set_up_type']==1){?>
                                          <a href="<?= base_url('/Single_player_setup/publishdata/'.$value['usbid'])?>" class="underline"> 
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
                                          
                                          ?></a></b>
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

                 
                   

            </div>
         </div>

      </div>





   </div>
   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">






         <div class="row">
            <div class="col-md-3">
               <div class="navigation">
                  <div class="nav-heading">
                     <h6><b>Filters</b></h6>
                  </div>
                  <nav>
                     <ul class="ul p-0 mb-0">
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;">
                              <li class="py-2 d-flex justify-content-between align-items-center"><b>Scenario name or
                                    contents</b><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                           </a>
                           <div class="slide">
                              <input type="text" name="" style="padding: 0.3rem;" placeholder="What are you looking for?">
                           </div>
                        </div>
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;">
                              <li class="py-2 d-flex justify-content-between align-items-center"><b>Exercise
                                    Compatibilitys</b><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                           </a>
                           <div class="slide" style="display: flex;">
                              <input type="checkbox" name="" style="padding: 0.3rem;">
                              <p class="mb-0 ms-2">Drill (12)</p>
                           </div>
                        </div>
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;">
                              <li class="py-2 d-flex justify-content-between align-items-center"><b>Industry Sector</b><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                           </a>
                           <div class="slide">
                              <div class="d-flex">
                                 <input type="checkbox" name="" style="padding: 0.3rem;">
                                 <p class="mb-0 ms-2">Drill (12)</p>
                              </div>
                              <div class="d-flex">
                                 <input type="checkbox" name="" style="padding: 0.3rem;">
                                 <p class="mb-0 ms-2">Drill (12)</p>
                              </div>
                           </div>
                        </div>
                        <div class="nav-one">
                           <a href="#" style="text-decoration: none; color: #000;">
                              <li class="py-2 d-flex justify-content-between align-items-center"><b>Threat Actor</b><i class="fa fa-caret-down" aria-hidden="true"></i></li>
                           </a>
                           <div class="slide" style="display: flex;">
                              <input type="checkbox" name="" style="padding: 0.3rem;">
                              <p class="mb-0 ms-2">Drill (12)</p>
                           </div>
                        </div>
                     </ul>
                  </nav>
   
   
               </div>
            </div>
   
            <div class="col-md-9">
               <div class="row main-card-bx">
               <?php foreach($published_secnario as $published){?>
                  <!--Loop impliment-->
                 
                  <div class="col-md-3">
                  <a href="#" class="underline">
                     <div class="card ">
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
                       </div>
                       </a>
                  </div>
                  <!--End Loop impliment-->
                  
                  <?php }?>
               </div>
            </div>
         </div>
      </div>
   </div>
 </div>






    
   </div>
</div>
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type="text/javascript">
      $(document).ready(function () {
         $(".popup").hide();
         $(".saveexit").click(function () {
            $(".popup").show();
         });
         $(".cancel, .popup").click(function () {
            $(".popup").hide();
         });
         $(".nav-one a").click(function () {
            $(this).find("i").toggleClass("fa-caret-down fa-caret-up");
            $(this).parents(".nav-one").find(".slide").slideToggle();
         });
      });



      //abhishek
      
   
      $(document).ready(function(){
         
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
           
            var threatvaal=window["threat"];
            var attackvall=window["attack"];
            var industryvall=window["industry"];
            var dillvall=window["dill"];
            var searchvaal=$('.search').val().trim();
            var datavall=$('.dataid').val();
            // console.log(dillvall);
            // console.log(searchvaal);
            // $('.search').on('keyup',function(){
            // var searchvaal=$(this).val();
            // })

            $.ajax({
               method:"POST",
               async:false,
               dataType:"json",
               url:"<?=base_url()?>/Play_main/getfilterscenario",
               data:{threatvaal:threatvaal,attackvall:attackvall,industryvall:industryvall,dillvall:dillvall,searchvaal:searchvaal,datavall:datavall},
               success:function(json){
                  if(json.success){
                     $(".filter_data2").html(json.filterddata);
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
            var datavall=$('.dataid').val();
            // window["dill"]=Array();
            // console.log(window["industry"]);

            // var dillvall=window["dill"];
            // console.log("hi");

            $.ajax({
               method:"POST",
               async:false,
               dataType:"json",
               url:"<?=base_url()?>/Play_main/getfilterscenario",
               // data:{searchvaal:searchvaal},
               data:{threatvaal:threatvaal,attackvall:attackvall,industryvall:industryvall,dillvall:dillvall,searchvaal:searchvaal,datavall:datavall},
               success:function(json){
                  if(json.success){
                     $(".filter_data2").html(json.filterddata);
                  }
               }

            })
         });

       
      });




      
      //abhishek
   </script>



</body>

</html>