<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   * {
   padding: 0;
   margin: 0;
   }
   section.blue-bg {
   padding: 0;
   }
   .inner-blue {
   width: 50%;
   padding: 42px 25px;
   background: #1B1E4A;
   color: white;
   }
   .gray-bx {
   width: 50%;
   padding: 25px;
   background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
   text-align: center;
   }
   .breadcume ul {
   margin-bottom: 20px;
   }
   .breadcume ul li {
   display: inline;
   padding: 0 20px 0 0;
   font-size: 10px;
   position: relative;
   }
   .breadcume ul li:after {
   content: "\f105";
   font-family: 'FontAwesome';
   position: absolute;
   right: 6px;
   top: 0;
   }
   .breadcume ul li a {
   color: white;
   text-decoration: none;
   }
   .s-cont {
   font-size: 14px;
   line-height: normal;
   }
   .coustom-row {
   display: flex;
   }
   .row-sa {
   display: flex;
   gap: 10px;
   margin-top: 10px;
   }
   .row-sa button {
   padding: 6px 15px;
   border: none;
   border-radius: 4px;
   background: white;
   }
   .row-sa button:nth-child(1) {
   background: #4a62ff;
   color: white;
   }
   .editor-bx {
   margin: 30px 0 0;
   }
   h4.sub-head {
   font-size: 20px;
   margin-bottom: 10px;
   }
   .mb-2 {
   margin-bottom: 20px;
   }
   .inner-padding {
   padding: 0 50px 0 150px;
   }

   .card-costom {
   background: #f7f7f7;
   padding: 15px;
   text-align: left;
   border-radius: 4px;
   border-left: 4px solid #4a62ff;
   width: 100%;
   box-shadow: 0 0 12px #80808052;
   }
   .right-area {
   display: flex;
   gap: 12px;
   }
   .title {
   font-size: 18px;
   font-weight: 600;
   }
   .Cat {
   padding: 3px 10px;
   background: #dbdbdb;
   border-radius: 50px;
   font-size: 14px;
   text-align: center;
   width: fit-content;
   }
   .designa {
   margin: 0 0 6px;
   font-size: 14px;
   }
   .right-area img {
   width: 65px;
   HEIGHT: 65PX;
   }
   .row-u {
   display: flex;
   gap: 20px;
   justify-content: space-between;
   margin-bottom: 20px;
   }
   .mt-3s {
   margin-top: 10px;
   }
   .left-area {
   text-align: right;
   }
   .left-area i {
   font-size: 22px;
   color: #444;
   }
   .left-area p {
   font-size: 12px;
   color: #444;
   }
   p.puple-text {
   color: #4a62ff;
   font-size: 16px;
   font-weight: 600;
   }
   .curee-bx {
   display: flex;
   gap: 20px;
   text-align: left;
   margin: 0 0 18px;
   font-size: 18px;
   font-weight: bold;
   }
   .curee-bx i {
   background: #1b1e4a;
   width: 25px;
   text-align: center;
   height: 25px;
   line-height: 1.7;
   border-radius: 50px;
   font-size: 15px;
   color: #4dd0e1;
   }
   .pad-right-bx {
    padding: 0 80px;
}
img.gray-aimg {
    margin: 0 0 20px;
}

/* card info css */
#card-info {
    width: 50%;
    margin: auto;
    margin-top: 160px;
}

#card-info .card-detail:after {
    content: "";
    width: 250px;
    height: 4px;
    background: #dddd;
    position: absolute;
    top: 50%;
    left: -250px;
    transform: translateY(-50%);
}

#card-info .card-detail.green:after{
   background: #27A57F;
}
.count.green {
    background: #27A57F;
    top: 162px;
}

.card-costom.green {
    border-left: 4px solid #27A57F;
}
#card-info .card-detail:before {
   content: "";
    width: 4px;
    height: 265px;
    background: #dddd;
    position: absolute;
    top: -85px;
    left: -253px;
}

#card-info .card-detail.green::before {
   content: "";
    width: 4px;
    height: 420px;
    background: #dddd;
    position: absolute;
    top: -65px;
    left: -253px;
}
.circle {
   width: 40px;
    height: 40px;
    background: #494B6E;
    border-radius: 50%;
    position: absolute;
    top: -93px;
    left: -272px;
}

.circle span {
    width: 100%;
    display: inline-block;
    text-align: center;
    line-height: 40px;
    font-size: 23px;
    color: #fff;
}

.count{
   width: 45px;
    height: 25px;
    background: #4A62FF;
    border-radius: 14px;
    position: absolute;
    top: 95px;
    left: -273px;
    z-index: 11;
}
.count span{
   width: 40px;
    font-size: 14px;
    color: #fff;
    text-align: center;
    width: 100%;
    display: inline-block;
    line-height: 25px;
}
.card-detail {
    margin-bottom: 30px;
    position: relative;
}

.third-card {
    width: 97%;
    display: inline-block;
    padding: 20px 0;
}

.third-card h2 {
    font-size: 1.4rem;
}

.response-info {
   width: 100%;
    display: flex;
    padding: 10px;
    border-radius: 5px;
    margin-top: 10px;
    box-shadow: 0 -1px 6px #4a62ff;
}
.response-info .payment {
    padding-left: 10px;
}

.response-info input {

}

/* card info css end */

/* final text css */
#final-test {
   width: 100%;
   display: inline-block;
}


.final-detail{
   max-width: 85%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    background-color: rgb(255, 255, 255);
    border-radius: 4px;
    border: 1px solid rgb(207, 213, 222);
    box-shadow: rgb(0 0 0 / 10%) 0px 1px 3px, rgb(0 0 0 / 6%) 0px 1px 2px;
    padding: 1.5rem 3rem;
    margin: 1.5rem auto;
    align-items: center;
}

.first-div p {
    font-size: 1.2rem;
}

.first-div h3 {
    font-size: 1.3rem;
    font-weight: 700;
    line-height: 1.2;
}

.second-div p {
   font-size: 1.2rem;
}

.second-div h3 {
    position: relative;
}

.second-div h3:after {
    content: "";
    width: 20px;
    height: 4px;
    background: #616E7B;
    position: absolute;
    top: 10px;
    left: 0;
}

.circle-div {
    width: 20px;
    height: 20px;
    background: #616E7B;
    border-radius: 50%;
    margin: 0 auto;
}

.third-div p {
    font-size: 1.2rem;
}

/* final test css end */
</style>
<section id="final-test">
   <div class="container-fluid">
      <div class="final-detail">
         <div class="first-div">
            <p>Scenario</p>
            <h3><?=$rdata->scenrio_title?></h3>
         </div>
         <div class="second-div">
            <p>Start date</p>
            <h3></h3>
         </div>
         <div class="third-div">
            <div class="circle-div"></div>
            <p id="dril_status">Not Started</p>
         </div>
      </div>
   </div>
</section>
<section class="blue-bg">
   <div class="coustom-row">
      <div class="inner-blue">
         <div class="inner-padding">
            <div class="breadcume">
               <ul>
                  <li>Home</li>
                  <li>Our Workspace</li>
                  <li>Singnjoys</li>
                  <li><a href="">Dummy Tex Lorem Ipsome</a></li>
               </ul>
            </div>
            <p class="mb-0 s-cont">Excising</p>
            <h4 class="mb-0 lead">a book or other written or printed work, regarded in terms of its content rather
               than its physical form.
            </h4>
            <div class="row-sa">
               <button class="blue-bx-btn start_excs">Start</button>
               <button class="blue-bx-btn"><i class="fa fa-edit"></i> Edit</button>
            </div>
            <div class="editor-bx">
               <h4 class="sub-head">Overview</h4>
               <p class="cont mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus, quam ullam
                  eaque est modi esse consequuntur eveniet quas eligendi non temporibus, quia totam. Minima,
                  consectetur autem quidem sequi veniam quisquam facilis, alias quis eius ab maiores minus eveniet
                  magni quia tempora quod architecto veritatis voluptate, ratione harum iste laboriosam iusto?
               </p>
               <p class="cont">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, non corporis.
                  Praesentium sed assumenda illo reiciendis, eum molestiae fugit error voluptatibus veniam fugiat
                  provident eaque culpa ratione fuga optio est?
               </p>
            </div>
         </div>
      </div>
      <div class="gray-bx">
         <div class="pad-right-bx sd_cont" style="display: none" id="side_contain">
            <img src="dev.jpg" class="gray-aimg" width="200" alt="">
         
         
         <div class="curee-bx">
            <i class="fa fa-plus"></i> Current Tasks
         </div>
         <div class="card-costom">
            <div class="row-u">
               <div class="right-area">
                  <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Photos.png" width="54" alt="">
                  <div>
                     <div class="title"><?=$first_excercise->firstname?> <?=$first_excercise->lastname?></div>
                     <div class="designa"><?=$first_excercise->job_title?></div>
                     <div class="Cat"><?=$first_excercise->scenario_role_name?></div>
                  </div>
               </div>
               <div class="left-area">
                  <i class="fa fa-clock-o"></i>
                  <p>Elpersom Timer</p>
                  <p class="puple-text">Less Than a minute</p>
               </div>
            </div>
            <div class="second-card">
               <p><strong>Title</strong> <?=$first_excercise->injtitle?></p>
               <p><strong>Date</strong> <?php echo date("j F Y",$first_excercise->injdate);?></p>
               <p><strong>Time</strong> <?=$first_excercise->injtime?></p>
               <p class="cont mt-3s"> <?=$first_excercise->responsiblity?>
               </p>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
<section id="card-info" style="display:none" class="sd_cont">
   <div class="card-detail">
      <div class="card-costom">
         <div class="row-u">
            <div class="right-area">
               <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Photos.png" width="54" alt="">
               <div>
                  <div class="title"><?=$first_excercise->firstname?> <?=$first_excercise->lastname?></div>
                  <div class="designa"><?=$first_excercise->job_title?></div>
                  <div class="Cat"><?=$first_excercise->scenario_role_name?></div>
               </div>
            </div>
            <div class="left-area">
               <i class="fa fa-clock-o"></i>
               <p>Elpersom Timer</p>
               <p class="puple-text">Less Than a minute</p>
            </div>
         </div>
         <div class="second-card">
            <p><strong>Title</strong> <?=$first_excercise->injtitle?></p>
            <p><strong>Date</strong> <?php echo date("j F y",$first_excercise->injdate);?></p>
            <p><strong>Time</strong> <?=$first_excercise->injtime?></p>
            <p class="cont mt-3s"><?=$first_excercise->responsiblity?>
            </p>
         </div>
      </div>
      <div class="circle">
         <span>2</span>
      </div>
      <div class="count">
         <span>16×30</span>
      </div>
   </div>
<!--    <div class="card-detail green">
      <div class="card-costom green">
         <div class="row-u">
            <div class="right-area">
               <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Photos.png" width="54" alt="">
               <div>
                  <div class="title">John doe</div>
                  <div class="designa">Head of CMT</div>
                  <div class="Cat">Other</div>
               </div>
            </div>
            <div class="left-area">
               <i class="fa fa-clock-o"></i>
               <p>Elpersom Timer</p>
               <p class="puple-text">Less Than a minute</p>
            </div>
         </div>
         <div class="second-card">
            <p><strong>Title</strong> Payment System Issues</p>
            <p><strong>Date</strong> 2 July 2021</p>
            <p><strong>Time</strong> 12:27 PM</p>
            <p class="cont mt-3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum maiores
               perferendis, provident similique assumenda excepturi tenetur corporis sed doloremque, quaerat
               voluptatem, explicabo vitae unde offici?
            </p>
         </div>
         <div class="third-card">
            <h2>Response</h2>
            <div class="response-info">
               <input type="radio">
               <div class="payment">
                  <h3>Payment System Issues</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque animi iure quidem neque quas architecto.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="count green">
         <span>16×30</span>
      </div>
   </div>
   <div class="card-detail green">
      <div class="card-costom green">
         <div class="row-u">
            <div class="right-area">
               <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Photos.png" width="54" alt="">
               <div>
                  <div class="title">John doe</div>
                  <div class="designa">Head of CMT</div>
                  <div class="Cat">Other</div>
               </div>
            </div>
            <div class="left-area">
               <i class="fa fa-clock-o"></i>
               <p>Elpersom Timer</p>
               <p class="puple-text">Less Than a minute</p>
            </div>
         </div>
         <div class="second-card">
            <p><strong>Title</strong> Payment System Issues</p>
            <p><strong>Date</strong> 2 July 2021</p>
            <p><strong>Time</strong> 12:27 PM</p>
            <p class="cont mt-3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum maiores
               perferendis, provident similique assumenda excepturi tenetur corporis sed doloremque, quaerat
               voluptatem, explicabo vitae unde offici?
            </p>
         </div>
         <div class="third-card">
            <h2>Response</h2>
            <div class="response-info">
               <input type="radio">
               <div class="payment">
                  <h3>Payment System Issues</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque animi iure quidem neque quas architecto.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="count green">
         <span>16×30</span>
      </div>
   </div> -->
<!--    <div class="card-detail green">
      <div class="card-costom green">
         <div class="row-u">
            <div class="right-area">
               <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Photos.png" width="54" alt="">
               <div>
                  <div class="title">John doe</div>
                  <div class="designa">Head of CMT</div>
                  <div class="Cat">Other</div>
               </div>
            </div>
            <div class="left-area">
               <i class="fa fa-clock-o"></i>
               <p>Elpersom Timer</p>
               <p class="puple-text">Less Than a minute</p>
            </div>
         </div>
         <div class="second-card">
            <p><strong>Title</strong> Payment System Issues</p>
            <p><strong>Date</strong> 2 July 2021</p>
            <p><strong>Time</strong> 12:27 PM</p>
            <p class="cont mt-3s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum maiores
               perferendis, provident similique assumenda excepturi tenetur corporis sed doloremque, quaerat
               voluptatem, explicabo vitae unde offici?
            </p>
         </div>
         <div class="third-card">
            <h2>Response</h2>
            <div class="response-info">
               <input type="radio">
               <div class="payment">
                  <h3>Payment System Issues</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque animi iure quidem neque quas architecto.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="count green">
         <span>16×30</span>
      </div>
   </div> -->


</section>
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
        $(".start_excs").click(function(){
        $(".sd_cont").show();
        $(".circle-div").css("background-color", "green");
        $("#dril_status").text("Started");
    
   })
  })
  

</script>  
