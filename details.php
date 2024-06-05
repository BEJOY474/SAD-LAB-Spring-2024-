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
                    .card {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
               
                    margin: auto;
                    text-align: center;
                    font-family: arial;
                    }

                    .title {
                    color: grey;
                    font-size: 18px;
                    }

                    button {
                    border: none;
                    outline: 0;
                    display: inline-block;
                    padding: 8px;
                    color: white;
                    background-color: #000;
                    text-align: center;
                    cursor: pointer;
                    width: 100%;
                    font-size: 18px;
                    }

                    a {
                    text-decoration: none;
                    font-size: 22px;
                    color: black;
                    }

                    button:hover, a:hover {
                    opacity: 0.7;
                    }

                    .inform {
                        display: flex;
                        margin: -1px;
                    }
                    img {
                        max-width: 300px;
                        border-radius: 3px;
                        height: 100%;
                    }

                    .rightSide {
                        width: 68%;
                    }

                    .leftSide {
                        width: 38%;
                    }

                    .namess {
                    width: 96%;
                    margin-top: 15px;
                }

                .tabels {
                    width: 96%;
                    margin: auto;
                }

             
                .table th, .table td {
                    border: 1px solid #dddddd;
                    padding: 8px;
                    text-align: left;
                }

            
                .table tbody tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

            
                .table tbody tr:nth-child(odd) {
                    background-color: #ffffff;
                }

            </style>

        </head>

    <body>

        <?php 
                                            $conn = new mysqli('localhost','root','','studyabroad');
                                            if(!$conn){
                                                echo 'not connect';
                                            }
                                            
                                            if($_GET['email']){
                                            
                                                 $getEmail = $_GET['email'];
                                                
                                                 $sql_q = "SELECT* FROM studentloanuserinfo";
                                                 $result_q = $conn->query($sql_q);
                                                 while ($data = $result_q->fetch_assoc()) {
                                                     $a_id = $data['id'];
                                                     $a_name = $data['name'];
                                                     $a_Phone = $data['mobile'];
                                                     $a_email = $data['email'];
                                                     $a_img = $data['img'];
                                                     $a_address = $data['address'];
                                                     $a_designations = $data['designation'];
                                                     $a_loneType = $data['loneType'];
                                                     $a_nid = $data['nid'];

                                                     if($a_email ==  $getEmail){
                                                               $aid  =  $a_id  ;
                                                              $aname =  $a_name ;
                                                             $aPhone =  $a_Phone ;
                                                            $aemail  =  $a_email  ;
                                                              $aimg  =  $a_img  ;
                                                           $aaddress =  $a_address ;
                                                      $adesignations =  $a_designations ;
                                                         $aloneType  =  $a_loneType  ;
                                                               $anid =  $a_nid ;
                                                     }

                                                 } 
                                                
                                            }

                                         
                                        ?>
          

                   
            <div class="modal">
          
                <div class="card">
                    <div class="inform">
                    <div class="leftSide">
                        <img src="up_img/<?php echo "$aimg"; ?>" alt="John" style="width:100%">
                    </div>

                    <div class="rightSide">
                        <div class="namess">
                            <h1><?php echo "$aname"; ?></h1>
                        </div>
                           
                       
                        <div class="tabels">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Designation </th>
                                    <th> <?php echo "$adesignations"; ?></th>
                                
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo "$aemail"; ?></td>
                                
                                </tr>
                                <tr>
                                    <td>Mobile</td>
                                    <td><?php echo "$aPhone"; ?></td>
                                
                                </tr>
                                <tr>
                                    <td>NID</td>
                                    <td><?php echo "$anid"; ?></td>
                                
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

                    <a href="requstLoan.php" class="box-close">
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