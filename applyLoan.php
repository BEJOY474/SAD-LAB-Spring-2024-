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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- bootstrap end -->

        <title>Education World</title>

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
                visibility: visible;
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

            .button {
                display: flex;
                justify-content: space-between;
            }

            .button input[type="submit"] {
                width: 100px;
            }
            .titlePro {
                font-size: 20px;
            }

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

    </head>

    <body>
<?php
  $conn = new mysqli('localhost', 'root', '', 'studyabroad');
  if (!$conn) {
      echo 'not connect';
  }
    if($_GET['id']){
        $new_id = $_GET['id'];


        $sql = "SELECT* FROM loanpost where id = $new_id";

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
        }

    


?>


        <div id="popup-boxApply" class="modal">
            <div class="content1">

                <!-- for take loan -> region, amont, time-duration -->
  
                    <div class="titlePro">Are you confirm to apply?</div>   
                  
                    <div class="content">
                        <form method="post">
                            <div class="postManage">
                                <div class="input-box">
                                    <span class="details">Comment</span>
                                    <textarea name="msg" placeholder="Comment..."></textarea>
                                </div>

                            </div>

                            <div class="button">
                                <input type="submit" name="postProvideYes" value="Yes">
                                <input type="submit" class="nobtn" name="postProvideNo" value="No">
                            </div>
                        </form>

                        <?php

                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                        if (!$conn) {
                            echo 'not connect';
                        }


                        if (isset($_POST['postProvideYes'])) {
                            $decission = "Pending";
                            $msg = $_POST['msg'];
                          

                            $sql = "INSERT INTO allapplyloan
                                (applyUsrId,msg,loginUserId, loginUserEmail, applyUserEmail, applyPostNum,decission)
                                VALUES('$new_id','$msg','$user_id','$email','$sl_email','$new_id','$decission')";
                                $result = $conn->query($sql);

                          

                            echo "<script>window.location.href ='applyHistory2.php';</script> ";
                        }

                        if (isset($_POST['postProvideNo'])) {
                            echo "<script>window.location.href ='studentLoan.php';</script> ";
                        }
                        ?>



                    </div>
               
                 



                <a href="studentLoan.php" class="box-close">
                    ×
                </a>
            </div>
        </div>

 <?php    
    }
    ?>
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