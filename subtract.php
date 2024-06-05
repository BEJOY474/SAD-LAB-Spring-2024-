<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="pic/Logo.png" type="pic/icon">

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />

    <!-- bootstrap start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstrap end -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssFolder/mg.css">

    <title>Education World</title>

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

        span.btn.btn-success a {
            color: #fff;
            text-decoration: none;
        }

        span.btn.btn-success {
            position: relative;
            top: 10px;
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
    </style>


</head>

<body>

    <audio id="myAudio">
        <source src="AllBackgroundMusic/f.mp3" type="audio/mpeg">
    </audio>

    <audio id="myAudio1">
        <source src="AllBackgroundMusic/kc.mp3" type="audio/mpeg">
    </audio>

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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link ">Student Loan</a>
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

    <header>
        <div class="container">
            <div class="nav1">
                <h2><span><i class="fa fa-trophy" aria-hidden="true"></i></span> MATH 4 KIDS</h2>
                <nav>
                    <ul>
                        <li><a href="mathGame.php">Add</a></li>
                        <li class="current"><a href="subtract.php">Subtract</a></li>
                        <li><a href="multiply.php">Multiply</a></li>
                        <li><a href="divide.php">Divide</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="equation">
            <div class="middleIlement">
                <center>
                    <h1 id="num1" style="color:#FE4A49"></h1>
                    <h1 style="color: #2AB7CA;"><img class="divIcn" src="kidsPic/s.png" alt=""></h1>
                    <h1 id="num2" style="color: #FED766">1</h1>
                    <h1 style="color: #F86624">=</h1>
                    <h1 style="color: gray">?</h1>

                    <div class="texts">
                        <img src="kidsPic/win1.gif" alt="">
                        <h3>Your answer is correct</h3>
                        <img src="kidsPic/win2.gif" alt="">
                    </div>

                    <div class="wrng">
                        <img src="kidsPic/rng.gif" alt="">
                        <h3>Your answer is wrong</h3>
                        <img src="kidsPic/wng.gif" alt="">
                    </div>
                </center>
            </div>


        </div>
        <div class="answer-options">
            <div class="options" style="background-color: #FE4A49;">
                <h1 id="option1">1</h1>
            </div>
            <div class="options" style="background-color: #2AB7CA;">
                <h1 id="option2">2</h1>
            </div>
            <div class="options" style="background-color: #FED766;">
                <h1 id="option3">3</h1>
            </div>


        </div>


    </div>


    <script>

        const option1 = document.getElementById("option1"),
            option2 = document.getElementById("option2"),
            option3 = document.getElementById("option3"),
            audio1 = document.getElementById("myAudio1"),
            audio = document.getElementById("myAudio");
        var txtAddW = document.getElementsByClassName("wrng");

        var answer = 0;


        function generate_equation() {
            var num1 = Math.floor(Math.random() * 13),
                num2 = Math.floor(Math.random() * 9),
                dummyAnswer1 = Math.floor(Math.random() * 10),
                dummyAnswer2 = Math.floor(Math.random() * 10),
                allAnswers = [],
                switchAnswers = [];

            answer = eval(num1 - num2);

            document.getElementById("num1").innerHTML = num1;
            document.getElementById("num2").innerHTML = num2;

            allAnswers = [answer, dummyAnswer1, dummyAnswer2];

            for (i = allAnswers.length; i--;) {
                switchAnswers.push(allAnswers.splice(Math.floor(Math.random() * (i + 1)), 1)[0]);
            };

            option1.innerHTML = switchAnswers[0];
            option2.innerHTML = switchAnswers[1];
            option3.innerHTML = switchAnswers[2];
        };

        function resetTextVisibility() {
            var txtAdds = document.getElementsByClassName("texts");
            for (let txtAdd of txtAdds) {
                txtAdd.style.visibility = "hidden";
            }
        }

        option1.addEventListener("click", function () {
            if (option1.innerHTML == answer) {
                var txtAdds = document.getElementsByClassName("texts");
                audio1.play();
                resetTextVisibility();
                for (let txtAdd of txtAdds) {
                    txtAdd.style.visibility = "visible";
                }
                setTimeout(function () {
                    resetTextVisibility();
                    generate_equation();
                }, 5000);
            } else {
                audio.pause();
                audio.currentTime = 0;
                audio.play();
                var txtAddW = document.getElementsByClassName("wrng");
                for (let txt of txtAddW) {
                    txt.style.visibility = "visible";
                }
                setTimeout(function () {
                    for (let txt of txtAddW) {
                        txt.style.visibility = "hidden";
                    }
                }, 5000);
            }
        });

        option2.addEventListener("click", function () {
            if (option2.innerHTML == answer) {
                var txtAdds = document.getElementsByClassName("texts");
                audio1.play();
                resetTextVisibility();
                for (let txtAdd of txtAdds) {
                    txtAdd.style.visibility = "visible";
                }
                setTimeout(function () {
                    resetTextVisibility();
                    generate_equation();
                }, 5000);
            } else {
                audio.pause();
                audio.currentTime = 0;
                audio.play();
                var txtAddW = document.getElementsByClassName("wrng");
                for (let txt of txtAddW) {
                    txt.style.visibility = "visible";
                }
                setTimeout(function () {
                    for (let txt of txtAddW) {
                        txt.style.visibility = "hidden";
                    }
                }, 5000);
            }
        });

        option3.addEventListener("click", function () {
            if (option3.innerHTML == answer) {
                var txtAdds = document.getElementsByClassName("texts");
                audio1.play();
                resetTextVisibility();
                for (let txtAdd of txtAdds) {
                    txtAdd.style.visibility = "visible";
                }
                setTimeout(function () {
                    resetTextVisibility();
                    generate_equation();
                }, 5000);
            } else {
                audio.pause();
                audio.currentTime = 0;
                audio.play();
                var txtAddW = document.getElementsByClassName("wrng");
                for (let txt of txtAddW) {
                    txt.style.visibility = "visible";
                }
                setTimeout(function () {
                    for (let txt of txtAddW) {
                        txt.style.visibility = "hidden";
                    }
                }, 5000);
            }
        });

        generate_equation()

    </script>

    <?php
    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
    if (!$conn) {
        echo 'not connect';
    }

    $sql = "SELECT* FROM sequrity ";
    $query = $conn->query($sql);

    if ($query->num_rows > 0) {
        $data = mysqli_fetch_assoc($query);
        $action = $data['actions'];

    }

    if ($action == "yes") {
        echo "<script src='js/indexR1.js' > </script> ";
    }

    ?>
</body>

</html>