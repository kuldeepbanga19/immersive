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

        #judgement-main {
            width: 100%;
            display: inline-block;
        }

        #judgement-main h2 {
            padding-left: 20px;
            font-size: 27px;
            color: #000;
            font-weight: 600;
        }

        .response-info {
            width: 100%;
            margin: 0 auto;
            max-width: 700px;
        }

        .response-info h2 {
            color: #000;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 1rem;
            padding-left: 0 !important;
        }

        .option-div {
            width: 100%;
            display: flex;
            padding: 20px;
            align-items: center;
            box-shadow: 0 0px 6px #5861DB;
            border-radius: 5px;
            margin-bottom: 40px;
        }

        .option-div input {
            width: auto !important;
        }

        .option-div .choose-option {
            padding-left: 10px;
        }

        .option-div .choose-option h3 {
            font-size: 15px;
            color: #8D8E9D;
        }

        .option-div .choose-option h2 {
            font-size: 18px !important;
            margin-bottom: 0;
        }

        .option-div .choose-option p {
            font-size: 16px;
            color: #5861DB;
            font-weight: 600;
        }

        .response-info h3 {
            color: #000;
            font-size: 16px;
            font-weight: 700;
        }

        .response-info input {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 10px;
            border: 2px solid #E5E8ED;
            border-radius: 3px;
        }

        .response-info input::placeholder {
            color: #000;
            font-weight: 600;
        }

        .response-info button {
            border: none;
            background-color: #D1D2DB;
            color: #9A9BAA;
            font-size: 15px;
            padding: 7px 15px;
            border-radius: 3px;
            margin-top: 10px;
        }
    </style>
</head>



<body>
<input type="hidden" id="sp_id" value="<?=$spid?>">
    <section id="judgement-main">
        <h2>Judgement</h2>
        <div class="container-fliud">
            <div class="response-info">
                <h2>Your Response</h2>
                <div class="option-div">
                    <input type="radio">
                    <div class="choose-option">
                        <h3>Option2</h3>
                        <h2>Remote accese into the systems</h2>
                        <p>You can then look in to technical issues yourself</p>
                    </div>
                </div>
                <h3>How confident are you in this response?</h3>

                <div class="card px-3 py-3 mb-2 fw-bold">Not at all confident</div>
                <div class="card px-3 py-3 mb-2 fw-bold">Not very confident</div>
                <div class="card px-3 py-3 mb-2 fw-bold">Somewhat confident</div>
                <div class="card px-3 py-3 mb-2 fw-bold">confident</div>
                <div class="card px-3 py-3 mb-2 fw-bold">Very confident</div>
                <button  onclick="enter_next()">Confirm Answer</button>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function enter_next(){
            var spid=$("#sp_id").val();
    window.location.href="<?=base_url()?>/Play_presentation/start_play/"+spid;
}
    </script>
</body>

</html>