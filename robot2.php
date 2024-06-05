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
        .pp{
            color : #000 !important;
        }

        .robot {
            float: right;
            width: 65px;
            right:0px;
            position:relative;
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
         
        .robotPic {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            margin: 13px auto;
        }

        .robotImg {
            width: 167px;
        }

        .mouth {
            width: 22px;
            height: 16px;
            background-color: white;
            position: absolute;
            bottom: 0;
            left: 50%;
            top: 197.5px;
            transform: translateX(-50%);
            border-radius: 50% 50% 0 0;
            animation: talk 0.3s infinite alternate;
            animation-play-state: paused;
        }

        @keyframes talk {
            0% {
                transform: translateX(-50%) scaleY(1);
            }

            50% {
                transform: translateX(-50%) scaleY(0.5);
            }

            100% {
                transform: translateX(-50%) scaleY(1);
            }
        }

        .texts {
            height: 245px;
        }

        p.replay {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            padding: 5px;
            border-radius: 5px;
            color: #fff !important;
        }
        p {
            background: -webkit-linear-gradient(left, #ad431a, #00c6ff);
            color: #f9f1f1 !important;
            padding: 5px;
            border-radius: 5px;
            font-weight: 400;
        }

        .texts {
            height: 245px;
            overflow-y: auto;
            padding: 10px;
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="allKidsBook.php">Kids study <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="clk nav-link" onclick="showPopup()">Tuition Platform</a>
                </li>
                <li class="nav-item">
                    <a class="clk nav-link" onclick="showPopup()">Book Shop</a>
                </li>
                <li class="nav-item">
                    <a class="clk nav-link" onclick="showPopup()">Student Fund</a>
                </li>
                <li class="nav-item">
                    <a class="clk nav-link" onclick="showPopup()">Study Abroad</a>
                </li>
                <li class="nav-item">
                   
                </li>
            </ul>

            <div class="robot">
                <a href="robot2.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
            </div>

        </div>

    </nav>
    <!-- manu-bar end -->


    <div class="hr"></div>

    <div class="robot_part">
        <div class="head">
            <div class="mouth" id="mouth"></div>
            <div class="robotPic">
                <img class="robotImg" src="pic/file.png" alt="">
            </div>
        </div>

    </div>

    <div class="container">
            <div class="texts">
                <!-- <p>Hello Bejoy</p> -->

            </div>
    </div>

         <!-- show poppup start -->
        
         <div id="popup" class="popup" style="display:none;"> 
            <p class="pp">Dear user you have to login first.</p>
            <button class="popClsBtn" onclick="hidePopup()">Close</button>
        </div>
        <!-- show poppup end -->

    <script src="js/indexMainRobot2.js"></script>
   
   <script>
            function showPopup() {
                // Display the popup
                document.getElementById('popup').style.display = 'block';
            }

            function hidePopup() {
                // Hide the popup
                document.getElementById('popup').style.display = 'none';
            }
    </script>
</body>

</html>

<?php
} else {
    header("location:index1.php");
}

?>