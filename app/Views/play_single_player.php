<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Play <?=$scenario_title?></title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="icon" type="image/x-icon" href="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg">
	  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	  <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->

	<style type="text/css">
.greenbg {
    background: #006000;
}
.bluebg {
    background: #7179be;
}
.darkbluebg {
    background:  #7179be;
	
}
.opt_v {

    position: relative;
    width: 300px;
}

.redbg {
    background: #C5342F;
}




	body{
		margin: 0px;
	}
	.chart-container {
    width: 400px;
    height:600px
}
#just_click{
	background: linear-gradient(rgb(197 198 205) 0%, rgb(183 184 191) 100%);
	border: 1.5px solid rgb(161 162 169);
}		
.btn2{
	outline: none;
    cursor: pointer;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
	width:100%;
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
    text-transform: capitalize;
}
.header{
			background: #fff;
			display: flex;
			justify-content: space-between;
			padding: 0px 20px;
		}
		.center p{
			color: #fff;
		}
		.exit-preview a{
			color: #000;
			text-decoration: none;
		}
		.exit-preview a i{
			margin-left: 10px;
		}
		.addclass{
			background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
    border: 1.5px solid rgb(36, 45, 147);
		}
	
		.right{
			    display: flex;
    align-items: center;
		}
		.header2{
		display: flex;
    justify-content: space-between;
    border-bottom: 1px solid rgb(207, 213, 222);
    align-items: center;
    padding: 0px 20px;
		}
		.right2{
			display: flex;
			align-items: center;
		}
		.case-file{
			margin-right: 50px;
		}
		.span{
			border-radius: 50%;
			width: 1rem;
			height: 1rem;
			margin-left: 0.25rem;
			-webkit-box-align: center;
			align-items: center;
			padding: 0.25rem 0.5rem;
			background: rgb(197, 52, 47);
			color: rgb(255, 255, 255);
			-webkit-box-pack: center;
			justify-content: center;
			text-decoration: none;
		}
		.btn{
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
			text-transform: capitalize;
		}
		.btn-grey {
			background: #D1D2DB;
			border: 1.5px solid rgb(161 162 169);
			color: #9596A7;
		}
		.case-file a{
			text-decoration: none;
			color: rgb(0, 89, 165);
		}
		.span01{
			font-size: 24px;
			margin-left: 12px !important;
			font-weight: bold;
			color:#616C7A;
		}
		.left2 p {
    		color: #616C7A;
		}
		.role p:first-child {
    		font-weight: 600;
 		}
		 .www p {
    		color: #616C7A;
		}
		.role p {
    		text-transform: uppercase;
		}
		.ouestion-section{
			display: flex;
			justify-content: space-around;
		}
		.question-left{
			width: 50%;
			padding: 30px;
			    box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
			    height: 100vh;
		}
		.ques{
			position: relative;
			border-bottom: 1px solid rgb(228, 233, 240);
		}
		.ques::before{
			content: "";
			position: absolute;
			background: red;
			height: 10px;
			width: 10px;
			left: -15px;
			top: 4px;
		}
		.user{
			display: flex;
		}
		.hr{
			width: 30px;
    position: absolute;
    color: rgb(207, 213, 222);
    margin-top: 1.5rem;
		}
		.question-rigth{
			width: 30%;
			margin-top: 30px;
		}
		.left-sidebar{
			    width: 20%;
    background: #fff;
    border-bottom: 1px solid rgb(207, 213, 222);
		}
		.right-sidebar{
			width: 80%;

		}
		.fixed{
			   /* position: fixed;*/
    top: 90px;
    width: 100%;
    display: flex;
    left: 0;

		}
		.right-sidebar{
			background: rgb(27, 30, 74);
		}
		.right-header{
			    display: flex;
				justify-content: space-between;
				align-items: center;
		}
		.fixed2{
			position: fixed;
			left: 100%;
			top: 0;
			width: 100%;
			transition: 0.3s all;
			transition-timing-function: ease;
		}
		.addclass{
			left: 0;
		}
		.optionvals{
			display:none;
		}

		.optionvals > p {
			font-weight: 700;
			text-transform: capitalize;
		}

		.optionvals p i {
			background: #494B6E;
			color: #494B6E;
			font-size: 15px;
			margin-right: 5px;
		}


		.opt_v p {
			color: #5F667A;
		}

		textarea#justisis {
			width: 100%;
			max-width: 98%;
			height: 220px;
			border: 1px solid #ddd;
			border-radius: 4px;
			box-shadow: 0 0px 2px #ddd;
			padding: 10px 0 0 10px;
			margin-bottom: 10px;
			outline: 2px solid transparent;
		}


		textarea#justisis:focus-visible {
			border: transparent;
			outline: 2px solid #d1d2db;
		}

		.opt_v p span {
			color: #5F667A;
		}
		.opt_v{
			margin:1.5rem 0;
			padding:1rem;
			border:1px solid #ddd;
			border-radius:4px;
			box-shadow: 0 0px 2px #ddd;
			text-transform: capitalize;
		}
		.opt_v p span {
    		font-weight: 700;
		}
		.chart_canvas{
			background-color: #10122c;
			border-radius:5px;
			padding:1rem;
		}
		.revels-left{
			display: none;
			/*background-color: red;*/
		}

		
		.left span {
			background-color: #00B3E3;
			color:#fff;
			padding: 10px;
			display: inline-block;
	}

		.left p {
			display: inline-block;
		}
		.respon h2 i {
			color: #FFC107;
			font-size: 20px;
		}
		.box-design {
			box-shadow: 0 0px 3px #4a62ff;
    		border-top: 1px solid #4a62ff;
}

		.opt_v.box-design .selectdesR {
			color: #2F26D6;
		}

		.opt_v.box-design .selecttitleR {
    		color: #000;	
		}


		/* opt design css start */

		.opt_v.opt-design {
			box-shadow: 0 0px 5px #4a62ff;
			border-left: 1px solid #4a62ff;
		}

		.opt_v .opt-design p {
			color: #000;
		}

		.opt_v.opt-design .selecttitle {
			color: #000;
		}

		.opt_v.opt-design .selectdes {
			color: #2F26D6;
		}

		.opt_v.opt-design {
			/* width: 100%; */
			position: relative;
		}

		.opt_v.opt-design .selectrank {
			position: absolute;
			top: -30px;
			left: 50%;
			transform: translateX(-50%);
			color: #fff;
			padding: 5px 8px;
			border-radius: 30px;
		}
		
.opt_v {

position: relative;
width: 300px !important;
}
.logo-left{
	display: flex;
	align-items: center;
}
		/* opt design css end */

	</style>
</head>
<body>
	<header class="header">
		<div class="left logo-left">
		
		<img src="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg" alt="logo" width="30" style="margin-right: 10px;">
        <p>Crisis Sim_ <?=$scenario_title?></p>

		</div>
		<div class="center">
			
		</div>
		<div class="right">
		
			<div class="exit-preview">
			 <a href="#"  onclick="exit()"><p class="text-white mb-0">Exit <i class="fa fa-times"></i></p></a>
			</div>
		</div>
	</header>
	<header class="header2">
		<div class="left2">
			<p>INJECT<span class="span01" id="injectno_v">01</span></p>
		</div>
		<div class="right2">
			<div class="case-file">
				<a href="#"><p><i class="fa fa-folder-open" aria-hidden="true" style="margin-right: 10px;"></i>Case File<span class="span">1</span></p></a>
			</div>
			<div class="revel-option">
				<button class="btn" id="rvlopt">Reveal Options</button>
			</div>
		</div>
	</header>
	<div class="container" style="padding: 0px 2rem;">	
	<input type="hidden" name="nonextinject" id="nonextinject" value="0"/>
	<!-- <input type="hidden" name="testpihu" id="testpihu" value="0"/> -->
	<input type="hidden" name="falgval" id="flagval" value="0"/>
		<input type="hidden" name="testvals" id="testvals" value="0"/>
		<input type="hidden" name="responvals" id="responvals" value="0"/>
		<input type="hidden" name="justvals" id="justvals" value="0"/>
		<div class="ouestion-section" >
			<div class="question-left">
				<div class="ques" >
					<!-- <p>16:17_8 NOVEMBER 2022</p> -->
					<h2 id="injectnam"><?php if($injectscreated)echo $injectscreated->title;?></h2>
					<input type="hidden" id="inject_val" value="<?=$inject_id?>">
					<input type="hidden" id="scenario_val" value="<?=$scenario_id?>">
					<input type="hidden" id="order_no" value="<?=$order_no?>">
					<input type="hidden" id="setup_id_val" value="<?=$set_up_id?>">

					
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


				<div class="respon" style="display:none;"> 
					<h2><i class="fa fa-hourglass-end"></i> Your Response</h2> 	
				<div class="opt_v box-design">	
					<p>option <span class="selectorderR"></span><p>	
					<span class="selecttitleR"></span>	
					<p class="selectdesR"><p>		
				</div>		
				<p id="myid"><b>How confident are you in this response?</b></p>	
				<input type="radio" class="otinput" name="otinput" value="1"><span>Not at all confident</span>	
				<input type="radio" class="otinput" name="otinput" value="2"><span>Not very confident</span>	
				<input type="radio" class="otinput" name="otinput" value="3"><span>Somewhat confident</span>	
				<input type="radio" class="otinput" name="otinput" value="4"><span>confident</span>	
				<input type="radio" class="otinput" name="otinput" value="5"><span>Very confident</span>	
			</div>	



			


			
			<div class="justifica" style="display:none;"><h2>Your Justification</h3> 	
			<p class="justiv"></p>	
			<textarea class="justis" name="justis" id="justisis" cols="30" rows="10"></textarea>	
			<button class="btn"style="background: linear-gradient(rgb(52, 64, 210) 0%, rgb(31, 37, 160) 100%);
			color: rgb(255, 255, 255);
			border: 1.5px solid rgb(36, 45, 147);" id="just_click" onclick="just_click()">Submit</button>
			<p>Click On Submit  After filling Justification Data to Store it in database</p>
			</div>	
				
				<div class="ranking" style="display:none;"> <h2>Ranking</h3> 	
				<div class="opt_v opt-design">
					<p class="selectrank"></p>
					<p>option <span class="selectorder"></span><p>
					<span class="selecttitle"></span>
					<p class="selectdes"><p>	
				</div>	
			</div>
				<div class="feedback" style="display:none;"> <h2>Feedback</h3>
				 <p class="sfeedoption"></p></div>
				
				
				
				<div class="www">
					<p id="injectdesc"><?php if($injectscreated)echo $injectscreated->description;?></p>
				</div>
				<hr class="hr">
			</div>
			<div class="revels-left">	
            		
            </div>	




			<div class="question-rigth">
			<div class="chart-container">
			<?php $ct2=1;foreach($performanceindicatorsv as $pm){?>	
				
			<p><?=$pm["performance_title"];?></p>
			
            <canvas id="myChart<?=$pm['id']?>" data-value="<?=$pm['starting_value']?>" class="chart_canvas"></canvas>
			
	        <?php $ct2++; } ?>
			</div>
			<div class="optionvals">
				<p><i class="fa fa-square"></i>choose your response</p>
				<?php $itr=1; foreach($injectoptions as $ijop){?>
				<div class="opt_v">
					<p>option<?=$itr?><p>
					<input type="radio" class="optinput" name="optinput" value="<?=$ijop['id']?>"><span><?=$ijop['option_title']?></span>
					<p><?=$ijop['option_description']?><p> 
						<!-- <button class="btn2" id="rvlopt1">Submit</button> -->
				</div>	
			    <?php $itr++;}?>

			</div>
			
			
		</div>
		<div class="fixed2">
			<div class="fixed">
				<div class="left-sidebar">
					<div style="padding:20px;">
						<p style="margin:0px;"><b>Case File</b></p>
					</div>
				</div>
				<div class="right-sidebar">
					<div class="right-header">
						<div class="imge" style="padding-left: 10px;">
							<p style="color: #fff; margin: 0px; padding:7px;">IMAGE</p>
							<p style="color: #fff; margin: 0px; padding:7px;">fsp-t</p>
						</div>
						<div class="close-btn" style="padding-right: 20px;">
							<div class="exit-preview">
								<a href="#" style="color:#fff;">Close<i class="fa fa-times" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fix-body" style="text-align:center; background: #fff; height: 100vh;">
				<img src="<?=base_url();?>/assets/image/fsp-t.jpg">
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".case-file a").click(function(){
    $(".fixed2").addClass("addclass");
  });
   $(".close-btn div a").click(function(){
    $(".fixed2").removeClass("addclass");
  });
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
		fill: true,
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
		 	ticks: {
            	color: 'white',
				borderWidth: 2,
				borderColor: "red",
            },
			grid: {
          color: '#3d3e54'
        }
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
   var responseexist=0;
   var responseshow=0;
   var justisfyexist=0;
   var justifyshow=0;
  
   var feedbackexist=0;
   var feedbackshow=0;
   
   var rankexist=0;
   var rankshow=0;
   var testvalss=0;
   var current_resultid=0;
   var what="";
   var why="";
   	$("#rvlopt").click(function(){
		$(this).text("submit response");
		$(".chart-container").hide();
		$(".optionvals").show();
		var rsponseflag=$("#flagval").val();
		var noinjectflag=$("#nonextinject").val();
		// var testpihu=$("#testpihu").val();
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
		
			
			var setup_id=$("#setup_id_val").val();
			$.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{rval:rval,injectid:injectid,scenarioid:scenarioid,setup_id:setup_id,order_no:order_no,current_resultid:current_resultid},
				url:"<?=base_url()?>/Play_single_player/previewData",
				success:function(json){
					current_resultid=0;
					if(json.success){
						// alert("hello");
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
									$('.selectrank').text("Weak Answer").addClass("redbg").removeClass("bluebg greenbg darkbluebg");
								}
								else if(json.srank=='2'){
									$('.selectrank').text("Okay Answer").addClass("bluebg").removeClass("redbg greenbg darkbluebg");
								}
								else if(json.srank=='3'){
									$('.selectrank').text("Good Answer").addClass("darkbluebg").removeClass("redbg bluebg greenbg");
								}
								else if(json.srank=='4'){
									$('.selectrank').text("Great Answer").addClass("greenbg").removeClass("redbg bluebg darkbluebg");
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
							//    console.log(json.neworderno-1);
										
					    $("#inject_val").val(json.newinjectid);
						$("#order_no").val(json.neworderno);
						$("#injectnam").text(json.nextinjecttitle);
						$("#roleval").text(json.nextinjectrole);
						$("#injectdesc").text(json.nextinjectdesc);
						
                        
                        $("input:radio[name='optinput']").each(function(i) {
                           this.checked = false;
                            });
                        $(".optionvals").html(json.optionhtml);
						// $('#testpihu').val("0");
						
                        
						
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
									$('.selectrank').text("Weak Answer").addClass("redbg").removeClass("bluebg greenbg darkbluebg");
								}
								else if(json.srank=='2'){
									$('.selectrank').text("Okay Answer").addclass("bluebg").removeClass("redbg greenbg darkbluebg");
								}
								else if(json.srank=='3'){
									$('.selectrank').text("Good Answer").addclass("darkbluebg").removeClass("redbg bluebg greenbg");
								}
								else if(json.srank=='4'){
									$('.selectrank').text("Great Answer").addclass("greenbg").removeClass("redbg bluebg darkbluebg");
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




							// var player_setup_id=json.player_setup_id;
							// // alert(sid);
							// window.location.href="<?=base_url()?>/Play_single_player/result/"+player_setup_id;
			
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
					
					 $.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{why:why},
				url:"<?=base_url()?>/Play_single_player/justy_Data",
				success:function(data){
					current_resultid=data.ste;
					// alert(current_resultid);

				}})



					$('.justis').on('input',function(){
						$( "textarea" ).each(function() {
							what=this.value;
							
							//
				if(this.value){
					
					$("#rvlopt").prop('disabled', false);
				}
				else{
					$("#rvlopt").prop('disabled', true);
				}
			           })
					  
					})
			// 		if(testpihu=="0"){
			// 		$('#rvlopt').on('click',function(){
			// 	console.log(what);
				
			// }
			
			// 	)
			// 	$('#testpihu').val("1");
			// 		}
					
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
						console.log(what)
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
				// 	alert(what);
				// 			$.ajax({
				// method:"post",
				// async:false,
				// dataType:"json",
				// data:{what:what},
				// url:"<?=base_url()?>/Play_single_player/justification_Data",
				// success:function(data){
				// 	// alert(data.ste);

				// }})
				}
				else{
					$("#rvlopt").prop('disabled', true);
					$('.otinput').on('click',function(){
					 why=$(this).val();
					 		 $.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{why:why},
				url:"<?=base_url()?>/Play_single_player/justy_Data",
				success:function(data){
					current_resultid=data.ste;
					// alert(current_resultid);

				}})
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
							 $.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{what:what},
				url:"<?=base_url()?>/Play_single_player/justification_Data",
				success:function(data){
					// alert(data.ste);

				}})
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
							$(".exit-preview").html("");
				}
         }
            
             
		}
	})



	function just_click(){
		
		var $jj=$("#justisis").text();
		
		$( "textarea" ).each(function() {
			if(this.value==""){
				
			}
			else{
				var justification=this.value;
				$.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{justification:justification},
				url:"<?=base_url()?>/Play_single_player/justification_Data",
				success:function(data){
					// current_resultid=data.ste;
					// alert(current_resultid);

				}})
			}
		})
	}


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
  

//    code by piyusha
$("#rvlopt1").click(function(){
		$(this).text("submit response");
		$(".chart-container").hide();
		$(".optionvals").show();
		var rsponseflag=$("#flagval").val();
		var noinjectflag=$("#nonextinject").val();
		// var testpihu=$("#testpihu").val();
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
		
			
			var setup_id=$("#setup_id_val").val();
			$.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{rval:rval,injectid:injectid,scenarioid:scenarioid,setup_id:setup_id,order_no:order_no,current_resultid:current_resultid},
				url:"<?=base_url()?>/Play_single_player/previewData",
				success:function(json){
					current_resultid=0;
					if(json.success){
						// alert("hello");
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
									$('.selectrank').text("Weak Answer").addClass("redbg").removeClass("bluebg greenbg darkbluebg");
								}
								else if(json.srank=='2'){
									$('.selectrank').text("Okay Answer").addClass("bluebg").removeClass("redbg greenbg darkbluebg");
								}
								else if(json.srank=='3'){
									$('.selectrank').text("Good Answer").addClass("darkbluebg").removeClass("redbg bluebg greenbg");
								}
								else if(json.srank=='4'){
									$('.selectrank').text("Great Answer").addClass("greenbg").removeClass("redbg bluebg darkbluebg");
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
							//    console.log(json.neworderno-1);
										
					    $("#inject_val").val(json.newinjectid);
						$("#order_no").val(json.neworderno);
						$("#injectnam").text(json.nextinjecttitle);
						$("#roleval").text(json.nextinjectrole);
						$("#injectdesc").text(json.nextinjectdesc);
						
                        
                        $("input:radio[name='optinput']").each(function(i) {
                           this.checked = false;
                            });
                        $(".optionvals").html(json.optionhtml);
						// $('#testpihu').val("0");
						
                        
						
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
									$('.selectrank').text("Weak Answer").addClass("redbg").removeClass("bluebg greenbg darkbluebg");
								}
								else if(json.srank=='2'){
									$('.selectrank').text("Okay Answer").addclass("bluebg").removeClass("redbg greenbg darkbluebg");
								}
								else if(json.srank=='3'){
									$('.selectrank').text("Good Answer").addclass("darkbluebg").removeClass("redbg bluebg greenbg");
								}
								else if(json.srank=='4'){
									$('.selectrank').text("Great Answer").addclass("greenbg").removeClass("redbg bluebg darkbluebg");
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




							// var player_setup_id=json.player_setup_id;
							// // alert(sid);
							// window.location.href="<?=base_url()?>/Play_single_player/result/"+player_setup_id;
			
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
					
					 $.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{why:why},
				url:"<?=base_url()?>/Play_single_player/justy_Data",
				success:function(data){
					current_resultid=data.ste;
					// alert(current_resultid);

				}})



					$('.justis').on('input',function(){
						$( "textarea" ).each(function() {
							what=this.value;
							
							//
				if(this.value){
					
					$("#rvlopt").prop('disabled', false);
				}
				else{
					$("#rvlopt").prop('disabled', true);
				}
			           })
					  
					})
			// 		if(testpihu=="0"){
			// 		$('#rvlopt').on('click',function(){
			// 	console.log(what);
				
			// }
			
			// 	)
			// 	$('#testpihu').val("1");
			// 		}
					
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
						console.log(what)
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
				// 	alert(what);
				// 			$.ajax({
				// method:"post",
				// async:false,
				// dataType:"json",
				// data:{what:what},
				// url:"<?=base_url()?>/Play_single_player/justification_Data",
				// success:function(data){
				// 	// alert(data.ste);

				// }})
				}
				else{
					$("#rvlopt").prop('disabled', true);
					$('.otinput').on('click',function(){
					 why=$(this).val();
					 		 $.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{why:why},
				url:"<?=base_url()?>/Play_single_player/justy_Data",
				success:function(data){
					current_resultid=data.ste;
					// alert(current_resultid);

				}})
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
							 $.ajax({
				method:"post",
				async:false,
				dataType:"json",
				data:{what:what},
				url:"<?=base_url()?>/Play_single_player/justification_Data",
				success:function(data){
					// alert(data.ste);

				}})
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
							$(".exit-preview").html("");
				}
         }
            
             
		}
	})



// end
</script>	

<script  type="text/javascript">
            function exit(setup_id_val)
    {
      var setup_id_val =$("#setup_id_val").val();
    //   alert(id);die();



      $.ajax({
      			method:"POST",
      			dataType:"json",
      			async:false,
      			data:{setup_id_val:setup_id_val},
      			url:"<?=base_url()?>/Play_single_player/delete",
      			success:function(json){
      				if(json.success){
      					// alert("hellooo");
                var set_up_id=json.set_up_id;
				// alert(spid);
               //  var crisis_scenario_id=json.crisis_scenario_id;
                window.location.href="<?=base_url()?>/Single_player_setup/publishdata/"+set_up_id;
      				}
      			}
      		})










      // window.location.replace("<?=base_url();?>/Set_up_scenario/set_up");
    }

      </script>
	 
</body>
</html>

<script>
$(document).ready(function(){
//   $("button").click(function(){
//     $(".btn").addClass("btn-grey");
//   });
//   $("#submit_id").click(function(){
//     $("button").removeClass("btn-grey");
//   });

$("#rvlopt1").click(function(){
    $("#rvlopt1").addClass("btn-grey");
  });
  $("#rvlopt1").click(function(){
    $("#rvlopt1").removeClass("btn-grey");
  });
  
  
 
    // $(".btn2").hide();
	// $('.optinput').click(function(){
	// 		$(this).parents('.opt_v').find('.btn2').show();
	
	// });

	$(".btn2").hide();
	$("input[type='radio']").change(function() {
		$("input[type='radio']").parents('.opt_v').find('.btn2').hide();
			$(this).parents('.opt_v').find('.btn2').show();
    });

	$('.justifica').click(function(){
		alert();
	});
	
});
</script>
<script>
$(document).ready(function(){
  $(".optinput").click(function(){
    $("button").removeClass("btn-grey");
  });
});
</script>


<script>
	$(document).ready(function(){
		$('.revels-left .respon').live('click',function(){
		alert('hello');
	})
	});
</script>










