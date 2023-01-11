<?php
?>
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
       .save-next{
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
       [type="date"]{
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
       .ol{
         display: flex;
    flex: 1 1 auto;
    -webkit-box-pack: center;
    justify-content: center;
    max-width: 100%;
       }
       .second-header{
             background: linear-gradient(90deg, rgb(4, 45, 83), rgb(98, 15, 69)) 0% 0% / cover;
       }
       .li p{
         color: #fff;
       }
       .li{
         cursor: inherit;
    width: 170px;
    display: flex;
    flex-direction: column;
    -webkit-box-align: center;
    align-items: center;
       }
       .ol-first{
             height: 40px;
    width: 40px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 50%;
    position: relative;
    z-index: 2;
       background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
       }
       .ol-first-last{
          height: 40px;
    width: 40px;
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 50%;
    position: relative;
    z-index: 2;
       background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
       }
       .ol-one{
              background-color: rgb(31, 199, 150) !important;
       }
       .ol-two{
             background-color: rgb(235, 4, 147);
       }
       .ol-one::after{
             content: "";
    position: absolute;
    height: 4px;
    background-color: rgb(31, 199, 150) !important;
    width: 130px;
    left: 40px;
    margin-top: calc(20px);
    top: -2px;
       }
       .ol-first::after{
             content: "";
    position: absolute;
    height: 4px;
    background-color: rgba(255, 255, 255, 0.2);
    width: 130px;
    left: 40px;
    margin-top: calc(20px);
    top: -2px;
       }
       .footer-fixed{
    display: flex;
    -webkit-box-pack: end;
    justify-content: flex-end;
    position: fixed;
    bottom: 0;
    background: linear-gradient(90deg, rgb(4, 45, 83), rgb(98, 15, 69));
    width: 100%;
    padding: 20px 10rem 20px 3rem;
       }
       .footer button{
         outline: none;
    /*cursor: not-allowed;*/
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
 
    color: rgb(16 18 44 / 78%);
    border: 1.5px solid rgb(209, 210, 219);
       }
      </style>
   </head>
   <body>
  

      <div class="second-header">
      <ol class="ol">
   <li data-qaid="stepsProgressDetailStep-0" class="li">
      <div class="ol-first ol-one"><span><svg aria-hidden="false" data-prefix="fas" data-icon="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" aria-label="Completed step" fill="#ffffff" stroke="#ffffff" data-qaid="steps-complete-icon" focusable="false" role="img" style="color: rgb(255, 255, 255);"><path fill="currentColor" d="m173.898 439.404-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg></span></div>
      <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Choose Scenario</p>
   </li>
   <li data-qaid="stepsProgressDetailStep-1" class="li">
      <div class="ol-first ol-two"><span>2</span></div>
      <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Settings</p>
   </li>
   <li data-qaid="stepsProgressDetailStep-2" class="li">
      <div class="ol-first ol-three"><span>3</span></div>
      <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Add Users</p>
   </li>
   <li data-qaid="stepsProgressDetailStep-3" class="li">
      <div class="ol-first-last ol-four"><span>4</span></div>
      <p class="sc-jSgupP StepTitleStyled-sc-1g35nv5-2 ihZaQq fGpUIx">Review</p>
   </li>
</ol>
      </div>

      <div class="container-fluid mt-4">
         <div class="row">
          <form id="scenariodata">
           <div class="col-md-6 mx-auto">
           	<input type="hidden" name="scenid" value=<?=$scenid?> id="scen_id">
               <div class="title">
                 <h6>Title</h6>
                 <input type="text" name="sname" class="form-control" placeholder="Provide a unique descriptive title for your exercise" value="<?=$scen_name?>">
               </div><br>
                <div class="title">
                 <h6>Exercise Deadline</h6>
                <p>Would you like to set a deadline for exercise completion?</p>
                <input type="radio" name="test" class="yes" style="margin-right: 7px;" value="showdeadline">Yes</input><br>
                <input type="radio" name="test" class="no" style="margin-right: 7px;" checked value="hidedeadline">No</input>
               </div>
               <div class="forms mt-3">
                  <label>Start Date(Optional)</label><br>
                  <input type="date" id="sd_date" name="startdate" class="mt-2" value="<?php if($s_date) echo $s_date;?>">
                   <label class="mt-2">End Date(Optional)</label><br>
                  <input type="date" id="ed_date" name="enddate" class="mt-2" value="<?php if($e_date) echo $e_date;?>">
               </div>
               <div class="footer">
                  <button class="me-2 bck" type="button">Back</button>
                  <button class="save-next text-white" type="button">Save & Next</button>
               </div>
           </div>
          </form>
         </div>
        
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

      <script type="text/javascript">
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
            if(!$("#sd_date").val()){
              $(".forms").hide();

            }
            else{
            	let radioOption = jQuery("input:radio[value=showdeadline]");
        // This will select the radio button
                 radioOption.prop("checked", true);
            	
            }
             $(".yes").click(function(){
               $(".forms").show();
            });
             $(".no").click(function(){
               $(".forms").hide();
            });
         });



         $(function(){
                        var dtToday = new Date();
                        
                        var month = dtToday.getMonth() + 1;
                        var day = dtToday.getDate();
                        var year = dtToday.getFullYear();
                        if(month < 10)
                           month = '0' + month.toString();
                        if(day < 10)
                           day = '0' + day.toString();
                        
                        var minDate= year + '-' + month + '-' + day;
                        
                        $('#sd_date').attr('min', minDate);
                     });

      </script>
      <script>
      	$(".save-next").click(function(){
      		var scen_data=$("#scenariodata").serialize();
            
           var scenid=$("#scen_id").val(); 
        //    alert(scenid);
      		$.ajax({
      			method:"POST",
      			dataType:"json",
      			async:false,
      			data:$("#scenariodata").serialize(),
      			url:"<?=base_url()?>/Drill_player_setup/addinfo",
      			success:function(json){
      				if(json.success){
      					// alert("hellooo");
                var spid=json.sp_id;
                var crisis_scenario_id=json.crisis_scenario_id;
                window.location.href="<?=base_url()?>/Drill_player_setup/assignment/"+spid;
      				}
      			}
      		})
      	})
      	$(".bck").click(function(){
      		var scenid=$("#scen_id").val();
      		window.location.href="<?=base_url()?>/Drill_player_setup/drill_player/"+scenid;
      	})
      
        
      </script>	
   </body>
</html>