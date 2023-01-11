<div class="mt-4 d-flex justify-content-between">
                       <label for="fname"><b>Option <?=$endval?></b></label><br>
                        <a href="#" style="color: rgb(219, 58, 52);">Delete Option</a>
                     </div>

                   <div class="form pt-3 mt-2">
               


                  <!-- <form action="/action_page.php" class="p-4"> -->
                  <input type="hidden" name="id" id="id" value="">

                     <div class="mb-4">
                       <label for="fname"><b>Option title:</b></label><br>
                       <input type="text" name="optionname<?=$endval?>" class="form-control" value="Option <?=$endval?>">
                     </div>
                     


               
                     <div class="mb-4">
                       <label for="lname"><b>Option description:</b></label><br>
                       <textarea id="w3review" name="optiondescrip<?=$endval?>" rows="6" cols="100" class="w-100"  value=""></textarea>
                     </div>

                     <?php if(isset($performance_feedback)){ ?>
                     <div class="mb-4">
                       <label for="lname"><b>Option feedback (Optional):</b></label><br>
                       <textarea id="w3review" name="optionfeed<?=$endval?>" rows="6" cols="100" class="w-100"  value=""></textarea>
                     </div>
                     <?php }?>


                     <!-- justification Section -->
                     <?php if($justification_response){ ?>

                      <label for="lname"><b>Justification (Optional)</b><br>Would you like users to justify their responses?</label><br>
                       <div class="radio-btn">
                        <input type="radio" class="yes" name="redio" style="margin-right: 10px;">Yes</input><br>
                        <input type="radio" class="no" name="redio" checked style="margin-right: 10px;">No</input>
                    </div>
                     <div class="mb-4 hide2">
                     <label for="lname"><b>What do you want to ask them? (Optional)</b></label><br>
                       <textarea id="w3review" name="optionfeed<?=$endval?>" rows="6" cols="100" class="w-100"  value=""></textarea>
                     </div>
                     <?php }?>

                     <!-- end -->
                     <?php if($rank_option){ 
                    
                         
                    ?>
                 <div class="mb-4">
                   <label for="lname"><b>How is this option ranked?</b></label><br>
           
                       <select name="optionrank<?=$endval?>" id="cars">
                            <?php foreach($rankoption_data as $key=>$rankoption_data) {?>
                              <option value="<?=$key?>"><?=$rankoption_data?></option>
                            <?php }?>
                            </select>
                 </div>
                 <?php }?>
                        <?php if(isset($performance_indicators)){ ?>
                      <div class="mb-4">
                       <label for="lname"><b>Performance Indicators:</b></label><br>
                       <p>Performance Indicators
                         Think about how this option will affect each of your performance indicators. Is it a positive outcome or a negative one?</p>

                         <div class="performance-indicator">
                          <?php foreach($performance_indicators as $pfm){?>
                           <div>
                             <p><?=$pfm["performance_title"]?><br>Starting Value : <?=$pfm["starting_value"]?></p>
                            
                             <input type="number" class="form-control" name="<?=$option_id?>pval<?=$pfm["id"]?>">
                           </div>
                          <?php }?> 

                            
                          </div>
                       
                     </div>
                    <?php }?>

                      <div class="mb-4">
                       <label for="lname"><b>Option 1.1 Logic:</b></label><br>
                       <div class="option-logic">
                           <p><b>If</b> this option <b>[option 1.1]</b> is chosen, <b>then</b> the user will be directed to:</p>
                           <select name="selectopt<?=$endval?>" id="cars" class="select_option_c">
                            <?php foreach($options as $key=>$option) {?>
                              <option value="<?=$key?>"><?=$option?></option>
                            <?php }?>
                            </select>
                       </div>
                     </div>
                    </div>
                    <script>
                         $(".select_option_c").on("change",function(){
                
                var modal = document.getElementById("myModal");
                if($(this).val()==-2){
                   modal.style.display = "block";
                }
                else{
                  modal.style.display = "none";
                }
             });

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
          