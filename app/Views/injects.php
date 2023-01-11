<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
       [type="text"],[type="date"],[type="time"],select{
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
       .url{
        outline: none;
    cursor: pointer;
    
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
    display: inline-block;
       }
       .option-logic p{
        margin-bottom: 0px;
        width: 185% !important;
       }
       .option-logic{
        background-color: rgb(247, 250, 255);
    border-radius: 4px;
    display: flex;
    padding: 1rem;
       }
       .performance-indicator{
         background-color: rgb(247, 250, 255);
          border-radius: 4px;
         display: flex;
         padding: 1rem;
          justify-content: center; 
           gap: 10px;
       }
       .add-another-option button{
            outline: none;
    cursor: pointer;
    display: block;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-size: medium;
    font-weight: 700;
    width: 100%;
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
       .back-btn{
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


       .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 0px;
  border: 1px solid #888;
  width: 40%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 15px;
  font-weight: bold;
}
#myBtn{
  border:0;

}

/* #previewurl{
  dispaly:grid !important;
} */


#files-area{
	width: 30%;
  display: inline;
}
.file-block{
	border-radius: 10px;
	background-color: rgba(144, 163, 203, 0.2);
	margin: 5px;
	color: initial;
  display: inline-block;
  width: fit-content;
}

.name{
		padding-right: 10px;
		width: max-content;
		display:block;

	}

.file-delete{
	display: flex;
	width: 24px;
	color: initial;
	background-color: #6eb4ff00;
	font-size: large;
	justify-content: center;
	margin-right: 3px;
	cursor: pointer;
  float:right;
}
.file-block:hover{
		background-color:red;
		border-radius: 10px;
	}


.file-delete span{
  transform: rotate(45deg);
}



.file-block img {  height: 70px; width: 60px;border-radius: 2px;border:1px; margin-left: 10px; margin-top:10px; margin-right:10px;
 }

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.loop_err{
  color:red;
}
      </style>

   </head>
   <body>


<!-- Trigger/Open The Modal -->
<button id="myBtn"></button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
   <div class="popup-content" style="width:100%;">
            <div class="popup-header mb-3">
               <div class="exit">
                  <h6><b>Create new inject</b></h6>
               </div>
               <div class="times">
                  <i class="fa fa-times ms-2 cancel close" aria-hidden="true"></i>
               </div>
            </div>
            <div class="popup-body">
               <label for="injecttitle"><b>Inject title(Optional)</b></label><br>
               <input type="text" name="injecttitle" class="form-control" value="" placeholder="e.g You got an email">
                 <div class="add-another-option" style="margin-top: 15px;">
                            <button id="" type="button" class="create_n_edit">Create and edit new inject</button>
                        </div>
                        <button type="button" class="d-block submit-btn quick_create" style="width: 100%; margin-top: 10px;">Quick create inject</button>
            </div>
         <!--    <div class="popup-footer mt-3">
               <div class="popup-btn">
                  <button class="cancel me-2 ">Cancel</button>
                  <button class="save ms-2">Save &amp; Exit</button>
               </div>
            </div> -->
         </div>
  </div>

</div>


      <div class="container-fluid mt-4">
       
         <div class="row">
        
            <div class="col-md-6 second">
               <div class="form pt-3">
               <form id="inject_id" name="inject_id" class="p-4" method="post"  enctype="multipart/form-data">
 

                  
                  <input type="hidden" name="injectidid" id="injectidid" value="<?=$injectval?>">
                  <input type="hidden" name="scenarioid" id="scenarioid" value="<?=$scenarioid?>">
                  
                     <div class="mb-4">
                       <label for="injecttitle"><b>Inject title:</b></label><br>
                       <input type="text" name="injecttitle" class="form-control" value="<?php if(isset($injtitle))echo $injtitle?>">
                     </div>
                     <div class="mb-4">
                       <label for="injectdate"><b>Inject date(Optional):</b></label><br>
                            <input type="date" id="injectdate" name="injectdate" value="<?php if(isset($injectdate))echo $injectdate?>">
                     </div>

                     <div class="mb-4">
                       <label for="injecttime"><b>Inject time(Optional):</b></label><br>
                       <input type="time" id="injecttime" name="injecttime" value="<?php if(isset($injecttime))echo $injecttime?>">
                     </div>

               
                     <div class="mb-4">
                       <label for="injectdescription"><b>Inject description:</b></label><br>
                       <textarea id="injectdescription" name="injectdescription" rows="6" cols="100" class="w-100"  ><?php if(isset($injdescription))echo $injdescription?></textarea>
                     </div>

                      <div class="mb-4">
                       <label for="injectrole"><b>Role:</b></label><br>
                       <select id="injectrole" name="injectrole">
                       <?php if(isset($scenar_roles)){
                        
                         foreach ($scenar_roles as $scrkey => $scrvalue) {?>
                           <option value="<?=$scrvalue->id?>" <?php if(isset($injectrole) && $injectrole==$scrvalue->id)echo "selected" ?>><?=$scrvalue->job_title?></option>  
                                 
                        <?php }
                       }else{
                          echo "<option value='' selected>there are no roles</option>";

                       }?>
                       </select>
                       
                     </div>

                    <div class="mb-4">
                       <label for="injectf"><b>Media attachments:</b></label><br>
                       <div class="media-border" style="border: 2px dashed rgb(129, 143, 157); border-radius: 4px; padding: 15px;"> 
                        <div id="profileDisplay" class="profileDisplay">
                        <p id="files-area">
                            	<span id="filesList">
                            		<span id="files-names"></span>
                            </span>
                            </p> 

                        </div>
                        <!-- <img src="images/avatar.jpg" onclick="triggerClick(this)" id="profileDisplay" > -->
                       </div>
                     </div>
                     <div class="mb-4">
                       <label for="injectfile"><b>Upload media attachment(Optional):</b></label><br>
                       <p>Maximum file size 100 MB. Supported file types are MP3, WAV, PNG, JPG, MP4, M4A and PDF</p>
                       <!-- <form> -->
                         <input type="file" multiple="multiple" id="files" name="injectfile[]"  > 
                         <!-- <span style="cursor: pointer; cursor: hand;" onclick="cleanInputs($('#files'))"><i class="fa fa-trash"></i> Empty chosen files</span> -->

                      <!-- </form>       -->
                     </div>
                     <!-- onchange="displayImage(this)" -->
                     <div class="mb-4">
                       <label for="lname"><b>Add URL attachment:</b></label><br><br>
                       <div id="previewurl" style=""></div>
                       <span onclick="document.getElementById('id01').style.display='block'" class="url">Add URL</span>

                       <div id="id01" class="w3-modal">
                       <div class="w3-modal-content">
                         <div class="w3-container">
                           <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                           <br>
                           <p>ADD URL</p><hr>
                           <!-- <form action=""> -->
                           <label>URL</label><br>
                           <input type="url" name="" id="uuurl" style="height: 50px;width: 100%;"><br><br>
                           <label>Title</label><br>
                           <input type="text" id="titleurl"><br><br>
                           <button onclick="mainFunction()" type="button" style="background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%); color: rgb(255, 255, 255); float:right; border-radius:10%;">Submit</button><br><br>
                           <!-- </form>  -->
                          </div>
                       </div>
                     </div>
                     </div>

                                     <!--optiondiv-start-->
               <div id="optiondiv">
                <?php if(isset($inject_options))
                  {
                    foreach ($inject_options as $key => $ivalue) { ?>
   
                 <div class="mt-4 d-flex justify-content-between">
                       <label for="fname"><b>Option <?=$ivalue->order_no?></b></label><br>
                        <a href="#" style="color: rgb(219, 58, 52);">Delete Option</a>
                     </div>

                   <div class="pt-3 mt-2">
               


                  
                  

                     <div class="mb-4">
                       <label for="fname"><b>Option title:</b></label><br>
                       <input type="text" name="optionname<?=$ivalue->order_no?>" class="form-control" value="<?php if(isset($options_dataval))echo $options_dataval[$ivalue->order_no]["option_title"] ?>">
                     </div>
                     


               
                     <div class="mb-4">
                       <label for="lname"><b>Option description:</b></label><br>
                       <textarea id="w3review" name="optiondescrip<?=$ivalue->order_no?>" rows="6" cols="100" class="w-100"  value=""><?php if(isset($options_dataval))echo $options_dataval[$ivalue->order_no]["option_descp"];?></textarea>
                     </div>
                     <?php if($performance_feedback){ 
                    
                         
                        ?>
                     <div class="mb-4">
                       <label for="lname"><b>Option feedback (Optional):</b></label><br>
                       <textarea id="w3review" name="optionfeed<?=$ivalue->order_no?>" rows="6" cols="100" class="w-100"  value=""><?php if(isset($options_dataval))echo $options_dataval[$ivalue->order_no]["option_feed"];?></textarea>
                     </div>
                     <?php }?>
                  <!-- justification Section -->
                     <?php if($justification_response){ 
                    
                         
                    ?>
                    <label for="lname"><b>Justification (Optional)</b><br>Would you like users to justify their responses?</label><br>
                    <div class="radio-btn">
                        <input type="radio" class="yes" name="redio" style="margin-right: 10px;" value="1">Yes</input><br>
                        <input type="radio" class="no" name="redio" style="margin-right: 10px;" value="2">No</input>
                    </div>
                 <div class="mb-4 hide2">
                 <label for="lname"><b>What do you want to ask them? (Optional)</b></label><br>
                   <textarea id="w3review" name="optionjustify<?=$ivalue->order_no?>" rows="6" cols="100" class="w-100"  value=""><?php if(isset($options_dataval))echo $options_dataval[$ivalue->order_no]["option_justification"];?></textarea>
                 </div>
                 <?php }?>
                  <!-- end -->
                 <?php if($rank_option){ 
                    
                         
                    ?>
                 <div class="mb-4">
                   <label for="lname"><b>How is this option ranked?</b></label><br>
                   <select name="optionrank<?=$ivalue->order_no?>" id="cars">
                            <?php $rankvall="";
                            if(isset($options_dataval)){$rankvall=$options_dataval[$ivalue->order_no]["option_rank"];}  ?>
                             <?php foreach($rank_option_data as $key=>$rank) {?>

                              <option value="<?=$key?>" <?php if($rankvall==$key){echo "selected";}?>><?=$rank?></option>
                             <?php } ?> 
                            </select>


                 </div>
                 <?php }?>
                      <?php if(isset($performance_indicators)){ 
                         $db=\Config\Database::connect();
                         $tablenm=$db->prefixTable("indicator_option");
                         
                        ?>
                      <div class="mb-4">
                       <label for="lname"><b>Performance Indicators:</b></label><br>
                       <p>Performance Indicators
                         Think about how this option will affect each of your performance indicators. Is it a positive outcome or a negative one?</p>

                         <div class="performance-indicator">
                          <?php foreach($performance_indicators as $pfm){
                                $optionid=$ivalue->id;
                                $prindicator=$pfm["id"];
                                $dv="";
                                $optiondata=$db->query("SELECT * FROM $tablenm WHERE option_id=$optionid AND pindicatorid=$prindicator")->getFirstRow();
                                if($optiondata){
                                  $dv=$optiondata->pvalue;
                                }
                            ?>
                           <div>
                             <p><?=$pfm["performance_title"]?><br>Starting Value : <?=$pfm["starting_value"]?></p>
                            
                             <input type="number" class="form-control" name="<?=$ivalue->id?>pval<?=$pfm["id"]?>" value="<?=$dv?>">
                           </div>
                          <?php }?> 

                            
                          </div>
                       
                     </div>
                    <?php }?>
                      

                      <div class="mb-4">
                       <label for="lname"><b>Option 1.1 Logic:</b></label><br>
                       <div class="option-logic">
                           <p><b>If</b> this option <b>[option 1.1]</b> is chosen, <b>then</b> the user will be directed to:</p>
                           <?php $optvall="";
                            if(isset($options_dataval)){$optvall=$options_dataval[$ivalue->order_no]["option_val"];}  ?>
                           <select name="selectopt<?=$ivalue->order_no?>" id="cars" class="select_option_c" data-value="<?=$optvall?>">
                            
                             <?php foreach($optionarray as $key=>$opt) {?>

                              <option value="<?=$key?>" <?php if($optvall==$key){echo "selected";}?>><?=$opt?></option>
                             <?php } ?> 
                            </select>
                            
                       </div>
                       <div class="loop_err">
                              <p></p>
                        </div>
                     </div>
                    </div>


                      
                <?php }
                  }    
                ?>
                
                  </div>

                     <!--optiondiv-end-->


                    <!-- <input type="submit" value="Next: Role" class="d-block ms-auto submit-btn"> -->
                    <!-- <button type="button" id="btnSave" onclick="save()" class="d-block ms-auto submit-btn">Role</button> -->
                  
               </div>
                  
                  
                     
                      <div class="mb-4">
                        <div class="add-another-option">
                            <button id="addoption" type="button">Add another option</button>
                        </div>
                     </div>
                    
                    <div class="footer ml-auto d-flex justify-content-end">
                    <input type="hidden" id=nextsend value="" name="nextsend"> 
                    <button type="button" id="btnSave" class="d-block me-2 back-btn btn_Save" data-value="<?=$prev_action?>">Back:<?=$prev_tag?></button>
                    <button type="button" id="btnSave" class="d-block submit-btn btn_Save" data-value="<?=$next_action?>">Next: <?=$next_tag?></button>
                        
                    </div>
                  
               </div>
               </form> 
            </div>
            <div class="col-md-3 third">
               <div class="right-sidebar">
                  <div class="content-rigth">
                     <h6><b>Injects</b></h6>
                     <p>Injects are key decision points in the scenario that you want the user to face. Each inject needs a detailed description that unfolds the story a little more and asks the user what they’d do next. The description should provide enough context for the user to pick an answer. This can be supplemented with media attachments.</p>
                  </div>
               </div>
               <div class="right-sidebar">
                  <div class="content-rigth">
                     <h6><b>Options</b></h6>
                     <p>Each inject will offer a list of options for the user to choose from to determine what happens next in the scenario.</p>
                     <p>Each response needs a title, a short description, and some feedback, detailing to the user why their response was a good choice or not.</p>
                     <p>If a response isn’t chosen at first, it can be repurposed again later in a different inject.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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


          //   $('#profileDisplay').children('img').click(function(){
          //   console.log("yo abhishek");
          // });
         });
      </script>

      <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

      <script type="text/javascript">

        function mainFunction()
        {
          abhiurl();

          abhiurlurl();

          $("#uuurl").val("");
          $("#titleurl").val("");
        }

        function abhiurlurl(){
          var url=$("#uuurl").val();
          var title=$("#titleurl").val();
          // alert(url);

          console.log(url);
          // <a href="#" style="color: rgb(219, 58, 52);">Delete Option</a>
          let bloclink=$('<a/>', {id: 'title',class:'underline',target:"_blank",href: url,text: title});
          let blocedit=$('<button/>', {id: 'edit',text:'Edit'});
          let blocdelete=$('<button/>', {id: 'delete',text:'Delete'});
          // bloclink.append(blocedit).append(blocdelete);


          $("#previewurl").append(bloclink).append(blocedit).append(blocdelete);
        }

        function abhiurl(){
          document.getElementById('id01').style.display='none';
        }

function save(id)
    {
      var id =$("#id").val();
      // alert(id);

       // ajax adding data to database
          $.ajax({
            url : "<?=base_url();?>/Scenario/update/" + id,
            type: "POST",
            data: $('#update_user').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                

                window.location.replace("<?=base_url();?>/Scenario/scenario_role_cate/" + id);
              }
                     
            }
        });
    }

         </script>
         <script>
          $("#addoption").click(function(){

            var scenarioid=$("#scenarioid").val();
           
            var injectidid=$("#injectidid").val();
             

            $.ajax({
              type: "POST",
              dataType:"json",
              data:{injectidid:injectidid},
              url:"<?=base_url()?>/inject/addoption/"+scenarioid,
              success:function(json){
                if(json.success){
                 
                  $("#optiondiv").append(json.html);
                  // window.location.reload();
                }
              }
            });

            
           
          });

         

        
         </script>
         <script>
             $(".btn_Save").click(function(){
             var vall=$(this).attr("data-value");
             $("#nextsend").val(vall);
             $("#inject_id").submit();
             
          });
             // Store the current value on focus and on change
             var previoussl;
             $(".select_option_c").on('focus', function () {
                
                 
              }).on("change",function(){
                var dataval=$(this).attr("data-value");

                var currinjval=$("#injectidid").val();
                var modal = document.getElementById("myModal");
                if($(this).val()==-2){
                   modal.style.display = "block";
                }
                else{
                  modal.style.display = "none";
                  if($(this).val()>0){
                    var res=chekforinjectloop($(this).val(),currinjval);
                    if(res){
                      // var txt=$(this).text();
                      // alert(txt);
                      var txt=$(this).find('option:selected').text();

                      $(this).parent().next().html("<p>Linking this option to '"+txt+"' would result in scenario looping indefinitely change not saved</p>");
                      $(this).val(dataval);
                      setTimeout(()=>{
                       $(".loop_err").html("");
                      },3000);
                      
                    }
                  }
                }
             });
         </script>
         <script>



          // function cleanInputs(fileEle){
          //     $(fileEle).val("");
          //     var parEle = $(fileEle).parent();
          //     var newEle = $(fileEle).clone()
          //     $(fileEle).remove();
          //     $(parEle).prepend(newEle);
          // }



          $(".create_n_edit").click(function(){

            window.location.href="<?=base_url()?>/inject/create/<?=$scenarioid?>";
          });
          $(".quick_create").click(function(){
            var sid=$("#scenarioid").val();
            $.ajax({
              method:"POST",
              async:false,
              url:"<?=base_url()?>/inject/quickcreate/"+sid,
              dataType:"json",
              success:function(json){
                if(json.success){
                  window.location.reload();
                }
              }
            });
          });


          

         </script>
         <script>







//abhishek
const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

var patternFileExtension =/\.([0-9a-z]+)(?:[\?#]|$)/i;

$("#files").on('change', function(e){
	for(var i = 0; i < this.files.length; i++){
		let fileBloc = $('<span/>', {class: 'file-block'}),
			 fileImg = $('<img/>', {id: this.files.item(i).name,src: '',alt: 'your image'}),
			 fileName = $('<span/>', {class: 'name', text: this.files.item(i).name});
		fileBloc.append('<span class="file-delete"><span>+</span></span>')
      .append(fileImg)
			.append(fileName);
		$("#filesList > #files-names").append(fileBloc);
    var fileExtension = (this.files.item(i).name).match(patternFileExtension);
    var output = document.getElementById(this.files.item(i).name);
    if(fileExtension[0]==".pdf" || fileExtension[0]==".PDF"){
    output.src ="https://yatharthritiitschool.com/immersive/writable/uploads/PDF.png";
    output.onload = function() {
      URL.revokeObjectURL(output.src)
      
    }
  }
  else if(fileExtension[0]==".mp3" || fileExtension[0]==".MP3" || fileExtension[0]==".wav" || fileExtension[0]==".WAV" ){
    output.src ="https://yatharthritiitschool.com/immersive/writable/uploads/AUDIO.png";
    output.onload = function() {
      URL.revokeObjectURL(output.src)
      
    }
  }
  else if(fileExtension[0]==".mp4" || fileExtension[0]==".MP4" || fileExtension[0]==".m4a" || fileExtension[0]==".M4A" ){
    output.src ="https://yatharthritiitschool.com/immersive/writable/uploads/VIDEO.png";
    output.onload = function() {
      URL.revokeObjectURL(output.src)
      
    }
  }
    else{
    output.src = URL.createObjectURL(event.target.files[i]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  }
	};
	
	// Ajout des fichiers dans l'objet DataTransfer
	for (let file of this.files) {
		dt.items.add(file);
	}
	// Mise à jour des fichiers de l'input file après ajout
	this.files = dt.files;

	// EventListener pour le bouton de suppression créé
	$('span.file-delete').click(function(){
		
		let name = $(this).next('span.name').text();
		// Supprimer l'affichage du nom de fichier
		$(this).parent().remove();
		for(let i = 0; i < dt.items.length; i++){
			// console.log(name);
			// Correspondance du fichier et du nom
			if(name === dt.items[i].getAsFile().name){
				
				// Suppression du fichier dans l'objet DataTransfer
				dt.items.remove(i);
				continue;
			}
		}
		// Mise à jour des fichiers de l'input file après suppression
		document.getElementById('files').files = dt.files;
		
		
		
	});
});

//abhishek












          //   window.reset = function(e) {
          //       // e.wrap("<form>").closest('form').get(0).reset();
          //       e.unwrap();
          //     }

          //   $('div.profileDisplay').on('click','img',function(){
          //   var id = $(this).attr("id");
          //   reset($('#'+id));
          //   // $(this).parent().remove();
          //   $(this).remove();
          // });


//abhishek
// DOM utility functions:

// const el = (sel, par) => (par || document).querySelector(sel);
// const elNew = (tag, props) => Object.assign(document.createElement(tag), props);
// var patternFileExtension =/\.([0-9a-z]+)(?:[\?#]|$)/i;

// // Preview images before upload:

// const elFiles = el("#files");
// const elPreview = el("#profileDisplay");

// const previewImage = (props) => elPreview.append(elNew("img", props));

// const reader = (file, method = "readAsDataURL") => new Promise((resolve, reject) => {
//   const fr = new FileReader();
//   fr.onload = () => resolve({ file, result: fr.result });
//   fr.onerror = (err) => reject(err);
//   fr[method](file);
// });

// const previewImages = async(files) => {
//   // Remove existing preview images
//   elPreview.innerHTML = "";

//   let filesData = [];

//   try {
//     // Read all files. Return Array of Promises
//     const readerPromises = files.map((file) => reader(file));
//     filesData = await Promise.all(readerPromises);
//   } catch (err) {
//     // Notify the user that something went wrong.
//     elPreview.textContent = "An error occurred while loading images. Try again.";
//     // In this specific case Promise.all() might be preferred over
//     // Promise.allSettled(), since it isn't trivial to modify a FileList
//     // to a subset of files of what the user initially selected.
//     // Therefore, let's just stash the entire operation.
//     console.error(err);
//     return; // Exit function here.
//   }

//   // All OK. Preview images:
//   filesData.forEach(data => {
//     var fileExtension = (data.file.name).match(patternFileExtension);
//     if(fileExtension[0]==".pdf" || fileExtension[0]==".PDF"){
//       previewImage({
//       src: "https://yatharthritiitschool.com/immersive/writable/uploads/PDF.png", // Base64 String
//       alt: data.file.name, // File.name String
//       id: data.file.name
//     });
//     }
//     else if(fileExtension[0]==".mp3" || fileExtension[0]==".MP3" || fileExtension[0]==".wav" || fileExtension[0]==".WAV" ){
//       previewImage({
//       src: "https://yatharthritiitschool.com/immersive/writable/uploads/AUDIO.png", // Base64 String
//       alt: data.file.name, // File.name String
//       id: data.file.name
//     });
//     }
//     else if(fileExtension[0]==".mp4" || fileExtension[0]==".MP4" || fileExtension[0]==".m4a" || fileExtension[0]==".M4A" ){
//       previewImage({
//       src: "https://yatharthritiitschool.com/immersive/writable/uploads/VIDEO.png", // Base64 String
//       alt: data.file.name, // File.name String
//       id: data.file.name
//     });
//     }
//     else{
//     previewImage({
//       src: data.result, // Base64 String
//       alt: data.file.name, // File.name String
//       id: data.file.name
//     });
//   }
//   });
// };

// elFiles.addEventListener("change", (ev) => {
//   if (!ev.currentTarget.files) return; // Do nothing.
//   previewImages([...ev.currentTarget.files]);
// });
//abhsihek




// function displayImage(e) {
//   if (e.files[0]) {
//        var fileName = e.files[0].name;
//        var patternFileExtension =/\.([0-9a-z]+)(?:[\?#]|$)/i;

// //Get the file Extension 
//  var fileExtension = (fileName).match(patternFileExtension);
 

//     $("#profileDisplay").show();
//     var reader = new FileReader();
//     reader.onload = function(e){
//       document.querySelector('#profileDisplay').setAttribute('src', e.target.result);

//     }
//     console.log(e.files.length);
//     for (let i = 0; i < e.files.length; i++) {
//     reader.readAsDataURL(e.files[i]);
//     }

//   }
//   else{
//     $("#profileDisplay").hide();
//   }
// }





         </script> 
         <script type="text/javascript">
             $(document).ready(function(){
                $(".hide2").hide();
                $(".no").click(function(){
                    $(this).parents(".radio-btn").next(".hide2").hide();
                });
                $(".yes").click(function(){
                     $(this).parents(".radio-btn").next(".hide2").show();
                });
               
             });
         </script>
         <script>
          function chekforinjectloop(targinjval,currinjval){
            // alert(currinjval);
            var flag=0;
            $.ajax({
              method:"post",
              async:false,
              url:"<?=base_url()?>/inject/checkforloop",
              dataType:"json",
              data:{
                targinjval:targinjval,currinjval:currinjval
              },
              success:function(json){
                 if(json.isloop){
                    flag=1;
                 }
                
              }

            });
            return flag;

          }
         </script> 
          

      
   </body>
</html>