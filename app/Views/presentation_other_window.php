<style>

  
.quition{
text-align: left;
font-weight: bold;
padding: 0 !important;
}
#injectdesc {
    margin: 20px 0 10px !important;
    padding: 0 !important;
font-size: 22px !important;

}
.customLorem {
background: #ededed;
padding: 12px;
}
.customLorem:hover {
background: #d1d1d1;
}
.customLorem div{ 
text-align:left;
margin: 0;
}
.customLorem div p{ 
margin: 0 !important;
padding: 0 !important;
}
section#server-main .container-fliud {
width: 50%;
margin: 0 auto;
}
.customLorem .title {
font-size: 18px !important;
font-weight: bold !important;
}
.customLorem .dec {
font-size: 14px !important;
}
</style>
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

        #server-main {
            width: 100%;
            display: inline-block;
            text-align: center;
            padding: 100px 0;
        }

        #server-main p {
            color: #000;
            font-size: 18px;
            font-weight: 500;
            padding-top: 20px;
        }

        .server-img img {
            max-width: 200px;
        }

        .server-img {
            width: 250px;
            height: 260px;
            background-color: #EBECFB;
            border-radius: 50%;
            line-height: 250px;
            margin: 0 auto;
        }
    </style>
</head>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

<body>
    <section id="server-main">
        <div class="container-fliud">
            <div class="server" >
            <input type="hidden" id="sp_id" value="">
                <div class="server-img">
                    <img src="<?=base_url();?>/images/desktop_img.png">
                </div>
                <p>Lorem ipsum dolor sit amet.</p>
                <button onclick="enter_exercise()">please wait</button>
            </div>
                        <input type="hidden" id="chek_question" value="0" >
                        <input type="hidden" id="chek_question_id" value="<?php $_SESSION["question_session"]?>" >
             <div id="question">
                
            </div>
    
            <div id="qdiv">
                
            </div>
        </div>
    </section>
   
    <script>
        function enter_exercise(){
            var spid=$("#sp_id").val();
    window.location.href="<?=base_url()?>/Play_presentation_other/reveal_option/"+spid;
}
    </script>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script type="text/javascript">






    setInterval(function(){ 

 var no=$("#chek_question").val();
if(no==0){
   $.ajax({


               method:"POST",
               async:true,
               dataType:"json",
               url:"<?=base_url()?>/Play_presentation_other/question_fecth",
               data:{},
               success:function(json){

              
               $("#question").html(json.question);   
                $("#qdiv").html(json.option);
               $(".server").css("display","none");
                $("#chek_question").val(1);
            


                
               }

            });
}
 

}, 1000);



  
</script>