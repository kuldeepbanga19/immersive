<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Immersivelabs</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg">

      <style type="text/css">
      body{
         background: rgb(249, 249, 250);
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
         background: rgb(235, 236, 251);
         border-radius: 50%;
         height: 50px;
         line-height: 50px;
         color: #fff;
         width: 50px;
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
        }
        .flx{display: flex; align-items: center;}
        .icon{margin-right: 1.5rem;}
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
      <nav class="navbar navbar-expand-sm" style="background: rgb(27, 30, 74);">
         <div class="container-fluid">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link text-white">Crisis Sim</a>
               </li>
            
            </ul>
            <div class="right col-md-3">
               <div class="exit me-4">
               <a href="#"  onclick="exit()"><p class="text-white mb-0">Exit<i class="fa fa-times ms-2" aria-hidden="true"></i></p></a>
               </div>
            </div>


            
         </div>
      </nav>
      <script  type="text/javascript">
            function exit(id)
    {
      var id =$("#id").val();
      window.location.replace("<?=base_url();?>/Crisis_Sim/crisis");
    }

      </script>
   </body>
</html>