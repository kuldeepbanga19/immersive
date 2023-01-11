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
      }
      .right{display: flex; justify-content: center;}
         .user{background: red; height: 30px; width: 30px; border-radius: 50%; padding: 8px; color: #fff;}
         .fa-caret-down{color: #fff;}
        .criss-sim{

     font-size: 1.5rem; 
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;

        }
        .header-text{
             background: rgb(255, 255, 255);
    border-bottom: 1px solid rgb(228, 233, 240);
    padding: 0px 2rem;
        }
        .outer{
         background: rgb(235, 236, 251);
         border-radius: 50%;
         height: 70px;
         line-height: 70px;
         color: #fff;
         width: 70px;
         margin: 1rem auto;
        }
        .plus i{
         background: rgb(52, 64, 210);
         border-radius: 50%;
         height: 50px;
         line-height: 50px;
         color: #fff;

         width: 50px;
        }
        .button{
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
    margin: 1.5rem auto 0px;
        }
        .card-body{
         box-shadow: rgb(0 0 0 / 10%) 0px 4px 6px -1px, rgb(0 0 0 / 6%) 0px 2px 4px -1px;
        }
        .card{
         border: none;
        }
        button span a{
         text-decoration: none;
         color: rgb(97, 110, 123);
        }
      </style>
   </head>
   <body>
    
      <div class="header-text">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="">
                     <div class="col-md-6 p-3">
                        <h3 class="criss-sim">Crisis Sim</h3>
                     <p style="height:7.5rem;">Our Cyber Crisis Simulator provides real world cyber crisis scenarios so that you can identify where your organization’s strengths are – and where it must improve.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row py-3">
            <div class="col-md-12 text-center">
               <h5><b>Please select your mode</b></h5>
            </div>
         </div>
         <div class="row py-3">
           
            
            <div class="col-md-3">
               <div class="card">                    
                  <div class="card-body">
                     <div class="icon">
                        <div class="plus text-center">
                           <div class="outer">
                              <i class="fa fa-play" aria-hidden="true"></i>
                           </div>
                        </div>
                     </div>
                     <div class="heading text-center">
                        <h5><b>Play</b></h5>
                        <p style="height:7.5rem;">Take part in and complete exercises you've been assigned.</p>
                        <button class="button"><span><a href="<?=base_url();?>/Play_main/play_main">Select</a></span></button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- <div class="col-md-3">
               <div class="card">                    
                  <div class="card-body">
                     <div class="icon">
                        <div class="plus text-center">
                           <div class="outer">
                              <i class="fa fa-user-plus" aria-hidden="true"></i>
                           </div>
                        </div>
                     </div>
                     <div class="heading text-center">
                        <h5><b>Manage</b></h5>
                        <p style="height:7.5rem;">Here you can view and edit all existing single player and presentation exercises.</p>
                        <button class="button"><span><a href="<?=base_url();?>/Manage/manage">Select</a></span></button>
                     </div>
                  </div>
               </div>
            </div> -->
            <div class="col-md-3 mt-3">
               <div class="card">                    
                  <div class="card-body">
                     <div class="icon">
                        <div class="plus text-center">
                           <div class="outer">
                              <i class="fa fa-user-plus" aria-hidden="true"></i>
                           </div>
                        </div>
                     </div>
                     <div class="heading text-center">
                        <h5><b>Results</b></h5>
                        <p style="height:7.5rem;">Here you’ll find all the results for the exercises you’ve taken part in or facilitated. How well did you weather the storm?</p>
                        <button class="button"><span><a href="<?=base_url();?>/Result_main/result_main">Select</a></span></button>
                     </div>
                  </div>
               </div>
            </div> 
         </div>
      </div>
   </body>
</html>