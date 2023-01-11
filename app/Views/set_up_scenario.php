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
      ::marker{
         color: rgb(52, 64, 210);
      }
      .ul{
         background-color: rgb(230, 238, 246);
    border-radius: 1rem;
    color: rgb(97, 110, 123);
    font-weight: bold;
    min-height: 12.5rem;
    padding: 1.5rem 1rem 1.5rem 2rem;
    text-align: left;
    width: 100%;
    margin-top: 1.5rem;
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
        .header-text{
             background: rgb(255, 255, 255);
    border-bottom: 1px solid rgb(228, 233, 240);
    padding: 0px 2rem;
        }
        .outer{
        border-radius: 50%;
    height: 5rem;
    width: 5rem;
    background-color: rgb(235, 236, 251);
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    margin: 1rem auto;
        }
        .plus i{
         background: rgb(52, 64, 210);
         border-radius: 50%;
         height: 30px;
         line-height: 30px;
         color: #fff;

         width: 30px;
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
         height: 100%;
        }
        .flx{display: flex; align-items: center;}
        /*.icon{margin-right: 1.5rem;}*/
        .flx-parent{display: flex; justify-content: space-between; align-items: center;}
        .buttonn{
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
    
    border: 1.5px solid rgb(36, 45, 147);
        }
        table{
         background: #fff;
        }

      </style>
   </head>
   <body>
     
     
      <div class="container">
         <div class="row py-3">
            <div class="col-md-12 text-center">
               <h5><b>Select exercise type</b></h5>
            </div>
         </div>
        <div class="row">
           <div class="col-md-4">
              <div class="card">                    
                  <div class="card-body">
                     <div class="icon">
                        <div class="plus text-center">
                           <div class="outer">
                              <svg width="66" height="66" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24.023 10.177a7 7 0 00-6.062 3.5L8.836 29.48a7 7 0 000 7l9.125 15.804a7 7 0 006.062 3.5h18.25a7 7 0 006.061-3.5l9.125-15.804a7 7 0 000-7l-9.125-15.805a7 7 0 00-6.062-3.5h-18.25z" fill="#3440D2" stroke="#858CE4" stroke-width="4"></path><circle cx="33.417" cy="32.417" r="6.25" fill="#fff"></circle></svg>
                           </div>
                        </div>
                     </div>
                     <div class="heading text-center">
                        <h5><b>Single Player</b></h5>
                        <p style="height:5.625rem;">This isn't your average tabletop exercise. Participants complete a crisis scenario in their own time and make individual choices. How well-equipped are your employees when left to their own devices?</p>
                        <ul class="text-start ul">
                           <li><a href="#" class="text-dark text-decoration-none">Tests a single user’s end-to-end crisis response</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Understand how different team members approach situations</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Provides scenario completion metrics</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Analyse individual users’ choices and justifications</a></li>
                        </ul>
                        <button class="button"><span><a href="<?=base_url();?>/Single_player_setup/single_player">Select</a></span></button>
                     </div>
                  </div>
               </div>
           </div>
           <div class="col-md-4">
              <div class="card">                    
                  <div class="card-body">
                     <div class="icon">
                        <div class="plus text-center">
                           <div class="outer">
                              <svg width="80" height="80" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.936 17.641a2 2 0 011.732-1h24.664a2 2 0 011.732 1L66.395 39a2 2 0 010 2L54.064 62.359a2 2 0 01-1.732 1H27.668a2 2 0 01-1.732-1l-12.331-21.36a2 2 0 010-1.999l12.331-21.359z" fill="#3440D2" stroke="#858CE4" stroke-width="4"></path><circle cx="40.263" cy="39.45" r="6.914" fill="#fff"></circle><circle cx="47.583" cy="54.904" r="3.66" fill="#fff"></circle><circle cx="49.21" cy="25.622" r="3.66" fill="#fff"></circle><circle cx="32.129" cy="25.622" r="3.66" fill="#fff"></circle><circle cx="23.995" cy="40.263" r="3.66" fill="#fff"></circle><circle cx="32.942" cy="54.904" r="3.66" fill="#fff"></circle><circle cx="56.531" cy="40.263" r="3.66" fill="#fff"></circle></svg>
                           </div>
                        </div>
                     </div>
                     <div class="heading text-center">
                        <h5><b>Drill</b></h5>
                        <p style="height:5.625rem;">A drill assigns individuals specific roles to understand their responses during a crisis. How will your team react when one person's decision impacts the next?</p>
                        <ul class="text-start ul">
                           <li><a href="#" class="text-dark text-decoration-none">Participants are assigned specific roles</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Scenario unfolds as individuals respond to set tasks</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Ideal for testing communication and response times</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Highlights skill gaps and improves cohesion</a></li>
                        </ul>
                        <button class="button"><span><a href="<?=base_url();?>/Drill_player_setup/drill_player">Select</a></span></button>
                     </div>
                  </div>
               </div>  
           </div>
           <div class="col-md-4">
              <div class="card">                    
                  <div class="card-body">
                     <div class="icon">
                        <div class="plus text-center">
                           <div class="outer">
                              <svg width="63" height="46" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="55.404" height="30.915" rx="2" fill="#fff" stroke="#858CE4" stroke-width="4"></rect><path d="M30.152 9.992c-4.289 0-7.763 3.547-7.763 7.924 0 4.378 3.474 7.925 7.763 7.925 4.288 0 7.763-3.547 7.763-7.925 0-4.377-3.475-7.924-7.763-7.924zm3.621 8.691l-5.509 3.228c-.494.28-1.117-.08-1.117-.671v-6.647c0-.588.62-.952 1.117-.67l5.51 3.418c.513.294.513 1.051 0 1.342z" fill="#3440D2"></path><ellipse rx="13.335" ry="13.473" transform="matrix(1 0 .01786 .99984 49.121 32.498)" fill="#3440D2"></ellipse></svg>
                           </div>
                        </div>
                     </div>
                     <div class="heading text-center">
                        <h5><b>Presentation</b></h5>
                        <p style="height:5.625rem;">Ask the audience! Present a facilitated exercise using video conferencing tools, where participants vote for the next course of action in a crisis.</p>
                        <ul class="text-start ul">
                           <li><a href="#" class="text-dark text-decoration-none">Anyone can be invited to participate</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Ideal for large groups</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Players vote via our companion web app</a></li>
                           <li><a href="#" class="text-dark text-decoration-none">Facilitator controls the group's direction through the narrative</a></li>
                        </ul>
                        <button class="button"><span><a href="<?=base_url();?>/Presentation_player_setup/presentation_player">Select</a></span></button>
                     </div>
                  </div>
               </div>
           </div>
        </div>
      </div>
     
   </body>
</html>