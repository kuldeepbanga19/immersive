<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="<?=base_url();?>/assets/img/Capture.svg" rel="icon" type="image/x-icon">
<link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/stylesheet.css" rel="stylesheet">
<link href="<?=base_url();?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
   body{
    color: white;
   }
</style>
</head>
<body>
    <section class="colorful-bg">
        <div class="container">
            <div class="row">
                <h2 class="lead2">Welcome to <?= $scenario_title;?> - Presantation</h2>
            </div>
            <div class="row">
                <div class="col-8">
                <h3 class="fs-5">Overview</h3>
                <p class="fs-6 mb-3 "><?= $briefing;?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="fs-5 fw-bold mb-2 mt-1">
                        Roles
                    </p>
                    <div class="cutom-white-tea">
                        <div>
                            <img src="<?= base_url();?>/assets/img/piccc.webp" class="img-fluid" alt="">
                        </div>
                        <div class="name-area-bx">
                            <p id="singleMultipleBx">Multiple Roles</p>
                            <span class="viewallBx">View All</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="teacher-section-main">
                        <div class="gap-4 teacher-section justify-content-center my-4">
                            <?php foreach($roles as $rv){?>
                            <div class="custom-bxh">
                                <div class="teacher-img text-center">
                                    <img src="<?=base_url();?>/images/Avatar+1.png" class="mb-2">
                                    <div class="teacher-txt">
                                        <h4>
                                            <?=$rv["job_title"]?>
                                        </h4>
                                        <h5>
                                            <?php if(isset($rolesinfo[$rv["scenario_role_id"]]))echo $rolesinfo[$rv["scenario_role_id"]];?>
                                        </h5>
                                        <p class="constd mb-0"><?=$rv["responsiblity"]?></p>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                            <!--   <div class="student ms-4">
                    <div class="teacher-img text-center">
                    <img src="<?=base_url();?>/images/Avatar+1.png"  class="mb-2">
                    <div class="teacher-txt">
                    <h4>student</h4>
                    <span>Executive</span>
                    </div>
                    </div>
                    </div> -->
                        </div>
                    </div>
                </div>
                    <input type="hidden" id="sp_id" value="<?=$spid?>">
                    <button class="blue-btn mt-3" onclick="start_play()"> Next </button>
                </div>
            </div>
        </div>
    </section>
<script src="<?=base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?>/assets/js/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.viewallBx').click(function(){
$('.teacher-section-main').slideDown();
})
});
</script>
<script>
function start_play(){
var spid=$("#sp_id").val();
window.location.href="<?=base_url()?>/Play_presentation/start_play/"+spid;
}
</script>
</body>
</html>