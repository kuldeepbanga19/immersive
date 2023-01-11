<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/stylesheet.css" rel="stylesheet">
    <link href="<?=base_url();?>/assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Page1</title>
</head>
<body>
    <section id="presentation">
        <div class="container-fliud">
                <div class="presentation-main">
                    <h3 class="d-flex align-items-center justify-content-center gap-3"> 
                        <img src="<?=base_url();?>/assets/img/Capture.svg" width="40px" alt=""> 
                        <span>Crisis Sim</span>
                    </h3>d
                    <div class="centerdiv">
                        <a href="#">play.immerslvelabs.online</a>
                        <h4><span>Code</span>B7C63A</h4>
                    </div>
                    <button>Exit<i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div class="presentationdiv">
                <input type="hidden" id="sp_id" value="<?=$spid?>">
                    <h2><?= $scenario_title;?></h2>
                    <button onclick="start_exercise()">Start your exercise</button>
                </div>
                <div class="participent">
                    <h5>participents</h5>
                    <span>0</span>
                </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script >
        function start_exercise(){
            var spid=$("#sp_id").val();
            // alert(spid);
    window.location.href="<?=base_url()?>/Play_presentation/start_exercise/"+spid;
}
    </script>
</body>

</html>