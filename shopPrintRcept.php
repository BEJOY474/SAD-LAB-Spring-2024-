<?php
session_start();
$passValueLoginPage =  $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];
$sum = $_SESSION['sum'];
$addrs = $_SESSION['addrs'];


if (!empty($passValueLoginPage)) {



?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="pic/Logo.png" type="pic/icon">
        <title>Education World</title>

        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="efg.css">

        <link rel="stylesheet" href="cssFolder/index.css">
        <link rel="icon" href="pic/Logo.png" type="pic/icon">

        <link rel="icon" href="images/mLogo.webp" type="images/icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />



        <!-- bootstrap start -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- bootstrap end -->



        <style>
            body {
                font-size: 14px;
                line-height: 1.42857143;
                color: #333333;
                overflow-x: hidden;
            }

            h6.avl {
                position: relative;
                top: -10px;
                font-size: 14px;
            }

            #navbar {
                border-radius: 0px !important;
            }

            .topBar {
                height: 40px;
                background-color: blueviolet;
            }

            .product:hover {
                box-sizing: border-box;
                box-shadow: 0px 1px 4px 2px;
            }


            .hr {
                width: 100%;
                border: 3px solid blueviolet;
                position: relative;
                top: -20px;
            }



            .rightHalf {
                text-align: center;
                background-color: blueviolet;
                padding-bottom: 1px;
                position: relative;
                top: 3px;
            }


            .text.text2::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                background-color: red;
                border-left: 2px solid blue;
                animation: animate 4s steps(12) infinite;

            }

            input.form-control.mr-sm-2 {
                font-size: 13px;
            }

            a.navbar-brand {
                font-size: 22px;
                font-family: cursive;
                position: relative;
                top: 7px;
            }

            @keyframes animate {

                40%,
                60% {
                    left: 100%;
                }

                100% {
                    left: 0%;
                }
            }

            .about .about-content .right a {
                display: inline-block;
                background-color: red;
                color: #fff;
                font-size: 20px;
                padding: 10px 30px;
                margin-top: 20px;
                border-radius: 6px;
                border: 2px solid red;
                text-decoration: none;
                transition: all 0.4s ease;
            }


            @media (min-width:450px) {
                .max-width {
                    padding: 0 23px;
                }

                .about .about-content .right {
                    padding-top: 10px;
                    width: 100%;
                    text-align: justify;
                    justify-content: center;
                }

                .about .about-content .left {
                    width: 100%;
                }

                .about .about-content .left img {
                    width: 100%;

                }

                .same-height-row :last-child {
                    padding-bottom: 20px;
                }


                .col-md-12.headPhnTitleHeader h2 {
                    padding-top: 70px;
                    color: #fff;
                }


            }



            @media (min-width: 890px) {
                .about .about-content .left {
                    width: 45%;
                }

                .about .about-content .right {
                    width: 50%;
                    text-align: justify;
                    justify-content: center;
                }

                .col-md-12.headPhnTitleHeader h2 {
                    padding-top: 70px;
                    color: #fff;
                }

            }

            .slick-prev:before {
                content: '←';
                color: red;
                font-size: 25px;
            }

            .slick-next:before {
                content: '→';
                color: red;
                font-size: 25px;
            }

            #outerContent {
                background-color: rgb(236, 226, 226);
                position: relative;
                top: 50px;
                height: 660px;
            }

            .headPhnsection {

                text-align: center;
            }

            .col-md-12.headPhnTitleHeader {

                color: #fff;
            }


            .product {
                background-color: #fff;
                padding: 10px;
                text-align: center;
                border-radius: 5px;
                box-sizing: border-box;
                box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
            }


            div#content\ headPhnSec {
                background-color: black !important;
            }

            .headTitle {
                text-align: center;
                background-color: black;
            }

            section#outerContent\ hpnSen {
                background-color: black;
            }

            .box_h.box_h2 {
                background-color: black;
            }

            .box_h {
                background-color: rgb(236, 226, 226);
                ;
                margin: 0 0 30px;
                box-sizing: border-box;
                padding: 5px;
                border-radius: 5px;
                transition: all .4s ease;

            }

            .headphnSlid {
                background-color: #222;
            }

            .box {
                background-color: #fff;
                box-sizing: border-box;
                box-shadow: 0px 1px 5px rgb(0 0 0 / 50%);
                padding: 25px;
                margin-bottom: 20px;
            }

            .col-md-4.col-sm-6.center-responsive {
                margin-bottom: 10px;
            }

            audio {
                display: none;
            }



            .col-md-12 {
                margin-top: 10px;
            }

            .home img {
                width: 50px;
                border-radius: 13px;
            }

            div#content {
                position: relative;
                top: -35px;
            }

            ul.breadcrumb li a {
                text-decoration: none;
                color: black;
            }

            ul.menu li a {
                margin-left: 45px;
                color: #FFF;
                list-style: none;
                text-decoration: none;
                font-size: 13px;
            }

            ul.menu {
                display: inline-flex;
                padding: 10px;
                list-style: none;
                position: relative;
                top: 5px;
                left: 85px;
            }

            .col-md-6.offer {
                position: relative;
                margin-top: 10px;
            }

            #navbar {
                border-radius: 0px !important;
                padding-top: 8px;
                padding-bottom: 8px;
            }

            .navbar-btn {
                margin-top: 8px;
                margin-bottom: 8px;
                position: relative;
                float: right;
            }

            a.navbar-brand.home img {
                display: block;
                position: relative;
                top: -16px;
            }

            .col-md-6.offer a {
                color: #fff;
                padding-left: 8px;
                text-decoration: none;
            }

            .text a {
                text-decoration: none;
                font-family: cursive;
                letter-spacing: 10px;
            }

            .texts p {
                text-align: center;
                position: relative;
                top: 15px;
                
            }

            li.nav-item a {
                cursor: pointer;
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 5px;
               
            }

        </style>

        <style>
            .panel {
                height: 270px;
                width: 190px;
                position: relative;
                float: left;
                left: 42px;
                margin-right: 55px;

            &:hover {
                .card {
                filter: blur(1.5px);
                }
                .card1 {
                background-size: 215% 135%;
                }
                .card2 {
                background-size: 115% 115%;
                }
                .card3 {
                background-size: 155% 115%;
                }
                .title {
                color: rgba(255, 255, 255, 0.2);
                }
                .border {
                border: 1px solid rgba(255, 255, 255, 1);
                }
                .slide {
                bottom: 0px;
                }
                .ring:before,
                .ring:after {
                transform: translateX(-50%) translateY(-50%) rotate(310deg);
                }
            }
            }
         

            .ring {
            color: #fffbf1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            font-size: 170px;
            }

        

            .ring:before {
            border-color: rgb(235, 235, 235) rgb(235, 235, 235) rgba(0, 0, 0, 0)
                rgba(0, 0, 0, 0);
            z-index: -1;
            }



            p {
            text-align: center;
            position: absolute;
            font-family: "Playfair Display";
            }

            .title {
            font-size: 36px;
            font-weight: 700;
            transition: all 1s;
            top: 0;
            }

            .para {
            bottom: 0;
            font-size: 16px;
            font-family: "Raleway";
            padding: 20px;
            margin: 0;
            text-align: center;
            }

            .border {
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.5);
            height: 260px;
            width: 180px;
            transition: border 1s;
            overflow: hidden;
            }

            .slide {
            height: 260px;
            width: 180px;
            position: absolute;
            border: 1px solid black;
            bottom: -270px;
            background: rgba(0, 0, 0, 0.5);
            transition: bottom 1s;
            flex-direction: column;
            }

            .fa-plane {
            font-size: 16px;
            }

            .col-sm-6.col-md-3 {
                color: #ffffff94;
            }
        </style> 

        <style>

                .col-md-12 {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .leftSd {
                    width: 100%;
                }
                .breadcrumb {
    display: flex;
    flex-wrap: wrap;
    padding: 0.75rem 1rem;
    margin-bottom: 1rem;
    list-style: none;
    background-color: #e9ecef;
    border-radius: 0.25rem;
    width: 100% !important;
}
              

                /* button style */
                .btns a {
                        font-size: 15px;
                        color: #fff;
                        text-decoration: none;
                    }

                    .btns {
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                        background: linear-gradient(122deg, #0000004a, transparent);
                        width: 142px;
                        border: 1px solid #fff9;
                        border-radius: 5px;
                        outline: none;
                        padding: 5px;
                        margin-bottom: 5px;
                    }

                    .btnsVw{
                        display: flex;
                        align-items: center;
                        justify-content: space-around;
                        background: linear-gradient(122deg, #0000004a, transparent);
                        width: 90px;
                        border: 1px solid #fff9;
                        border-radius: 5px;
                        outline: none;
                        padding: 5px;
                        margin-bottom: 13px;
                    }

                    .btnsVw a {
                        font-size: 15px;
                        color: #fff;
                        text-decoration: none;
                    }

                    .btns img {
                        width: 20px;
                        height: 20px;
                    
                    }

                    .rows {
                        display: flex;
                        -ms-flex-wrap: wrap;
                        flex-wrap: wrap;
                        margin-right: -15px;
                        margin-left: -15px;
                        background-color: #fff !important;
                        box-sizing: border-box !important;
                        box-shadow: 0px 1px 5px rgb(0 0 0 / 50%) !important;
                        padding: 25px !important;
                        margin-bottom: 20px !important;
                        height: 100%;
                    }

                    .total {
                        width: 145px;
                        position: relative;
                        background: #4c41db;
                        color: #fff;
                        padding: 6px 0px 4px 0px;
                        border-radius: 7px;
                        text-align: center;
                    }


                /* button style */

        </style>

        <style>
            @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');



        $color-alpha: #1772FF;
        $color-form-highlight: #EEEEEE;



        h1,h2,h3,h4,h5,h6 {
            margin:0;
        }

        .bttns button {
            width: 200px;
            height: 48px;
            font-size: 18px;
            margin-top: 13px;
        }

        h1.noBook {
            text-align: center;
            padding: 15px;
            font-family: sans-serif;
            color: #0c0909d6;
        }

        .table {
    width: 100%;
    position: relative;
    top: 0px;
}
th.hdr {
    color: #fff;
    text-align: center;
    font-size: 18px;
}

        a#wins{
            color: #fff;
        }

        a#name {
            color: #fff;
        }

        a#draws{
            color: #fff;
        }

        a#losses {
            color: #fff;
        }

        a#total {
            color: #fff;
        }

        .table-data a {
            color: #fff;
            background: blue;
            padding: 6px;
            padding-left: 15px;
            padding-right: 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        .table-row {
            border: 1px solid;
            height: 40px;
        }

        .table-header {
            display:flex;
            width:100%;
            background:#000;
            
        }

        .table-row {
            display:flex;
            width:100%;

            &:nth-of-type(odd) {
                background:$color-form-highlight;
            }
        }

        .table-data, .header__item {
            flex: 1 1 20%;
            text-align: center;
            padding-top: 10px;
            border-right: 2px solid;
            font-weight: bold;
        }

        .header__item {
            text-transform:uppercase;
        }

        .filter__link {
            color: white;
            text-decoration: none;
            position: relative;
            padding-top: 10px;
            padding-bottom: 10px;
            display: inline-block;
            
            &::after {
                content:'';
                position:absolute;
                right:-($half-spacing-unit * 1.5);
                color:white;
                font-size:$half-spacing-unit;
                top: 50%;
                transform: translateY(-50%);
            }
            
            &.desc::after {
                content: '(desc)';
            }

            &.asc::after {
                content: '(asc)';
            }
            
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

            .form-control {
        display: block;
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1.5rem !important;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

            img.bks {
                width: 340px;
                height: 85px;
                position: relative;
                left: 22px;
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
                font-size: 17px;
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
            width: 160px;
            left: 127px;
            height: 43px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 5px;
        }

            .actives {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 5px;
            
        }

        </style>

<!-- btn stylr -->
        
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

                        button.btn.btn-success.btn-block {
                            font-size: 20px !important;
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

                    
        </style>


        <style>
                    
                    

                        p {
                            font-size: 17px;
                            align-items: center;
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
                            visibility: hidden;
                            opacity: 0;
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

    </head>

    <body>
        <section>
            <div class="topBar">
                <div class="rightHalf">
                    <ul>
                        <li><a href="#"><?php echo $name ?></a></li>
                        <li><a href="myAccount.php">My Account</a></li>  
                        <li><a href="contact2.php">Contact</a></li>
                        <li><a href="cart.php">Shopping cart</a></li>
                        <li><a href="order.php">Order history</a></li>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  href="tuition.php" class="nav-link">Tuition Platform</a>
                    </li>
                    <li class="nav-item actives">
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


        <div class="hr"></div>


        <div id="content" class="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="leftSd">
                        <ul class="breadcrumb">
                            <li><a href="index2.php">Home</a></li>
                            <li>Book Shop</li>
                            <li>Order Cart</li>
                            <li>Money-Receipt</li>
                        </ul>

                    </div>



                </div>

                <div class="col-md-3">
                    <?php

                    include("includes/sidebar4.php");

                    ?>
                </div>
                <div class="col-md-9">
                    

                    <div class="row rows">
                        
                            <div class="container">


                                <div class="col-12">
                                            <div class="card">
                                            <div class="card-body p-0">
                                                <div id="box-rctp" class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true">
                                                <table class="table table-striped mb-0">
                                                    <thead style="background-color: #002d72;">
                                                    <tr>
                                                        <th class="hdr" scope="col" colspan="2" >Money Receipt</th>
                                                
                                                    </tr>
                                                    </thead>
                                                    <tbody>




                                                    <?php

                                                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                                        if (!$conn) {
                                                            echo 'not connect';
                                                        }

                                                        if(isset($_POST['m_rcpt'])){
                                                            $sql = "SELECT* FROM sign_up ";

                                                            $result = $conn->query($sql);

                                                            $rnd_num = rand(1000000000,999999999999);
                                                            $crnt_dt = date("D, d F Y");

                                                            while ($data = $result->fetch_assoc()) {

                                                            
                                                                $g_name = $data['name'];
                                                                $g_Phone = $data['Phone'];
                                                                $g_sl_email = $data['email'];
                                                            

                                                                if($g_sl_email == $email){

                                                                    echo "

                                                                    <tr>
                                                                    <td>Name    :   </td>
                                                                    <td>$g_name</td>
                                                                </tr>                         
                                                            
                                                                <tr>
                                                                    <td>Phone    :   </td>
                                                                    <td>$g_Phone</td>
                                                            
                                                                </tr>
                    
                                                                <tr>
                                                                    <td>Email    :   </td>
                                                                    <td>$g_sl_email</td>
                                                            
                                                                </tr>
                    
                                                                <tr>
                                                                    <td>Total Bill    :   </td>
                                                                    <td>$sum Tk</td>
                                                            
                                                                </tr>
                                                                <tr>
                                                                <td>Address    :   </td>
                                                                <td>$addrs</td>
                                                        
                                                            </tr>
                                                        
                    
                                                                <tr>
                                                                    <td>Date   :   </td>
                                                                    <td>$crnt_dt</td>
                                                            
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td>Tranzition Id    :   </td>
                                                                    <td>$rnd_num</td>
                                                            
                                                                </tr>
                                                                    
                                                                    ";

                                                                }

                                                            }

                                                        }



                                                    ?>




                                                    </tbody>
                                                </table>
                                                </div>
                                            </div>
                                            </div>
                                </div>

                                      <!-- btn design -->
                            <div class="bttns">
                                    <center>
                                        <button type='button' onclick="printPage('box-rctp')" class='btn btn-success'>Download-Receipt</button>              
                                    </center>
                            </div>
                        <!-- btn design en

                            </div>

                  d -->

                    </div>  

                </div>
                    </div>
                 
                </div>

               
              

            </div>

        </div>


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
       <script>
         function printPage(el){
    
    var rstrPage = document.body.innerHTML;
    var prinCnt = document.getElementById(el).innerHTML;
    document.body.innerHTML = prinCnt;
     window.print();
     document.body.innerHTML = rstrPage;
 
 
 
 }   
       </script>

    </body>

    </html>

<?php
} else {
    header("location:index1.php");
}
?>