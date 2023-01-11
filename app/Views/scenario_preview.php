<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>preview</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

	<style type="text/css">

	body{
		margin: 0px;
	}
	.chart-container {
    width: 400px;
    height:600px
}
		.header{
			background: rgb(52, 64, 210);
			display: flex;
			justify-content: space-between;
			padding: 0px 20px;
		}
		.center p{
			color: #fff;
		}
		.exit-preview a{
			color: #fff;
			text-decoration: none;
		}
		.exit-preview a i{
			margin-left: 10px;
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
		}
		.case-file a{
			text-decoration: none;
			color: rgb(0, 89, 165);
		}
		.span01{
			font-size: 24px;
    margin-left: 12px !important;
    font-weight: bold;
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
position: relative;
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
		.opt_v{
			margin:1.5rem;
			padding:1rem;
			border:1px solid black;
			border-radius:4px;
		}
		.chart_canvas{
			background-color: black;
			border-radius:5px;
			padding:1rem;
		}
		.revels-left{
			display: none;
			/*background-color: red;*/
		}
		.exit-preview {
    padding: 20px 0;
}


/**************Added by ak*******************/
.customfixbody {
    background-color: #fff;
    border: 2px solid red;
    display: block;
    float: left;
    width: 100%;
    height: 89.7vh;
}
.sidebarmainbx {
	width: 20%;
	float:left
}

.sidebarmainbx-right {
    width: 80%;
	float:left
}

h3.title-lead {
    margin: 0;
    text-transform: capitalize;
    font-size: 20px;
    margin: 0 0 5px;

}
.d-flex-citop {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 6px;
	background: #f7f7f7;
    padding: 0 8px;
}
.d-flex-citop img {
    width: 30px;
    height: 30px;
    border-radius: 100px;
    overflow: hidden;
    display: block;
    border: 1px solid #ddd;
}
.d-flex-citop p {
    width: 82%;
    word-break: break-word;
    font-size: 12px;
}
.sidebarinner {
    background: white;
    display: block;
    margin: 0;
    padding: 10px 10px;
    border-bottom: 1px solid #ebebeb;
    cursor: pointer;
}

p.small-lead {
    margin: 0 0 2px;
    font-size: 12px;
    font-family: sans-serif;
    color: gray;
    text-transform: uppercase;
    font-weight: 700;
}

.common-injectimg {
    width: 100%;
    height: 80vh;
    position: relative;
}
.common-injectimg img {
    position: absolute;
    left: 50%;
    top: 56%;
    transform: translate(-50%, -50%);
    width: 80%;
    height: 600px;
}
	</style>
</head>
<body>
	<header class="header">
		<div class="left">
			
		</div>
		<div class="center">
			<p>Preview Exercise for <?=$scenario_title?></p>
		</div>
		<div class="right">
			<div class="exit-preview">
				<a href="#" onclick="goBack()">Exit Preview<i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>
	<header class="header2">
		<div class="left2">
			<p>INJECT<span class="span01" id="injectno_v">01</span></p>
		</div>
		<div class="right2">
			<div class="case-file"  onclick="loading(11)"><?php $countinject=0; foreach ($injectstest as $key) { $countinject=$countinject+1;}?>
				<a href="#"><p><i class="fa fa-folder-open" aria-hidden="true" style="margin-right: 10px;"></i>Case File<span class="span"><?=$countinject?></span></p></a>
			</div>
			<div class="revel-option">
				<button class="btn" id="rvlopt">Reveal Options</button>
			</div>
		</div>
	</header>
	<div class="container" style="padding: 0px 2rem;">
	    <input type="hidden" name="nonextinject" id="nonextinject" value="0"/>
		<input type="hidden" name="falgval" id="flagval" value="0"/>
		<input type="hidden" name="testvals" id="testvals" value="0"/>
		<input type="hidden" name="responvals" id="responvals" value="0"/>
		<!-- <input type="hidden" name="justvals" id="justvals" value="0"/> -->
		<div class="ouestion-section" >
			<div class="question-left">
				<div class="ques" >
					<p id="injectdate"><?php echo strtoupper(date("H:i__j F Y",$injectscreated->timecreated));?></p>
					<h2 id="injectnam"><?php if($injectscreated)echo $injectscreated->title;?></h2>
					<input type="hidden" id="inject_val" value="<?=$inject_id?>">
					<input type="hidden" id="scenario_val" value="<?=$scenario_id?>">
					<input type="hidden" id="order_no" value="<?=$order_no?>">
					

					
				</div>
				
				<div class="user">
					<div class="user-image" style="margin-top:15px;">
						<img src="Avatar+6.png" style="     margin-right: 0.5rem;   width: 2.5rem;">
					</div>
					<div class="role" style="margin-top: 15px;  padding-left: 0.5rem;   border-left: 1px solid rgb(228, 233, 240);">
						<p style="margin:0px">ROLE:</p>
						<p style="margin:0px" id="roleval"><?php if($injectscreated)echo $injectscreated->jtitle;?></p>
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
				<p>choose your response</p>
				<?php $itr=1; foreach($injectoptions as $ijop){?>
				<div class="opt_v">
					<p>option<?=$itr?><p>
					<input type="radio" class="optinput" name="optinput" value="<?=$ijop['id']?>"><span><?=$ijop['option_title']?></span>
					<p><?=$ijop['option_description']?><p>	
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
							<?php foreach ($injectstest as $key) { 
								$filearray=explode(",",$key["file"]);
								$count=1;
								foreach ($filearray as $fie){
								$namefile=$key['order_id']."".$count;
								?>
							<div class="head<?=$namefile?>" style="display:none">
							<?php $extention=pathinfo($fie, PATHINFO_EXTENSION);
							$exten_name="";
							if ($extention=="jpg" or $extention=="png" or $extention=="webp"){
								$exten_name="IMAGE";
							}
							elseif($extention=="mp4" or $extention=="m4a"){
								$exten_name="VIDEO";
							}
							elseif($extention=="pdf"){
								$exten_name="PDF";
							}
							elseif($extention=="wav" or $extention=="mp3"){
								$exten_name="AUDIO";
							}
							else{
								$exten_name="UNKNOWN";
							}
							?>
							<p style="color: #fff; margin: 0px; padding:0 7px 5px;" ><?php echo $exten_name;?></p>
							<p style="color: #fff; margin: 0px; padding:0 7px; font-size: 12px;"><?php echo pathinfo($fie, PATHINFO_FILENAME);?></p>
							</div>
							<?php $count=$count+1;}}?>
						</div>
						<div class="close-btn" style="padding-right: 20px;">
							<div class="exit-preview">
								<a href="#">Close<i class="fa fa-times" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>




			<div class="fix-body customfixbody">
				<div class="sidebarmainbx">
					<?php foreach ($injectstest as $key) { ?>
						<div class="sidebarinner"  >
							<p class="small-lead">Inject <?php echo $key["order_id"];?></p>
							<h3 class="title-lead"><?php echo $key["title"];?></h3>
							<?php $filearray=explode(",",$key["file"]);
							$count=1;
							foreach ($filearray as $fie){
								$namefile=$key['order_id']."".$count;
								$file=pathinfo($fie, PATHINFO_FILENAME);?>
								<div class="d-flex-citop" onclick="showimg(<?=$namefile;?>)">
									<img src="https://pixsector.com/cache/517d8be6/av5c8336583e291842624.png" alt="">
									<p class="file-name"><?php print_r(pathinfo($fie, PATHINFO_FILENAME));?></p>
								</div>
								<?php $count=$count+1;}?>
						</div>
					<?php }?>
				</div>

				<div class="sidebarmainbx-right">
					<?php foreach ($injectstest as $key) { 
						 $filearray=explode(",",$key["file"]);
						 $count=1;
						 foreach ($filearray as $fie){
							 $namefile=$key['order_id']."".$count;
							 $extention=pathinfo($fie, PATHINFO_EXTENSION);
						?>
						<div style="display:none" class="common-injectimg" id="injectimg<?=$namefile;?>">
						<?php 
						if($extention=="mp4" or $extention=="m4a"){
								?><video width="1000" height="500" controls>
								<source src="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>" type="video/mp4">
								<source src="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>" type="video/ogg">
								Your browser does not support the video tag.
							  </video><?php
							}
							elseif($extention=="pdf"){
								?><iframe style="" src="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>" width="1000" height="500">
									</iframe>
								<!-- <a href="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>">View PDF Here!</a> -->
								<?php
							}
							elseif($extention=="wav" or $extention=="mp3"){
								?><audio width="1000" height="240" controls>
								<source src="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>" type="audio/ogg">
								<source src="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>" type="audio/mpeg">
								Your browser does not support the audio tag.
							  </audio><?php
							}
							else{
							?><img src="https://yatharthritiitschool.com/immersive/writable/uploads/<?=$fie?>" alt="<?=$fie?>"><?php
							}?>
							
						</div>	
					<?php  $count=$count+1;} }?>
				</div>	





			</div>
		</div>



















	</div>
	<input type="hidden" name="onetimeload" id="onetimeload" value="0"/>
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
				url:"<?=base_url()?>/Scenario_preview/previewData",
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






<script>

$( document ).ready(function() {
    $('.case-file').click(function() {
		setInterval(function() {
    		$('.span').css("display", "none");
		}, 1000);
	});
	$('.justis').click(function(){
		alert();
	});




});


// var timer;
// new function(){
//   timer = setTimeout(function(){
// 	removeNotification($notification);
//   }, 1000);
// }
// $(".span").hover(function (){
//   clearTimeout(timer);
// });
</script>
</body>
</html>