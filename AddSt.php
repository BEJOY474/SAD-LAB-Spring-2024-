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

            <title>Education World</title>

            <style>
                .texts p {
                    font-size: 12px;
                    position: relative;
                    top: 10px;
                    left: 10px;
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
                    width: 400px !important;
                }

                section {
                    position: sticky;
                    top: 0;
                    z-index: 100;
                }

                nav.navbar.navbar-expand-lg.navbar-light.bg-light {
                    position: sticky;
                    top: 42px;
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

                .left-sidebar {
                flex-basis: 25%;
                position: sticky;
                top: 196px !important;
                align-self: flex-start;
                overflow-y: auto;
              }

                .nav-left ul li {
                    list-style: none;
                    display: inline-block;
                    position: relative;
                    top: 8px;
                    left: 62px;
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
                    opacity: 1;
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
            
                  .modal-content {
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    flex-direction: column;
                    width: 100%;
                    pointer-events: auto;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid rgba(0,0,0,.2);
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

                .content_succ{
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

            </style>

        </head>

    <body>

        <?php 
                                            $conn = new mysqli('localhost','root','','studyabroad');
                                            if(!$conn){
                                                echo 'not connect';
                                            }
                                            
                                                    if($_GET['std_id']){
                                            
                                            
                                                 $St_id = $_GET['std_id'];
                                                    
                                                
                                            }

                                         
                                        ?>
          

                   
            <div class="modal">
                        <div class="content1">
                        <div class="title">Are you sure to apply for this student?</div>
                                    <div class="content">
                                
                                        <div class="btn1">
                                           
                                        <form action="" method="post">
                                                <button type="submit" name="confirmT"  class="btn btn-primary">Yes</button>                    
                                                <button type="submit" name="noT" class="btn btn-danger">No</button>
                                        </form>
                                          
                                        </div>
                                

                                                <?php

                                                $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                                if (!$conn) {
                                                    echo 'not connect';
                                                }

                                           
                                                if (isset($_POST['confirmT'])) {
                                                    
                                                   
                                                    $dec ="Pending...";
                                                   $sql5 = "SELECT* FROM tution_user_info WHERE mobile = $Phone ";

                                                   $result5 = $conn->query($sql5);
 
                                                   while ($data = $result5->fetch_assoc()) {

                                                        $s_id = $data['id'];
                                                        $s_name = $data['name'];
                                                        $s_Phone = $data['mobile'];
                                                        $s_email = $data['email'];
                                                        $s_img = $data['img'];
                                                        $s_address = $data['address'];
                                                        $s_designation = $data['designation'];
                               
                                                        $institut = $data['institut'];
                                                 }

                                                  


                                                  $sql = "SELECT* FROM student WHERE id = $St_id ";

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

                                                       $sql_in = "INSERT INTO applyjob
                                                    (jobId,applyId,postId,decision, applyEmail, postEmail)
                                                    VALUES('$St_id','$user_id','$St_id','$dec', '$email', '$add_sl_email')";
                                                                
                                                  $result = $conn->query($sql_in);

                                              
                                                   echo "<script>window.location.href ='applyHistory.php';</script>";
                                            }
                                                if (isset($_POST['noT'])) {

                                                    echo "<script>window.location.href ='tuition.php';</script> ";

                                                }


                                                ?>



                                    </div>

                                    <a href="tuition.php" class="box-close">
                                        ×
                                    </a>
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