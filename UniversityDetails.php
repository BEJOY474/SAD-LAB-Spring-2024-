<?php
session_start();
$passValueLoginPage = $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];

$CGPA = $_SESSION['CGPA'];
$ENG_PRO = $_SESSION['ENG_PRO'] ;
$SCORE = $_SESSION['SCORE'];
$ENG_PRO2 = $_SESSION['ENG_PRO2'] ;
$OTHER_SCORE = $_SESSION['OTHER_SCORE'] ;
$achiv = $_SESSION['achiv'] ;

if (!empty($passValueLoginPage)) {

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pic/Logo.png" type="pic/icon">
    <title>Education World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    <!-- css style -->

    <link rel="stylesheet" href="CSS-Study/StudyPractice.css">
    <link rel="stylesheet" href="CSS-Study/universityList.css">
    <link rel="stylesheet" href="CSS-Study/SugestUniversity.css">

    <link rel="stylesheet" href="CSS-Study/universityList1.css">
    <link rel="stylesheet" href="CSS-Study/std.css">

      <!-- fontAwesom start -->
        <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
      <!-- fontAwesom end -->



    <style>

        header {
            z-index: 999;
            position: absolute !important;
            top: 0;
            left: 0;
            width: 100%;
            align-items: center;
            transition: 0.5s ease;
        }

        .robot {
            float: right;
            width: 65px;
            right:10px;
            position:relative;
        }

        .varsity-img img {
            width: 400px !important;
            border-radius: 5px !important;
            position: relative !important;
            top: 35px !important;
            height: 403px !important;
        }

        .varsity-title.mt-5.ms-5 {
            width: 630px;
        }

        span.txtBlt {
            font-weight: bold;
            margin-right: 10px;
        }

        main {
            position: relative !important;
            top: 135px !important;
            height: 120vh !important;
        }

        nav.navbar.navbar-expand-lg.navbar-light {
        color: black;
        margin-left: 14px;
        }
        .varsity-title h1 {
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
            font-size: 40px;


        }

        .varsity-img.ms-5.mt-5 {
            width: 422px;
        }

        .varsity-img img {
            width: 400px;
            border-radius: 5px;
        }
    </style>

</head>

<body>
    <header>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span
                                class="sr-only">(current)</span></a>
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

        <!-- <a href="#" class="brand">Anime</a> -->
        <div class="menu-btn"></div>
        <div class="navigation">
            <div class="navigation-items">

            </div>
        </div>


    </header>

    <main>
        <section class="d-flex ">
            <div class="varsity-img ms-3 mt-4 ">
               

            <?php
                $conn = new mysqli('localhost', 'root', '', 'studyabroad');

                if($_GET['universityId']){
                    $universityId = $_GET['universityId'];
                    
                    $rndm_num_app_fee = rand(10,110);
                    $rndm_num_dedline1 = rand(1,31);
                    $rndm_num_dedline2 = rand(1,30);

                    $sql6 = "SELECT * FROM abroad WHERE ID = $universityId ";
                    $result = $conn->query($sql6);


                    while ($data = $result->fetch_assoc()) {
                        $ID = $data['ID'];
                        $CGPAGet = $data['CGPA'];
                        $SCOREGEt = $data['SCORE'];
                        $COUNTRY_NAME = $data['COUNTRY_NAME'];
                        $UNI_IMG = $data['UNI_IMG'];
                        $pubOrPrivate = $data['pubOrPrivate'];
                        $UNIVERSITY = $data['UNIVERSITY'];

                        $RANK_UNI = $data['RANK_UNI'];
                        $COURSE_OFFER = $data['COURSE_OFFER'];
                        $TUITION_FEE = $data['TUITION_FEE'];
                        $LIVING_COST = $data['LIVING_COST'];
                        $FUND = $data['FUND'];
                        $INTERNSHIP = $data['INTERNSHIP'];
                        $TA_RA_GA = $data['TA_RA_GA'];
                        $CONTACT = $data['CONTACT'];
                        $ENG_PRO = $data['ENG_PRO'];

                    
                    echo "
                    <img src='up_img/$UNI_IMG'>

                    </div>
                    <div class='varsity-title mt-5 ms-5 '>
                    <h1>$UNIVERSITY</h1>
                    <hr>
                    <p class='text-black'><span class='txtBlt' >World Rangking : </span>$RANK_UNI</p>
                    <p class='text-black'><span class='txtBlt' >phD/MSc Program : </span>$COURSE_OFFER</p>
                    <p class='text-black'><span class='txtBlt' >CGPA Requirement  : </span>$CGPAGet</p>
                    <p class='text-black'><span class='txtBlt' >English Proficiency  : </span>$ENG_PRO</p>
                    <p class='text-black'><span class='txtBlt' >University Type : </span>$pubOrPrivate</p>
                    <p class='text-black'><span class='txtBlt' >Tuition Fee : </span>$$TUITION_FEE</p>
                    <p class='text-black'><span class='txtBlt' >Living Cost : </span>$$LIVING_COST</p>
                    <p class='text-black'><span class='txtBlt' >University Fund : </span>$FUND</p>
                    <p class='text-black'><span class='txtBlt' >Internship  : </span>$INTERNSHIP</p>
                    <p class='text-black'><span class='txtBlt' >TA/RA/GA : </span>$TA_RA_GA</p>
                    <p class='text-black'><span class='txtBlt' >Session : </span>Fall, Spring</p>
                    <p class='text-black'><span class='txtBlt' >Application Fee : </span>$$rndm_num_app_fee.00</p>
                    <p class='text-black'><span class='txtBlt' >Deadline : </span>Fall - April $rndm_num_dedline1  &  Spring - August $rndm_num_dedline2</p>
                    <p class='text-black'><span class='txtBlt' >Contact : </span>$CONTACT</p>
                    ";

                    }

                }                         
            ?>  

           

            </div>
        </section>

    </main>

    <?php

        include("includes/footer2.php");

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

    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- js link -->

</body>

</html>

<?php
    }else {
    header("location:index1.php");
}
?>