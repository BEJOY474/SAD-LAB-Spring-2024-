<?php 
        session_start(); 
		
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
	<meta name="viewport" content= 
		"width=device-width, initial-scale=1.0"> 
        <title>Forgot password/Reset</title>
        <link rel="icon" href="pic/Logo.png" type="pic/icon">

	<style> 
		body { 
			margin: 0; 
			padding: 0; 
			display: flex; 
			align-items: center; 
			justify-content: center; 
			height: 100vh; 
			background-color: #f0f0f0; 
			font-family: Arial, sans-serif; 
		} 

		.btn-open-popup { 
			padding: 12px 24px; 
			font-size: 18px; 
			background-color: green; 
			color: #fff; 
			border: none; 
			border-radius: 8px; 
			cursor: pointer; 
			transition: background-color 0.3s ease; 
		} 

		.btn-open-popup:hover { 
			background-color: #846baf; 
		} 

		.overlay-container { 
		
			position: fixed; 
			top: 0; 
			left: 0; 
			width: 100%; 
			height: 100%; 
			background: rgba(0, 0, 0, 0.6); 
			justify-content: center; 
			align-items: center; 
			opacity: 1; 
			transition: opacity 0.3s ease; 
		} 

        .popup-box {
            top: 178px;
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            width: 320px;
            text-align: center;
            opacity: 0;
            transform: scale(0.8);
            animation: fadeInUp 0.5s ease-out forwards;
            position: relative;
        }

		.form-container { 
			display: flex; 
			flex-direction: column; 
		} 

		.form-label { 
			margin-bottom: 10px; 
			font-size: 16px; 
			color: #444; 
			text-align: left; 
		} 

		.form-input { 
			padding: 10px; 
			margin-bottom: 20px; 
			border: 1px solid #ccc; 
			border-radius: 8px; 
			font-size: 16px; 
			width: 100%; 
			box-sizing: border-box; 
		} 

		.btn-submit, 
		.btn-close-popup { 
			padding: 12px 24px; 
			border: none; 
			border-radius: 8px; 
			cursor: pointer; 
			transition: background-color 0.3s ease, color 0.3s ease; 
		} 

		.btn-submit { 
			background-color: blueviolet; 
			color: #fff; 
		} 

		.btn-close-popup { 
			margin-top: 12px; 
			background-color: blueviolet; 
			color: #fff; 
		} 

		.btn-submit:hover, 
		.btn-close-popup:hover { 
			background-color: #846baf; 
		} 

		/* Keyframes for fadeInUp animation */ 
		@keyframes fadeInUp { 
			from { 
				opacity: 0; 
				transform: translateY(20px); 
			} 

			to { 
				opacity: 1; 
				transform: translateY(0); 
			} 
		} 

		/* Animation for popup */ 
		.overlay-container.show { 
			display: flex; 
			opacity: 1; 
		} 
	</style> 

	<style>
            h4.error {
                text-align: center;
                position: relative;
                top: 168px;
                background: aliceblue;
                padding: 16px;
                color: #0a0a0abf;
                border-radius: 5px;
                border: 1px solid #1e1b1b2e;
            }

			.title_wr.text-center {
				width: 100%;
				display: flex;
				justify-content: center;
			}

            form.srchFrm {
                display: flex;
            }

            .online::after {
                content: '';
                width: 10px;
                height: 10px;
                border: 2px solid #fff;
                border-radius: 50%;
                background: #41db51;
                position: absolute;
                top: 0;
            }

            button.srcBtn {
                position: relative;
                left: 58px;
                background: #dfdfdf;
                color: #000;
            }

            .nav-user-icon.online {
                color: #fff;
                position: relative;
                right: -40px;
            }

            .search-box {
                background: #efefef;
                width: 350px;
                border-radius: 5px !important;
                display: flex;
                align-items: center;
                padding: 0 15px;
                position: relative;
                right: -55px;
            }

            input[type="text"] {
                position: relative;
                top: 6px;
            }

            .modal-content {
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
                width: 100%;
                pointer-events: auto;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid rgba(0, 0, 0, .2);
                border-radius: 0.3rem;
                outline: 0;
                position: relative;
                top: 115px;
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

			a.box-close {
				position: relative;
				font-size: 27px;
				text-decoration: none;
				left: 120px;
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

            .content_succ {
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

            .nav-user-icon.deg {
                color: #fff;
                position: relative;
                left: 15px;
            }
    </style>

</head> 

<body> 
 
    <center>
        <div id="popupOverlay"
            class="overlay-container"> 
            <div class="popup-box"> 
                <h2 style="color: #090e09a1;">Forgot password?</h2> 
                <form class="form-container" method="post" > 
                   
                    <label class="form-label" for="email">Registered email:</label> 
                    <input class="form-input"
                        type="email"
                        placeholder="Enter your registered email"
                        id="email"
                        name="email" required> 

                    <button class="btn-submit"
                            type="submit" name = "check" > 
                    Next 
                    </button> 
                </form> 

                <button class="btn-close-popup"
                        onclick="togglePopup()"> 
                Close 
                </button> 

			
            </div> 
        </div> 
    </center>

		<?php

				$conn = new mysqli('localhost', 'root', '', 'studyabroad');

				if (isset($_POST['check'])) {

				$email = $_POST['email'];


				$sql = "SELECT* FROM sign_up WHERE  email = '$email' " ;           
				$query = $conn->query($sql);


				

				if ($query->num_rows> 0) {
					
					$data = mysqli_fetch_assoc($query);
					$randomNumber = rand(1000,9999);
					$getEmail = $data['email'];
					$_SESSION['email'] = $getEmail;
					$_SESSION['otp'] = $randomNumber;


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
						$mail->Subject = 'Account verification';
						$mail->Body    = "Dear user your OPT code is $randomNumber</b>";
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

						$mail->send();
					
					} catch (Exception $e) {
						echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
					}
					

					echo "<script>window.location.href = 'passwordOtp.php';</script>";
					
				}else{
					echo '
					<div id="popup-wrong" class="modal">
					<div class="content_wrng">
						<div class="title_wr text-center">
							<img src="pic/w.gif" alt="" srcset="">
							<a href="resetPass.php" class="box-close">
								×
							</a>
						</div>
						<div class="content">
							<div class="btn1">
								<h3 class="cmnt">You have no account in this email</h3>
							</div>
						</div>

						
					</div>
				</div>
					
					'; 
				}
				}
		?>

    <script> 
        function togglePopup() { 
            window.location.href = "login.php";
            
        } 
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
