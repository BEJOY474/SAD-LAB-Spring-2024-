<?php
session_start();
$passValueLoginPage = $_SESSION['login'];

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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- fontAwesom start -->
        <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

        <!-- fontAwesom end -->

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="cssFolder/index.css">
        <link rel="icon" href="pic/Logo.png" type="pic/icon">
        <link rel="stylesheet" href="cssFolder/ts.css">
        <link rel="stylesheet" href="cssFolder/ss.scss">

        <!-- slider_link start -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
        <!-- slider_link end -->

        <!-- bootstrap start -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- bootstrap end -->

        <!-- tab script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- tab script -->

        <title>Education World</title>

        <style>

            img.dltPst {
                width: 25px;
                position: relative;
                top: 7px;
                left: 0px !important;
            }

            .active-icon {
                display: flex;
                justify-content: space-between;
            }

            button {
                position: relative;
                padding: 10px 20px;
                border: none;
                background: none;
                cursor: pointer;
                font-family: "Source Code Pro";
                font-weight: 900;
                text-transform: none !important;
                font-size: 15px;
                color: var(--text-color);
                background-color: var(--btn-color);
                box-shadow: var(--shadow-color) 2px 2px 22px;
                border-radius: 4px;
                z-index: 0;
                overflow: hidden;
            }

            h3.myPst {
                text-align: center;
                color: #000000a1;
            }

            textarea#textAreaExample1 {
                margin-top: 7px;
                border-radius: 12px;
                padding-left: 15px;
                margin-bottom: 8px;
            }

            .texts p {
                font-size: 12px;
                position: relative;
                top: 10px;
                left: 10px;
            }

            .left-sidebar {
                flex-basis: 25%;
                position: sticky;
                top: 205px !important;
                align-self: flex-start;
                overflow-y: auto;
            }

            .imgloc img {
                width: 25px;
            }

            .mn_info p {
                float: left;
                margin-right: 30px;
            }

            .top-mid {
                display: flex;
                justify-content: space-between;
            }

            .imgloc {
                height: 25px;
                position: relative;
                top: 10px;
            }

            .post-text {
                color: #3615b3e8 !important;
                margin: 15px 0;
                font-size: 15px;
                font-weight: bold !important;
            }

            .imp-links a {
                text-decoration: none !important;
            }

            .nav-left a {
                text-decoration: none;
            }

            .nav-user-icon img {
                width: 45px !important;
                height: 45px !important;
                border-radius: 50%;
                cursor: pointer;
            }

            li.nav-item a {
                cursor: pointer;
            }

            .main-content {
                flex-basis: 43%;
            }

            section {
                position: sticky;
                top: 0;
                z-index: 100;
            }

            nav.navbar.navbar-expand-lg.navbar-light.bg-light {
                position: sticky;
                top: 41px;
                z-index: 100;
            }

            .hr {
                width: 100%;
                border: 3px solid #5e321c !important;
                position: sticky;
                top: 122px;
                z-index: 100;
            }

            .nav-left p {
                color: #fff;
                position: relative;
                top: 8px;
            }

            .nav-left ul li {
                list-style: none;
                display: inline-block;
                position: relative;
                top: 8px;
                left: 62px;
                margin-left: 40px;

            }

            .right-sidebar {
                flex-basis: 25%;
                position: sticky;
                top: 205px;
                align-self: flex-start;
                background: #ffe6e6;
                padding: 8px 8px;
                border-radius: 4px;
                color: #626262;
                margin-right: -15px;
                margin-left: 10px;
            }
        </style>

        <style>
            .box {
                background-color: black;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            p {
                font-size: 17px;
                align-items: center;
            }

            .box a {
                display: inline-block;
                background-color: #fff;
                padding: 15px;
                border-radius: 3px;
            }

            .modal {
                align-items: center;
                display: flex;
                justify-content: center;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(254, 126, 126, 0.7);
                transition: all 0.4s;
                visibility: hidden;
                opacity: 0;
            }

            .content1 {
                position: relative;
                background: white;
                width: 829px;
                padding: 1em 2em;
                border-radius: 4px;
            }

            .modal:target {
                visibility: visible;
                opacity: 1;
            }

            .box-close {
                position: absolute;
                top: 0;
                right: 15px;
                color: #fe0606;
                text-decoration: none;
                font-size: 30px;
            }
        </style>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

            .container .title {
                font-size: 25px;
                font-weight: 500;
                position: relative;
            }

            .container .title::before {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                height: 3px;
                width: 30px;
                border-radius: 5px;
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
            }

            .content form .user-details {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin: 20px 0 12px 0;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: calc(100% / 2 - 20px);
            }

            form .input-box span.details {
                display: block;
                font-weight: 500;
                margin-bottom: 5px;
            }

            .user-details .input-box input {
                height: 45px;
                width: 100%;
                outline: none;
                font-size: 16px;
                border-radius: 5px;
                padding-left: 15px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;
                transition: all 0.3s ease;
            }

            .user-details .input-box input:focus,
            .user-details .input-box input:valid {
                border-color: #9b59b6;
            }

            form .gender-details .gender-title {
                font-size: 20px;
                font-weight: 500;
            }

            form .category {
                display: flex;
                width: 80%;
                margin: 14px 0;
            }

            span.gender {
                margin-right: 15px;
            }

            form .category label {
                display: flex;
                align-items: center;
                cursor: pointer;
            }

            form .category label .dot {
                height: 18px;
                width: 18px;
                border-radius: 50%;
                margin-right: 5px;
                background: #d9d9d9;
                border: 5px solid transparent;
                transition: all 0.3s ease;
            }

            #dot-1:checked~.category label .one,
            #dot-2:checked~.category label .two,
            #dot-3:checked~.category label .three {
                background: #9b59b6;
                border-color: #d9d9d9;
            }

            form input[type="radio"] {
                display: none;
            }

            form .button {
                height: 45px;
                margin: 35px 0
            }

            form .button input {
                height: 100%;
                width: 100%;
                border-radius: 5px;
                border: none;
                color: #fff;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                cursor: pointer;
                transition: all 0.3s ease;
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
            }

            form .button input:hover {
                /* transform: scale(0.99); */
                background: linear-gradient(-135deg, #71b7e6, #9b59b6);
            }

            @media(max-width: 584px) {
                .container {
                    max-width: 100%;
                }

                form .user-details .input-box {
                    margin-bottom: 15px;
                    width: 100%;
                }

                form .category {
                    width: 100%;
                }

                .content form .user-details {
                    max-height: 300px;
                    overflow-y: scroll;
                }

                .user-details::-webkit-scrollbar {
                    width: 5px;
                }
            }

            @media(max-width: 459px) {
                .container .content .category {
                    flex-direction: column;
                }
            }
        </style>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200,900');

            :root {
                --text-color: hsla(210, 50%, 85%, 1);
                --shadow-color: hsla(210, 40%, 52%, .4);
                --btn-color: hsl(210, 80%, 42%);
                --bg-color: #141218;
            }

            * {
                box-sizing: border-box;

            }

            .user-profile img {
                width: 50px !important;
                height: 55px !important;
                border-radius: 50%;
                margin-right: 10px;
            }

            .btn1 form {
                display: flex;
                justify-content: space-between;
            }

            img.dltPst {
                width: 25px;
                position: relative;
                top: 7px;
                left: 490px;
            }

            button {
                position: relative;
                padding: 10px 20px;
                border: none;
                background: none;
                cursor: pointer;

                font-family: "Source Code Pro";
                font-weight: 900;
                text-transform: uppercase;
                font-size: 15px;
                color: var(--text-color);
                background-color: var(--btn-color);
                box-shadow: var(--shadow-color) 2px 2px 22px;
                border-radius: 4px;
                z-index: 0;
                overflow: hidden;
            }

            button:focus {
                outline-color: transparent;
                box-shadow: var(--btn-color) 2px 2px 22px;
            }

            .right::after,
            button::after {
                content: var(--content);
                display: block;
                position: absolute;
                white-space: nowrap;
                padding: 40px 40px;
                pointer-events: none;
            }

            button::after {
                font-weight: 200;
                top: -30px;
                left: -20px;
            }

            .right,
            .left {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
            }

            .right {
                left: 66%;
            }

            .left {
                right: 66%;
            }

            .right::after {
                top: -30px;
                left: calc(-66% - 20px);

                background-color: var(--bg-color);
                color: transparent;
                transition: transform .4s ease-out;
                transform: translate(0, -90%) rotate(0deg)
            }

            button:hover .right::after {
                transform: translate(0, -47%) rotate(0deg)
            }

            button .right:hover::after {
                transform: translate(0, -50%) rotate(-7deg)
            }

            button .left:hover~.right::after {
                transform: translate(0, -50%) rotate(7deg)
            }

            /* bubbles */
            button::before {
                content: '';
                pointer-events: none;
                opacity: .6;
                background:
                    radial-gradient(circle at 20% 35%, transparent 0, transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
                    radial-gradient(circle at 75% 44%, transparent 0, transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
                    radial-gradient(circle at 46% 52%, transparent 0, transparent 4px, var(--text-color) 5px, var(--text-color) 6px, transparent 6px);

                width: 100%;
                height: 300%;
                top: 0;
                left: 0;
                position: absolute;
                animation: bubbles 5s linear infinite both;
            }

            @keyframes bubbles {
                from {
                    transform: translate();
                }

                to {
                    transform: translate(0, -66.666%);
                }
            }

            .btn1 {

                margin-top: 15px;
                margin-bottom: 10px;
            }

            .post-img {
                width: 100%;
                border-radius: 4px;
                margin-bottom: 5px;
                height: 165px;
            }

            a {
                color: #c9d1db;
                text-decoration: none;
                background-color: transparent;
            }

            a:hover {
                color: #c9d1db;
                text-decoration: none;
            }
        </style>

        <style>
            .containerJobDtails ul {
                cursor: pointer;
            }



            .containerJobDtails ul li {
                display: inline;
                align-items: center;
                margin-right: 30px;
                background: #1876f2;
                color: black;
                padding: 15px;
                border-radius: 5px;
                position: relative;
                top: 10px;
                cursor: pointer;
            }

            .containerJobDtails ul li a {
                color: white;
            }

          


            h4.error {
                text-align: center;
                position: relative;
                top: 50px;
                background: aliceblue;
                padding: 16px;
                color: #0a0a0abf;
                border-radius: 5px;
                border: 1px solid #1e1b1b2e;
            }

            form.srchFrm {
                display: flex;
            }

            .online::after {
                content: '';
                width: 10px;
                height: 10px;
                border: 2px solid #fff;
                border-radius: 50%;
                background: #41db51;
                position: absolute;
                top: 0;
            }

            button.srcBtn {
                position: relative;
                left: 58px;
                background: #dfdfdf;
                color: #000;
            }

            .nav-user-icon.online {
                color: #fff;
                position: relative;
                right: -40px;
            }

            .search-box {
                background: #efefef;
                width: 350px;
                border-radius: 5px !important;
                display: flex;
                align-items: center;
                padding: 0 15px;
                position: relative;
                right: -55px;
            }

            input[type="text"] {
                position: relative;
                top: 6px;
            }

            .modal-content {
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: 0.3rem;
                outline: 0;
                position: relative;
                top: 115px;
            }

            img.bks {
                width: 73%;
                height: 40px;
            }

            img.upy {
                width: 75%;
                height: 40px;
            }

            .inputbox {
                position: relative;
                display: flex;
                margin-bottom: 20px;
                width: 100%;
            }

            .crntB {
                width: 267px;

            }


            input.form-control.crntB {
                background: transparent;
                position: relative;
                top: -4px;
            }

            input.form-control.crntU {
                width: 230px;
                background: transparent;
                position: relative;
                top: -4px;
            }

            .launch {
                height: 50px
            }

            .close {
                font-size: 21px;
                cursor: pointer
            }

            .modal-body {
                height: 450px
            }

            .nav-tabs {
                border: none !important
            }

            .nav-tabs .nav-link.active {
                color: #495057;
                background-color: #fff;
                border-color: #ffffff #ffffff #fff;
                border-top: 3px solid blue !important
            }

            .nav-tabs .nav-link {
                margin-bottom: -1px;
                border: 1px solid transparent;
                border-top-left-radius: 0rem;
                border-top-right-radius: 0rem;
                border-top: 3px solid #eee;
                font-size: 20px
            }

            .nav-tabs .nav-link:hover {
                border-color: #e9ecef #ffffff #ffffff
            }

            .nav-tabs {
                display: table !important;
                width: 100%
            }

            .nav-item {
                display: table-cell
            }

            .form-control {
                border-bottom: 1px solid #eee !important;
                border: none;
                font-weight: 600
            }

            .form-control:focus {
                color: #495057;
                background-color: #fff;
                border-color: #8bbafe;
                outline: 0;
                box-shadow: none
            }

            .inputbox {
                position: relative;
                margin-bottom: 20px;
                width: 100%
            }

            .inputbox span {
                position: absolute;
                top: 7px;
                left: 11px;
                transition: 0.5s
            }

            .inputbox i {
                position: absolute;
                top: 13px;
                right: 8px;
                transition: 0.5s;
                color: #3F51B5
            }

            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0
            }

            .inputbox input:focus~span {
                transform: translateX(-0px) translateY(-15px);
                font-size: 12px
            }

            .inputbox input:valid~span {
                transform: translateX(-0px) translateY(-15px);
                font-size: 12px
            }

            .pay button {
                height: 47px;
                border-radius: 37px
            }

            select#month {
                outline: none;
            }

            div#paypal {
                position: relative;
                top: -25px;
            }

            .title_wr.text-center img {
                width: 200px;
            }

            h3.cmnt {
                text-align: center;
                color: #000000c2;
            }

            h3.cmnt2 {
                text-align: center;
                color: #000000c2;
                font-size: 19px;
                margin-bottom: 35px;
            }



            .content_wrng {
                position: relative;
                background: white;
                width: 440px;
                height: 280px;
                padding: 1em 2em;
                border-radius: 4px;
            }

            .content_succ {
                position: relative;
                background: white;
                width: 460px;
                height: 350px;
                padding: 1em 2em;
                border-radius: 4px;
            }

            button.btn.btn-primary.rcpt {
                position: relative;
                left: 125px;
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 5px;

            }

            .nav-user-icon.deg {
                color: #fff;
                position: relative;
                left: 15px;
            }

            .button2 {
                text-align: center;
                /* Aligns content to the center */
            }

            .nav.nav-tabs {
                display: inline-block;
                /* Displays the navigation tabs inline */
            }

            .post-row.butnFlx {
                display: flex;
                justify-content: space-between;
            }
        </style>

    </head>

    <body>

        <section>
            <div class="topBar">
                <div class="rightHalf">
                    <ul>
                        <li><a href="#">
                                <?php echo $name ?>
                            </a></li>
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="tuition.php" class="nav-link">Tuition Platform</a>
                    </li>
                    <li class="nav-item">
                        <a href="bookShop.php" class="nav-link ">Book Shop</a>
                    </li>

                    <li class="nav-item actives">
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


                </ul>
                <div class="robot">
                <a href="robot2.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
            </div>
            </div>
        </nav>
        <!-- manu-bar end -->

        <div class="hr"></div>

        <!-- social media design start -->

        <!-- social media nav design start -->
        <nav class="socialNav">
            <div class="nav-left">
                <a href="studentLoan.php">
                    <p>Student Loan</p>
                </a>

                <ul>
                    <li> <a href="dashboardLoan.php">Message</a> </li>
                </ul>

                <ul>
                    <li> <a href="myPostLone.php">My post</a> </li>
                </ul>

                <ul>
                    <li class="act"> <a href="applyHistory2.php">Your apply</a> </li>
                </ul>

                <ul>
                    <li> <a href="requstLoan.php">Request</a> </li>
                </ul>

            </div>

            <div class="nav-right">
                <div class="search-box">
                    <form class="srchFrm" action="searchLoan.php" method="post">
                        <input type="text" name="sr" placeholder="Search amount..." name="search2">
                        <button class="srcBtn" name="search" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <?php

                $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                if (!$conn) {
                    echo 'not connect';
                }

                $sql = "SELECT* FROM studentloanuserinfo WHERE  email = '$email' AND mobile = '$Phone' ";

                $query = $conn->query($sql);

                if ($query->num_rows > 0) {
                    $data = mysqli_fetch_assoc($query);

                    $s_id = $data['id'];
                    $s_name = $data['name'];
                    $s_Phone = $data['mobile'];
                    $s_email = $data['email'];
                    $s_img = $data['img'];
                    $s_address = $data['address'];
                    $designations = $data['designation'];
                    $loneType = $data['loneType'];
                    $nid = $data['nid'];
                }



                ?>



                <div class="nav-user-icon online">
                    <img src="up_img/<?php echo "$s_img"; ?>" alt="No picture" srcset="">
                </div>

                <div class="nav-user-icon deg">
                    <?php echo "$loneType" . " Loan"; ?>
                </div>

            </div>
        </nav>
        <!-- social media nav design end -->


        <!-- social middle design start -->
        <div class="container1">
            <!-- left-side start -->
            <div class="left-sidebar">
                <div class="imp-links">
                    <a href="socialMyAcc2.php"><img src="socialmage/acc.png" alt="">
                        <?php echo "$name" ?>
                    </a>
                    <a href="dashboardLoan.php"><img src="socialmage/friends.png" alt="">Dashboard</a>
                    <a href="#popup-box"><img src="socialmage/pst.png" alt="">Post</a>
                    <a href="#staticBackdrop"><img src="socialmage/pay.png" alt="">Payment</a>
                    <a href="balanceCheck.php"><img src="socialmage/pay.png" alt="">Balance</a>


                </div>

                <div class="shortcut-links">
                    <p>Online Bank</p>

                    <a href="https://www.bangladesh.com/"><img src="socialmage/shortcut-2.webp" alt="">Bangladesh Bank </a>
                  
                </div>
            </div>
            <!-- left-side end -->

            <!-- middle-side start -->
            <div class="main-content">
                <h3 class="myPst">All loan application</h3>
                <hr>


                <div class="containerJobDtails ">

                    <div class="tab-content">

                        <div id="menu1">

                            <div class="main-content">
                                <?php

                                $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                if (!$conn) {
                                    echo 'not connect';
                                }
                                $c = 0;

                                $sql_al = "SELECT* FROM allapplyloan";
                                $result_al = $conn->query($sql_al);
                                while ($data = $result_al->fetch_assoc()) {

                                    $id = $data['id'];
                                    $applyUsrId = $data['applyUsrId'];
                                    $msgRqst = $data['msg'];
                                    $loginUserId = $data['loginUserId'];
                                    $loginUserEmail = $data['loginUserEmail'];
                                    $applyUserEmail = $data['applyUserEmail'];
                                    $applyPostNum = $data['applyPostNum'];
                                    $decission = $data['decission'];

                                    if ($user_id == $loginUserId && $email == $loginUserEmail) {



                                        $sql = "SELECT* FROM loanposttrk where id = $applyPostNum";

                                        $result = $conn->query($sql);

                                        while ($data = $result->fetch_assoc()) {

                                            $id = $data['id'];
                                            $names = $data['name'];
                                            $Phone = $data['phone'];
                                            $sl_email = $data['email'];
                                            $address = $data['address'];

                                            $DateTime = $data['time'];
                                            $duration = $data['duration'];
                                            $interest = $data['interest'];
                                            $designation = $data['designation'];
                                            $loneType_fatch = $data['loneType'];
                                            $nid = $data['nid'];
                                            $msg = $data['msg'];
                                            $imgs = $data['img'];
                                            $amount = $data['amount'];

                                            if ($decission == "Approved" || $decission == "Reject") {
                                                $JOB_ID = $applyPostNum;
                                                $aplyMail = $loginUserEmail;
                                                $c++;

                                                if ($loneType == "Take") {
                                                    echo "
                                                                    
                                        
                                                            <div class='post-container'>
                                    
                                                            <div class='user-profile'>
                                                            <img src='up_img/$imgs' alt='No picture' >
                                                            <div>
                                                                <p>$names</p>
                                                                <span>$DateTime <i class='fa-solid fa-caret-down'></i></span>
                                                            </div>
                                                        </div>
                                    
                                                        <div class='mn_info' >
                                                        <p>Amount : $amount</p>
                                                    </div>
                                    
                                                        <div class='mid_info'>
                                    
                                                            <div class='mn_info' >
                                                                <p>Duration : $duration</p>
                                                            </div>
                                                            <div class='mn_info' >
                                                            <p>Loan type : $loneType_fatch Loan</p>
                                                        </div>
                                                            
                                                                                
                                                            <div class='mn_info' >
                                                                <p>Designation : $designation</p>
                                                            </div>
                                                        
                                                            <div class='mn_info' >
                                                                <p>Interest :  $interest%</p>
                                                            </div>

                                                            
                                                        </div>   
                                                        
                                                        
                                                    
                                                        <img src='pic/ln.jpg' class='post-img' alt='No img' >      
                                                        <p class='cmnts'>Your comment : <img class='cmtImg' src='up_img/$s_img'>  $msgRqst</p>
                                                        
                                                        <div class='post-row butnFlx'>
                                                        <div class='active-icon'>
                                                            <button style='--content: 'Accept';' name='done' href='https://twitter.com/kamildyrek'>
                                                                
                                                                <a>$decission</a>
                                                                
                                                            </button>
            
                                                        </div>

                                                        <div class='post-profile-icon'>
                                                            <a href='dltLnPst.php?jobId=$JOB_ID&email=$aplyMail'><img src='pic/dlt.png' class='dltPst' alt='No img' ></a>                 
                                                            <a target='_blank' href='https://twitter.com/kamildyrek'><svg
                                                                    style='width:2em;height:2em;position:fixed;top:1em;left:1em;opacity:.8;'
                                                                    viewBox='0 0 24 24'>
                                                                    <path fill='#fff'
                                                                        d='M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z' />
                                                                </svg></a>
                                                        </div>
                                
                                                    </div>
                                    
                                                        </div>
                                                            
                                            
                                                    ";
                                                } else {
                                                    echo "
                                                                    
                                                                        
                                                        <div class='post-container'>
                                
                                                        <div class='user-profile'>
                                                        <img src='up_img/$imgs' alt='No picture' >
                                                        <div>
                                                            <p>$names</p>
                                                            <span>$DateTime <i class='fa-solid fa-caret-down'></i></span>
                                                        </div>
                                                    </div>
                                
                                                    <div class='mn_info' >
                                                    <p>Amount : $amount</p>
                                                </div>
                                
                                                    <div class='mid_info'>
                                
                                                        <div class='mn_info' >
                                                            <p>Duration : $duration</p>
                                                        </div>
                                                        <div class='mn_info' >
                                                        <p>Loan type : $loneType_fatch Loan</p>
                                                    </div>
                                                        
                                                                            
                                                        <div class='mn_info' >
                                                            <p>Designation : $designation</p>
                                                        </div>
                                                    
                                    
                                                    </div>   
                                                  
                                                   
                                             
                                                    <img src='pic/ln.jpg' class='post-img' alt='No img' >      
                                                    <p class='cmnts'>Your comment : <img class='cmtImg' src='up_img/$s_img'>  $msgRqst</p>
                                                   
                                                  
                                                        <div class='post-row butnFlx'>
                                                            <div class='active-icon'>
                                                                <button style='--content: 'Accept';' name='done' href='https://twitter.com/kamildyrek'>
                                                                    
                                                                    <a>$decission</a>
                                                                    
                                                                </button>
               
                                                            </div>

                                                            <div class='post-profile-icon'>
                                                                <a href='dltLnPst.php?jobId=$JOB_ID&email=$aplyMail'><img src='pic/dlt.png' class='dltPst' alt='No img' ></a>                 
                                                                <a target='_blank' href='https://twitter.com/kamildyrek'><svg
                                                                        style='width:2em;height:2em;position:fixed;top:1em;left:1em;opacity:.8;'
                                                                        viewBox='0 0 24 24'>
                                                                        <path fill='#fff'
                                                                            d='M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z' />
                                                                    </svg></a>
                                                            </div>
                                    
                                                        </div>
                                
                                                    </div>
                                                        
                                        
                                                ";
                                                }

                                            } else {

                                                $c++;

                                                if ($loneType == "Take") {
                                                    echo "
                                                                    
                                                                        
                                                                                            <div class='post-container'>
                                                                    
                                                                                            <div class='user-profile'>
                                                                                            <img src='up_img/$imgs' alt='No picture' >
                                                                                            <div>
                                                                                                <p>$names</p>
                                                                                                <span>$DateTime <i class='fa-solid fa-caret-down'></i></span>
                                                                                            </div>
                                                                                        </div>
                                                                    
                                                                                        <div class='mn_info' >
                                                                                        <p>Amount : $amount</p>
                                                                                    </div>
                                                                    
                                                                                        <div class='mid_info'>
                                                                    
                                                                                            <div class='mn_info' >
                                                                                                <p>Duration : $duration</p>
                                                                                            </div>
                                                                                            <div class='mn_info' >
                                                                                            <p>Loan type : $loneType_fatch Loan</p>
                                                                                        </div>
                                                                                            
                                                                                                                
                                                                                            <div class='mn_info' >
                                                                                                <p>Designation : $designation</p>
                                                                                            </div>
                                                                                        
                                                                                            <div class='mn_info' >
                                                                                                <p>Interest :  $interest%</p>
                                                                                            </div>

                                                                                          
                                                                                        </div>   
                                                                                      
                                                                                       
                                                                                 
                                                                                        <img src='pic/ln.jpg' class='post-img' alt='No img' >      
                                                                                        <p class='cmnts'>Your comment : <img class='cmtImg' src='up_img/$s_img'>  $msgRqst</p>
                                                                                        <div class='post-row'>
                                                                                                <div class='active-icon'>

                                                                                                <button style='--content: 'Accept';' name='done' href='https://twitter.com/kamildyrek'>
                                                                                                <div class='left'></div>
                                                                                                <a>$decission...</a>
                                                                                                <div class='right'></div>
                                                                                            </button>

                                                               

                                                                                                </div>
                                                                        
                                                                                            </div>
                                                                    
                                                                                        </div>
                                                                                            
                                                                            
                                                                                    ";
                                                } else {
                                                    echo "
                                                                    
                                                                        
                                                        <div class='post-container'>
                                
                                                        <div class='user-profile'>
                                                        <img src='up_img/$imgs' alt='No picture' >
                                                        <div>
                                                            <p>$names</p>
                                                            <span>$DateTime <i class='fa-solid fa-caret-down'></i></span>
                                                        </div>
                                                    </div>
                                
                                                    <div class='mn_info' >
                                                    <p>Amount : $amount</p>
                                                </div>
                                
                                                    <div class='mid_info'>
                                
                                                        <div class='mn_info' >
                                                            <p>Duration : $duration</p>
                                                        </div>
                                                        <div class='mn_info' >
                                                        <p>Loan type : $loneType_fatch Loan</p>
                                                    </div>
                                                        
                                                                            
                                                        <div class='mn_info' >
                                                            <p>Designation : $designation</p>
                                                        </div>
                                                    
                                    
                                                    </div>   
                                                  
                                                   
                                             
                                                    <img src='pic/ln.jpg' class='post-img' alt='No img' >      
                                                    <p class='cmnts'>Your comment : <img class='cmtImg' src='up_img/$s_img'>  $msgRqst</p>
                                                    <div class='post-row'>
                                                            <div class='active-icon'>

                                                            <button style='--content: 'Accept';' name='done' href='https://twitter.com/kamildyrek'>
                                                            <div class='left'></div>
                                                            <a>$decission...</a>
                                                            <div class='right'></div>
                                                        </button>

                           

                                                            </div>
                                    
                                                        </div>
                                
                                                    </div>
                                                        
                                        
                                                ";
                                                }




                                            }



                                        }

                                    }
                                }




                                if ($c == 0) {
                                    echo "<h4 class='error' >You have not applied yet</h4>";
                                }
                                ?>


                                <!-- middle-side end -->


                            </div>

                        </div>



                    </div>
                </div>

                <!-- middle-side end -->


            </div>

            <!-- social middle design end -->
            <!-- right-side start -->
            <div class="right-sidebar">
                <div class="video">
                    <iframe width="294" height="400" src="https://www.youtube.com/embed/LlbljkO9iy8?autoplay=1&mute=1"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <!-- right-side end -->
        </div>
        <!-- social middle end  -->


        <!-- payment design start -->

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-right">
                            <a href="#" class="box-close">
                                ×
                            </a>
                        </div>
                        <div class="tabs mt-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img class="bks" src="pic/bk.png" width="80">
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                        <img class="upy" src="pic/upy.png" width="80"> </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                    <div class="mt-4 mx-4">
                                        <div class="text-center">
                                            <h5>Bkash</h5>
                                        </div>




                                        <?php

                                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                        if (!$conn) {
                                            echo 'not connect';
                                        }



                                        $sql = "SELECT* FROM sign_up ";

                                        $result = $conn->query($sql);

                                        while ($data = $result->fetch_assoc()) {


                                            $g_name = $data['name'];
                                            $g_Phone = $data['Phone'];
                                            $g_sl_email = $data['email'];
                                            $g_amountBks = $data['amountBks'];
                                            $g_amountNgd = $data['amountNgd'];

                                            if ($g_sl_email == $email) {
                                                $crntBks = $g_amountBks;
                                                $crntNgd = $g_amountNgd;
                                            }
                                        }
                                        ?>


                                        <div class="form mt-3">
                                            <form method="post">
                                                <div class="inputbox">
                                                    <label>Current balance : </label>
                                                    <input type="text" name="crnt_bk_blnc" value="<?php echo "$crntBks"; ?>" class="form-control crntB" readonly>

                                                </div>
                                                <div class="inputbox">
                                                    <input type="number" name="bks_num" minlength="11" maxlength="11" class="form-control" required="required">
                                                    <span>Receiver Bkash Number</span> 
                                                </div>
                                                <div class="inputbox">
                                                    <input type="number" name="given_amount" minlength="11" maxlength="11" class="form-control" required="required">
                                                    <span>
                                                        Tk-BDT
                                                    </span>
                                                </div>

                                                <div class="d-flex flex-row">
                                                   
                                                    <div class="inputbox">
                                                        <input type="password" name="pin" class="form-control" required="required"> <span>Pin</span>
                                                    </div>
                                                </div>
                                                <div class="px-5 pay">
                                                    <button type="submit" class="btn btn-success btn-block" name="bks_pay">Payment</button>
                                                </div>
                                            </form>



                                            <?php

                                            if (isset($_POST['bks_pay'])) {

                                                $crnt_bk_blnc = $_POST['crnt_bk_blnc'];
                                                $bks_num = $_POST['bks_num'];
                                                $month = $_POST['month'];
                                                $given_amount = $_POST['given_amount'];
                                                $pin = $_POST['pin'];


                                                if ($crntBks < $given_amount) {
                                                    echo "<script>window.location.href ='#popup-wrong';</script> ";
                                                } else {

                                                    $_SESSION['gvn_amnt'] = $given_amount;

                                                    $sql = "SELECT* FROM sign_up ";

                                                    $result = $conn->query($sql);

                                                    while ($data = $result->fetch_assoc()) {


                                                        $g_name = $data['name'];
                                                        $g_Phone = $data['Phone'];
                                                        $g_sl_email = $data['email'];
                                                        $g_amountBks = $data['amountBks'];
                                                        $g_amountNgd = $data['amountNgd'];

                                                        if ($g_Phone == $bks_num) {
                                                            $send_crntBks = $g_amountBks;
                                                        }
                                                    }

                                                    $update_my_blnc = $crntBks - $given_amount;
                                                    $update_send_blnc = $send_crntBks + $given_amount;


                                                    $sql3 = "UPDATE sign_up 
                                                            SET amountBks='$update_my_blnc' WHERE email='$email' ";
                                                    $result3 = $conn->query($sql3);

                                                    $sql4 = "UPDATE sign_up 
                                                            SET amountBks='$update_send_blnc' WHERE Phone='$bks_num' ";
                                                    $result4 = $conn->query($sql4);

                                                    if ($result3 == true) {
                                                        if ($result4 == true) {
                                                            echo "<script>window.location.href ='#popup-success';</script> ";
                                                            echo "  <script>
                                                                    var audio = new Audio('AllAudiofile/pay.mp3');
                                                                    audio.play();
                                                                    </script>
                                                                    ";
                                                        }
                                                    }
                                                }
                                            }

                                            ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                    <div class="px-5 mt-5">
                                        <div class="text-center upayT">
                                            <h5>Upay</h5>
                                        </div>

                                        <div class="form mt-3">
                                            <form method="post">
                                                <div class="inputbox">
                                                    <label>Current balance : </label>
                                                    <input type="text" name="crnt_ngd_blc" value="<?php echo "$crntNgd"; ?>" class="form-control crntU" readonly>

                                                </div>
                                                <div class="inputbox">
                                                    <input type="number" name="upy_num" minlength="11" maxlength="11" class="form-control" required="required">
                                                    <span>Receiver Upay Number</span> 
                                                </div>
                                                
                                                <div class="inputbox">
                                                    <input type="number" name="given_amount_ngd" min="1" max="999" class="form-control" required="required">
                                                    <span>
                                                        Tk-BDT
                                                    </span>
                                                </div>
                                            
                                                <div class="inputbox">
                                                        <input type="password" name="name" class="form-control"
                                                            required="required"> <span>Pin</span>
                                                    </div>
                                                <div class="pay px-5">
                                                    <button type="submit" name="ngd_pay" class="btn btn-primary btn-block">Payment</button>
                                                </div>
                                            </form>
                                        </div>

                                        <?php

                                        if (isset($_POST['ngd_pay'])) {

                                            $crnt_ngd_blc = $_POST['crnt_ngd_blc'];
                                            $upy_num = $_POST['upy_num'];
                                          
                                            $given_amount_ngd = $_POST['given_amount_ngd'];
                                            $pin = $_POST['pin'];


                                            if ($crntNgd < $given_amount_ngd) {
                                                echo "<script>window.location.href ='#popup-wrong';</script> ";
                                            } else {

                                                $_SESSION['gvn_amnt'] = $given_amount_ngd;

                                                $sql = "SELECT* FROM sign_up ";

                                                $result = $conn->query($sql);

                                                while ($data = $result->fetch_assoc()) {

                                                    $g_name = $data['name'];
                                                    $g_Phone = $data['Phone'];
                                                    $g_sl_email = $data['email'];
                                                    $g_amountBks = $data['amountBks'];
                                                    $g_amountNgd = $data['amountNgd'];

                                                    if ($g_Phone == $upy_num) {
                                                        $send_crnt_ngd = $g_amountNgd;
                                                    }
                                                }

                                                $update_my_blnc = $crntNgd - $given_amount_ngd;
                                                $update_send_blnc = $send_crnt_ngd + $given_amount_ngd;


                                                $sql3 = "UPDATE sign_up 
                                                           SET amountNgd='$update_my_blnc'  WHERE email='$email' ";
                                                $result3 = $conn->query($sql3);

                                                $sql4 = "UPDATE sign_up 
                                                           SET amountNgd='$update_send_blnc' WHERE Phone='$upy_num' ";
                                                $result4 = $conn->query($sql4);

                                                if ($result3 == true) {
                                                    if ($result4 == true) {
                                                        echo "<script>window.location.href ='#popup-success';</script> ";


                                                        echo "  <script>
                                                                           var audio = new Audio('AllAudiofile/pay.mp3');
                                                                           audio.play();
                                                                           </script>
                                                                   ";
                                                    }
                                                }
                                            }
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- payment design end -->
        <div id="popup-box" class="modal">
            <div class="content1">

                <!-- for take loan -> region, amont, time-duration -->

                <?php
                if ($loneType == "Provide") {

                ?>
                    <div class="title">Please fillup this form</div>
                    <div class="content">
                        <form method="post">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Amount*</span>
                                    <input type="number" name="amount" placeholder="Amount" required>
                                </div>

                                <div class="input-box">
                                    <span class="details">Duration*</span>
                                    <input type="text" name="duration" placeholder="Duration" required>
                                </div>

                                <div class="input-box">
                                    <span class="details">Interest(%)*</span>
                                    <input type="number" name="interest" placeholder="Interest(%)">
                                </div>


                            </div>

                            <div class="button">
                                <input type="submit" name="postProvide" value="Post">
                            </div>
                        </form>

                        <?php

                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                        if (!$conn) {
                            echo 'not connect';
                        }


                        if (isset($_POST['postProvide'])) {
                          
                        
                                $c++;
                            $amount = $_POST['amount'];
                            $duration = $_POST['duration'];
                            $interest = $_POST['interest'];


                            $sql = "INSERT INTO loanpost
                                (name,email,phone,address,amount,duration,interest,designation,loneType,nid,img)
                                VALUES('$s_name','$s_email','$s_Phone','$s_address','$amount','$duration','$interest','$designations','$loneType', '$nids','$s_img')";

                            $result = $conn->query($sql);


                            $sqlAll = "INSERT INTO loanpostTrk
                                (name,email,phone,address,amount,duration,interest,designation,loneType,nid,img)
                                VALUES('$s_name','$s_email','$s_Phone','$s_address','$amount','$duration','$interest','$designations','$loneType', '$nids','$s_img')";

                            $resultAll = $conn->query($sqlAll);

                            echo "<script>window.location.href ='myPostLone.php';</script> ";
                             } 
                        ?>



                    </div>
                <?php
                } else {

                ?>
                    <div class="title">Please fillup this form</div>
                    <div class="content">
                        <form method="post">
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Why do want to take loan?*</span>
                                    <textarea name="msg" placeholder="Why are you take loan?"></textarea>
                                </div>


                                <div class="input-box">
                                    <span class="details">Duration*</span>
                                    <input type="text" name="duration" placeholder="Duration" required>
                                </div>


                                <div class="input-box">
                                    <span class="details">Amount</span>
                                    <input type="number" name="amount" placeholder="Amount" required>
                                </div>
                            </div>

                            <div class="button">
                                <input type="submit" name="postL" value="Post">
                            </div>
                        </form>

                        <?php

                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                        if (!$conn) {
                            echo 'not connect';
                        }


                        if (isset($_POST['postL'])) {
                          
                                $c++;
                                $amount = $_POST['amount'];
                                $duration = $_POST['duration'];
                                $msg = $_POST['msg'];
    
    
                                $sql = "INSERT INTO loanpost
                                (name,email,phone,address,amount,duration,interest,designation,loneType,msg,nid,img)
                                                   VALUES('$s_name','$s_email','$s_Phone','$s_address','$amount','$duration','$interest','$designations','$loneType', '$msg' ,'$nids','$s_img')";
    
                                $result = $conn->query($sql);
    
    
                                $sqlAll = "INSERT INTO loanpostTrk
                                (name,email,phone,address,amount,duration,interest,designation,loneType,msg,nid,img)
                                VALUES('$s_name','$s_email','$s_Phone','$s_address','$amount','$duration','$interest','$designations','$loneType', '$msg' , '$nids','$s_img')";
    
                                $resultAll = $conn->query($sqlAll);
    
                                echo "<script>window.location.href ='myPostLone.php';</script> ";
                        }
                        
                        ?>



                    </div>

                <?php
                }

                ?>



                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <div id="popup-wrong" class="modal">
            <div class="content_wrng">


                <div class="title_wr text-center">
                    <img src="pic/w.gif" alt="" srcset="">
                </div>
                <div class="content">

                    <div class="btn1">
                        <h3 class="cmnt">Your balance is low!!!</h3>
                    </div>

                </div>

                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <div id="popup-success" class="modal">
            <div class="content_succ">




                <div class="title_wr text-center">
                    <img src="pic/y.gif" alt="" srcset="">
                </div>
                <div class="content">

                    <div class="btn1">

                        <h3 class="cmnt2">Payment has been done</h3>

                        <form action="printRecept2.php" method="post">

                            <button type="submit" name="m_rcpt" class="btn btn-primary rcpt">Money Receipt</button>

                        </form>
                    </div>



                </div>

                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <div id="popup-box2" class="modal">


            <div class="content1">


                <div class="title">Are you confirm to delete?</div>
                <div class="content">

                    <div class="btn1">
                        <form action="applyHistory.php" method="post">
                            <!-- <input type="submit" name="submitY" value="Yes"> -->
                            <button type="submit" name="submitY" class="btn btn-primary">Yes</button>
                            <button type="submit" name="submitN" class="btn btn-danger">No</button>

                        </form>
                    </div>


                    <?php

                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                    if (!$conn) {
                        echo 'not connect';
                    }

                    if (isset($_POST['submitY'])) {



                        $sql = "DELETE FROM applyjob WHERE jobId = '$JOB_ID' AND postId = '$post_id'";

                        $result = $conn->query($sql);

                        if ($result == true) {
                            echo "<script>window.location.href ='applyHistory.php';</script> ";

                        } else {
                            echo "error";
                        }
                    }

                    if (isset($_POST['submitN'])) {

                        echo "<script>window.location.href ='applyHistory.php';</script> ";

                    }


                    ?>



                </div>

                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <div id="popup-box3" class="modal">
            <div class="content1">


                <div class="title">Are you confirm to study with this teacher?</div>
                <div class="content">

                    <div class="btn1">
                        <form action="tuition.php" method="post">
                            <!-- <input type="submit" name="submitY" value="Yes"> -->
                            <button type="submit" name="confirm" class="btn btn-primary">Confirm</button>
                            <button type="submit" name="no" class="btn btn-danger">No</button>

                        </form>
                    </div>


                    <?php

                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                    if (!$conn) {
                        echo 'not connect';
                    }

                    if (isset($_POST['confirm'])) {

                        //  echo "<script>alert('$acceptId');</script> ";
                
                        $sql5 = "SELECT* FROM student WHERE phone = $Phone ";

                        $result5 = $conn->query($sql5);

                        while ($data = $result5->fetch_assoc()) {

                            $s_designation = $data['designation'];
                            $sl_clg_un = $data['sl_clg_un'];

                        }

                        $sql = "SELECT* FROM student WHERE id = $acceptId ";

                        $result = $conn->query($sql);

                        while ($data = $result->fetch_assoc()) {

                            $add_id = $data['id'];
                            $add_name = $data['name'];
                            $add_Phone = $data['phone'];
                            $add_sl_email = $data['email'];
                            $add_address = $data['address'];

                            $add_DateTime = $data['DateTime'];
                            $add_class = $data['class'];
                            $add_version = $data['version'];
                            $add_day_time = $data['day_time'];
                            $add_sl_clg_un = $data['sl_clg_un'];
                            $add_designation = $data['designation'];
                            $add_subject = $data['subject'];
                            $add_salary = $data['salary'];
                            $add_img = $data['img'];

                        }


                        $sql = "INSERT INTO all_record
                                                (log_usr_id,log_usr_name,log_usr_email,log_usr_status,log_usr_phone,log_usr_adrs,log_usr_img,log_usr_cl_nm,add_prsn_id,add_prsn_name,add_prsn_email,add_prsn_phone,add_prsn_status,add_usr_img,add_usr_time,add_prns_cls,log_sub,add_sub)
                                                VALUES('$s_id','$s_name','$s_email','$s_designation','$s_Phone','$s_address','$s_img','$s_class','$add_id','$add_name','$add_sl_email','$add_Phone','$add_designation','$add_img','$add_day_time','$add_class', '$add_subject', '$add_subject')";


                        $result = $conn->query($sql);

                        $sql = "DELETE FROM student WHERE id = '$acceptId'";
                        $result = $conn->query($sql);
                        echo "<script>window.location.href ='dashboard.php';</script>";


                    }

                    if (isset($_POST['no'])) {

                        echo "<script>window.location.href ='applyHistory.php';</script> ";

                    }


                    ?>



                </div>

                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <div id="popup-box4" class="modal">
            <div class="content1">


                <div class="title">Are you confirm you want to teach this student? </div>
                <div class="content">

                    <div class="btn1">
                        <form action="tuition.php" method="post">
                            <!-- <input type="submit" name="submitY" value="Yes"> -->
                            <button type="submit" name="confirmT" class="btn btn-primary">Confirm</button>
                            <button type="submit" name="noT" class="btn btn-danger">No</button>

                        </form>
                    </div>


                    <?php

                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                    if (!$conn) {
                        echo 'not connect';
                    }

                    if (isset($_POST['confirmT'])) {

                        // echo "<script>alert('$acceptIdstnt');</script> ";
                

                        $sql5 = "SELECT* FROM student WHERE phone = $Phone ";

                        $result5 = $conn->query($sql5);

                        while ($data = $result5->fetch_assoc()) {

                            $s_designation = $data['designation'];
                            $sl_clg_un = $data['sl_clg_un'];

                        }




                        $sql = "SELECT* FROM student WHERE id = $acceptIdstnt ";

                        $result = $conn->query($sql);

                        while ($data = $result->fetch_assoc()) {

                            $add_id = $data['id'];
                            $add_name = $data['name'];
                            $add_Phone = $data['phone'];
                            $add_sl_email = $data['email'];
                            $add_address = $data['address'];

                            $add_DateTime = $data['DateTime'];
                            $add_class = $data['class'];
                            $add_version = $data['version'];
                            $add_day_time = $data['day_time'];
                            $add_sl_clg_un = $data['sl_clg_un'];
                            $add_designation = $data['designation'];
                            $add_subject = $data['subject'];
                            $add_salary = $data['salary'];
                            $add_img = $data['img'];

                        }



                        $sql = "INSERT INTO all_record
                                                (log_usr_id,log_usr_name,log_usr_email,log_usr_status,log_usr_phone,log_usr_adrs,log_usr_img,log_usr_cl_nm,add_prsn_id,add_prsn_name,add_prsn_email,add_prsn_phone,add_prsn_status,add_usr_img,add_usr_time,add_prns_cls,log_sub,add_sub)
                                                VALUES('$s_id','$s_name','$s_email','$s_designation','$s_Phone','$s_address','$s_img','$s_class','$add_id','$add_name','$add_sl_email','$add_Phone','$add_designation','$add_img','$add_day_time','$add_class', '$add_subject', '$add_subject')";





                        $result = $conn->query($sql);

                        $sql = "DELETE FROM student WHERE id = '$acceptIdstnt'";
                        $result = $conn->query($sql);
                        echo "<script>window.location.href ='dashboard.php';</script>";
                    }

                    if (isset($_POST['noT'])) {

                        echo "<script>window.location.href ='applyHistory.php';</script> ";

                    }


                    ?>



                </div>

                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $(".nav-tabs a").click(function () {
                    $(this).tab('show');
                });
                $('.nav-tabs a').on('shown.bs.tab', function (event) {
                    var x = $(event.target).text();         // active tab
                    var y = $(event.relatedTarget).text();  // previous tab
                    $(".act span").text(x);
                    $(".prev span").text(y);
                });
            });
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
            echo "<script src='js/indexR2.js' > </script> ";
        }

        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


    </body>

    </html>

    <?php
} else {
    header("location:index1.php");
}

?>