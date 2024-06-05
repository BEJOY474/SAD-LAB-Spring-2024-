
<?php 
        session_start();
     
        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
       
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFolder/LoginLogout.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Login/Sign up</title>
    <link rel="icon" href="pic/Logo.png" type="pic/icon">
    <style>
        audio {
            display: none;
        }
        p#error {
            text-align: center;
            position: relative;
            top: -49px;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="forms-container">
            <div class="singin-singup">
               
                <form action="login.php" class="sing-in-form" method="post">
                    
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn solid">
                    <p class="social-text">Forgot password? <a href="resetPass.php">Reset</a> <a href="index1.php">Or go to home</a>  </p>

                  
                </form>
                <?php
                   
                   $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                   if (!$conn) {
                       echo 'not connect';
                   }
                  
                   if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $Password = $_POST['Password'];

                    $c =0;

                    $sql = "SELECT* FROM sign_up WHERE  email = '$email' AND Password = '$Password' " ;           
                    $query = $conn->query($sql);
            
                    $cnt = 1;$dflt = 0;$id = 1;
                
                    if ($query->num_rows> 0) {
                        $data = mysqli_fetch_assoc($query);
                        $c++;
                        $_SESSION['login'] = 'loginSuccess';
                        $user_id = $data['user_id'];
                        $name = $data['name'];
                        $Phone = $data['Phone'];
                        $email = $data['email'];
                        $Password = $data['Password'];
                        
                        
                        $_SESSION['user_id'] = $user_id;
                        $_SESSION['name'] = $name ;
                        $_SESSION['Phone'] = $Phone;
                        $_SESSION['email'] = $email;
                        $_SESSION['Password'] = $Password;

                        $sqll_l =   "UPDATE sequrity 
                        SET count ='$dflt' WHERE intId ='$id' ";
                    
                        $result = $conn->query($sqll_l);

                        header("location:index2.php");
                   
                    }else{

                        $sql_l = "SELECT* FROM sequrity" ;           
                        $queryy = $conn->query($sql_l);

                        if ($queryy->num_rows> 0) {
                            $data = mysqli_fetch_assoc($queryy);

                            $int = $data['intId'];
                            $count = $data['count'];

                            if($count<2){
                                $cnt = $cnt + $count;
                                $sqll = "UPDATE sequrity 
                                SET count ='$cnt' WHERE intId = '$id' ";
                            
                                $result = $conn->query($sqll);

                                echo '<audio controls autoplay>
                                <source src="AllBackgroundMusic/invalid.mp3" type="audio/mp3">
                                </audio>';
                              
                             
                            }else{

                                $sqlll =   "UPDATE sequrity 
                                SET count ='$dflt' WHERE intId ='$id' ";
                            
                                $result = $conn->query($sqlll);

                                echo '<audio controls autoplay>
                                <source src="AllBackgroundMusic/invalid.mp3" type="audio/mp3">
                                </audio>';
                                
                                $mail = new PHPMailer(true);
    
                                try {
                                
                                    $mail->isSMTP();                                         
                                    $mail->Host       = 'smtp.gmail.com';                    
                                    $mail->SMTPAuth   = true;                              
                                    $mail->Username   = 'munshibejoy@gmail.com';                 
                                    $mail->Password   = 'hpnx ijdo sbmm slpi';                               
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
                                    $mail->Port       = 465;                                   
    
                                    //Recipients
                                    $mail->setFrom('munshibejoy@gmail.com', 'Education World');
                                    $mail->addAddress($email);     
                                
    
                                    //Content
                                    $mail->isHTML(true);                                
                                    $mail->Subject = '!!!Alert!!!';
                                    $mail->Body    = 'Dear user someone try to login your account.Please change your password thank you.</b>';
                                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
                                    $mail->send();
                                   
                                } catch (Exception $e) {
                                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                                }
                            }

                           

                        }
                       
                      
                    }

                    if($c ==0){
                        echo "<p id='error'>Invalid user . Please try again</p>";
                    }
                   }
            
            
            ?>

         
                <form action="login.php" method="post" class="sing-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-mobile"></i>
                        <input type="text" name="Phone" placeholder="Phone Number" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="@gmail.com" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="Password" placeholder="Password" required>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="ConfirmPassword" placeholder="Confirm Password" required>
                    </div>

                    <input type="submit" name="submit" value="submit" class="btn solid">

                    <p class="social-text">It's very easy to Sign up <a href="index1.php">Or go to home</a> </p>
                   
               
                </form>

                <?php

                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                    if (!$conn) {
                        echo 'not connect';
                    }


                    if (isset($_POST['submit'])) {
                        $name = $_POST['name'];
                        $Phone = $_POST['Phone'];
                        $email = $_POST['email'];
                        $Password = $_POST['Password'];
                        $ConfirmPassword = $_POST['ConfirmPassword'];

                        if ($Password == $ConfirmPassword) {

                            $rnd_num = rand(2000,20000);

                            $rnd_num_ngd = rand(1800,19000);

                            $sql = "INSERT INTO sign_up(name,Phone,email,Password,ConfirmPassword, amountBks, amountNgd)
                            values( '$name' , '$Phone','$email' ,'$Password', '$ConfirmPassword', '$rnd_num' , '$rnd_num_ngd')";


                            $sql2 = "INSERT INTO tution_user_info(name,email,mobile)
                            values('$name','$email','$Phone')";

                            $sql3 = "INSERT INTO studentloanuserinfo(name,email,mobile)
                            values('$name','$email','$Phone')";


                            $quary = mysqli_query($conn, $sql);
                            $quary2 = mysqli_query($conn, $sql2);
                            $quary3 = mysqli_query($conn, $sql3);
                            
                            $mail = new PHPMailer(true);

                            try {
                            
                                $mail->isSMTP();                                         
                                $mail->Host       = 'smtp.gmail.com';                    
                                $mail->SMTPAuth   = true;                              
                                $mail->Username   = 'munshibejoy@gmail.com';                 
                                $mail->Password   = 'hpnx ijdo sbmm slpi';                               
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
                                $mail->Port       = 465;                                   

                                //Recipients
                                $mail->setFrom('munshibejoy@gmail.com', 'Education World');
                                $mail->addAddress($email, $name);     
                            

                                //Content
                                $mail->isHTML(true);                                
                                $mail->Subject = 'Customer Registration';
                                $mail->Body    = 'Hii '. $name. ' ..Congratulation your account has been created.</b>';
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                                $mail->send();
                               
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }

                            $alert = "<script>alert('Signup Successfully')</script>";
                            echo $alert;
                        } else {
                            $alert = "<script>alert('Confirm password and password are not equal')</script>";
                            echo $alert;
                        }
                    }


                ?>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Education World</h3>
                    <p>If you are new user then click the sign up button. It's very easy to registration.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>

                <img src="pic/signup.png" class="image" alt="" srcset="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Education World</h3>
                    <p>If you are already registered user then click  sign in button.</p>
                    <button class="btn transparent"  id="sign-in-btn">Sign in</button>
                </div>

                <img src="pic/login.png" class="image" alt="" srcset="">
            </div>
        </div>
    </div>

    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener('click', () => {
          
            container.classList.add("sign-up-mode");
              document.getElementById("error").style.visibility = "hidden";
        });

        sign_in_btn.addEventListener('click', () => {
          
            container.classList.remove("sign-up-mode");
              document.getElementById("error").style.visibility = "hidden";
        });
    </script>

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
                echo"<script src='js/indexR1.js' > </script> ";
            }

    ?>
</body>

</html>