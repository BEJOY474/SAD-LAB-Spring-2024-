<?php
session_start();

$email = $_SESSION['email'];
$otp = $_SESSION['otp'];


if (!empty($email)) {



    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="pic/Logo.png" type="pic/icon">
        <title>Verification</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <style>
            body {
                background: rgba(0, 0, 0, 0.6) !important;
            }

            .disabled-overlay:hover {
            cursor: not-allowed;
        }

            .height-100 {
                height: 100vh;
            }

            span a {
                text-decoration: none;
                font-weight: 600;
            }

            .container.height-100.d-flex.justify-content-center.align-items-center {
                position: relative;
                top: -30px;
            }

            .card {
                width: 400px;
                border: none;
                height: 300px;
                box-shadow: 0px 5px 20px 0px #d2dae3;
                z-index: 1;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card h6 {
                color: #100909b5;
                font-size: 20px;
            }

            .inputs input {
                width: 40px;
                height: 40px;
                border: 2px solid #0000ff63;
            }

            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0;
            }

            .card-2 {
                background-color: #fff;
                padding: 10px;
                width: 350px;
                height: 100px;
                bottom: -50px;
                left: 20px;
                position: absolute;
                border-radius: 5px;
            }

            .card-2 .content {
                margin-top: 50px;
            }

            .card-2 .content a {
                color: blueviolet;
            }

            .form-control:focus {
                box-shadow: none;
                border: 2px solid red;
            }

            .validate {
                border-radius: 20px;
                height: 40px;
                background-color: blueviolet;
                border: 1px solid red;
                width: 140px;
            }
            .validate2 {
                border-radius: 20px;
                height: 40px;
                background-color: blueviolet;
                border: 1px solid red;
                width: 140px;
                display: none;
            }
        </style>
    </head>

    <body>
        <div class="container height-100 d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <div class="card p-2 text-center">
                    <h6>Please enter the OTP code <br> to verify your account</h6>
                    <div> <span>A code has been sent to</span> <small>
                            <?php echo "$email"; ?>
                        </small> </div>
                    <form method="post" id="myForm">
                        <div id="otp" class="inputs otp-field d-flex flex-row justify-content-center mt-2"> <input
                                class="m-2 text-center form-control rounded" name="n1" required type="text" id="third"
                                maxlength="1" /> <input class="m-2 text-center form-control rounded" required name="n2" type="text"
                                id="fourth" maxlength="1" /> <input class="m-2 text-center form-control rounded" required name="n3"
                                type="text" id="fifth" maxlength="1" /> <input class="m-2 text-center form-control rounded"
                                name="n4" required type="text" id="sixth" maxlength="1" />
                        </div>
                        <p id='ermsg'></p>
                        <div class="mt-4"> 
                            <button class="btn btn-danger px-4 validate" id="varfiyBtn" type="submit"
                                name="valid">Validate</button> 
                               
                            </div>
                    </form>
                    <button class="btn btn-danger px-4 validate2" id="varfiyBtn2"
                                >Validate</button> 
                </div>
                <div class="card-2">
                    <div class="content d-flex justify-content-center align-items-center"> <span>
                     <?php  echo" <a href='resendOtp.php?email=$email'>Resend OTP</a>" ?></span>
                        <a id="timer" class="text-decoration-none ms-3"></a>
                    </div>
                </div>
            </div>
        </div>

        <?php

        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
        if (!$conn) {
            echo 'not connect';
        }

       
        if (isset($_POST['valid'])) {

            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];
            $n4 = $_POST['n4'];

            $result = $n1 . $n2 . $n3 . $n4;

            if ($result == $otp) {
                echo "<script>window.location.href = 'frgtPassCng.php';</script>";
            } else {
                echo "<script>

                document.addEventListener('DOMContentLoaded', function() {
                    var counter = document.getElementById('ermsg');
                    if(counter) {
                        counter.innerHTML = 'Your OTP is wrong';
                    }
                });
                </script>";
            }



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
            echo "<script src='js/indexR1.js' > </script> ";
        }

        ?>



        <script>
            var timeoutHandle;
            function countdown(minutes, seconds) {
                function tick() {
                    var counter = document.getElementById("timer");
                    counter.innerHTML =
                        minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                    seconds--;
                    if (seconds >= 0) {
                        timeoutHandle = setTimeout(tick, 1000);
                    } else {
                        if (minutes >= 1) {

                            setTimeout(function () {
                                countdown(minutes - 1, 59);
                            }, 1000);
                        } else {

                            if (minutes === 0 && seconds === -1) {
                                var btn = document.getElementById("varfiyBtn");
                                var btn2 = document.getElementById("varfiyBtn2");
                                btn.style.display = "none";
                                
                                btn2.style.backgroundColor = "#ff00009e";
                                btn2.style.display = "ruby";
                                btn2.classList.add("disabled-overlay");
                               
                            }
                        }
                    }
                }
                tick();
            }

            countdown(2, 00);
        </script>

        <script>



            const inputs = document.querySelectorAll(".otp-field input");



            inputs.forEach((input, index) => {
                input.dataset.index = index;
                input.addEventListener("keyup", handleOtp);
                input.addEventListener("paste", handleOnPasteOtp);
            });

            function handleOtp(e) {

                const input = e.target;
                let value = input.value;
                let isValidInput = value.match(/[0-9a-z]/gi);
                input.value = "";
                input.value = isValidInput ? value[0] : "";
                let num;



                let fieldIndex = input.dataset.index;
                if (fieldIndex < inputs.length - 1 && isValidInput) {
                    input.nextElementSibling.focus();
                }

                if (e.key === "Backspace" && fieldIndex > 0) {
                    input.previousElementSibling.focus();
                }

                if (fieldIndex == inputs.length - 1 && isValidInput) {

                }

            }

            function handleOnPasteOtp(e) {
                const data = e.clipboardData.getData("text");
                const value = data.split("");
                if (value.length === inputs.length) {
                    inputs.forEach((input, index) => (input.value = value[index]));

                }
            }



        </script>

    </body>

    </html>

    <?php
} else {
    header("location:resetPass.php");
}

?>