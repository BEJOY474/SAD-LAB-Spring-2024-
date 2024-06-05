<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education World/ Admin login</title>
    <!-- tailwind and daisy UI link -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.3.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- css link -->
    <link rel="stylesheet" href="AdminLogin.css">
    <link rel="icon" href="pic/Logo.png" type="pic/icon">
    <!--  font popins link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital@0;1&display=swap" rel="stylesheet">

    <!--  font Awesome -->
    <script src="https://kit.fontawesome.com/c825ccd99d.js" crossorigin="anonymous"></script>

    <!--  -->
    <style>
        audio {
            display: none !important;
        }

        p.error {
            color: black;
            position: relative;
            text-align: center;
            top: 28px;
        }

        p.homego {
            color: black;
            text-align: center;
            position: relative;
            top: 20px;
        }
        .input-box input {
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(2, 2, 41, 0.2);
            color: #000 !important ;
        }
        button.btn.w-full.h-11.bg-white.rounded-\[40px\] {
            background: #542bd1b8 !important ;
            color: #fff !important ;
        }
        .wrapper{
            border: 2px solid rgb(225, 225, 255, .2);
            backdrop-filter: blur(20px);
        }
        .input-box input{
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(2, 2, 41, 0.2);
        }
        .input-box input::placeholder{
            color: rgb(12, 1, 1);
        }
        .input-box i{
            transform: translate(-50%);

        }
        .remember-forget label input {
            accent-color: black;
            margin-right: 3px;
        }
        .remember-forget a:hover{
            text-decoration: underline;
        }
        .btn{
            border: none;
            outline: none;
            box-shadow:  0 0 10px;
            cursor: pointer;
            font-weight: 600;
        }
        /* .input-box .input::placeholder{
            color: white;
        } */
    </style>
</head>

<body class="flex justify-center items-center min-h-screen	bg-gradient-to-r from-[#3931af] to-[#00c6ff]">
    
    <main>
        <h1 class=" flex text-4xl items-center mb-12 justify-center text-white font-extrabold">Education World</h1>
        <div class="wrapper w-96 bg-white text-white rounded-xl px-8 py-11">
            
            <form method="post">
                <h3 class="flex items-center justify-center mb-8 text-black text-3xl">Admin Login </h3>
                <div class="input-box w-full h-3/6  mb-3 relative">
                    <input type="text" name="usrName" placeholder="User Name" class="w-full h-[43px] border-solid border-2  border-white rounded-3xl p-5 " required>
                   
                </div>
                <div class="input-box w-full h-3/6  mb-3 relative ">
                    <input type="password" name="pass" placeholder="Password" class=" w-full h-[43px]  border-solid border-2  border-white rounded-3xl p-5 " required id="">
                </div>
              
                <button class="btn w-full h-11 bg-white rounded-[40px] " type="submit" name="login" >Login</button>
            </form>

            <p class="homego">Go to <a class="hm" href="index1.php">home</a></p>

            <?php 

            $conn = new mysqli('localhost','root','','studyabroad');
            session_start();
            if(!$conn){
                echo 'not connect';
            }

            if ( isset($_POST['login'])) {
                 $pass = $_POST['pass'];
                 $usrName = $_POST['usrName'];
                 $c = 0;
 
                 $sql = "SELECT* FROM admininfo WHERE  currentPass = '$pass' AND usrName ='$usrName' " ;
            
                 $query = $conn->query($sql);
         
             
                 if ($query->num_rows> 0) {
                     $data = mysqli_fetch_assoc($query);

                     $phone_number = $data['phnNum'];
                     $c++;
                     $_SESSION['phone_number'] = $phone_number;
              
                    echo " <script>
                    window.location.href = 'admin.php';</script>
                    ";
                

            }else{
                echo '<audio controls autoplay>
                <source src="AllBackgroundMusic/invalid.mp3" type="audio/mp3">
                </audio>';
            }

            if ($c==0) {
               echo "<p class='error'>Invalid user . Please try again</p>";
            }
      
            }
            ?>




        </div>
    </main>

</body>

</html>