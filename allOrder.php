<?php
   session_start();
   $phon = $_SESSION['phone_number'];
   if (!empty($phon)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education World</title>
    <link rel="icon" href="images/mLogo.webp" type="images/icon">
   
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   
    <link rel="icon" href="pic/Logo.png" type="pic/icon">
   
    <link rel="stylesheet" href="dashboard.css">

<style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');
        *{
            font-family: 'Ubuntu', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root{
            --blue: #2a2185;
            --white: #fff;
            --gray: #f5f5f5;
            --black1: #222;
            --black2: #999;
        }

        body{
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container{
            position: relative;
            width: 100%;
        }

        .navigation {
            position: fixed;
            width: 260px;
            height: 100%;
            background: #4643b5;
            border-left: 10px solid #3e3ebb;
            transition: 0.5s;
            overflow: hidden;
        }

        .navigation.active{
            width: 90px;
        }

        .navigation ul{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
        }

        .navigation ul li{
            position: relative;
            width: 100%;
            height: 65px;
            list-style: none;
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }

        .navigation ul li:hover,
        .navigation ul li.hovered
        {
            background-color: var(--white);
        }

        .navigation ul li:nth-child(1){
            margin-bottom: 40px;
            pointer-events: none;
        }

        .navigation ul li a{
            position: relative;
            display: block ;
            width: 100%;
            display: flex;
            text-decoration: none;
            color: var(--white);
        }

        .navigation ul li:hover a,
        .navigation ul li.hovered a
        {
            color: var(--blue);
        }

        .navigation ul li a .icon{
            position: relative;
            display: block;
            min-width: 70px;
            height: 70px;
            line-height: 85px;
            text-align: center;
        }

        .navigation ul li a .icon ion-icon{
            font-size: 1.75rem;
        }

        .navigation ul li a .title{
            position: relative;
            display: block;
            padding: 0 10px;
            height: 70px;
            line-height: 70px;
            text-align: start;
            white-space: nowrap;
        }

        .navigation ul li:hover a::before,
        .navigation ul li.hovered a::before
        {
            content: '';
            position: absolute;
            right: 0;
            top: -50px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px 35px 0 10px var(--white);
            pointer-events: none;
        }

        .navigation ul li:hover a::after,
        .navigation ul li.hovered a::after
        {
            content: '';
            position: absolute;
            right: 0;
            bottom: -45px;
            width: 50px;
            height: 50px;
            background-color: transparent;
            border-radius: 50%;
            box-shadow: 35px -35px 0 10px var(--white);
            pointer-events: none;
        }



                .main {
            position: absolute;
            width: calc(100% - 300px);
            left: 275px;
            min-height: 100vh;
            background: #fff;
            transition: 0.5s;
        }

        .main.active{
            width: calc(100% - 90px);
            left: 90px;
        }

        .topbar{
            width: 100%;
            height: 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10px;
            box-shadow: 0 7px 25px rgb(0 0 0 / 8%);

        }


        .toggle{
            position: relative;
            top: 8px;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            font-size: 2.5rem;
            cursor: pointer;
        }

        .search{
            position: relative;
            width: 400px;
            margin: 0 10px;
        }

        .search label{
            position: relative;
            width: 100%;
        }

        .search label input{
            width: 100%;
            height: 40px;
            border-radius: 40px;
            padding: 5px 20px;
            padding-left: 35px;
            font-size: 18px;
            outline: none;
            border: 1px solid var(--black2);
        }

        .search label ion-icon{
            position: absolute;
            top: 0;
            left: 10px;
            font-size: 1.2rem;
        }

        .user{
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;

        }

        .user img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }





        .cardBox {
        position: relative;
        width: 100%;
        padding: 20px;
        display: flex;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 30px;
        align-items: center;
        justify-content: space-between;
    }

    button.btn.btn-primary {
    height: 44px;
    width: 180px;
    background: #0000ffbf;
    color: #fff;
    border-radius: 5px;
    outline: none;
    border: none;
    cursor: pointer;
}
        .cardBox .card{
            position: relative;
            background: var(--white);
            padding: 30px;
            box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            cursor: pointer;
        }

        .cardBox .card:last-child {
                background: #4643b5;
            }


        .cardBox .card:last-child .numbers,
        .cardBox .card:last-child .cardName,
        .cardBox .card:last-child .iconB
        {
            color: var(--white);
        }


        .cardBox .card .numbers{
            position: relative;
            font-weight: 500;
            font-size: 2.5rem;
            color: var(--blue);
            margin-right: 25px;
        }

        .cardBox .card .cardName{
            color: var(--black2);
            font-size: 1.1rem;
            margin-top: 5px;
        }

        .cardBox .card .iconB{
            font-size: 3.5rem;
            color: var(--black2);
        }

        .cardBox .card:hover{
            background: #4643b5;
            transition: 0.3s;
        }

        .cardBox .card:hover .numbers,
        .cardBox .card:hover .cardName,
        .cardBox .card:hover .iconB{
            color: var(--white);
        }



        .recent-grid {
            margin-top: 0.5rem;
            margin-left: 10px;
            margin-right: 10px;
            border-radius: 5px;
            box-shadow: 0 7px 25px rgb(0 0 0 / 8%);
        }

        .card-2{
            background-color: #fff;
            border-radius: 5px;
        }

        .card-header,
        .card-body
        {
        padding: 1rem;
        }

        .card-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f0f0;
        }

        .card-header button{
            background: #b70606;
            border-radius: 10px;
            color: var(--white);
            font-size: .8rem;
            padding: .5rem 1rem;
            font-family: 'Ubuntu', sans-serif;
            cursor: pointer;
            border: 1px solid #b70606;
        }

        .customer{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: .5rem .7rem;
            cursor: pointer;
        }

        .customer:hover{
            background: var(--blue);
            color: var(--white);
            border-radius: 5px;
        }

        .customer:hover h4{
        
            color: var(--white);
        }

        .info{
            display: flex;
            align-items: center;
        }

        .info img{
            border-radius: 50%;
            margin-right: 1rem;
        }

        .info h4{
            font-size: .8rem;
            font-weight: 700;
            color: #222;
        }

        .info small{
            font-weight: 600;
            color: var(--text-grey);
        }


        .contact span{
            font-size: 1.2rem;
            display: inline-block;
            margin-left: .5rem;
            color: var(--main-color);
        }






        @media (max-width: 991px){

            .navigation{
                left: -300px;
            }


            .navigation.active{
                width: 300px;
                left: 0;
            }

            .main{
                width: 100%;
                left: 0;
            }

            .main.active{
                left: 300px;
            }

            .cardBox{
                grid-template-columns: repeat(2, 1fr);
            }




        }


        @media (max-width: 580px){

            .cardBox{
                grid-template-columns: repeat(1, 1fr);
            }

        .navigation{
            width: 100%;
            left: -100%;
            z-index: 1000;
        }

        .navigation.active{
            width: 100%;
            left: 0;
        }

        .toggle{
            z-index: 10001;
        }

        .main.active .toggle{
            color: var(--white);
            position: fixed;
            right: 0;
            left: initial;
        }

        }

        table.table.table-success {
    
    z-index: 2;
    border-collapse: collapse;
    overflow: hidden;
    width: 100%;
    background: #e9dcdc;
    text-align: center;
    box-shadow: 0 5px 12px rgb(32 32 32 / 30%);
}

th {
background: #d2a0f9;
}
        th,td{
            padding: 10px 12px ;
        }
        tr:nth-child(odd) {
    background-color: #c5abab;
}

.card-body {
    overflow-y: auto;
    height: 325px;
    margin-bottom: 15px;
}
td a {
    text-decoration: none;
}
</style>

</head>
<body>
   
    <div class="container">
        <div class="navigation">
            <ul>
                <li style="cursor: pointer;">
                    <a href="index.php">
                        <span class="icon"><ion-icon name="logo-amplify"></ion-icon></span>
                        <span class="title">Education World</span>
                    </a>
                </li>

                <li>
                    <a href="admin.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="comment.php">
                        <span class="icon"> <ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                        <span class="title">Comment</span>
                    </a>
                </li>

                <li>
                    <a href="allOrder.php">
                        <span class="icon"><ion-icon name="cart-outline"></ion-icon></span>
                        <span class="title">Order</span>
                    </a>
                </li>

                <li>
                    <a href="addProduct.php">
                        <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                        <span class="title">Add Book</span>
                    </a>
                </li>

                <li>
                    <a href="addAbrod.php">
                        <span class="icon"><ion-icon name="add-outline"></ion-icon></span>
                        <span class="title">Add Abroad Info.</span>
                    </a>
                </li>

                <li>
                    <a href="helpLine.php">
                        <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="setting.php">
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg></span>
                        <span class="title">Setting</span>
                    </a>
                </li>

                <li>
                    <a href="adminLogout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Logout</span>
                    </a>
                </li>

            </ul>
        </div>

        <div class="main">
                    <div class="topbar">
                        <div class="toggle">
                            <ion-icon name="menu-outline"></ion-icon>
                    
                        </div>


                        <div class="user">
                            <img src="pic/Logo.png" alt="">
                        </div>
                    </div>


                <div class="cardBox">
                    


                        <div class="card">
                            <div>
                            <div class="numbers">
                            <?php

                                $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                if (!$conn) {
                                    echo 'not connect';
                                }


                                $count = 0;

                                $sql = "SELECT * FROM admin_order_info_all ";
                                $result = $conn->query($sql);

                                                while ( $data = $result->fetch_assoc()) {
                                                
                                                    $count++;
                                        
                                                
                                                }
                                            echo "$count";

                            ?>
                                </div>
                                <div class="cardName">Order</div>
                            </div>

                            <div class="iconB">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                        </div>

                        <div class="dltAlOrdDn">
                            <form method="post">
                                <button type="submit" name="dltAll" class="btn btn-primary">Delete all delivered item</button>
                            </form>
                        </div>

                    </div>

        <?php 

        if (isset($_POST['dltAll'])) {
            $status = "Done";
            $sql ="DELETE FROM admin_order_info_all WHERE status = '$status'";

            $result = $conn->query($sql);
        
            if($result == true){
            echo "<script>window.location.href ='allOrder.php';</script> ";
            
            }else{
            echo "error";
            }
        }

        ?>

                    <div class="recent-grid">
                        <div class="customers">
                            <div class="card-2">
                                <div class="card-header">
                                    <h3>All customer order</h3>
                                
                                </div>
            
                                <div class="card-body">
                                <?php

                                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                    if (!$conn) {
                                        echo 'not connect';
                                    }


                                    $count = 0;

                                    $sql = "SELECT * FROM admin_order_info_all ";
                                    $result = $conn->query($sql);


                                                echo "<table border='1' class = 'table table-success' ;><tr><th>Product Name</th> 
                                                <th>Customer email</th> <th>Per product price</th> <th>Quantity</th><th>Total</th> <th>Address</th> <th>Order Date</th>
                                                <th>Status</th> <th>Action</th></tr>";
                                                    while ( $data = $result->fetch_assoc()) {
                                                        $id = $data['id'];
                                                        $cus_email = $data['cus_email'];
                                                        $orde_pro_id = $data['orde_pro_id'];
                                                        $per_pro_price = $data['per_pro_price'];
                                                        $pro_qunity = $data['pro_qunity'];
                                                        $per_pro_total_price = $data['per_pro_total_price'];
                                                        $cus_address = $data['cus_address'];
                                                        $ovrall_sell_price = $data['ovrall_sell_price'];
                                                        $ord_date = $data['ord_date'];
                                                        $status = $data['status'];
                                                        $Deliver = $data['Deliver'];
                                                        $count++;

                                                        $sqlFnd = "SELECT * FROM product WHERE id =$orde_pro_id ";
                                                        $resultFnd = $conn->query($sqlFnd);
                                        
                                        
                                                        while ($data = $resultFnd->fetch_assoc()) {
                                                        
                                                            $peoduct_name = $data['peoduct_name'];

                                                        }
                                                        
                                                        echo "<tr>
                                                                
                                                                
                                                                <td>$peoduct_name</td> 
                                                                <td>$cus_email</td>  

                                                                <td>$per_pro_price</td> 
                                                                <td>$pro_qunity</td> 
                                                                <td>$per_pro_total_price</td> 

                                                                <td>$cus_address</td> 
                                                                <td>$ord_date</td> 
                                                                <td>$status</td> 
                                                                <td><a href='adminOrderUp.php?order_cus_email=$cus_email'>$Deliver</a></td> 
                                                            
                                                            
                                                            </tr>";
                                                    
                                                    }
                                                    echo "</table>"; 
                                            


                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>







        </div>
    </div>

    <script>
                let list = document.querySelectorAll(".navigation li");

            function activeLink(){
                list.forEach(item=>{
                    item.classList.remove("hovered");
                });
                this.classList.add("hovered");
            }

            list.forEach(item => item.addEventListener("mouseover", activeLink));

            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector(".navigation");
            let main = document.querySelector(".main");

            toggle.onclick = function(){
                navigation.classList.toggle("active");
                main.classList.toggle("active");
            };
    </script>    



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>


<?php }else {
    header("location:index1.php");
}

?>