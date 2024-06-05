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

        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
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

            h6.avl {
                position: relative;
                top: -10px;
                font-size: 14px;
            }

            p.error {
                font-family: sans-serif;
                font-size: 25px;
                text-align: center;
                width: 90%;
                color: #000000a6;
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
                top: -20px;
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
                top: 7px;
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



            @media (min-width: 890px) {
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
                display: none;
            }



            .col-md-12 {
                margin-top: 10px;
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
                top: 15px;
                
            }

            li.nav-item a {
                cursor: pointer;
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 5px;
               
            }

        </style>

        <style>
            .panel {
                height: 270px;
                width: 190px;
                position: relative;
                float: left;
                left: 42px;
                margin-right: 55px;

            &:hover {
                .card {
                filter: blur(1.5px);
                }
                .card1 {
                background-size: 215% 135%;
                }
                .card2 {
                background-size: 115% 115%;
                }
                .card3 {
                background-size: 155% 115%;
                }
                .title {
                color: rgba(255, 255, 255, 0.2);
                }
                .border {
                border: 1px solid rgba(255, 255, 255, 1);
                }
                .slide {
                bottom: 0px;
                }
                .ring:before,
                .ring:after {
                transform: translateX(-50%) translateY(-50%) rotate(310deg);
                }
            }
            }
            .ring,
            .card,
            .border,
            .slide,
            .line {
            display: flex;
            justify-content: center;
            align-items: center;
            }

            .ring {
            color: #fffbf1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            font-size: 170px;
            }

            .card {
            background: #f0ead6;
            position: relative;
            transition: all 1s;
            height: 270px;
            width: 190px;
            border: 1px solid rgba(255, 255, 255, 1);
            }

            .card1 {
            background-repeat: no-repeat;
            background-size: 200% 120%;
            }

            .card.card1 img {
                width: 185px;
                height: 265px;
            }



            .ring:before {
            border-color: rgb(235, 235, 235) rgb(235, 235, 235) rgba(0, 0, 0, 0)
                rgba(0, 0, 0, 0);
            z-index: -1;
            }



            p {
            text-align: center;
            position: absolute;
            font-family: "Playfair Display";
            }

            .title {
            font-size: 36px;
            font-weight: 700;
            transition: all 1s;
            top: 0;
            }

            .para {
            bottom: 0;
            font-size: 16px;
            font-family: "Raleway";
            padding: 20px;
            margin: 0;
            text-align: center;
            }

            .border {
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.5);
            height: 260px;
            width: 180px;
            transition: border 1s;
            overflow: hidden;
            }

            .slide {
            height: 260px;
            width: 180px;
            position: absolute;
            border: 1px solid black;
            bottom: -270px;
            background: rgba(0, 0, 0, 0.5);
            transition: bottom 1s;
            flex-direction: column;
            }

            .fa-plane {
            font-size: 16px;
            }

            .col-sm-6.col-md-3 {
                color: #ffffff94;
            }
        </style>

        <style>

                .col-md-12 {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .leftSd {
                    width: 1030px;
                }
            
                .search-box {
                    font-size: 12px;
                    border: solid 0.3em #000000;
                    display: inline-block;
                    position: relative;
                    border-radius: 2.5em;
                    margin-left: 10px;
                }
                .search-box input[type=text] {
                font-family: inherit;
                font-weight: bold;
                width: 2.5em;
                height: 2.5em;
                padding: 0.3em 2.1em 0.3em 0.4em;
                border: none;
                box-sizing: border-box;
                border-radius: 2.5em;
                transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55) 150ms;
                }
                .search-box input[type=text]:focus {
                outline: none;
                }
                .search-box input[type=text]:focus, .search-box input[type=text]:not(:placeholder-shown) {
                width: 18em;
                transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55);
                }
                .search-box input[type=text]:focus + button[type=submit], .search-box input[type=text]:not(:placeholder-shown) + button[type=submit] {
                transform: rotate(-45deg) translateY(0);
                transition: transform 150ms ease-out 800ms;
                }
                .search-box input[type=text]:focus + button[type=submit]:after, .search-box input[type=text]:not(:placeholder-shown) + button[type=submit]:after {
                opacity: 1;
                transition: top 150ms ease-out 950ms, right 150ms ease-out 950ms, opacity 150ms ease 950ms;
                }
                .search-box button[type=submit] {
                background-color: transparent;
                width: 1.4em;
                height: 1.4em;
                border: 0;
                padding: 0;
                outline: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 0.55em;
                right: 0.55em;
                transform: rotate(-45deg) translateY(2.2em);
                transition: transform 150ms ease-out 150ms;
                }
                .search-box button[type=submit]:before, .search-box button[type=submit]:after {
                content: "";
                background-color: #000000;
                width: 0.3em;
                height: 1.4em;
                position: absolute;
                }
                .search-box button[type=submit]:after {
                transform: rotate(90deg);
                opacity: 0;
                transition: transform 150ms ease-out, opacity 150ms ease-out;
                }


                /* button style */
                .btns a {
                        font-size: 15px;
                        color: #fff;
                        text-decoration: none;
                    }

                    .btns {
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                        background: linear-gradient(122deg, #0000004a, transparent);
                        width: 142px;
                        border: 1px solid #fff9;
                        border-radius: 5px;
                        outline: none;
                        padding: 5px;
                        margin-bottom: 5px;
                    }

                    .btnsVw{
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                        background: linear-gradient(122deg, #0000004a, transparent);
                        width: 90px;
                        border: 1px solid #fff9;
                        border-radius: 5px;
                        outline: none;
                        padding: 5px;
                        margin-bottom: 13px;
                    }

                    .btnsVw a {
                        font-size: 15px;
                        color: #fff;
                        text-decoration: none;
                    }

                    .btns img {
                        width: 20px;
                        height: 20px;
                    
                    }

                    .rows {
                        display: flex;
                        -ms-flex-wrap: wrap;
                        flex-wrap: wrap;
                        margin-right: -15px;
                        margin-left: -15px;
                        background-color: #fff !important;
                        box-sizing: border-box !important;
                        box-shadow: 0px 1px 5px rgb(0 0 0 / 50%) !important;
                        padding: 25px !important;
                        margin-bottom: 20px !important;
                        overflow-y: auto !important;
                        height: 500px;
                    }


                /* button style */

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
                        <li><a href="cart.php">Shopping cart</a></li>
                        <li><a href="order.php">Order history</a></li>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  href="tuition.php" class="nav-link">Tuition Platform</a>
                    </li>
                    <li class="nav-item actives">
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


                </ul>
                <div class="robot">
                    <a href="robot2.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
                </div>
            </div>
        </nav>


        <div class="hr"></div>



        <div id="content" class="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="leftSd">
                        <ul class="breadcrumb">
                            <li><a href="index2.php">Home</a></li>
                            <li>Book Shop</li>
                          
                        </ul>

                    </div>
                 
                    <div class="rightSd">
                        <form action="searchBook.php" method="post" class="search-box">
                            <input type="text" name="value" placeholder=" "/>
                            <button  type="submit" name="search"></button>
                        </form>
                    </div>

                </div>

                <div class="col-md-3">
                    <?php

                    include("includes/sidebar4.php");

                    ?>
                </div>
                <div class="col-md-9">
                    <div class="box">
                        <h1>Book Shop</h1>
                        <h4>You can order book.</h4>
                        <p>
                            This is online book shop. Here you can order all types of book(s).
                        </p>
                    </div>

                    <div class="row rows">
                        
                        <div class="container">

                        <?php
                                
                                    

                                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                        if (!$conn) {
                                            echo 'not connect';
                                        }

                                        $cnt = 0;
                                       
                                        if (isset($_POST['search'])) {
                                            $value = $_POST['value'];
                                            
                                                $sql6 = "SELECT * FROM product WHERE peoduct_name LIKE '%$value%'";
                                                $result = $conn->query($sql6);
                                      
                                                while ( $data = $result->fetch_assoc()) {
                                                    $productId = $data['id'];   
                                                    $peoduct_name = $data['peoduct_name'];
                                                    $writer_name = $data['writer_name'];
                                                    $product_price = $data['product_price'];
                                                    $discount = $data['discount'];
                                                    $level_scl_clg_uni = $data['level_scl_clg_uni'];
                                                    $stock_product = $data['stock_product'];
                                                    $img = $data['img'];      
                                                    
                                                    $cnt++;

                                                    echo "
                                                    
                                                    <div class='panel'>
                                                    <div class='ring'>
                                                    <div class='card card1'>
                                                        <img src='up_img/$img' alt='' srcset=''>
                                                    </div>
                                                    <div class='border'>
                                                       
                                                        <div class='slide'>
                                                        <h6 class='para'>Exciting offer $discount% discount!!!</h6>
                                                        <div class='line'>
                                                           <h6 class='para'>$product_price TK</h6>
                                                        </div>
                                                        <div class='line'>
                                                            <h6 class='avl'>Available $stock_product piece</h6>
                                                        </div>
                    
                                                        <div class='btnsVw'>
                                                         <a href='view.php?Product_id=$productId'>View</a>
                                                        </div>
                    
                                                        <div class='btns'>
                                                        <img src='pic/sp.png' alt='' srcset=''> <a href='cart.php?Product_id=$productId'>Add to cart</a>
                                                        </div>
                    
                                                        </div>
                                                    </div>
                                                    </div>
                                                        </div>
                                                    
                                                    
                                                    ";


                                                 }

                                                 if($cnt == 0){
                                                    echo "  <div class='msgError'><p class='error'>''$value'' this book is not available hare.</p></div> ";
                                                 }

                                        }

                        ?>                         

                         
                        
                        </div>


                    </div>
                </div>

            </div>

        </div>


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

    </body>

    </html>

<?php
} else {
    header("location:index1.php");
}
?>