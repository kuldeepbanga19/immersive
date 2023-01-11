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
            <div class="col-md-9">
               <div class="nav-heading d-flex justify-content-between">
                  <h6><b>Overview</b></h6>
                  <button type="submit" class="submit-btn">Export CSV</button>
               </div>
            </div>
           
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
               <div class="exercise">
                  <h6><b>Exercise Summary</b></h6>
               </div>
               <div class="form pt-3 pb-3 px-3">
                  <p><?=$exercise_name; ?> </p>
               </div>
               <div class="row mt-3">
                  <div class="col-md-6">
                      <h6><b>Your Score</b></h6>
                      <div class="form pt-3 px-3">
                        <div class="row align-items-center">
                           <div class="col-md-6">
                              <div class="box">
                                 <div class="chart" data-percent="73" data-scale-color="#ffb400" style="color: #000; font-size: 20px;">73%</div>    
                                </div>           
                              </div>
                           <div class="col-md-6">
                               <h6><b>Injects Answered</b></h6> 
                               <span><?=$injects_count ?></span>  
                           </div>
                        </div>
                     </div>
                  </div>
                   <div class="col-md-6">
                      <h6><b>Breakdown</b></h6>
                     <div class="breakdown-content d-flex justify-content-between mt-3" style="    border-bottom: 1px solid #3c2c2c3b;">
                        <div class="reles">
                           <h6><b>Roles</b></h6> 
                        </div>
                        <div class="reles">
                           <h6><b><?=$scenario_role ?></b></h6> 
                        </div>
                     </div>
                     <div class="breakdown-content d-flex justify-content-between mt-3" style="    border-bottom: 1px solid #3c2c2c3b;">
                        <div class="reles">
                           <h6><b>Completed Injects</b></h6> 
                        </div>
                        <div class="reles">
                           <h6><b><?=$injects_count ?></b></h6> 
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12 mb-4">
                     <h6><b>Confidence Score</b></h6>
                  </div>
                  <div class="charts">
                  <div id="GoogleLineChart" style="height: 400px; width: 100%"></div>

                  </div>
               </div>
               <div class="row mt-3">
                  <div class="col-md-12">
                     <h6><b>Performance Indicator</b></h6>
                  </div>
                  <?php if(isset($performance_indicators)){ 
                         $db=\Config\Database::connect();
                         $tablenm=$db->prefixTable("indicator_option");
                         
                        ?> 
                  <div class="col-md-12 mb-4">
                     
                  <select name="industry" id="cars"  class="w-100" onchange="drawLineChart()">
                   <?php foreach($performance_indicators as $pfm){
                              //   $optionid=$ivalue->id;
                                $prindicator=$pfm["id"];
                               
                             
                            ?>
                           <div>
                          
                            
                             <option id="graph_id"data-value="<?php echo $pfm["id"]; ?>" value="<?php echo $pfm["id"]; ?>"><?php echo $pfm["performance_title"]; ?>
                        </option>
                        
                           </div>
                           
                          <?php }?> 
                          </select>
                   
                  </div>
                  <?php }?>
                  <div class="charts">
                  <div id="GoogleLineChart1" style="height: 400px; width: 100%"></div>

                  </div>
               </div>
            </div>
         <!--    <div class="col-md-3">
               <div class="right-sidebar">
                  <div class="content-rigth">
                     <h6><b>Overview</b></h6>
                     <p>Write an overview of your scenario. Set the scene, considering what has happened, who is involved, and what the potential impact might be.</p>
                  </div>
               </div>
               <div class="right-sidebar">
                  <div class="content-rigth">
                     <h6><b>Scenario details</b></h6>
                     <p>Write an overview of your scenario. Set the scene, considering what has happened, who is involved, and what the potential impact might be.</p>
                  </div>
               </div>
            </div> -->
         </div>
      </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" integrity="sha512-DHNepbIus9t4e6YoMBSJLwl+nnm0tIwMBonsQQ+W9NKN6gVVVbomJs9Ii3mQ+HzGZiU5FyJLdnAz9a63ZgZvTQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
         var xyValues = [
  {x:50, y:7},
  {x:60, y:8},
  {x:70, y:8},
  {x:80, y:9},
  {x:90, y:9},
  {x:100, y:9},
  {x:110, y:10},
  {x:120, y:11},
  {x:130, y:14},
  {x:140, y:14},
  {x:150, y:15}
];

new Chart("myChart", {
  type: "scatter",
  data: {
    datasets: [{
      pointRadius: 4,
      pointBorderColor: "rgb(0,0,255)",
      data: xyValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      xAxes: [{ticks: {min: 40, max:160}}],
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});

var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart2", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawLineChart);
			
            // scatter Chart
			function drawLineChart() {
				var data = google.visualization.arrayToDataTable([
					['Day', 'Confidence'],
						<?php 
							foreach ($products as $row){
							   echo "['".$row['day']."',".$row['sell']."],";
						} ?>
				]);
				var options = {
					
					curveType: 'function',
					legend: {
						position: 'none'
					},
               intervals: { 'style':'none' },
               vAxis: { gridlines: { count: 6 }, 
               ticks: [{ v: 0, f: ''},{ v: 1, f: 'Lowest'},{ v: 2, f: ''},{ v: 3, f: ''},{ v: 3, f: ''},{ v: 4, f: ''}, {v: 5, f: 'highest'}],
            title:'Confidence'
            },
            hAxis: {
        textStyle: {
          fontSize : 10
        },
        title: 'Strength'
      },
               pointSize: 10,
               color: false,
               
				};
            
				var chart = new google.visualization.ScatterChart(document.getElementById('GoogleLineChart'));
				chart.draw(data, options);
			}
			
			
			
		</script>

      <script>
         var rre=<?=$graph_data?>;
         var val1=JSON.stringify(rre);
         var val2=JSON.parse(val1);
         // console.log(val2);
         var graph=$('#graph_id').val();
         // alert(graph);
         	google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawLineChart);
			
            // scatter Chart
			function drawLineChart() {
            newData = [['pvalue', 'injects']];
            // $graph_v
     
     graph_v1=val2;
     mycity = document.getElementById("cars").value;

            for(i=0; i<graph_v1.length; i++) {
    if(mycity == graph_v1[i].indicator) {
      
      newData.push(['',graph_v1[i].pvalue]);

    }// end if
    } // end for
    var data = google.visualization.arrayToDataTable(newData);
            var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'none' },
          pointSize: 10,
          hAxis: {
        textStyle: {
          fontSize : 10
        },
        title: 'Injects'
      },
        };
            
				var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChart1'));
				chart.draw(data, options);
			}
			
      </script>
   </body>
</html>