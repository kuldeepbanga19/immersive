<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>preview</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

	body{
		margin: 0px;
		overflow: hidden;
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
		.center2 button{
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
	</style>
</head>
<body>
	<header class="header">
		<div class="left">
			<p style="color:#fff;"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: 10px;"></i>Navigate back to explore different options.</p>
		</div>
		<div class="center">
			<p>Preview Exercise for Copy 2 of Basic Computer Course</p>
		</div>
		<div class="right">
			<div class="exit-preview">
				<a href="#">Exit Preview<i class="fa fa-times" aria-hidden="true"></i></a>
			</div>
		</div>
	</header>


	
<div class="center2" style="display: flex; align-items: center; justify-content: center; flex-direction: column; height: 100vh;">
	<img src="images/Capture.jpg">
	<p style="    font-size: 1.875rem;
    color: rgb(33, 37, 26);
    font-weight: 700;
    line-height: 1.2;">You have reached the end of the scenario preview</p>
    <button class=""><span>Exit Preview</span></button>
</div>
</body>
</html>