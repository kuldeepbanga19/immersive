<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php if(isset($head)){ echo $head; } ?> </title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>/css/jquery-ui.css">
	<link media="all" rel="stylesheet" href="<?=base_url();?>/css/main.css">
	<link media="all" rel="stylesheet" href="<?=base_url();?>/css/cst-main.css">
	<
		script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
	
	<script src="<?=base_url();?>/js/jquery.main.js" defer></script>
	<script src="<?=base_url();?>/js/calender-range.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" defer></script>

  <link rel="icon" type="image/x-icon" href="https://yatharthritiitschool.com/immersive/assets/img/Capture.svg">


</head>
<body class="nav-active">
  <!-- Preloader -->
<div id="preloader">
  <div id="status"></div>
  <p>Please Wait...</p>
</div>
<div id="overlayer"></div>
<span class="loader">
  <span class="loader-inner"></span>
</span>

<div class="main_header">
			<header id="header">
				<div class="container">
					<div class="left-content">
						<a href="javascript:void(0);" class="nav-opener">
							<span></span>
							<span></span>
							<span></span>
						</a>
						<div class="text-hold">
							<span><?php $session = session(); echo $session->get('fullname'); ?></span>
							
						</div>
					</div>
					<div class="right_content">
            <ul>
                <li class="dropdown ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    Logout
                    <span class="caret"></span></a>
                  <ul class="dropdown-menu cst_dropdown_menu" role="menu">
                    <li><a href="<?php echo base_url('User/logout'); ?>">Logout</a></li>
                  </ul>
                </li>
              </ul>
          </div>
				</div>
				

			</header>
			</div>		
	<div id="wrapper">
			<div class="side-nav">
					<div class="logo-wrap">
						<a href="<?=base_url("");?>">
							
							<span class="text">Immersive<strong>Lab</strong></span>
						</a>
					</div>
					
					<ul class="nav-list">
						
						
						
						<li id="promotion_active"><a href="<?=base_url("User/user");?>">Users <span class="icon-wrap"><span class="icon-right-chevron"></span></span></a></li>
						<li id="product_active2"><a href="<?=base_url("Role/index");?>">Role<span class="icon-wrap"><span class="icon-right-chevron"></span></span></a></li>
						<li id="product_active3"><a href="<?=base_url("Industory_Sector/index");?>">Industor Sector<span class="icon-wrap"><span class="icon-right-chevron"></span></span></a></li>
						<li id="product_active3"><a href="<?=base_url("Attack_Vector/index");?>">Attack Vector<span class="icon-wrap"><span class="icon-right-chevron"></span></span></a></li>
						<li id="product_active3"><a href="<?=base_url("Threat_Actor/index");?>">Threat Actor<span class="icon-wrap"><span class="icon-right-chevron"></span></span></a></li>
						<li id="product_active3"><a href="<?=base_url("Scenario_role/index");?>">Scenario Role<span class="icon-wrap"><span class="icon-right-chevron"></span></span></a></li>
           
					</ul>
				</div>


	