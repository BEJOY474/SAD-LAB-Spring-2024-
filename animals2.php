<?php
session_start();
$passValueLoginPage =  $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];



if (!empty($passValueLoginPage)) {



?>

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
                font-family: cursive;
                font-weight: bold;
            }

            .product a img {
             width: 25px;
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

            .titleTxt a img {
                  width: 25px !important;
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
                ;
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
                padding: 25px;
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

            .texts {
            display: none;
        }

            li.nav-item a {
                cursor: pointer;
            }
        </style>


    </head>



    <body>


        <section>
            <div class="topBar">
                <div class="rightHalf">
                    <ul>
                        <li><a href="#"><?php echo $name ?></a></li>
                        <li><a href="myAccount.php">My Account</a></li>
                        <li><a href="contact2.php">Contact</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- manu-bar start -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="pic/Logo.png" alt="" srcset="">
            <a class="navbar-brand" href="index2.php">Education World</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item actives">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  href="tuition.php" class="nav-link">Tuition Platform</a>
                    </li>
                    <li class="nav-item">
                        <a href="bookShop.php" class="nav-link ">Book Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="studentLoan.php" class="nav-link ">Student Loan</a>
                    </li>

                    <li class="nav-item">
                        <a href="studyAbroad.php" class="nav-link ">Study Abroad</a>
                    </li>

                    <li class="nav-item">
                        <div class="texts">
                            <!-- <p></p> -->
                        </div>
                    </li>

                    <li>
                        <audio controls autoplay>
                            <source src="AllBackgroundMusic/animal.mp3" type="audio/mp3">
                        </audio>
                    </li>


                </ul>
                <div class="robot">
                <a href="robot2.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
            </div>
            </div>
        </nav>
        <!-- manu-bar end -->



        <div class="hr"></div>

        <div id="content" class="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="box">
                        <h1>Animals</h1>

                    </div>

                    <div class="row">

                        <div class="col-md-4 col-sm-6 center-responsive">

                            <div class="product">
                                <a onclick="aPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/lion2.png" alt="macbookLaptop">
                                </a>


                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Lion</h5>
                                        <a onclick="crowSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="bPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/tiger-3d-model-animated.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Tiger</h5>
                                        <a onclick="doveSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">

                            <div class="product">
                                <a onclick="cPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/camal.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Camel</h5>
                                        <a onclick="magpieSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="dPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/cat.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Cat</h5>
                                        <a onclick="duckSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="ePlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/cow.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Cow</h5>
                                        <a onclick="eagleSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="fPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/deer.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Deer</h5>
                                        <a onclick="heronSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">

                            <div class="product">
                                <a onclick="gPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/dog.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Dog</h5>
                                        <a onclick="hurmingSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="hPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/elent.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Elephant</h5>
                                        <a onclick="kfisherSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">

                            <div class="product">
                                <a onclick="iPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/frog2.jpg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Frog</h5>
                                        <a onclick="kookaburraSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="jPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/Giraffe.png" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Giraffe</h5>
                                        <a onclick="martinSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="kPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/goat.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Goat</h5>
                                        <a onclick="mynaSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">

                            <div class="product">
                                <a onclick="lPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/Hourse.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Hourse</h5>
                                        <a onclick="nightingaleSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="mPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/Crocodile.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Crocodile</h5>
                                        <a onclick="OstrichSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">

                            <div class="product">
                                <a onclick="nPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/Rabbit2.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Rabbit</h5>
                                        <a onclick="OwlSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="oPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/Snake.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Snake</h5>
                                        <a onclick="ParrotlSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 center-responsive">
                            <div class="product">
                                <a onclick="pPlay()">
                                    <img style="width: 250px; height: 265px" class="img-responsive" src="AnimalsPic/Zebra.jpeg" alt="macbookLaptop">
                                </a>
                                <div class="text">

                                    <div class="titleTxt">
                                        <h5>Zebra</h5>
                                        <a onclick="PeacockSndPlay()">
                                            <img src="BirdPic/high-volume.png" alt="volume" srcset="">
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>


                </div>
            </div>

        </div>

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
                echo"<script src='js/indexR2.js' > </script> ";
            }

    ?>

        <script>
          
                function crowSndPlay() {
                    var audio = new Audio("AnimalsSound/LionSound.mp3");
                    audio.play();
                }

                function aPlay() {
                    var audio = new Audio("AnimalsSound/lion.mp3");
                    audio.play();
                }

                function doveSndPlay() {
                    var audio = new Audio("AnimalsSound/TIGER.wav");
                    audio.play();
                }

                function bPlay() {
                    var audio = new Audio("AnimalsSound/tiger.mp3");
                    audio.play();
                }



                function magpieSndPlay() {
                    var audio = new Audio("AnimalsSound/CAMEL.wav");
                    audio.play();
                }

                function cPlay() {
                    var audio = new Audio("AnimalsSound/camel.mp3");
                    audio.play();
                }

                function duckSndPlay() {
                    var audio = new Audio("AnimalsSound/catSound.mp3");
                    audio.play();
                }


                function dPlay() {
                    var audio = new Audio("AnimalsSound/cat.mp3");
                    audio.play();
                }

                function eagleSndPlay() {
                    var audio = new Audio("AnimalsSound/cowSound2.mp3");
                    audio.play();
                }

                function ePlay() {
                    var audio = new Audio("AnimalsSound/cow.mp3");
                    audio.play();
                }

                function heronSndPlay() {
                    var audio = new Audio("AnimalsSound/deerSound.wav");
                    audio.play();
                }

                function fPlay() {
                    var audio = new Audio("AnimalsSound/deer.mp3");
                    audio.play();
                }


                function hurmingSndPlay() {
                    var audio = new Audio("AnimalsSound/dogSund.wav");
                    audio.play();
                }

                function gPlay() {
                    var audio = new Audio("AnimalsSound/dog.mp3");
                    audio.play();
                }

                function kfisherSndPlay() {
                    var audio = new Audio("AnimalsSound/elephant1.wav");
                    audio.play();
                }

                function hPlay() {
                    var audio = new Audio("AnimalsSound/elephant.mp3");
                    audio.play();
                }


                function kookaburraSndPlay() {
                    var audio = new Audio("AnimalsSound/frogSound.wav");
                    audio.play();
                }

                function iPlay() {
                    var audio = new Audio("AnimalsSound/frog.mp3");
                    audio.play();
                }

                function martinSndPlay() {
                    var audio = new Audio("AnimalsSound/grfSnd.mp3");
                    audio.play();
                }

                function jPlay() {
                    var audio = new Audio("AnimalsSound/girrf.mp3");
                    audio.play();
                }


                function mynaSndPlay() {
                    var audio = new Audio("AnimalsSound/Goat1.mp3");
                    audio.play();
                }

                function kPlay() {
                    var audio = new Audio("AnimalsSound/goatVoice.mp3");
                    audio.play();
                }


                function nightingaleSndPlay() {
                    var audio = new Audio("AnimalsSound/horseSound.mp3");
                    audio.play();
                }

                function lPlay() {
                    var audio = new Audio("AnimalsSound/horse.mp3");
                    audio.play();
                }


                function OstrichSndPlay() {
                    var audio = new Audio("AnimalsSound/crocodileSund.wav");
                    audio.play();
                }

                function mPlay() {
                    var audio = new Audio("AnimalsSound/crocodile.mp3");
                    audio.play();
                }


                function OwlSndPlay() {
                    var audio = new Audio("AnimalsSound/rabbirSund.mp3");
                    audio.play();
                }

                function nPlay() {
                    var audio = new Audio("AnimalsSound/rabbit.mp3");
                    audio.play();
                }


                function ParrotlSndPlay() {
                    var audio = new Audio("AnimalsSound/snkSnd.mp3");
                    audio.play();
                }

                function oPlay() {
                    var audio = new Audio("AnimalsSound/snake.mp3");
                    audio.play();
                }


                function PeacockSndPlay() {
                    var audio = new Audio("AnimalsSound/zebraSund.wav");
                    audio.play();
                }

                function pPlay() {
                    var audio = new Audio("AnimalsSound/zebra.mp3");
                    audio.play();
                }
        </script>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    </body>

    </html>

<?php
} else {
    header("location:index1.php");
}
?>