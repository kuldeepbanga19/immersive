<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>page2</title>

    <style>
        body {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
        }

        * {
            text-decoration: none !important;
        }


        #banner-main {
            width: 100%;
            display: inline-block;
        }

        .banner {
            width: 100%;
            display: inline-block;
        }

        .banner h2 {
            color: #000;
            font-size: 26px;
            font-weight: 700;
        }

        .bannerdiv {
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 350px;
            background: linear-gradient(129deg, #0C023D, #381537);
        }

        .bannerdiv .banner-text h2 {
            color: #ffff;
            font-size: 22px;
        }

        .bannerdiv .banner-text p {
            color: #fff;
            font-size: 15px;
        }


        .banner-img img {
            max-width: 350px;
        }

        .exercise {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
            padding: 50px;
            box-shadow: 0 2px 9px #ddd;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .exercise h3 {
            color: #000;
            font-size: 20px;
            font-weight: 600;
        }

        .exercise h3 span {
            color: #7A95AD;
        }

        .exercise input {
            width: 100%;
            display: inline-block;
            padding: 10px;
            border: 1px solid #DEDEE0;
        }

        .exercise label {
            color: #000;
            font-weight: 600;
        }

        .exercise label span {
            color: #4080BF;
        }

        .exercise button {
            display: inherit;
            border: none;
            background-color: #2F39C4;
            color: #fff;
            border-radius: 5px;
            padding: 7px 20px;
            font-size: 15px;
        }

        .lablediv {
            width: 100%;
            display: inline-block;
            padding: 10px;
        }

        .lablediv input {
            display: inline-block;
            width: auto;
        }

        .lablediv {}

        .lablediv lable {
            display: inline-block;
            width: auto;
        }
    </style>
</head>

<body>
    <section id="banner-main">
        <div class="container-fliud">
            <div class="banner">
                <h2>Enter Code</h3>
                    <div class="bannerdiv">
                        <div class="banner-text">
                            <h2>Welcome to Crisim Sim</h2>
                            <p>Contact your facilitator to recieve your exercise code</p>
                        </div>
                        <div class="banner-img"><img src="images/banner_img.webp"></div>
                    </div>
                    <input type="hidden" id="sp_id" value="<?=$spid?>">
                    <div class="exercise">
                        <h3>Enter exercise code <span>(optional)</span></h3>
                        <input type="text">
                        <div class="lablediv">
                            <input type="checkbox">
                            <label>I agree to the <span>term and coditions</span></label>
                        </div>
                        <button onclick="enter_exercise()">Join exercise</button>
                    </div>
            </div>

        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function enter_exercise(){
            var spid=$("#sp_id").val();
    window.location.href="<?=base_url()?>/Play_presentation/enter_exercise/"+spid;
}
    </script>
</body>

</html>