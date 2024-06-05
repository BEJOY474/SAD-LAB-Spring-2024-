<?php
session_start();
$passValueLoginPage = $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];



if (!empty ($passValueLoginPage)) {

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
        <!-- fontAwesom end -->

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="cssFolder/index.css">



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



        <!-- css -->
        <link rel="icon" href="pic/Logo.png" type="pic/icon">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link href="css/animate.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
        <link href="css/style2.css" rel="stylesheet">

        <!-- boxed bg -->
        <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
        <!-- template skin -->
        <link id="t-colors" href="color/default.css" rel="stylesheet">


        <title>Education World</title>

        <style>
            .navbar-light .navbar-brand {
                color: rgb(0 0 0 / 81%);
                font-weight: 500 !important;
            }

            .service-icon {
                margin: 0 20px 65px 0 !important;
                float: left;
            }

            .col-md-6.rt {
                height: 150px;
            }

            .bg-skin {
                background: #0062cc;

            }


            .nav>li>a:hover,
            .nav>li>a:focus {
                text-decoration: none;
                background-color: #251f1f00;
                /* color: blue; */
            }

            .btn-skin {
                background-color: #0062cc;
                border-color: #0062cc;
            }

            .box h4 {
                font-size: 24px;
                color: white;
                font-family: 'IBM Plex Sans', sans-serif;
            }

            .service-desc h5 {
                margin-bottom: 10px;
                color: white;
                font-family: 'IBM Plex Sans', sans-serif;
            }

            .fa-stethoscope:before {
                color: white;
            }

            .fa-h-square:before {
                color: white;
            }

            .fa-wheelchair:before {
                color: white;
            }

            .fa-filter:before {
                color: white;
            }

            .fa-plus-square:before {
                color: white;
            }

            .fa-user-md:before {
                color: white;
                background: #00ffff2b;
            }

            .fa-check:before {
                background: #084dbe;
            }

            .fa-list-alt:before {
                background: #005cd0;
            }

            .fa-hospital-o:before {
                background: #0eacf0de
            }

            .fa-heartbeat:before {
                color: white;
            }

            footer .widget h5 {
                font-size: 20px;
                margin-bottom: 10px;
                text-transform: uppercase;
                color: white;
            }

            .intro-content {
                /*background: url(../img/dummy/bg1.jpg) no-repeat top center;*/
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                padding: 200px 0 60px;
            }
        </style>

        <style>
            .column {
                float: left;
                width: 25%;
                padding: 0 5px;
            }

            .row {
                margin: 0 -5px;
            }


            .row:after {
                content: "";
                display: table;
                clear: both;
            }


            @media screen and (max-width: 600px) {
                .column {
                    width: 100%;
                    display: block;
                    margin-bottom: 10px;
                }
            }


            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                padding: 16px;
                text-align: center;
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                color: white;
            }

            .fa {
                font-size: 50px;
            }

            .row.counter {
                margin-top: 50px;
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                color: white;
                width: 100%;
            }
        </style>

        <style>
            /* voice comendsr */

            button.owl-next {
                position: relative;
                top: 245px !important;

            }

            .iconTxt {
                display: flex;
                justify-content: center;
                position: relative;
                top: 25px;
            }

            .iconTxt h3 {
                color: #fff;
                margin-left: 5px;
                position: relative;
                top: -4px;
            }

            .card p {
                position: relative;
                top: 15px;
            }

            span.num {
                font-weight: bold;
                font-size: 25px;
            }

            i.fa.fa-angle-right {
                font-size: 25px;
                position: relative;
                top: 3px;
            }

            a.btn.btn-skin.btn-lg {
                height: 50px;
            }

            button.owl-prev {
                position: relative;
                top: 245px !important;

            }

            .texts p {
                position: relative;
                font-size: 12px;
                top: 10px;
                padding-left: 30px;
            }

            .container {
                position: relative;
                top: 10px;
            }

            img.allPic {
                width: 46px;
                height: 64px;
            }

            .owl-carousel.owl-theme.owl-loaded {
                height: 85vh;
            }

            header .item .cover .header-content h2 {
                font-weight: 600;
                font-size: 38px;
                color: white;
            }

            header .item .cover .header-content h1 {
                font-weight: 600;
                color: white;
                
            }

            header .item .cover .header-content h4 {
                font-weight: 600;
                color: white;
            }

            header {
                margin-top: -10px;
            }

            header .item {
                height: 110.5vh !important;
                position: relative;
            }

            .item {
                margin: 0px !important;
            }

            marquee {
                color: red;
                font-weight: 800;
                margin-top: 5px;
            }

            i.fas.fa-chalkboard-teacher {
                font-size: 40px;
            }

            .img-responsive,
            .thumbnail>img,
            .thumbnail a>img,
            .carousel-inner>.item>img,
            .carousel-inner>.item>a>img {
                display: block;
                max-width: 100%;
                height: 370px;
            }

            .contact-form {
                background: #f8f9fa;
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
                border-top-right-radius: 10% 50%;
                border-bottom-right-radius: 10% 50%;
            }

            .contact-image {
                margin-top: -35px;
            }

            .contact-image img {
                width: 75px;
                border-radius: 50%;
                rotate: 40deg;
            }

            .container.contact-form {
                margin-top: 60px;
            }

            footer {
                padding: 50px 0 0;
                background: #fff;
            }

            form h3 {
                text-align: center;
                color: #fff;
                margin-top: 8px;
                font-weight: bold;
                padding: 15px;
            }

            input.form-control {
                outline: none;
                height: 45px;
                border-radius: 15px;
                border: none;
                width: 310px;
                margin-left: 180px;
                font-weight: bold;
            }

            textarea.form-control {
                border-radius: 15px;
                font-weight: bold;
            }

            input.btnContact {
                margin: 15px 0px;
                background: #fff;
                color: blue;
                border: none;
                padding: 7px;
                border-radius: 15px;
                font-weight: bold;
                position: relative;
                left: 100px;
                position: relative;
                left: 490px;
                width: 150px
            }

            img.img-responsive {
                border-radius: 10px;
            }

            .robot {
                float: right;
                width: 65px;
                right: -20px;
                position: relative;
            }

            ul.navbar-nav.mr-auto.mt-2.mt-lg-0 {
                position: relative;
                top: 4px;
            }

            h1.db {
                color: white;
            }
        </style>

        <style>
            h3.cmnt2 {
                color: #01139f;
                font-weight: bold;
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
                background: rgb(255 252 252);
                transition: all 0.4s;
                visibility: hidden;
                opacity: 0;
            }



            .modal:target {
                visibility: visible;
                opacity: 1;
            }

            .box-close {
                position: absolute;
                top: 0;
                right: 15px;
                color: #1907a7;
                text-decoration: none;
                font-size: 30px;
                font-weight: bold;
            }

        /* slider edidt */
        /*  */
        header .item .cover .header-content h1 {
                        font-size: 23px;
                        font-weight: 600;
                        margin: 5px 0 6px;
                        word-spacing: 3px;
                        color: white;
                        }
                        /*  */
        /* slider edidt */
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
                       <?php echo" <li><a href='logout.php'>Logout</a></li>"?>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="tuition.php" class="nav-link">Tuition Platform</a>
                    </li>
                    <li class="nav-item">
                        <a href="bookShop.php" class="nav-link ">Book Shop</a>
                    </li>

                    <li class="nav-item">
                        <a href="studentLoan.php" class="nav-link ">Student Loan</a>
                    </li>

                    <li class="nav-item">
                        <a href="studyAbroad.php" class="nav-link ">Study Abroad</a>
                        <!-- <a href="sab.php" class="nav-link ">Study Abroad</a> -->
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


         <!-- slider start -->
         <div class="container">
            <header>
                <div class="owl-carousel owl-theme">


                    <div class="item">
                        <img src="pic/1.jpg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line"></div>
                                    <h2>Education World</h2>
                                    <h1>All in one</h1>
                                    <h4>We are try to help give all imformation for study abroad, get tuition, buy book from
                                        online.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/tm.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white" >Study in USA</h2>
                                    <h1 style="color: white" >Top rank university</h1>
                                    <h4 style="color: white" >Scholarship available, 3 years work permit, good chance to get PR</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(3).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in UK</h2>
                                    <h1 style="color: white">IELTS 5.5, PTE 48, TOFEL 90</h1>
                                    <h4 style="color: white">Up to 100% scholarship,top rank university, 20 hours work
                                        permit per week as international student</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(4).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in AUSTRALIA</h2>
                                    <h1 style="color: white">Top rank university</h1>
                                    <h4 style="color: white">Up to 100% scholarship, 20 hours work permit per week as an
                                        international student, PR opportunity after completed study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(5).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Study in CANADA</h2>
                                    <h1>Scholarship available</h1>
                                    <h4>Full time work permit as an international student, PR opportunity after completed
                                        study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/6.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in GERMANY</h2>
                                    <h1 style="color: white">NO tuition fees</h1>
                                    <h4 style="color: white">Up to 100% scholarship, 20 hours work permit per week as an
                                        international student, PR opportunity after completed study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/7.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Kids study</h2>
                                    <h1>Lota of primary lavel book</h1>
                                    <h4>You Can order kids book with 30% discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/teacher.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Search Tuition student and teacher</h2>
                                    <h1>Open for all</h1>
                                    <h4>Good communication with between student and teacher</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/bk.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Book shop</h2>
                                    <h1 style="color: white">All types of books available</h1>
                                    <h4 style="color: white">You Can order books from book store with 30% discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 times past slider item -->

                    <div class="item">
                        <img src="pic/1.jpg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line"></div>
                                    <h2>Education World</h2>
                                    <h1>All in one</h1>
                                    <h4>We are try to help give all imformation for study abroad, get tuition, buy book from
                                        online.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/2.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Study in USA</h2>
                                    <h1>Top rank university</h1>
                                    <h4>Scholarship available, 3 years work permit, good chance to get PR</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(3).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in UK</h2>
                                    <h1 style="color: white">IELTS 5.5, PTE 48, TOFEL 90</h1>
                                    <h4 style="color: white">Up to 100% scholarship,top rank university, 20 hours work
                                        permit per week as international student</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(4).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in AUSTRALIA</h2>
                                    <h1 style="color: white">Top rank university</h1>
                                    <h4 style="color: white">Up to 100% scholarship, 20 hours work permit per week as an
                                        international student, PR opportunity after completed study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(5).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Study in CANADA</h2>
                                    <h1>Scholarship available</h1>
                                    <h4>Full time work permit as an international student, PR opportunity after completed
                                        study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/6.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in GERMANY</h2>
                                    <h1 style="color: white">NO tuition fees</h1>
                                    <h4 style="color: white">Up to 100% scholarship, 20 hours work permit per week as an
                                        international student, PR opportunity after completed study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/7.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Kids study</h2>
                                    <h1>Lota of primary lavel book</h1>
                                    <h4>You Can order kids book with 30% discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/teacher.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Search Tuition student and teacher</h2>
                                    <h1>Open for all</h1>
                                    <h4>Good communication with between student and teacher</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/bk.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Book shop</h2>
                                    <h1 style="color: white">All types of books available</h1>
                                    <h4 style="color: white">You Can order books from book store with 30% discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- 2 times past slider item -->
                    <div class="item">
                        <img src="pic/1.jpg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line"></div>
                                    <h2>Education World</h2>
                                    <h1>All in one</h1>
                                    <h4>We are try to help give all imformation for study abroad, get tuition, buy book from
                                        online.</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/2.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Study in USA</h2>
                                    <h1>Top rank university</h1>
                                    <h4>Scholarship available, 3 years work permit, good chance to get PR</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(3).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in UK</h2>
                                    <h1 style="color: white">IELTS 5.5, PTE 48, TOFEL 90</h1>
                                    <h4 style="color: white">Up to 100% scholarship,top rank university, 20 hours work
                                        permit per week as international student</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(4).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in AUSTRALIA</h2>
                                    <h1 style="color: white">Top rank university</h1>
                                    <h4 style="color: white">Up to 100% scholarship, 20 hours work permit per week as an
                                        international student, PR opportunity after completed study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/(5).jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Study in CANADA</h2>
                                    <h1>Scholarship available</h1>
                                    <h4>Full time work permit as an international student, PR opportunity after completed
                                        study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/6.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Study in GERMANY</h2>
                                    <h1 style="color: white">NO tuition fees</h1>
                                    <h4 style="color: white">Up to 100% scholarship, 20 hours work permit per week as an
                                        international student, PR opportunity after completed study</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/7.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Kids study</h2>
                                    <h1>Lots of primary lavel book</h1>
                                    <h4>You Can order kids book with 30% discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/teacher.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2>Search Tuition student and teacher</h2>
                                    <h1>Open for all</h1>
                                    <h4>Good communication with between student and teacher</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img src="pic/bk.jpeg" alt="images not found">
                        <div class="cover">
                            <div class="container">
                                <div class="header-content">
                                    <div class="line animated bounceInLeft"></div>
                                    <h2 style="color: white">Book shop</h2>
                                    <h1 style="color: white">All types of books available</h1>
                                    <h4 style="color: white">You Can order books from book store with 30% discount</h4>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </header>
        </div>
    <!-- slider end -->

        <marquee onMouseOver="this.stop()" onMouseOut="this.start()">Welcome to Education World...!!!</marquee>

        <!-- middle part start -->

        <div id="wrapper">

            <section id="intro" class="intro" style="font-family: 'IBM Plex Sans', sans-serif;">
                <div class="intro-content" style="padding-top: 75px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                                    <h2 style="font-family: 'IBM Plex Sans', sans-serif;color: white">Education World</h2>
                                </div>
                                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                                    <h4 class="h-light" style="font-family: 'IBM Plex Sans', sans-serif;color: #efe1e1">
                                        Provide
                                        best quality education and study abroad help for you</h4>
                                </div>
                                <div class="well well-trans" style="background:#ffffff00;color: white">
                                    <div class="wow fadeInRight" data-wow-delay="0.1s">

                                        <ul class="lead-list">
                                            <li><span class="fa fa-check-square-o fa-2x icon-success"></span>
                                                <span class="list"><strong>Kids study</strong><br />Lorem ipsum dolor sit
                                                    amet,
                                                    in verterem persecuti vix, sit te meis</span>
                                            </li>
                                            <li><span class="fa fa-check-square-o fa-2x icon-success"></span>
                                                <span class="list"><strong>Loan for heigher studies</strong><br />Lorem
                                                    ipsum dolor sit amet,
                                                    in verterem persecuti vix, sit te meis</span>
                                            </li>
                                            <li><span class="fa fa-check-square-o fa-2x icon-success"></span>
                                                <span class="list"><strong>Tuition platfrom</strong><br />Lorem ipsum dolor
                                                    sit
                                                    amet, in verterem persecuti vix, sit te
                                                    meis</span>
                                            </li>
                                        </ul>
                                        <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                                            <a href="learnMore2.php" class="btn btn-skin btn-lg"
                                                style="background:white;color:#006ccf">Learn more <i
                                                    class="fa fa-angle-right"></i></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <img src="socialmage/gg.gif" class="img-responsive" alt />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="boxes" class="home-section paddingtop-80"
                style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: white;font-family: 'IBM Plex Sans', sans-serif;">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.3s">
                                <div class="box text-center">

                                    <img src="pic/book.png" class="allPic" alt="" srcset="">
                                    <h4>Kids Book</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque
                                        honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.5s">
                                <div class="box text-center">

                                <img src="pic/loan.png" class="allPic" alt="" srcset="">
                                 
                                    <h4>Student Loan</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque
                                        honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <div class="wow fadeInUp" data-wow-delay="0.7s">
                                <div class="box text-center">
                                <img src="pic/study.png" class="allPic" alt="" srcset="">
                                 
                                    <h4>Study Abroad</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque
                                        honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3 col-md-3">

                            <div class="wow fadeInUp" data-wow-delay="0.9s">
                                <div class="box text-center">

                                <img src="pic/t.png" class="allPic" alt="" srcset=""> 
                                    <h4>Tutor Search</h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, nec te mollis utroque
                                        honestatis, ut utamur molestiae vix, graecis eligendi ne.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="service" class="home-section nopadding paddingtop-60"
                style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);color: white" style="height: 80%;">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <div class="wow fadeInLeft" data-wow-delay="0.2s">
                                <img src="socialmage/g.gif" class="img-responsive" alt />
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">

                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <!-- <span class="fa fa-stethoscope fa-3x"
                                style="color:#0062cc"></span> -->
                                        <img src="pic/book.png" class="allPic" alt="" srcset="">
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Buy Book</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInRight" data-wow-delay="0.2s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <!-- <span class="fa fa-wheelchair fa-3x"
                                style="color:#0062cc"></span> -->
                                        <img src="pic/loan.png" class="allPic" alt="" srcset="">
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Student Loan</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.3s">
                                <div class="service-box">
                                    <div class="service-icon">
                                        <!-- <span class="fa fa-plus-square fa-3x"
                                style="color:#0062cc"></span> -->
                                        <img src="pic/study.png" class="allPic" alt="" srcset="">
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Study Abroad & Information</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-3 col-md-3">

                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="service-box">
                                    <div class="service-icon"> <img src="pic/t.png" class="allPic" alt="" srcset=""> </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Tutor Search</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="wow fadeInRight" data-wow-delay="0.2s">
                                <div class="service-box">
                                    <div class="service-icon"> <img src="pic/g.png" class="allPic" alt="" srcset="">
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">Kids Game</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow fadeInRight" data-wow-delay="0.3s">

                                <div class="service-box">
                                    <div class="service-icon">
                                        <img src="pic/u.png" class="allPic" alt="" srcset="">
                                    </div>
                                    <div class="service-desc">
                                        <h5 class="h-light">University Search</h5>
                                        <p>Vestibulum tincidunt enim in pharetra malesuada.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>
        <!-- middle part end -->

        <!-- section counter start -->
        <div class="row counter">
            <div class="column">
                <div class="card">
                    <p><i class="fa fa-user"></i></p>
                    <div class="iconTxt">
                        <span class="num" data-val="190"> </span>
                        <h3>+</h3>

                    </div>
                    <p>Customers</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p><i class="fa fa-book"></i></p>
                    <div class="iconTxt">
                        <span class="num" data-val="200"> </span>
                        <h3>+</h3>

                    </div>
                    <p>Books</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p><i class="fa fa-smile-o"></i></p>
                    <div class="iconTxt">
                        <span class="num" data-val="100"></span>
                        <h3>+</h3>

                    </div>
                    <p>Success</p>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <p><i class="fa fa-facebook-messenger"></i></p>
                    <div class="iconTxt">
                        <span class="num" data-val="200"></span>
                        <h3>+</h3>

                    </div>
                    <p>Comments</p>
                </div>
            </div>
        </div>
        <!-- section counter end -->

        <!-- contact start -->
        <div class="container contact-form" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="contact-image">
                <center> <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" /></center>

            </div>
            <form method="post" action="index2.php">
                <h3>Feedback about this website</h3>
                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="text" name="name" value="<?php echo "$name"; ?>" class="form-control"
                                placeholder="Your Name *" onkeydown="return alphaOnly(event);" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="<?php echo "$email"; ?>" class="form-control"
                                placeholder="Your Email *" />
                        </div>

                        <div class="form-group">

                            <input type="submit" name="send" class="btnContact" value="Send" />
                        </div>

                    </div>
                    <div class="col-md-6 rt">
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message *"
                                style="width: 65%; height: 100px;" required></textarea>
                        </div>
                    </div>

                </div>
            </form>


            <?php

            $conn = new mysqli('localhost', 'root', '', 'studyabroad');
            if (!$conn) {
                echo 'not connect';
            }


            if (isset ($_POST['send'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $msg = $_POST['msg'];


                $sql = "INSERT INTO cmnt(name,email,msg)
                    values('$name','$email' ,'$msg')";
                $result = $conn->query($sql);

                if ($result == true) {
                    echo "<script>window.location.href ='#popup-success';</script> ";

                }

            }


            ?>


        </div>
        <!-- contact end -->


        <div id="popup-success" class="modal">
            <div class="content_succ">

                <div class="title_wr text-center">
                    <img src="pic/y.gif" alt="" srcset="">
                </div>
                <div class="content">

                    <div class="btn1">

                        <h3 class="cmnt2">Thank you for your comment</h3>


                    </div>



                </div>

                <a href="#" class="box-close">
                    ×
                </a>
            </div>
        </div>

        <h1 class="db">bm</h1>

        <?php

            include ("includes/footer2.php");

        ?>
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
            // SLIDER START

$('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    nav: true,
    mouseDrag: false,
    autoplay: true,
    animateOut: 'slideOutUp',
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 1
        },
        600: {
            items: 1
        },
        800: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// SLIDER END


        </script>

        <script>
            let displayValue = document.querySelectorAll(".num");
            let interval = 7000;

            displayValue.forEach(valueDisplay => {
                let startValue = 0;
                let endValue = parseInt(valueDisplay.getAttribute("data-val"));


                let duration = Math.floor(interval / endValue);

                let counter = setInterval(function () {
                    startValue += 1;
                    valueDisplay.textContent = startValue;

                    if (startValue == endValue) {
                        clearInterval(counter);
                    }

                }, duration);



            });






        </script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>



        <!-- Core JavaScript Files -->
        <script src="js2/jquery.min.js"></script>
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/jquery.easing.min.js"></script>
        <script src="js2/wow.min.js"></script>
        <script src="js2/jquery.scrollTo.js"></script>
        <script src="js2/jquery.appear.js"></script>
        <script src="js2/stellar.js"></script>
        <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="js2/owl.carousel.min.js"></script>
        <script src="js2/nivo-lightbox.min.js"></script>
        <script src="js2/custom.js"></script>
    </body>

    </html>

    <?php
} else {
    header("location:index1.php");
}

?>