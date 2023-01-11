<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      <title>Immersive Login</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" integrity="sha384-z4tVnCr80ZcL0iufVdGQSUzNvJsKjEtqYZjiQrrYKlpGow+btDHDfQWkFjoaz/Zr" crossorigin="anonymous">
      <style type="text/css">
         .body{
         background: rgb(27, 30, 74);
         }
         .heading{
         font-size: 1.5rem;
         color: rgb(255, 255, 255);
         font-weight: 700;
         line-height: 1.2;
         }
         .paragraph{
         font-size: 1rem;
         color: rgba(255, 255, 255, 0.7);
         font-weight: 500;
         line-height: 1.5;
         }
         .form-background{height: 100vh !important;
      /*   display: flex;
         align-items: center;
*/ 
        position: relative;
  }
         .content{
         padding: 15px;
         /*flex: 1;*/
             position: absolute;
    /* width: 100%; */
    transform: translateY(50%);
    width: 95%;
         }
         footer{
                position: absolute;
    bottom: 0;
    text-align: center;
    margin: auto;
    transform: translate(50px);
         }
         .sign-up{
            outline: none;
    cursor: pointer;
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
         .ragister p a{text-decoration: none;}
         .footer-nav ul{list-style: none;}
         .footer-nav ul li a{text-decoration: none;}
         .footer-nav ul li{display: inline-block;}
         .footer-nav ul li a{
                font-size: 0.875rem;
    color: rgb(0, 89, 165);
    font-weight: 500;
    line-height: 1.5;
         }
         .copywrite{
            font-size: 0.875rem;
    color: rgb(33, 37, 26);
    font-weight: 500;
    line-height: 1.5;
         }
         .demo-popup{
            display: flex;
    align-items: flex-start;
    -webkit-box-pack: justify;
    justify-content: space-between;
    margin: 1.5rem 65px 1.5rem 0;
    padding: 2rem 1.5rem;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 4px;
         }
         .request-demo{
                outline: none;
    cursor: pointer;
    display: inline-flex;
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
    text-decoration: none;
    padding: 0.5rem 1rem;
    background: linear-gradient(360deg, rgb(249, 250, 251) 0%, rgb(255, 255, 255) 100%);
    color: rgb(97, 110, 123);
    border: none;
    box-shadow: rgb(207 213 222) 0px 0px 0px 1px;
         }

		 .next_align {
    text-align: left !important;
}
      </style>
   </head>
   <body class="body">
      <div class="container">
         <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
               <h1 class="heading">Resilience you can prove.<br>
                  Readiness you can measure.<br>
                  Confidence you can trust.
               </h1>
               <p class="paragraph"><i class="fa fa-check-circle" aria-hidden="true"></i>
                  Benchmark cyber workforce capability against other organizations
               </p>
               <p class="paragraph"><i class="fa fa-check-circle" aria-hidden="true"></i>Evidence capability using common industry frameworks</p>
               <p class="paragraph"><i class="fa fa-check-circle" aria-hidden="true"></i>Develop confidence and speed of incident response</p>
               <p class="paragraph"><i class="fa fa-check-circle" aria-hidden="true"></i>Reduce the risk of vulnerabilities appearing in production</p>
               <p class="paragraph"><i class="fa fa-check-circle" aria-hidden="true"></i>Secure in-house designs and security architecture</p>
               <div class="demo-popup">
                   <p class="text-white">Not a customer? Get a demo to explore our platform.</p>
                   <a href="#" class="request-demo">Request a demo</a>
               </div>
            </div>
            <div class="col-md-5 bg-white form-background">
               <div class="content">
			   <form action="<?= base_url('/otp_otp')?>" method="get">
                <div class="back-icon">
						<a href="<?= base_url('/login')?>"></a>
					</div>
					<p class="text-black" style="margin-bottom: 15px; font-size: 20px;">Forgot Password?</p>
					<span style="color:#000; opacity:.8; margin-bottom: 15px;">Please enter your email address below</span><br><br>
					
					
					<div class="form-group mb-3">
                     <label><b>Email Address</b></label>
					 <input type="email" name="email" placeholder="Email Address" required  pattern="[a-z0-9].+@[a-z]+\.[a-z]{2,3}" title="Invalid email address" class="form-control">
				
                  </div>
				  
					<!-- <div class="login-btn" style="margin: 15px 0px;">
					<input  type="submit" value="Next" class="next"> -->
						<!-- <a href="#"><b>Next</b></a> -->
					<!-- </div> -->


					<div class="d-block text-end">
					<button type="submit" value="Next" class="btn btn-success sign-up next">Next</button>
                     <button type="submit" class="btn btn-success sign-up"><a href="<?= base_url('/login')?>" style="color:#fff">Back to login</a></button>
                  </div>
					
					
				</form>
               </div>
               <footer class="text-center">
                    <div>
                      <p class="copywrite">Copyright 2022 Immersive Labs | All Rights Reserved</p>
                      <div class="footer-nav">
                          <ul>
                              <li class="mx-2"><a href="#">Privacy Notice</a></li>
                              <li class="mx-2"><a href="#">Terms of Use</a></li>
                              <li class="mx-2"><a href="#">Accessibility Statement</a></li><br>
                              <li class="mx-2"><a href="#">Cookie Policy</a></li>
                              <li class="mx-2"><a href="#">Cookie Settings</a></li>
                              <li class="mx-2"><a href="#">About</a></li>
                          </ul>
                      </div>
                    </div>
               </footer>
            </div>
         </div>
      </div>
   </body>
</html>