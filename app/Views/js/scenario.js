
        $('#vote-btn').click(function(){
            $('.first-display').toggleClass('d-none');
            $('.second-display').toggleClass('d-none');
        });
      

        
	
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
  

// setInterval(function(){ 
//    alert(); 
// }, 1000);


