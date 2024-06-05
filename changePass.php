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
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="pic/Logo.png" type="pic/icon">

        <title>Education World</title>


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



        <style>
            body {
                font-size: 14px;
                line-height: 1.42857143;
                color: #333333;
                overflow-x: hidden;
            }

            .texts p {
                position: relative !important;
                font-size: 12px !important;
                top: 10px !important;
                padding-left: 30px !important;
                font-family: sans-serif !important;
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
                position: relative;
                top: -10px
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
                margin-bottom: 30px;
                overflow: hidden;
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
                margin-top: 44px;
                position: relative;
            }

            .home img {
                width: 50px;
                border-radius: 13px;
            }

            .breadcrumb {
                display: flex;
                -ms-flex-wrap: wrap !important;
                flex-wrap: wrap !important;
                padding: 0.75rem 1rem !important;
                margin-bottom: 1rem !important;
                list-style: none !important;
                background-color: #e9ecef !important;
                border-radius: 0.25rem !important;
                position: relative !important;
                top: 15px !important;
            }

            .frmDivCngPass {
                position: relative;
                top: -35px;
            }

            div#content {
                position: relative;
                top: -77px;
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
                top: 20px;
                font-family: fantasy;
                font-weight: bold;
                font-size: 20px;
            }

            li.nav-item a {
                cursor: pointer;
            }

            .titleTxt a img {
                width: 25px;
            }
        </style>

        <style>
            .row {
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
                background: black !important;
            }

            input {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
            }

            input.btss {
                width: 20%;
            }

            .form-check {
                position: relative;
                display: block;
                padding-left: 1.25rem;
                top: -14px !important;
            }

            label.titleLable {
                position: relative;
                top: 8px;
            }

            input[type=submit] {
                color: white;
                background: #4643b5;
                cursor: pointer;
                margin-bottom: 35px;
            }

            input[type=checkbox],
            input[type=radio] {
                box-sizing: border-box;
                padding: 0;
                width: 20px !important;
            }

            .container {
                background-color: #f1f1f100;
                position: relative;
                top: 45px;
                padding-bottom: 1px;
            }

            #message {
                display: none;
                background: #f1f1f1;
                color: #000;
                position: relative;
                padding: 20px;
                top: 20px;
            }

            #message p {
                padding: 10px 35px;
                font-size: 18px;
            }

            /* Add a green text color and a checkmark when the requirements are right */
            .valid {
                color: green;
            }

            .valid:before {
                position: relative;
                left: -35px;
                content: "✔";
            }

            /* Add a red text color and an "x" when the requirements are wrong */
            .invalid {
                color: red;
            }

            .invalid:before {
                position: relative;
                left: -35px;
                content: "✖";
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

        <div id="content" class="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index2.php">Home / </a></li>
                        <li> My Account / </li>
                        <li> Change password</li>
                    </ul>
                </div>


                <div class="col-md-12">
                    <div class="box">
                        <div class="allDetails">
                            <h1>Change password</h1>
                            <div id="Paris" class="tabcontent recent-grid">
                                <div class="frmDivCngPass">
                                    <div class="container">
                                        <form method="post">
                                            <label class="titleLable" for="usrname">Current Password</label>
                                            <input type="password" id="usrname" value="<?php echo "$Password"; ?>"
                                                name="currentPass" required>

                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" onclick="myFunction1()"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Show Password
                                                </label>
                                            </div>

                                            <label class="titleLable" for="psw">New Password</label>
                                            <input type="password" id="psw" name="newPass"
                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                                required>

                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" onclick="myFunction2()"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Show Password
                                                </label>
                                            </div>

                                            <label class="titleLable" for="usrname">Confirm Password</label>
                                            <input type="password" id="pswd" name="comfPass" required>

                                            <div class="form-check">

                                                <input class="form-check-input" type="checkbox" onclick="myFunction3()"
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Show Password
                                                </label>
                                            </div>



                                            <input type="submit" name="submit" value="Change Password">
                                        </form>


                                        <?php

                                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                        if (!$conn) {
                                            echo 'not connect';
                                        }


                                        if (isset ($_POST['submit'])) {
                                            $currentPass = $_POST['currentPass'];
                                            $newPass = $_POST['newPass'];
                                            $comfPass = $_POST['comfPass'];

                                            $sql = "SELECT* FROM sign_up WHERE ConfirmPassword = '$currentPass' ";

                                            $query = $conn->query($sql);

                                            if ($query->num_rows > 0) {
                                                $data = mysqli_fetch_assoc($query);

                                                $Id = $data['user_id'];

                                                if ($newPass == $comfPass) {


                                                    $sql2 = "UPDATE `sign_up` SET `Password` = '$comfPass' , `ConfirmPassword` = '$comfPass'  WHERE `sign_up`.`user_id` = $user_id; ";

                                                    $result = $conn->query($sql2);

                                                    if ($result == true) {
                                                        $alert = "<script>alert('Password has been changed. You have to login again.')</script>";
                                                        echo $alert;
                                                        echo "<script>window.location.href ='logout.php';</script> ";

                                                    }else{
                                                        $alert = "<script>alert('Error')</script>";
                                                        echo $alert;
                                                    }

                                                } else {
                                                    $alert = "<script>alert('Confirm password and new password are not equal')</script>";
                                                    echo $alert;
                                                }

                                            } else {
                                                $alert = "<script>alert('Current password is not matched')</script>";
                                                echo $alert;
                                            }


                                        }
                                        ?>



                                    </div>

                                    <div id="message">
                                        <h3>Password must contain the following:</h3>
                                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                        <p id="number" class="invalid">A <b>number</b></p>
                                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>



                </div>



            </div>

        </div>


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

            function myFunction1() {
                var x = document.getElementById("usrname");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

            function myFunction2() {
                var x = document.getElementById("psw");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }

            function myFunction3() {
                var x = document.getElementById("pswd");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }


        </script>

        <script>
            var myInput = document.getElementById("psw");
            var letter = document.getElementById("letter");
            var capital = document.getElementById("capital");
            var number = document.getElementById("number");
            var length = document.getElementById("length");


            myInput.onfocus = function () {
                document.getElementById("message").style.display = "block";
            }


            myInput.onblur = function () {
                document.getElementById("message").style.display = "none";
            }


            myInput.onkeyup = function () {

                var lowerCaseLetters = /[a-z]/g;
                if (myInput.value.match(lowerCaseLetters)) {
                    letter.classList.remove("invalid");
                    letter.classList.add("valid");
                } else {
                    letter.classList.remove("valid");
                    letter.classList.add("invalid");
                }

                var upperCaseLetters = /[A-Z]/g;
                if (myInput.value.match(upperCaseLetters)) {
                    capital.classList.remove("invalid");
                    capital.classList.add("valid");
                } else {
                    capital.classList.remove("valid");
                    capital.classList.add("invalid");
                }


                var numbers = /[0-9]/g;
                if (myInput.value.match(numbers)) {
                    number.classList.remove("invalid");
                    number.classList.add("valid");
                } else {
                    number.classList.remove("valid");
                    number.classList.add("invalid");
                }

                if (myInput.value.length >= 8) {
                    length.classList.remove("invalid");
                    length.classList.add("valid");
                } else {
                    length.classList.remove("valid");
                    length.classList.add("invalid");
                }
            }
        </script>

            <script>
                document.addEventListener('keyup', (e) => {  // Add an event listener for 'keyup' event
                  navigator.clipboard.writeText('');        // Clear the clipboard content
                  alert('Screenshot Disabled');              // Show an alert message
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


    </body>

    </html>



    <?php
} else {
    header("location:index1.php");
}
?>