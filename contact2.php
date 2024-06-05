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
<html>
  <head>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- bootstrap end -->



     <!-- css -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
    type="text/css" />
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="css/animate.css" rel="stylesheet" />
    <link
    href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap"
    rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
   
    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/contact.css">

    <style>

        .robot {
            float: right;
            width: 65px;
            right: 0px;
            position: relative;
        }

        body{
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        }

        .navbar-light .navbar-brand {
        color: rgb(0 0 0 / 81%);
        font-weight: 500 !important;
        }

        .texts p {
            position: relative;
            font-size: 12px;
            top: 10px;
            padding-left: 30px;
        }

        input.btnContact {
        position: relative;
        top: 80px;
        }
        .btnContact {
        margin-left: 25% !important;
    }
    .contact-form {
        background: #f8f9fa;
        border-top-left-radius: 10% 50%;
        border-bottom-left-radius: 10% 50%;
        border-top-right-radius: 10% 50%;
        border-bottom-right-radius: 10% 50%;
        }

        .info {
        text-align: center;
        color: #fff;
        font-weight: bold;
        }

        .emrncy{
            color: #fff;
        font-weight: bold; 
        }

        .fb{
            color: #fff;
        font-weight: bold; 
        margin-bottom: 20px;
        }

        h1.ab {
        color: #3a22f3;
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
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  href="tuition.php" class="nav-link">Tuition Platform</a>
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

  <!-- contact us start -->
    <div class="container contact-form"
      style="font-family: 'IBM Plex Sans', sans-serif;">
      <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png"
          alt="rocket_contact" />
      </div>
      <form method="post" action="contact2.php">
        <h3>Drop Us a Message</h3>
        <div class="row">

          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="name" class="form-control"
                           placeholder="Your Name *"  value="<?php echo "$name"; ?>"
                onkeydown="return alphaOnly(event);"  />
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control"
              value="<?php echo "$email"; ?>"  placeholder="Your Email *"  />
            </div>
            <div class="form-group">
              <input type="tel" name="txtPhone" class="form-control"
                placeholder="Your Phone Number *" value="<?php echo "$Phone"; ?>"  minlength="10"
                maxlength="10"  />
            </div>
           
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <textarea name="msg" class="form-control"
                placeholder="Your Message *" style="width: 100%; height: 150px;"
                required></textarea>
            </div>
          </div>

        </div>

      
              <input type="submit" name="btnSubmit" class="btnContact"
                value="Send Message" />
          
      </form>
 
      <?php

$conn = new mysqli('localhost', 'root', '', 'studyabroad');
if (!$conn) {
    echo 'not connect';
}


if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];


    $sql = "INSERT INTO cmnt(name,email,msg)
    values('$name','$email' ,'$msg')";
    $result = $conn->query($sql);

    if($result == true){
        echo "<script>window.location.href ='#popup-success';</script> ";        
    
        }

}


?>


    </div>
  <!-- contact us end -->
  <div id="popup-success" class="modal">
                <div class="content_succ">

                            <div class="title_wr text-center">
                                <img src="pic/y.gif" alt="" srcset="">
                            </div>
                            <div class="content">
                        
                                <div class="btn1">

                                    <h3 class="cmnt2">Thank you for your message</h3>

                                 
                                </div>
                        

                                        
                            </div>

                            <a href="#" class="box-close">
                                ×
                            </a>
                </div>
  </div>  
 
  <!-- info. start -->
  <div class="info">
        <h2 class="emrncy">Emergency Contact</h2>
        <p>Phone : 01406480752</p>

        <p>Email : edworld212@gmail.com</p>

        <p class="fb">Facebook page : www.edWorld/fb.com</p>

        
  </div>

  <h1 class="ab">jojo</h1>
  <!-- info. end -->

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
