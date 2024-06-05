
<?php
session_start();
$passValueLoginPage = $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];

$CGPA = $_SESSION['CGPA'];
$ENG_PRO = $_SESSION['ENG_PRO'] ;
$SCORE = $_SESSION['SCORE'];
$ENG_PRO2 = $_SESSION['ENG_PRO2'] ;
$OTHER_SCORE = $_SESSION['OTHER_SCORE'] ;
$achiv = $_SESSION['achiv'] ;

if (!empty($passValueLoginPage)) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pic/Logo.png" type="pic/icon">
    <title>Education World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&display=swap"
        rel="stylesheet">
    <!-- css style -->
    <link rel="stylesheet" href="CSS-Study/StudyPractice.css">
    <link rel="stylesheet" href="CSS-Study/universityList1.css">
    <link rel="stylesheet" href="CSS-Study/std.css">

      <!-- fontAwesom start -->
        <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
      <!-- fontAwesom end -->

    <style>
       
       nav.navbar.navbar-expand-lg.navbar-light {
   
            color: black;
            margin-left: 14px;
        }

        .robot {
            float: right;
            width: 65px;
            right:10px;
            position:relative;
        }

        .errorShow {
            width: 100%;
            padding: 40px;
            background: antiquewhite;
            text-align: center;
            border-radius: 10px;
        }

        .banner {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-bottom: 20px;

        }

        .banner-info {
            padding-left: 100px;
        }

        .banner-title  {
            font-family: "Playfair Display", serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
            font-size: 46px;


        }

        .banner-paragrap {
            color: gray;
            width: 423px;
            text-align: center;
        }

      
    </style>

</head>

<body>
    <header>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span
                                class="sr-only">(current)</span></a>
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

                    <li class="nav-item actives">
                        <a href="studyAbroad.php" class="nav-link ">Study Abroad</a>
                    </li>

                    <li class="nav-item">
                        <div class="texts">
                            <!-- <p></p> -->
                        </div>
                    </li>


                </ul>
               
            </div>

            <div class="robot">
                <a href="robot2.php"> <img src="pic/robot.png" style="width : 50px;" class="rbt" alt=""></a>
            </div>
        </nav>
        <!-- manu-bar end -->
        <div class="hr"></div>

        <!-- <a href="#" class="brand">Anime</a> -->
        <div class="menu-btn"></div>
        <div class="navigation">
            <div class="navigation-items">

            </div>
        </div>

        <!-- slider start -->
        <section class="banner">
            <div class="banner-info">
                <h1 class="banner-title">Pursue Education <br> In Your Dream Nation</h1>
                <p class="banner-paragrap">Up to 100% scholarship,top rank university, 20 hours work
                    permit per week as international student</p>
            </div>
            <div class="img">
                <img src="images/travel-planning-1--unscreen.gif" alt="">
            </div>
        </section>
        <!-- slider end -->
    </header>

    <main>
        <div class="card-item">
        <?php

                $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                if (!$conn) {
                    echo 'not connect';
                }

                $sql = "SELECT* FROM abroad";

                $query = $conn->query($sql);
                $countUsa = 0;
                $countCan = 0;
                $countFin = 0;
                $countUk = 0;
                $countAus = 0;
                $countGer = 0;
                $countfra = 0;
                $countJa = 0;
                $countsa = 0;
                $countDa = 0;
                $count = 0;
                $cls = 0;

                while ($data = $query->fetch_assoc()) {
                
                    $ID = $data['ID'];
                    $CGPAGet = $data['CGPA'];
                    $ENG_PROGet = $data['ENG_PRO'];
                    $SCOREGEt = $data['SCORE'];
                    $COUNTRY_NAME = $data['COUNTRY_NAME'];

                    if(($CGPA<=4.00 && $CGPA>=2.00)) {
                        $cls++;
                        if((($CGPA >= $CGPAGet) && ($ENG_PRO == $ENG_PROGet) && ($SCORE >= $SCOREGEt )) || (($CGPA >= $CGPAGet) && ($ENG_PRO == "MOI")) ){
                            if($COUNTRY_NAME == "USA" &&  $ENG_PRO == $ENG_PROGet && $countUsa==0){
                                $countUsa++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                <img class='card__background' src='images/us.png'
                                    alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                    height='2193' />
                                <div class='card__content | flow'>
                                    <div class='card__content--container | flow'>
                                        <h2 class='card__title'>$COUNTRY_NAME</h2>
                                        <p class='card__description'>
                                            Scholarship available, 3 years work permit
                                        </p>
                                    </div>
                                    <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                </div>
                            </article>
                                
                                
                                ";
                            }else if($COUNTRY_NAME == "UK" &&  $countUk==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countUk++;
                                $count++;
    
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/ukk.jpg'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "CANADA" &&  $countCan==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countCan++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/ca.png'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "AUSTRALIA" &&  $countAus==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countAus++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/au.png'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "GERMANY" &&  $countGer==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countGer++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/gr.png'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "DENMARK" &&  $countDa==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countDa++;;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/dn.jpg'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "FRANCE" &&  $countfra==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countfra++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/fr.webp'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "FINLAND" &&  $countFin==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countFin++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/fin.jpg'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "JAPAN" &&  $countJa==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countJa++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/jap.jpg'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            } else if($COUNTRY_NAME == "SOUTH-KOREA" &&  $countsa==0 &&  $ENG_PRO == $ENG_PROGet){
                                $countsa++;
                                $count++;
                                echo "
                            
                                <article class='card'>
                                        <img class='card__background' src='images/sk.jpg'
                                            alt='Photo of Cartagena's cathedral at the background and some colonial style houses' width='1920'
                                            height='2193' />
                                        <div class='card__content | flow'>
                                            <div class='card__content--container | flow'>
                                                <h2 class='card__title'>$COUNTRY_NAME</h2>
                                                <p class='card__description'>
                                                    Scholarship available, 3 years work permit
                                                </p>
                                            </div>
                                            <a href='SugestUniversity.php?country=$COUNTRY_NAME'><button class='card__button'>Read more</button></a>
                                        </div>
                                    </article>
                                
                                
                                ";
                            }
                        
                        
                        }
                    }else{
                        $count++;
                    }
                   
                 

                
                }

                if($count == 0){
                    echo "<div class='errorShow'>
                    <h1 class='errors' >No Country Available for your higher study</h1>
                    </div>";
                }
                if($cls == 0){
                    echo "<div class='errorShow'>
                    <h1 class='errors' >No Country Available for your higher study</h1>
                    </div>";
                }
        ?>




        </div>
      
    </main>

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

    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- js link -->

</body>

</html>
<?php
} else {
    header("location:index1.php");
}

?>