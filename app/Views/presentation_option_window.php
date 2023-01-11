<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Page3</title>

    <style>
        body {
            font-size: 1rem;
            font-family: 'Open Sans', sans-serif;
        }



        * {
            text-decoration: none !important;
        }

        #information-main {
            width: 100%;
            display: inline-block;
            padding: 50px 0;
        }

        .information {
            width: 100%;
            margin: 0 auto;
            max-width: 700px;
        }

        .information h2 {
            color: #000;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .option-div {
            width: 100%;
            display: flex;
            padding: 20px;
            align-items: center;
            box-shadow: 0 0px 6px #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .option-div .choose-option {
            padding-left: 10px;
        }

        .option-div .choose-option h3 {
            font-size: 20px;
        }

        .option-div .choose-option h2 {
            font-size: 17px;
            margin-bottom: 0;
        }

        .option-div .choose-option p {
            font-size: 15px;
        }
    </style>
</head>



<body>
    <section id="information-main">
        <div class="container-fliud">
        <input type="hidden" id="sp_id" value="<?=$spid?>">
            <div class="information">
                <h2>Please choose an option</h2>
                <div class="option-div">
                    <input type="radio">
                    <div class="choose-option">
                        <h3>Option1</h3>
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore aliquid fugit illum
                            porro consequatur autem eos sapiente facilis ut.</p>
                    </div>
                </div>
                <div class="option-div">
                    <input type="radio">
                    <div class="choose-option">
                        <h3>Option1</h3>
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore aliquid fugit illum
                            porro consequatur autem eos sapiente facilis ut.</p>
                    </div>
                </div>
                <div class="option-div">
                    <input type="radio">
                    <div class="choose-option">
                        <h3>Option1</h3>
                        <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore aliquid fugit illum
                            porro consequatur autem eos sapiente facilis ut.</p>
                    </div>
                </div>
                <button onclick="enter_next()">next</button>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function enter_next(){
            var spid=$("#sp_id").val();
    window.location.href="<?=base_url()?>/Play_presentation_other/respon_option/"+spid;
}
    </script>
</body>

</html>