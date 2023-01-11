<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

      <title>Page1</title>
      <style>
         body {
         font-size: 1rem;
         font-family: 'Open Sans', sans-serif;
         }
         #presentation {
         width: 100%;
         display: inline-block;
         height: 100vh;
         background: linear-gradient(129deg, #0C023D, #381537);
         position: relative;
         padding: 5px;
         }
         .presentation-main {
         width: 100%;
         display: flex;
         justify-content: space-between;
         }
         .presentation-main h3 {
         color: #fff;
         font-size: 20px;
         }
         .presentation-main h3 i {
         background-color: #00B3E3;
         padding: 10px;
         }
         .centerdiv a {
         display: inline-block;
         color: #fff;
         background-color: #5D66DB;
         border-radius: 30px;
         padding: 3px 20px;
         text-decoration: none;
         font-size: 1rem;
         }
         .centerdiv h4 {
         display: inline-block;
         font-size: 1rem;
         color: #fff;
         background-color: #5D66DB;
         border-radius: 30px;
         padding: 3px 20px;
         margin-left: 15px;
         }
         .centerdiv h4 span {
         color: #E3C3E9;
         }
         .presentation-main button {
         background: none;
         border: none;
         color: #fff;
         align-self: baseline;
         }
         .presentation-main button i {
         padding-left: 10px;
         }
         .presentationdiv {
         width: 100%;
         display: inline-block;
         text-align: center;
         transform: translate(-50%, -50%);
         top: 50%;
         left: 50%;
         position: absolute;
         }
         .presentationdiv h2 {
         color: #fff;
         font-size: 25px;
         margin-bottom: 25px;
         }
         .presentationdiv button {
         background: #2C36C0;
         color: #fff;
         border: none;
         padding: 10px;
         font-size: 18px;
         border-radius: 5px;
         }
         .participent {
         width: 100%;
         background: #ffffff17;
         padding: 10px;
         margin-left: auto;
         margin-right: 20px;
         padding: 15px 15px;
         border-radius: 8px;
         }
         .participent h5 {
         color: #fff;
         text-transform: capitalize;
         font-size: 16px;
         margin-bottom: 0;
         }
         .participent span {
         color: #fff;
         font-size: 25px;
         font-weight: 600;
         }
         .inner-left {
         display: flex;
         justify-content: space-between;
         align-items: center;
         border-bottom: 1px solid #ffffff26;
         padding: 0 25px 15px;
         min-height: 46px;
         }
         .full-screen {
         width: 24px;
         background: #ffffff6b;
         padding: 3px;
         border-radius: 20px;
         }
         .left-bx {
         background: #ffffff17;
         padding: 15px 0;
         border-radius: 8px;
         width: 35%;
         height: 90vh;
         }
         .right-bx {
         background: #ffffff17;
         padding: 15px 0;
         border-radius: 8px;
         width: 45%;
         }
         .second-right-bx {
         background: transparent;
         width: 20%;
         }
         .main-head {
         color: white;
         font-size: 1rem;
         line-height: 1.2rem;
         font-weight: bold;
         }
         .fullscreen {
         background: white;
         width: 22px;
         display: flex;
         height: 22px;
         align-items: center;
         justify-content: center;
         text-decoration: none;
         }
         .fullscreen {
         background: #ffffff87;
         width: 30px;
         display: flex;
         height: 30px;
         align-items: center;
         justify-content: center;
         text-decoration: none;
         color: black;
         border-radius: 20px;
         }
         .inner-left-2 {
         padding: 20px 25px;
         color: white;
         height: 80vh;
         overflow: auto;
         }
         .main-lead {
         font-size: 1.4rem;
         }
         .inner-left-2 {
         padding: 20px 25px;
         color: white;
         }
         .w-90 {
         width: 97%;
         margin: 0 auto;
         }
         .usefulbx {
         display: flex;
         align-items: center;
         justify-content: space-around;
         margin-bottom: 15px;
         }
         .usefulbx img {
         width: 75px;
         }
         .usefulbx h1 {
         font-size: 1rem;
         width: 220px;
         line-height: 1.4rem;
         }
         .imgbtn {
         background: transparent;
         border: 1px solid white;
         color: white;
         font-size: .85rem;
         padding: 3px 18px;
         border-radius: 20px;
         transition: cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.4s;
         }
         .imgbtn:hover {
         background: white;
         color: #0C023D;
         transition: cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.4s;
         }
         .usefulbx {
         display: flex;
         align-items: center;
         justify-content: space-around;
         background: #ffffff14;
         padding: 8px;
         border-radius: 7px;
         }
         .inner-left-2 {
         --scrollbarBG: #CFD8DC;
         --thumbBG: #90A4AE;
         }
         .inner-left-2::-webkit-scrollbar {
         width: 6px;
         }
         .inner-left-2 {
         scrollbar-width: thin;
         scrollbar-color: var(--thumbBG) var(--scrollbarBG);
         }
         /* .inner-left-2::-webkit-scrollbar-track {
         background: var(--scrollbarBG);
         } */
         .inner-left-2::-webkit-scrollbar-thumb {
         background-color: var(--thumbBG);
         border-radius: 6px;
         border: 2px solid var(--scrollbarBG);
         }
         .option-bx {
         --scrollbarBG: #CFD8DC;
         --thumbBG: #90A4AE;
         }
         .option-bx::-webkit-scrollbar {
         width: 6px;
         }
         .option-bx{
         scrollbar-width: thin;
         scrollbar-color: var(--thumbBG) var(--scrollbarBG);
         }
         /* .inner-left-2::-webkit-scrollbar-track {
         background: var(--scrollbarBG);
         } */
         .option-bx::-webkit-scrollbar-thumb {
         background-color: var(--thumbBG);
         border-radius: 6px;
         border: 2px solid var(--scrollbarBG);
         }
         .option-bx {
         padding: 20px 25px;
         height: 80vh;
         overflow: auto;
         }
         .blue-btn {
         background: linear-gradient(45deg, #2F3AC6, #1e267e);
         border: none;
         padding: 10px 54px;
         border-radius: 7px;
         color: white;
         font-size: 1rem;
         font-weight: bold;
         }
         .second-display {
         background: #FFC107;
         border-radius: 6px;
         padding: 25px;
         }
         .second-display img {
         border-radius: 300px;
         border: 10px solid #ebb30a;
         }
         .second-display h4 {
         text-align: center;
         font-weight: bold;
         padding: 21px 0;
         }
         .second-display .participent {
         width: 100%;
         background: #ffffff6b;
         padding: 10px;
         margin-left: auto;
         margin-right: 20px;
         padding: 15px 15px;
         border-radius: 8px;
         }
         .second-display  .participent h5 {
         color: #000;
         }
         .second-display .participent span {
         color: #000;
         font-size: 25px;
         font-weight: 600;
         }
      </style>
   </head>
   <body>
      <section id="presentation">
         <div class="container-fliud">
            <div class="presentation-main">
               <h3><i class="fa fa-quora" aria-hidden="true"></i>Crisis Sim</h3>
               <div class="centerdiv">
                  <a href="#">play.immerslvelabs.online</a>
                  <h4><span>Code</span>B7C63A</h4>
               </div>
               <button>Exit<i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <style>
            </style>
            <div class="d-flex w-90 gap-3">
               <div class="left-bx">
                  <div class="inner-left">
                     <!-- <p class="main-head mb-0">Inject 2</p> -->
                     <p class="main-head mb-0">Inject <span class="span01" id="injectno_v">1</span></p>
                     <a href="javascript:void(0)" class="fullscreen"><i class="fa fa-expand"></i></a>
                     <button class="btn" style="color:#fff;" id="rvlopt">Reveal Options</button>
                  </div>
                  <div class="inner-left-2">
                     <div>
                     <input type="hidden" name="nonextinject" id="nonextinject" value="0"/>
		<input type="hidden" name="falgval" id="flagval" value="0"/>
		<input type="hidden" name="testvals" id="testvals" value="0"/>
		<input type="hidden" name="responvals" id="responvals" value="0"/>

        
					<h2 class="main-lead mb-0" id="injectnam"><?php if($injectscreated)echo $injectscreated->title;?></h2>
                    <p class="mb-4 cont" id="injectdate"><?php echo strtoupper(date("H:i__j F Y",$injectscreated->timecreated));?></p>
					<input type="hidden" id="inject_val" value="<?=$inject_id?>">
					<input type="hidden" id="scenario_val" value="<?=$scenario_id?>">
					<input type="hidden" id="order_no" value="<?=$order_no?>">
					<p class="cont  mb-3" id="injectdesc"><?php if($injectscreated)echo $injectscreated->description;?></p>
                     </div>
                     <div class="user">
					<div class="user-image" style="margin-top:15px;">
						<img src="<?=base_url();?>/images/Avatar+1.png" style="     margin-right: 0.5rem;   width: 2.5rem;">
					</div>
					<div class="role" style="margin-top: 15px;  padding-left: 0.5rem;   border-left: 1px solid rgb(228, 233, 240);">
						<p style="margin:0px">ROLE:</p>
						<p style="margin:0px" id="roleval"><?php if($injectscreated)echo $injectscreated->jtitle;?></p>
					</div>
				</div>


                     
                     <div class="usefulbx ">
                        <img src="https://user-images.githubusercontent.com/15963/29055956-8dcca38e-7bb4-11e7-8a86-7b056ebf673d.png"
                           class="img-fluid" alt="">
                        <h1 class="lead2">Email From Humvilla Branch Men..</h1>
                        <button class="imgbtn">Images</button>
                        <a href="javascript:void(0)" class="fullscreen"><i class="fa fa-expand"></i></a>
                     </div>
                     <div class="usefulbx">
                        <img src="https://user-images.githubusercontent.com/15963/29055956-8dcca38e-7bb4-11e7-8a86-7b056ebf673d.png"
                           class="img-fluid" alt="">
                        <h1 class="lead2">Email From Humvilla Branch Men..</h1>
                        <button class="imgbtn">Images</button>
                        <a href="javascript:void(0)" class="fullscreen"><i class="fa fa-expand"></i></a>
                     </div>
                     <div class="usefulbx">
                        <img src="https://user-images.githubusercontent.com/15963/29055956-8dcca38e-7bb4-11e7-8a86-7b056ebf673d.png"
                           class="img-fluid" alt="">
                        <h1 class="lead2">Email From Humvilla Branch Men..</h1>
                        <button class="imgbtn">Images</button>
                        <a href="javascript:void(0)" class="fullscreen"><i class="fa fa-expand"></i></a>
                     </div>
                  </div>
               </div>
               <div class="right-bx optionvals" style="display:none;">
                  <div class="inner-left">
                     <p class="main-head mb-0">Your Options</p>
                  </div>
                  <div class="option-bx">
                     <button class="blue-btn mb-4" id="vote-btn">Vote Now</button>
                     <div class="card px-5 py-2 mb-3">
				
				<?php $itr=1; foreach($injectoptions as $ijop){?>
				<div class="text-secondary opt_v">
					<p>option<?=$itr?><p>
					<input type="radio" class="optinput" name="optinput" value="<?=$ijop['id']?>"><span class="cont mb-0 fw-bold"><?=$ijop['option_title']?></span>
					<p class="cont mb-0"><?=$ijop['option_description']?><p>	
				</div>	
			    <?php $itr++;}?>

			</div>
                    
                   
                  </div>
               </div>
               <div class="respon" style="display:none;"> <h2>Your Response</h2> 
				<div class="opt_v">
					<p>option <span class="selectorderR"></span><p>
					<span class="selecttitleR"></span>
					<p class="selectdesR"><p>	
				</div>	

				<p><b>How confident are you in this response?</b></p>
				<input type="radio" class="otinput" name="otinput" value="1" ><span>Not at all confident</span>
				<input type="radio" class="otinput" name="otinput" value="2" ><span>Not very confident</span>
				<input type="radio" class="otinput" name="otinput" value="3" ><span>Somewhat confident</span>
				<input type="radio" class="otinput" name="otinput" value="4" ><span>confident</span>
				<input type="radio" class="otinput" name="otinput" value="5" ><span>Very confident</span>
			</div>

               <div class="justifica" style="display:none;"><h2>Your Justification</h3> 
			<p class="justiv"></p>
			<textarea name="justis" class="justis"  id="justisis3" cols="70" rows="8"   ></textarea>
			</div>
			
               <div class="ranking" style="display:none;"> <h2>Ranking</h3> 
				<div class="opt_v">
					<p class="selectrank"></p>
					<p>option <span class="selectorder"></span><p>
					<span class="selecttitle"></span>
					<p class="selectdes"><p>	
				</div>	
			</div>
               <div class="feedback" style="display:none;"> <h2>Feedback</h3>
				 <p class="sfeedoption"></p></div>
				
               <div class="revels-left">
            	
                </div>	
               <div class="right-bx chart-container" style="color:#fff;">
			<?php $ct2=1;foreach($performanceindicatorsv as $pm){?>	
				
			<p><?=$pm["performance_title"];?></p>
			
            <canvas id="myChart<?=$pm['id']?>" data-value="<?=$pm['starting_value']?>" class="chart_canvas"></canvas>
			
	        <?php $ct2++; } ?>
			</div>
               <div class="second-right-bx">
                  <div class="first-display">
                     <div class="participent mb-3">
                        <h5>participents</h5>
                        <span>0</span>
                     </div>
                     <div class="participent mb-3">
                        <h5>Responsis</h5>
                        <span>0</span>
                     </div>
                  </div>
                  <div class="second-display d-none">
                     <img src="https://thumbs.dreamstime.com/b/smartphone-vote-check-mark-icon-outline-style-vector-web-design-isolated-white-background-144373878.jpg" class="img-fluid" alt="">
                     <h4>Vote now on your device !</h4>
                     <button class="blue-btn">Reveal Responses</button>
                     <div class="participent mb-3 mt-4">
                        <h5>participents</h5>
                        <span>0</span>
                     </div>
                     <div class="participent mb-3">
                        <h5>Responsis</h5>
                        <span>0</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      
      <script>
        $('#vote-btn').click(function(){
            $('.first-display').toggleClass('d-none');
            $('.second-display').toggleClass('d-none');
        });
      </script>
      <script>
	var searchQuery = new Array();
        <?php 
            $dataf = $pmf_ids;
           foreach($dataf as $value){ ?>
                searchQuery.push('<?=$value;?>');
        <?php } ?>
        
	
	for(var i in searchQuery){
		var it=parseInt(searchQuery[i]);
		const ctx = document.querySelector('#myChart'+it);
		var st=ctx.getAttribute('data-value');
		var sarray = new Array();
		sarray.push(st);
		
		window["text" +it] = 

  
  new Chart(ctx, {
    type: 'line',
    data: {
      labels: [''],
      datasets: [{
        label: '# of Votes',
        data: sarray,
        borderWidth: 2,
        borderColor: "white",
        pointBorderColor: "yellow"
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: false,

        }
		
      },
	  plugins: {
            legend: {
                display: false,
                labels: {
                    color: 'rgb(255, 99, 132)',
					display: false,

                }
            }
        }
    }
  });

	}
  
</script>
      <script>
	 function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
   }
   var nexteninject="";
   var responseexist=0;
   var responseshow=0;

   var justisfyexist=0;
   var justifyshow=0;
  
   var feedbackexist=0;
   var feedbackshow=0;
   
   var rankexist=0;
   var rankshow=0;
   var testvalss=0;
   var what="";
   var why="";
   	$("#rvlopt").click(function(){
		$(this).text("submit response");
		$(".chart-container").hide();
		$(".optionvals").show();
		var rsponseflag=$("#flagval").val();
		var noinjectflag=$("#nonextinject").val();
		var testflag=$("#testvals").val();
		var rval=$('input[name="optinput"]:checked').val();
		// var svals=$('input[name="otinput"]:checked').val();
		// var sjust=$('#justisis').val();
		// if (testflag=="0"){
        //    			if(!svals && responseexist==1){
        //                 //  alert(testflag=="8");
        //    			$(this).prop('disabled', true);
        //    			// continue;
        //    			}
		// 			else{
		// 				$(this).prop('disabled', false);
		// 			}
		// 		}
		
		

		if(rval && rsponseflag=='0'){
			var injectid=$("#inject_val").val();
			var scenarioid=$("#scenario_val").val();
			var order_no=$("#order_no").val();

		

			 
			$.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{rval:rval,injectid:injectid,scenarioid:scenarioid,order_no:order_no},
				url:"<?=base_url()?>/Play_presentation/previewData",
				success:function(json){
					if(json.success){
						
						var ob1=JSON.stringify(json);
							var ob2=JSON.parse(ob1);
						for(var itr in searchQuery){
							var namev=parseInt(searchQuery[itr]);
						    var upval=ob2[namev];
							
							// addData(window[namev],"",upval);
							updatechart(upval,namev);
							$(".chart-container").show();
		                    $(".optionvals").hide();
							// 
							
							
						}
						if(json.nextv){
							testvalss=json.neworderno;
						    $("#rvlopt").text("reveal options");
							$("#injectno_v").text(json.neworderno);
						    $('.revels-left').html("");
							if(json.response){
							  
								
								
								responseexist=1;
							    responseshow=1;
								
								$('.selectorderR').text(json.sorderR);
								$('.selecttitleR').text(json.stitleR);
								$('.selectdesR').text(json.sdesR);
								$('.revels-left').html($('.respon').clone().show());
								$('.revels-left').show();
			                    $('.question-left').hide();
								$("#flagval").val("1");
								$("#rvlopt").text("submit");
								$("#injectno_v").text(json.neworderno-1);
								// console.log(json.previousorderno);
								// $(this).prop('disabled', true);
								
							    }
								if(json.justify){
									justisfyexist=1;
									if(responseexist==0){
                                      justifyshow=1;
								      $('.revels-left').html($('.justifica').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#injectno_v").text(json.neworderno-1);

									}
									else{
										justifyshow=1;
										 $('.revels-left').append($('.justifica').clone().show());
								         $('.revels-left').show();

			                             $('.question-left').hide();
										 $("#injectno_v").text(json.neworderno-1);

									}
									$('.justiv').text(json.justval);
									$("#flagval").val("1");
									$("#rvlopt").text("submit");
								  
								}
								if(json.rank){
								//2
								$("#flagval").val("1");
								rankexist=1;
							
								if(json.srank=='1'){
									$('.selectrank').text("Weak Answer");
								}
								else if(json.srank=='2'){
									$('.selectrank').text("Okay Answer");
								}
								else if(json.srank=='3'){
									$('.selectrank').text("Good Answer");
								}
								else if(json.srank=='4'){
									$('.selectrank').text("Great Answer");
								}
								else{
									$('.selectrank').text("No Rank");
								}
								$('.selectorder').text(json.sorder);
								$('.selecttitle').text(json.stitle);
								$('.selectdes').text(json.sdes);
                                if(responseexist==0 &&justisfyexist==0){
                                	 $('.revels-left').html($('.ranking').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#rvlopt").text("Next");
			                          rankshow=1;
									  $("#injectno_v").text(json.neworderno-1);
                                }
								
							
							    }
							    if(json.feed){
								 
                                //3
								if(json.sfeedback){
                                $("#flagval").val("1");
                                feedbackexist=1;
								$('.sfeedoption').text(json.sfeedback); 
							    if(responseexist==0 &&justisfyexist==0 && rankexist==0){
                                	 $('.revels-left').html($('.feedback').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#rvlopt").text("Next");
			                          feedbackshow=1;
									  $("#injectno_v").text(json.neworderno-1);
                                }
                                if(responseexist==0 &&justisfyexist==0 && rankexist==1){
								      $('.revels-left').append($('.feedback').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#rvlopt").text("Next");
			                          feedbackshow=1;
									  $("#injectno_v").text(json.neworderno-1);
								
							    }
								}
							  }
                               // console.log("response"+responseexist+"justisfy:"+justisfyexist+"feedback:"+feedbackexist+"rank:"+rankexist);
							//    console.log(json.neworderno);
										
					    $("#inject_val").val(json.newinjectid);
						$("#order_no").val(json.neworderno);
						$("#injectnam").text(json.nextinjecttitle);
						$("#injectdate").text(json.injecttime);
						$("#roleval").text(json.nextinjectrole);
						$("#injectdesc").text(json.nextinjectdesc);
						
                        

                        $("input:radio[name='optinput']").each(function(i) {
                           this.checked = false;
                            });
                        $(".optionvals").html(json.optionhtml);
						
                        
						
						}
						else{
							//next inject code
							// testvalss=json.neworderno;
						    $("#rvlopt").text("reveal options");
							// $("#injectno_v").text(json.neworderno);
						    $('.revels-left').html("");
							if(json.response){
							  
								
								
								responseexist=1;
							    responseshow=1;
								
								$('.selectorderR').text(json.sorderR);
								$('.selecttitleR').text(json.stitleR);
								$('.selectdesR').text(json.sdesR);
								$('.revels-left').html($('.respon').clone().show());
								$('.revels-left').show();
			                    $('.question-left').hide();
								$("#flagval").val("1");
								$("#rvlopt").text("submit");
								// $("#injectno_v").text(json.neworderno-1);
								// console.log(json.previousorderno);
								// $(this).prop('disabled', true);
								
							    }
								if(json.justify){
									justisfyexist=1;
									if(responseexist==0){
                                      justifyshow=1;
								      $('.revels-left').html($('.justifica').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									//   $("#injectno_v").text(json.neworderno/-1);

									}
									else{
										justifyshow=1;
										 $('.revels-left').append($('.justifica').clone().show());
								         $('.revels-left').show();

			                             $('.question-left').hide();
										//  $("#injectno_v").text(json.neworderno-1);/

									}
									$('.justiv').text(json.justval);
									$("#flagval").val("1");
									$("#rvlopt").text("submit");
								  
								}
								if(json.rank){
								//2
								$("#flagval").val("1");
								rankexist=1;
							
								if(json.srank=='1'){
									$('.selectrank').text("Weak Answer");
								}
								else if(json.srank=='2'){
									$('.selectrank').text("Okay Answer");
								}
								else if(json.srank=='3'){
									$('.selectrank').text("Good Answer");
								}
								else if(json.srank=='4'){
									$('.selectrank').text("Great Answer");
								}
								else{
									$('.selectrank').text("No Rank");
								}
								$('.selectorder').text(json.sorder);
								$('.selecttitle').text(json.stitle);
								$('.selectdes').text(json.sdes);
                                if(responseexist==0 &&justisfyexist==0){
                                	 $('.revels-left').html($('.ranking').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#rvlopt").text("Next");
			                          rankshow=1;
									//   $("#injectno_v").text(json.neworderno-1);
                                }
								
							
							    }
							    if(json.feed){
								 
                                //3
								if(json.sfeedback){
                                $("#flagval").val("1");
                                feedbackexist=1;
								$('.sfeedoption').text(json.sfeedback); 
							    if(responseexist==0 &&justisfyexist==0 && rankexist==0){
                                	 $('.revels-left').html($('.feedback').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#rvlopt").text("Next");
			                          feedbackshow=1;
									//   $("#injectno_v").text(json.neworderno-1);
                                }
                                if(responseexist==0 &&justisfyexist==0 && rankexist==1){
								      $('.revels-left').append($('.feedback').clone().show());
								      $('.revels-left').show();
			                          $('.question-left').hide();
									  $("#rvlopt").text("Next");
			                          feedbackshow=1;
									//   $("#injectno_v").text(json.neworderno-1);
								
							    }
								}
							  }
                               // console.log("response"+responseexist+"justisfy:"+justisfyexist+"feedback:"+feedbackexist+"rank:"+rankexist);
							//    console.log(json.neworderno);
										
					    // $("#inject_val").val(json.newinjectid);
						$("#order_no").val(json.previousorderno);
						
						
                        

                        $("input:radio[name='optinput']").each(function(i) {
                           this.checked = false;
                            });
                        // $(".optionvals").html(json.optionhtml);
						
							//next inject code

							nexteninject=json.nexten;
							$("#nonextinject").val("1");
							// var htm='<h2>End of scenario</h2>';
							// $(".container").html(json.nexten);
							// $(".header2").html("");
						}

						
					}

				}
			})

			if (testflag=="0"){
           	   if (responseexist==1){
				
				if(justisfyexist==1){
					$("#rvlopt").prop('disabled', true);
				
				$('.otinput').on('click',function(){
					 why=$(this).val();
					$('.justis').on('input',function(){
						$( "textarea" ).each(function() {
							what=this.value;
				if(this.value){
					// console.log(why)
					$("#rvlopt").prop('disabled', false);
				}
				else{
					$("#rvlopt").prop('disabled', true);
				}
			           })
					})
				})

				$('.justis').on('input',function(){
						$( "textarea" ).each(function() {
							 what=this.value;
			           })
					if(what){
						// if(this.value){
					$('.otinput').on('click',function(){
						why=$(this).val();
						// console.log(why);
						// console.log(what)
						if(what && why){
						$("#rvlopt").prop('disabled', false);
						}
						else{
							$("#rvlopt").prop('disabled', true);
						}
					})
				// }
					   }
					   else{
						$("#rvlopt").prop('disabled', true); 
					   }
					})


				}
				else{
					$("#rvlopt").prop('disabled', true);
					$('.otinput').on('click',function(){
					 why=$(this).val();
					if(why){
						$("#rvlopt").prop('disabled', false);
					}
				})
				}
			}
			else{
				if(justisfyexist==1){
					$("#rvlopt").prop('disabled', true);
					$('.justis').on('input',function(){
						$( "textarea" ).each(function() {
							 what=this.value;
				if(this.value){
					// console.log(this.value)
					$("#rvlopt").prop('disabled', false);

				}
				else{
					$("#rvlopt").prop('disabled', true);
				}
			})
		})

				}
			}
			
           	}
		}
		if(rsponseflag=="1"){
			
			// chosse();
			$(".chart-container").show();
		    $(".optionvals").hide();
			// console.log("response"+responseexist+"justisfy:"+justisfyexist+"feedback:"+feedbackexist+"rank:"+rankexist);
			
         if(rankexist==1 && rankshow==0){
			
         	$('.revels-left').html($('.ranking').clone().show());
             rankshow=1;
             if(feedbackexist==1 && feedbackshow==0){
             	 $('.revels-left').append($('.feedback').clone().show());
             	 feedbackshow=1;
             }
             $("#rvlopt").text("Next"); 
			 $("#injectno_v").text(testvalss-1);
         }
      
         else if(feedbackexist==1 && feedbackshow==0){
         	$('.revels-left').html($('.feedback').clone().show());
             
             feedbackshow=1; 
			 $("#rvlopt").text("Next");
			 $("#injectno_v").text(testvalss-1);
         }
         else{
             
                responseexist=0;
                responseshow=0;
            	feedbackexist=0;
            	feedbackshow=0;
                rankexist=0;
                rankshow=0;
				justisfyexist=0;
				justifyshow=0;
            	$("#rvlopt").text("Reveal Options");
            	$('.revels-left').hide();
			    $('.question-left').show();
            	$("#flagval").val("0");
				$("#testvals").val("0");
				$("#injectno_v").text(testvalss);
				if (noinjectflag=="1"){
						var htm='<h2>End of scenario</h2>';
							$(".container").html(nexteninject);
							$(".header2").html("");
				}

         }
            
             
		}
	})
	function goBack() {
     window.history.back()
        }

		var ordernoQuery = new Array();
        <?php 
            // $dataf = $pmf_ids;
           foreach($injectstest as $value){ 
			$filearray=explode(",",$value["file"]);
			$count=1;
			foreach ($filearray as $fie){
	         $namefile=$value['order_id']."".$count;
				?>
                ordernoQuery.push('<?=$namefile;?>');
        <?php $count=$count+1;} }?>
// console.log(ordernoQuery);

		function showimg(name){
			// console.log(name)
			for (let i = 0; i < ordernoQuery.length; i++) {
				// console.log(ordernoQuery[i])
				if(ordernoQuery[i]==name){
					// console.log(ordernoQuery[i])
					// var jjjj=ordernoQuery[i];
					// console.log(jjjj)
			$('#injectimg'+ordernoQuery[i]+'').show();
			$('.head'+ordernoQuery[i]+'').show();
				}
				else{
					// console.log("no"+ordernoQuery[i])
					$('#injectimg'+ordernoQuery[i]+'').hide();
					$('.head'+ordernoQuery[i]+'').hide();
				}
			}
		}
		function loading(abhi){
			// console.log(abhi);
			var onetimer=$('#onetimeload').val();
			// if (abhi === undefined) {
			// 	abhi = 1;
            //         }
			if(onetimer=="0"){
			$('#injectimg'+abhi+'').show();
			$('.head'+abhi+'').show();
			$('#onetimeload').val("1");
			}
		}
	// function chosse(){
	// 	var sradio=$('input[name="otinput"]:checked').val();
	// 	var just11=$('#justvals').val();
    //     //    $(this).attr("disabled", false);
	// 	if(!sradio){
	// 		$("#rvlopt").prop('disabled', true);
	// 	// alert("no");
	// 	}
	// 	else{
	// 		if(just11=="1"){
	// 		// 	// console.log(sradio);
	// 		// 
	// 		// }
	// 		// else{
	// 			$("#rvlopt").prop("disabled", false);
	// 			choosen();
	// 		}
	// 		// alert(sradio);
	// 	}
			
	// }
	// function choosen(){
	// 	var response11=$('#responvals').val();
	
	// 		$( "textarea" ).each(function() {
	// 			// console.log(this.value);
	// 			if(!this.value){
	// 		$("#rvlopt").prop('disabled', true);
	// 	// alert("no");
	// 	}
	// 	else{
	// 		// alert(sradio);
	// 		// if(response11=="1"){
	// 		// chosse();
	// 		// }
	// 		// else{
	// 			$("#rvlopt").prop("disabled", false);
	// 			chosse();
	// 		// }
	// 	}
			
	// 		});
	// 	// alert(sjust);
	// 	// }
	// 	// else{
	// 		// $("#rvlopt").prop("disabled", false);
	// 	// 	console.log(sjust);
	// 	// }
			
	// }
	function updatechart(varv,it){
   	  
   	  var arrr=window.window["text" +it].data.datasets[0];
   	  var lastindex=arrr.data.length-1;
   	  var lastval=arrr.data[lastindex];
   	//   mychart=window["text" +it];
	     var varr=parseInt(varv);
		 var varr2=parseInt(lastval);
		 
		 var fv=varr2+varr;
		 
		
		window.window["text" +it].data.datasets[0].data.push(fv);

		
		
		

   	//   myChart.data.datasets[0].data.push(lastval+varr);
   	  
   	  // data.datasets[0].data.push
   	  window.window["text" +it].data.labels.push("");
   	 
   	 
   	  window.window["text" +it].update();
   }
  
</script>	

   </body>
</html>