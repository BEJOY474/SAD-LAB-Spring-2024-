<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="pic/Logo.png" type="pic/icon">

        <title>Education World</title>

         <!-- <link rel="stylesheet" href="styles/bootstrap-337.min.css">
          <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css"> -->
         <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="efg.css">

        <!-- fontAwesom start -->
            <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
             <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <!-- fontAwesom end -->

        <link rel="stylesheet" href="cssFolder/index.css">
        <link rel="icon" href="pic/Logo.png" type="pic/icon">

        <link rel="icon" href="images/mLogo.webp" type="images/icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />



        <!-- bootstrap start -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- bootstrap end -->


        <style>
            body {
                font-size: 14px;
                line-height: 1.42857143;
                color: #333333;
                overflow-x: hidden;
            }

            span.btn.btn-success a {
                color: #fff;
                text-decoration: none;
            }

            span.btn.btn-success {
                position: relative;
                top: 10px;
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 5px;  
            }

            #navbar {
                border-radius: 0px !important;
            }

            .topBar {
                height: 40px;
                background-color: blueviolet;
            }

            .product:hover {
                box-sizing: border-box;
                box-shadow: 0px 1px 4px 2px;
            }


            .hr {
                width: 100%;
                border: 3px solid blueviolet;
                position: relative;
                top: 0px;
            }



            .rightHalf {
                text-align: center;
                background-color: blueviolet;
                padding-bottom: 1px;
                position: relative;
                top: 3px;
            }


            .text.text2::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: red;
                border-left: 2px solid blue;
                animation: animate 4s steps(12) infinite;

            }

            input.form-control.mr-sm-2 {
                font-size: 13px;
            }

            a.navbar-brand {
                font-size: 22px;
                font-family: cursive;
                position: relative;

            }

            .box h1 {
                text-align: center;
                font-family: inherit;
                font-weight: bold;
                padding: 20px;
            }

            @keyframes animate {

                40%,
                60% {
                    left: 100%;
                }

                100% {
                    left: 0%;
                }
            }

            .about .about-content .right a {
                display: inline-block;
                background-color: red;
                color: #fff;
                font-size: 20px;
                padding: 10px 30px;
                margin-top: 20px;
                border-radius: 6px;
                border: 2px solid red;
                text-decoration: none;
                transition: all 0.4s ease;
            }


            @media (min-width:450px) {
                .max-width {
                    padding: 0 23px;
                }

                .about .about-content .right {
                    padding-top: 10px;
                    width: 100%;
                    text-align: justify;
                    justify-content: center;
                }

                .about .about-content .left {
                    width: 100%;
                }

                .about .about-content .left img {
                    width: 100%;

                }

                .same-height-row :last-child {
                    padding-bottom: 20px;
                }


                .col-md-12.headPhnTitleHeader h2 {
                    padding-top: 70px;
                    color: #fff;
                }


            }



            @media (max-width: 981px) {
                .about .about-content .left {
                    width: 45%;
                }

                .about .about-content .right {
                    width: 50%;
                    text-align: justify;
                    justify-content: center;
                }

                .col-md-12.headPhnTitleHeader h2 {
                    padding-top: 70px;
                    color: #fff;
                }

                .product a img {
                width: 150px !important;
            }

                .titleTxt a img {
                width: 25px !important;
            }

            }

        

            .slick-prev:before {
                content: '←';
                color: red;
                font-size: 25px;
            }

            .slick-next:before {
                content: '→';
                color: red;
                font-size: 25px;
            }

            #outerContent {
                background-color: rgb(236, 226, 226);
                position: relative;
                top: 50px;
                height: 660px;
            }

            .headPhnsection {

                text-align: center;
            }

            .col-md-12.headPhnTitleHeader {

                color: #fff;
            }


            .product {
                background-color: #fff;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                cursor: pointer;
                box-sizing: border-box;
                box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
            }


            div#content\ headPhnSec {
                background-color: black !important;
            }

            .headTitle {
                text-align: center;
                background-color: black;
            }

            section#outerContent\ hpnSen {
                background-color: black;
            }

            .box_h.box_h2 {
                background-color: black;
            }

            .box_h {
                background-color: rgb(236, 226, 226);
                
                margin: 0 0 30px;
                box-sizing: border-box;
                padding: 5px;
                border-radius: 5px;
                transition: all .4s ease;

            }

            .headphnSlid {
                background-color: #222;
            }

            .box {
                background-color: #fff;
                box-sizing: border-box;
                box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
                margin-bottom: 20px;
            }

            .col-md-4.col-sm-6.center-responsive {
                margin-bottom: 10px;
            }

            audio {

                width: 120px;
                height: 25px;
                position: relative;
                top: 8px;
            }

            .col-md-12 {
                margin-top: 50px;
            }

            .home img {
                width: 50px;
                border-radius: 13px;
            }

            div#content {
                position: relative;
                top: -35px;
            }

            ul.breadcrumb li a {
                text-decoration: none;
                color: black;
            }

            ul.menu li a {
                margin-left: 45px;
                color: #FFF;
                list-style: none;
                text-decoration: none;
                font-size: 13px;
            }

            ul.menu {
                display: inline-flex;
                padding: 10px;
                list-style: none;
                position: relative;
                top: 5px;
                left: 85px;
            }

            .col-md-6.offer {
                position: relative;
                margin-top: 10px;
            }

            #navbar {
                border-radius: 0px !important;
                padding-top: 8px;
                padding-bottom: 8px;
            }

            .navbar-btn {
                margin-top: 8px;
                margin-bottom: 8px;
                position: relative;
                float: right;
            }

            a.navbar-brand.home img {
                display: block;
                position: relative;
                top: -16px;
            }

            .col-md-6.offer a {
                color: #fff;
                padding-left: 8px;
                text-decoration: none;
            }

            .text a {
                text-decoration: none;
                font-family: cursive;
                letter-spacing: 10px;
            }

            .texts p {
                text-align: center;
                position: relative;
                top: 6px;
                font-size: 15px;
            }

            li.nav-item a {
                cursor: pointer;
            }

            .titleTxt a img {
            width: 25px;
            }

            .allDetails h4 {
                text-align: center;
                font-size: 20px;
                font-family: cursive;
                
                padding: 13px;
            }

            .box.col-md-6 {
                cursor: pointer;
                color: yellow;
                background: #0a0a0a;
                border-radius: 5px;
                transition: 0.3s ease;
            }

            .allDetails a {
                color: yellow;
                text-decoration: none;
            }


            .snkTitle {
        text-align: center;
        font-family: 'Press Start 2P', cursive;
        color: #306d03;
        font-size: 30px;
        position: relative;
        top: 35px;
            }

                .time {
                position: relative;
                font-size: 15px;
                text-align: center;
                font-family: 'Press Start 2P';
                margin-top: 10px;
                color: red;
            }

            canvas#my_canvas {
                position: relative;
                /* left: 20%; */
            }

                    canvas#my_canvas {
                        height: 420px;
                        position: relative;
                        top: 45px;
                }

        </style>

</head>


<body>

    
   
        <section>
                    <div class="topBar">
                        <div class="rightHalf">
                            <ul>
                                <li><a href="adminLogin.php">Admin</a></li> 
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </div>

                    </div>
        </section>

        <!-- manu-bar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="pic/Logo.png" alt="" srcset="">
            <a class="navbar-brand" href="index1.php">Education World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item actives">
                        <a class="nav-link" href="allKidsBook.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Tuition Platform</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Book Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ">Student Fund</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link ">Study Abroad</a>
                    </li>

                    <li class="nav-item">
                        <div class="texts">
                            <!-- <p></p> -->
                        </div>
                    </li>


                </ul>
                <div class="robot">
                    <a href="robotExtra.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
                </div>
            </div>
        </nav>
        <!-- manu-bar end -->

        <div class="hr"></div>

        <center>
            
            <div id="content" class="content">
                <div class="container">
                            <div class="time"></div>

                        <h1 class="snkTitle">Snake Game</h1>
                        <canvas id="my_canvas" style="background-color: #cbdbcb;" height="500px"; width="800px";></canvas>

                </div>
                
            </div>
        </center>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <?php 
            $conn = new mysqli('localhost', 'root', '', 'studyabroad');
            if (!$conn) {
                echo 'not connect';
            }

            $sql = "SELECT* FROM sequrity " ;           
            $query = $conn->query($sql);

            if ($query->num_rows> 0) {
                $data = mysqli_fetch_assoc($query);
                $action = $data['actions'];
            
            }
    
            if($action == "yes"){
                echo"<script src='js/indexR1.js' > </script> ";
            }

    ?>

<script>


    var canvas = document.getElementById("my_canvas");
    var cty= canvas.getContext("2d");
    var dir, score,balls,food;
    var audio = new Audio("snakeMusic/loss.wav");

    function init(){
        dir = 'right';
        score=  0;
        balls = [
            {x:40,y:40},
            {x:60,y:40},
            {x:80,y:40},
        ];
        creatFood();
    }

    function creatFood(){
        food = {x:Math.floor(Math.random()*15),   y:Math.floor(Math.random()*15)};
    }


    init();

    document.addEventListener("keydown", function (e) {
        var codeKey=e.keyCode;

        if(codeKey== 37 && dir !='right'){
            dir='left';
        }
        if(codeKey== 38 && dir !='down'){
            dir='up';
        }
        if(codeKey== 39 && dir !='left'){
            dir='right';
        }
        if(codeKey== 40 && dir !='up'){
            dir='down';
        }
    });


        function add(){
            var lastBall= balls[balls.length-1];
            if(dir=='right'){
                balls.push({x:lastBall.x+20, y:lastBall.y});
            }

            if(dir=='down'){
                balls.push({x:lastBall.x, y:lastBall.y+20});
            }
            if(dir=='left'){
                balls.push({x:lastBall.x-20, y:lastBall.y});
            }
            if(dir=='up'){
                balls.push({x:lastBall.x, y:lastBall.y-20});
            }   
        }

    function ani(){
        cty.clearRect(0,0,800,500);
        balls.shift();
        add();

        var lastBall= balls[balls.length-1];
        if(lastBall.x==food.x*20 && lastBall.y==food.y*20){
            score=score+5;
            add();
            var audio = new Audio("snakeMusic/food.wav");
            audio.play();
            creatFood();
        }

        for(var i =0;i<balls.length;i++){
            var ball=balls[i];

            if(i==balls.length-1){
                cty.fillStyle="red";
            }else{
                cty.fillStyle="black";
            }

            if(ball.x>780){
                ball.x=0;
            }
            if(ball.x<0){
                ball.x=780;
            }
            if(ball.y>480){
                ball.y=0;
            }
            if(ball.y<0){
                ball.y=480;
            }
            if(ball.x==lastBall.x && ball.y==lastBall.y && i<balls.length-2){
                
              
                alert( "GAME OVER  SCORE " + score  );
        
                init();
            }
            cty.fillRect(ball.x,ball.y,20,20);
            
        }
        cty.fillRect(food.x*20,food.y*20,15,15);//20 20
        cty.fillText("score  " + score,680,15)

    }

    setInterval(ani,150);

    // // function time(){
    // //     document.querySelector(".time").innerHTML = new Date();
    // // }

    setInterval(time,1024);
    
</script>

</body>
</html>
   