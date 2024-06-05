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

                    .lines {
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgb(255 254 254);
                margin-top: 30px !important;
            }
                    .box h1 {
                        text-align: center;
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
                    .ring,
                    .card,
                    .border,
                    .slide,
                    .line {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    }

                    .ring {
                    color: #fffbf1;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translateX(-50%) translateY(-50%);
                    font-size: 170px;
                    }

                    .card {
                    background: #f0ead6;
                    position: relative;
                    transition: all 1s;
                    height: 270px;
                    width: 190px;
                    border: 1px solid rgba(255, 255, 255, 1);
                    }

                    .card1 {
                    background-repeat: no-repeat;
                    background-size: 200% 120%;
                    }

                    .card.card1 img {
                        width: 185px;
                        height: 265px;
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
                            font-size: 20px;
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
                            width: 1080px;
                        }
            
                        .search-box {
                            font-size: 12px;
                            border: solid 0.3em #000000;
                            display: inline-block;
                            position: relative;
                            border-radius: 2.5em;
                            margin-left: 10px;
                        }
                        .search-box input[type=text] {
                        font-family: inherit;
                        font-weight: bold;
                        width: 2.5em;
                        height: 2.5em;
                        padding: 0.3em 2.1em 0.3em 0.4em;
                        border: none;
                        box-sizing: border-box;
                        border-radius: 2.5em;
                        transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55) 150ms;
                        }
                        .search-box input[type=text]:focus {
                        outline: none;
                        }
                        .search-box input[type=text]:focus, .search-box input[type=text]:not(:placeholder-shown) {
                        width: 18em;
                        transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55);
                        }
                        .search-box input[type=text]:focus + button[type=reset], .search-box input[type=text]:not(:placeholder-shown) + button[type=reset] {
                        transform: rotate(-45deg) translateY(0);
                        transition: transform 150ms ease-out 800ms;
                        }
                        .search-box input[type=text]:focus + button[type=reset]:after, .search-box input[type=text]:not(:placeholder-shown) + button[type=reset]:after {
                        opacity: 1;
                        transition: top 150ms ease-out 950ms, right 150ms ease-out 950ms, opacity 150ms ease 950ms;
                        }
                        .search-box button[type=reset] {
                        background-color: transparent;
                        width: 1.4em;
                        height: 1.4em;
                        border: 0;
                        padding: 0;
                        outline: 0;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        position: absolute;
                        top: 0.55em;
                        right: 0.55em;
                        transform: rotate(-45deg) translateY(2.2em);
                        transition: transform 150ms ease-out 150ms;
                        }
                        .search-box button[type=reset]:before, .search-box button[type=reset]:after {
                        content: "";
                        background-color: #000000;
                        width: 0.3em;
                        height: 1.4em;
                        position: absolute;
                        }
                        .search-box button[type=reset]:after {
                        transform: rotate(90deg);
                        opacity: 0;
                        transition: transform 150ms ease-out, opacity 150ms ease-out;
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

                          
                        /* button style */

                </style>

                <style>
                
    $color-primary: #4c4c4c;
    $color-secondary: #a6a6a6;
    $color-highlight: #ff3f40;


    h3 {
        font-size: 0.7em;
        letter-spacing: 1.2px;
        color: $color-secondary;
    }

    form {
    width: 312px;
    position: relative;
    left: 30px;
}

.product__photo {
    position: relative;
    border-right: 2px solid #000000a1;
    margin-bottom: 20px;
}
    img {
                max-width: 100%;
                filter: drop-shadow(1px 1px 3px $color-secondary);
            }


            .product {
    display: grid;
    grid-template-columns: 0.9fr 1fr;
    margin: auto;
   
    width: 688px;
   
    height: 100%;
    position: relative;
    background-color: #c1c8e38f;
    border-radius: 5px;
    left: 70px;
}


    .product__photo {
        position: relative;
    }

    .photo-container {
        position: absolute;
        left: -2.5em;
        display: grid;
        grid-template-rows: 1fr;
        width: 100%;
        height: 90%;
        border-radius: 6px;
        box-shadow: 4px 4px 25px -2px rgba(0, 0, 0, 0.3);
    }

    .photo-main {
     

        .controls {
            display: flex;
            justify-content: space-between;
            padding: 0.8em;
            color: #fff;

            i {
                cursor: pointer;
            }
        }

        img {
            position: absolute;
            left: -3.5em;
            top: 2em;
            max-width: 110%;
            filter: saturate(150%) contrast(120%) hue-rotate(10deg)
                drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
        }
    }

    .photo-album {
        padding: 0.7em 1em;
        border-radius: 0 0 6px 6px;
        background-color: #fff;

        ul {
            display: flex;
            justify-content: space-around;
        }

        li {
            float: left;
            width: 55px;
            height: 55px;
            padding: 7px;
            border: 1px solid $color-secondary;
            border-radius: 3px;
        }
    }

    .product__info {
        padding: 0.8em 0;
    }

    .title {
        h1 {
            margin-bottom: 0.1em;
            color: $color-primary;
            font-size: 1.5em;
            font-weight: 900;
        }

        span {
            font-size: 0.7em;
            color: $color-secondary;
        }
    }

    .price {
        margin: 1.5em 0;
        color: $color-highlight;
        font-size: 1.2em;

        span {
            padding-left: 0.15em;
            font-size: 2.9em;
        }
    }

    .variant {
        overflow: auto;

        h3 {
            margin-bottom: 1.1em;
        }

        li {
            float: left;
            width: 35px;
            height: 35px;
            padding: 3px;
            border: 1px solid transparent;
            border-radius: 3px;
            cursor: pointer;

            &:first-child,
            &:hover {
                border: 1px solid $color-secondary;
            }
        }

        li:not(:first-child) {
            margin-left: 0.1em;
        }
    }

    .description {
        clear: left;
        margin: 2em 0;

        h3 {
            margin-bottom: 1em;
        }

        ul {
            font-size: 0.8em;
            list-style: disc;
            margin-left: 1em;
        }

        li {
            text-indent: -0.6em;
            margin-bottom: 0.5em;
        }
    }

    .buy--btn {
        padding: 1.5em 3.1em;
        border: none;
        border-radius: 7px;
        font-size: 0.8em;
        font-weight: 700;
        letter-spacing: 1.3px;
        color: #fff;
        background: #0000ffd6;
        cursor: pointer;

        &:active {
            transform: scale(0.97);
        }
    }

    .description ul li {
        list-style: none;
        font-size: 14px;
        font-family: sans-serif;
        font-weight: bold;
    }

    .description ul {
        position: relative;
    }
    a button.buy--btn{
        transition: 0.1s easy;
    }
    a button.buy--btn:hover {
        background: brown;
        transition: 0.1s easy;
    }

    .photo-main img {
    width: 332px;
    height: 430px;
    position: relative;
    top: -42px;
    left: -7px;
    border-radius: 5px;
}

span.hilight {
    color: #c31c1c;
}

input#Quantity {
    outline: none;
    border: 2px solid orange;
    padding-left: 10px;
    font-size: 14px;
     border-radius: 5px;
    
    width:90px;
    margin-bottom: 3px;
    position: relative;
    background: transparent;
    top: -10px;
    height: 30px;
}

label.Quantity {
    position: relative;
    top: -13px;
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

                    img.bks {
                        width: 73%;
                        height: 40px;
                    }

                    img.upy {
                        width: 75%;
                        height: 40px;
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
                        left: 125px;
                    }

                    .actives {
                    background-color: rgba(0, 0, 0, 0.3);
                    border-radius: 5px;
                    
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
                                    <li>Book View</li>
                                </ul>

                            </div>
                 
                         

                        </div>

                        <div class="col-md-3">
                            <?php

                            include("includes/sidebar4.php");

                            ?>
                        </div>
                        <div class="col-md-9">
                            <div class="box">
                                <h1>Book details view</h1>
                            </div>

                            <div class="row">
                        
                               

                                <?php
                                $conn = new mysqli('localhost', 'root', '', 'studyabroad');


                                if($_GET['Product_id']){
                                    $id = $_GET['Product_id'];
                               
                                    $rndm_num = rand(100000,999999);

                                $sql6 = "SELECT * FROM product WHERE id =$id ";
                                $result = $conn->query($sql6);


                                while ($data = $result->fetch_assoc()) {
                                    $productId = $data['id'];
                                    $peoduct_name = $data['peoduct_name'];
                                    $writer_name = $data['writer_name'];
                                    $product_price = $data['product_price'];
                                    $discount = $data['discount'];
                                    $level_scl_clg_uni = $data['level_scl_clg_uni'];
                                    $stock_product = $data['stock_product'];
                                    $img = $data['img'];

                                }
                            }
                                ?>                         

                        <!-- details design start -->

                                <div class="allDetails">
                                    <section class="product">
                                        <div class="product__photo">
                                            <div class="photo-container">
                                                <div class="photo-main">
                                                    <div class="controls">
                                                        <i class="material-icons">share</i>
                                                        <i class="material-icons">favorite_border</i>
                                                    </div>
                                                    <img src="up_img/<?php echo "$img" ?>" alt="green apple slice">
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="product__info">
                                            <div class="title">
                                                <h1><?php echo "$peoduct_name"; ?></h1>
                                                <span class="hilight" >CODE: </span><span><?php echo "$rndm_num"; ?></span>
                                            </div>
                                            <div class="price">
                                                TK.৳ <span><?php echo "$product_price"; ?></span>
                                            </div>
                                           
                                            <div class="description">
                                                <h3>DETAILS</h3>
                                                <ul>
                                                    <li> <span class="hilight" >Writer Name : </span><?php echo "$writer_name"; ?></li>
                                                    <li><span class="hilight" >Discount : </span><?php echo "$discount%"; ?></li>
                                                    <li><span class="hilight" >Book Level : </span><?php echo "$level_scl_clg_uni"; ?></li>
                                                    <li><span class="hilight" >Book Available :  </span><?php echo "$stock_product piece"; ?></li>
                                                </ul>
                                            </div>
                                            <form method="post">
                                                <label class="Quantity" for="">Quantity</label>
                                                <input type="number" required name="Quantity" id="Quantity">
                                                <button type="submit" name="add" class="buy--btn">ADD TO CART</button>
                                            </form>
                                              
                                        </div>

                                        <?php 

                                            $conn = new mysqli('localhost','root','','studyabroad');
                                            if(!$conn){
                                                echo 'not connect';
                                            }


                                            if(isset($_POST['add'])){
                                            $Quantity = $_POST['Quantity'];
                                           
                                            if($stock_product>=$Quantity && $Quantity>0){

                                                $new_stock_product = $stock_product - $Quantity;
                                                
                                                $totalPrice = $Quantity * $product_price;

                                               

                                                 $sql = "INSERT INTO cart (product_id, customer_email,product_quantity, each_pro_price, totalPrice)
                                                 VALUES('$productId' , '$email','$Quantity' , '$product_price', '$totalPrice')";

                                                $result = $conn->query($sql);

                                                $sql_u =   "UPDATE product 
                                                SET stock_product='$new_stock_product' WHERE id ='$productId' ";

                                                $result_u = $conn->query($sql_u);

                                           

                                                if($result == true){
                                                    echo "<script>window.location.href ='cart.php';</script> ";
                                                    
                                                }else{
                                                    echo "error";
                                                }

                                            }else{
                                               echo "<script>
                                                alert('Quantity overload!.Please check book availability carefully');
                                              
                                            </script>";

                                           

                                            }
                                        }
                                            ?>



                                    </section>
                                </div>

                        <!-- details design end -->                   
                           
               
                            </div>
                        </div>



                    </div>

                </div>

                <div id="popup-wrong" class="modal">
                    <div class="content_wrng">


                                <div class="title_wr text-center">
                                    <img src="pic/w.gif" alt="" srcset="">
                                </div>
                                <div class="content">
                            
                                    <div class="btn1">
                                        <h3 class="cmnt">Your balance is low!!!</h3>
                                    </div>
                            
                                </div>

                                <a href="#" class="box-close">
                                    ×
                                </a>
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
        


    window.onload = function () {

    // SLIDER
    var slider = document.getElementsByClassName("sliderBlock_items");
    var slides = document.getElementsByClassName("sliderBlock_items__itemPhoto");
    var next = document.getElementsByClassName("sliderBlock_controls__arrowForward")[0];
    var previous = document.getElementsByClassName("sliderBlock_controls__arrowBackward")[0];
    var items = document.getElementsByClassName("sliderBlock_positionControls")[0];
    var currentSlideItem = document.getElementsByClassName("sliderBlock_positionControls__paginatorItem");

    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 5000);  /// Delay time of slides

    function nextSlide() {
        goToSlide(currentSlide + 1);
    }

    function previousSlide() {
        goToSlide(currentSlide - 1);
    }


    function goToSlide(n) {
        slides[currentSlide].className = 'sliderBlock_items__itemPhoto';
        items.children[currentSlide].className = 'sliderBlock_positionControls__paginatorItem';
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].className = 'sliderBlock_items__itemPhoto sliderBlock_items__showing';
        items.children[currentSlide].className = 'sliderBlock_positionControls__paginatorItem sliderBlock_positionControls__active';
    }


    next.onclick = function () {
        nextSlide();
    };
    previous.onclick = function () {
        previousSlide();
    };


    function goToSlideAfterPushTheMiniBlock() {
        for (var i = 0; i < currentSlideItem.length; i++) {
            currentSlideItem[i].onclick = function (i) {
                var index = Array.prototype.indexOf.call(currentSlideItem, this);
                goToSlide(index);
            }
        }
    }

    goToSlideAfterPushTheMiniBlock();



    var buttonFullSpecification = document.getElementsByClassName("block_specification")[0];
    var buttonSpecification = document.getElementsByClassName("block_specification__specificationShow")[0];
    var buttonInformation = document.getElementsByClassName("block_specification__informationShow")[0];

    var blockCharacteristiic = document.querySelector(".block_descriptionCharacteristic");
    var activeCharacteristic = document.querySelector(".block_descriptionCharacteristic__active");


    buttonFullSpecification.onclick = function () {

        console.log("OK");


        buttonSpecification.classList.toggle("hide");
        buttonInformation.classList.toggle("hide");


        blockCharacteristiic.classList.toggle("block_descriptionCharacteristic__active");


    };


    /////  QUANTITY ITEMS

    var up = document.getElementsByClassName('block_quantity__up')[0],
        down = document.getElementsByClassName('block_quantity__down')[0],
        input = document.getElementsByClassName('block_quantity__number')[0];

    function getValue() {
        return parseInt(input.value);
    }

    up.onclick = function (event) {
        input.value = getValue() + 1;
    };
    down.onclick = function (event) {
        if (input.value <= 1) {
            return 1;
        } else {
            input.value = getValue() - 1;
        }

    }


    };
        </script>

            </body>

            </html>

        <?php
} else {
    header("location:index1.php");
}
?>