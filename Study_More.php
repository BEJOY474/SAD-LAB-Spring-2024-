
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

    <title>Education World</title>

    <!-- fontAwesom start -->
    <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">

    <!-- fontAwesom end -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cssFolder/index.css">
    <link rel="icon" href="pic/Logo.png" type="pic/icon">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstrap end -->



    <!-- css -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
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

    <!-- section counter design link start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- section counter design link end-->

    <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            width: 35%;
            text-align: center;

        }

        button.popClsBtn {
            outline: none;
            border: none;
            padding: 6px 22px;
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            border-radius: 5px;
            color: #fff;
        }

        div#popup p {
            font-weight: bold;
        }

        a.clk.nav-link {
            cursor: pointer;
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
            font-size: 45px;
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
        }

        ul.navbar-nav.mr-auto.mt-2.mt-lg-0 {
            position: relative;
            top: 4px;
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
    </style>

    <style>
        .title {
            font-size: 40px;
            font-weight: 900;
            margin-top: 50px;
            margin-bottom: 3px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: -webkit-linear-gradient(#3931af, #00c6ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;


        }

        .line {
            width: 37%;
            margin-left: 437px;
            border: 3px solid blueviolet !important;
        }

        .pic1 {
            width: 35%;
            margin-left: 140px;
        }
        .pic4{
            width: 75%;
        }
        .studyPic {
            width: 92%;
        }
        .studyPic4{
            width: 75%;
        }
        .part {
            margin-top: 30px;
            display: flex;
            align-items: center;
        }

        .details {
            margin-left: 134px;
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
        <img src="images/Logo.png" alt="" srcset="">
        <a class="navbar-brand" href="index2.php">Education World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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

            <li class="nav-item">
              <a href="studentLoan.php" class="nav-link ">Student Loan</a>
            </li>

            <li class="nav-item actives">
              <a href="studyAbroad.php" class="nav-link ">Study Abroad</a>
            </li>

            <li class="nav-item">
              <div class="texts">
                <!-- <p></p> -->
              </div>
            </li>


          </ul>
         

        </div>
        <div class="robot">
              <a href="robot2.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
          </div>
      </nav>
      <!-- manu-bar end -->


    <div class="hr"></div>

    <!-- about us -->
    <section>
        <div class="about-title">
            <h1 class="title">About Study Abroad</h1>
            <div class="line"></div>
        </div>
        <!-- part 1 -->
        <div class="part">

            <div class="pic1">
                <img class="studyPic" src="pic/studyPage1.png" alt="">
            </div>
            <div>
                <p class="details" >Here, Fill up this form and provide information Carefully.
                    First of all,<br> enter your CGPA & then select English profiency(IELTS/TOEFL/DUOLINGO/PTE/iTEP/MOI) <br> & provide score, select GRE/GMAT/SAT & provide score. Then choose <br>your notable academic achievements from the dropdown menu if it’s <br> absent not problem. Finally given all the information select “click here”</p>
            </div>
        </div>
        <!-- part 2 -->
        <div class="part">


            <div>
                <p class="details">After the base of cgpa,exam score our website suggest the
                    country where you can study.</p>
            </div>
            <div class="pic1">
                <img class="studyPic" src="pic/studyPage2.png" alt="">
            </div>
        </div>
        <!-- part 3 -->
        <div class="part">

            <div class="pic1">
                <img class="studyPic" src="pic/studyPage3.png" alt="">
            </div>
            <div>
                <p class="details">After select the country our website suggest list of
                    universities .
                    User can search their universities according to  their choice and
                    find perfect university of their career, education goals
                </p>
            </div>
        </div>
        <div class="part">


            <div>
                <p class="details">Finally Select the university from the list student user can
                    find their favourite program,courses,short
                    courses,research paper,conference-journal,important data
                    about scholarship,fellowship,fund,success, etc</p>
            </div>
            <div class="pic4">
                <img class="studyPic4" src="pic/studuPage(4).png" alt="">
            </div>
        </div>
    </section>



    <footer>
        <?php

        include("includes/footer2.php");

        ?>
    </footer>



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

</body>

</html>



<?php
} else {
  header("location:index1.php");
}

?>