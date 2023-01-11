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
       [type="text"],[type="number"],select{
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
    padding: 20px 20px;
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
       .internal-text{
         padding: 0px 1.5rem 0px;
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
       .back-analysis{
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
       .add-performance{
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
    width: 100%;
       }
       .popup-second{
         display: none;
       }
       #gh{
         display: none;
       }
      </style>
   </head>
   <body>
  
    

   <div class="col-md-6 second">
      
               <div class="form pt-3 form1">
                  <div class="internal-text mb-4">
                     <p class="mb-0"><b>Display performance indicators</b></p>
                     <p class="mb-1">Do you want to enable performance indicators to the users?</p>
                     <input type="radio" name="per" class="me-2 yes" value="1"><b>Yes</b></input><br>
                     <input type="radio" name="per" class="me-2 no" value="2"><b>No</b></input>
                  </div>
                  
                  <div class="footer">
                     <button type="button" aria-label="Back: Overview" data-qaid="button-back" class="back-overview me-2"  onclick="prev()"><span>Back: Analysis</span></button>
                     <button type="button" aria-label="Next: Feedback" data-qaid="button-confirm" class="next-feedback ms-2"  onclick="next()"><span>Next: Epilogue</span></button>
                  </div>


              
               </div>
               <form id="update_user" name="update_user" class="">
                <input type="hidden" name="id" id="id" value="<?php echo $user_obj1['id']; ?>">
               <div id="gh">
                <?php foreach($pmfindicators as $pkey=>$pmf){?>
                <div class="d-flex justify-content-between delete-text-div">
                     <p><b>Performance Indicator 1</b></p>
                     <p><b><a href="#" class="text-decoration-none text-danger me-2 delete-Performance">Delete Performance Indicator</a></b><i class="fa fa-chevron-up up" aria-hidden="true"></i></p>
                  </div>
               <div class="form pt-3 popup-second2">
                  
             

                  
               
                     <div class="mb-4">
                       <label for="fname"><b>Performance Indicator Title:</b></label><br>
                       <input type="text" id="fname" name="perform_title<?=$pmf['id']?>" value="<?=$pmf['performance_title']?>" class="w-100">
                     </div>
                     <div class="mb-4">
                       <label for="lname"><b>Unit:</b></label><br>
                       <select name="unit<?=$pmf['id']?>" id="cars" class="w-100">
                         <option value="3">Custom</option>
                         <option value="1">$</option>
                         <option value="2">%</option>
                         
                       </select>
                     </div>
                     <div class="mb-4">
                       <label for="fname"><b>Enter Custom Unit:</b></label><br>
                       <input type="text" id="fname" name="custom_unit<?=$pmf['id']?>" class="w-100" value="<?=$pmf['custom_unit']?>">
                     </div>
                     <div class="mb-4">
                       <label for="fname"><b>Starting Value:</b></label><br>
                         <input type="number" id="quantity" name="starting_value<?=$pmf['id']?>" min="1" max="5000000" value="<?=$pmf['starting_value']?>">
                     </div>
                     <?php if(array_key_last ($pmfindicators)==$pkey){?>
                     <div class="add_another">
                     <button class="add-performance mb-4" type="button" id="addanotherp" onclick="myfun()"><span>Add another performance indicator</span></button>

                     <div class="d-flex justify-content-end">
                    <input type="submit" value="Back: Analysis" class="d-block back-analysis me-2 submit-btn"  onclick="save_back()">
                    <button type="button" id="btnSave" onclick="save()" class="d-block ms-auto submit-btn">Epilogue</button>
                     </div>
                    </div>
                  <?php }?>
                  
               </div>
              <?php } ?>
             </div>
             </form> 
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

            $(".yes").click(function(){
               $("#gh").css("display","block");
               $(".form1").css("display","none");
            });
            $(".up").click(function(){
               $(".popup-second").slideToggle();
               $(".up").toggleClass("fa-chevron-down");
            });
            //  $(".add-performance").click(function(){
            //    $(".popup-second").clone().appendTo(".popup-second");
            // });
            $(".delete-Performance").click(function(){
               $(".popup-second").slideToggle();
               $(".popup-second").css("display","none");
               $(".delete-text-div").attr("style","display:none !important;");
               $(".form1").attr("style","display:block !important;");
               $(".no").prop("checked", true);

            });
            $(".delete-text-div").attr("style","opacity:0 !important;");
            $(".yes").click(function(){
               $(".delete-text-div").attr("style","opacity:1 !important;");
            });


         });
      </script>
      <script>
        function myfun(){
          var sid=$("#id").val();
          // alert(sid);
          $(".add_another").css("display","none");
          $.ajax({
            method:"POST",
            async:false,
            dataType:"json",
            url:"<?=base_url()?>/Scenario_performance/addindicator/"+sid,
            success:function(json){
              if(json.success){
                $("#gh").append(json.html2);
                // alert("hellos");
              }
            }

          });
        }
    

      </script>  

<script type="text/javascript">

function save(id)
    {
      var id =$("#id").val();
      // alert(id);

       // ajax adding data to database
          $.ajax({
            url : "<?=base_url();?>/Scenario_performance/updatepermfindicators/" + id,
            type: "POST",
            data: $('#update_user').serialize(),
            dataType: "JSON",
            success: function (json) {
              if(json.success)
              {
                // alert("fdjf");

                window.location.replace("<?=base_url();?>/Scenario_epilogue/scenario_epilogue/" + id);
              }
                     
            }
        });
    }
    function next(id)
    {
      var id =$("#id").val();
      // alert(id);

       // ajax adding data to database
       window.location.replace("<?=base_url();?>/Scenario_epilogue/scenario_epilogue/" + id);
    }
    function prev(id)
    {
      var id =$("#id").val();
      // alert(id);

       // ajax adding data to database
       window.location.replace("<?=base_url();?>/Scenario_analysis/scenario_analysis/" + id);
    }
         </script>
       
   </body>
</html>