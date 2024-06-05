<?php
session_start();
$passValueLoginPage = $_SESSION['login'];

$user_id = $_SESSION['user_id'];
$name = $_SESSION['name'];
$Phone = $_SESSION['Phone'];
$email = $_SESSION['email'];
$Password = $_SESSION['Password'];



if (!empty ($passValueLoginPage)) {



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

            .container1 {
                display: flex;
                justify-content: space-between;
                padding: 13px 2%;
                height: 452px !important;
                overflow: hidden !important; 
                /* cng */
            }
            input[type="text"] {
                position: relative;
                top: 6px;
            }

            .nav-left ul li {
                list-style: none;
                display: inline-block;
                position: relative;
                top: 8px;
                left: 62px;
                margin-left: 40px;
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

            .nav-user-icon {
                margin-left: 30px;
            }

            .nav-user-icon.deg {
                color: #fff;
                position: relative;
                left: 15px;
            }

            .nav-user-icon img {
                width: 45px !important;
                height: 45px !important;
                border-radius: 50%;
                cursor: pointer;
                position: relative;
                left: 40px;
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
                right: -40px !important;
            }

            form.srchFrm {
                display: flex;
            }

            button.srcBtn {
                position: relative;
                left: 58px;
                background: #dfdfdf;
                color: #000;
            }

            .texts p {
                font-size: 12px;
                position: relative;
                top: 10px;
                left: 10px;
            }

            .imgloc img {
                width: 25px;
            }

            .mn_info p {
                float: left;
                margin-right: 30px;
            }

            .top-mid {
                display: flex;
                justify-content: space-between;
            }

            .imgloc {
                height: 25px;
                position: relative;
                top: 10px;
            }

            .post-text {
                color: #3615b3e8 !important;
                margin: 15px 0;
                font-size: 15px;
                font-weight: bold !important;
            }

            .imp-links a {
                text-decoration: none !important;
            }

            .nav-left a {
                text-decoration: none;
            }

            li.nav-item a {
                cursor: pointer;
            }

            .main-content {
                flex-basis: 58%;
                width: 400px !important;
                background: azure;
            }

            section {
                position: sticky;
                top: 0;
                z-index: 100;
            }

            nav.navbar.navbar-expand-lg.navbar-light.bg-light {
                position: sticky;
                top: 41px;
                z-index: 100;
            }

            .hr {
                width: 100%;
                border: 3px solid #5e321c !important;
                position: sticky;
                top: 122px;
                z-index: 100;
            }

            .nav-left p {
                color: #fff;
                position: relative;
                top: 8px;
            }

            .nav-left ul li {
                list-style: none;
                display: inline-block;
                position: relative;
                top: 8px;
                left: 62px;
            }

            .left-sidebar {
                flex-basis: 25%;
                position: sticky;
                top: 196px !important;
                align-self: flex-start;
                overflow-y: auto;
            }

         
        </style>

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

        <style>


            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

            .container .title {
                font-size: 25px;
                font-weight: 500;
                position: relative;
            }

            .container .title::before {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                height: 3px;
                width: 30px;
                border-radius: 5px;
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
            }

            .content form .user-details {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                margin: 20px 0 12px 0;
            }

            form .user-details .input-box {
                margin-bottom: 15px;
                width: calc(100% / 2 - 20px);
            }

            form .input-box span.details {
                display: block;
                font-weight: 500;
                margin-bottom: 5px;
            }

            .user-details .input-box input {
                height: 45px;
                width: 100%;
                outline: none;
                font-size: 16px;
                border-radius: 5px;
                padding-left: 15px;
                border: 1px solid #ccc;
                border-bottom-width: 2px;
                transition: all 0.3s ease;
            }

            .user-details .input-box input:focus,
            .user-details .input-box input:valid {
                border-color: #9b59b6;
            }

            form .gender-details .gender-title {
                font-size: 20px;
                font-weight: 500;
            }

            form .category {
                display: flex;
                width: 80%;
                margin: 14px 0;
            }

            span.gender {
                margin-right: 15px;
            }

            form .category label {
                display: flex;
                align-items: center;
                cursor: pointer;
            }

            form .category label .dot {
                height: 18px;
                width: 18px;
                border-radius: 50%;
                margin-right: 5px;
                background: #d9d9d9;
                border: 5px solid transparent;
                transition: all 0.3s ease;
            }

            #dot-1:checked~.category label .one,
            #dot-2:checked~.category label .two,
            #dot-3:checked~.category label .three {
                background: #9b59b6;
                border-color: #d9d9d9;
            }

            form input[type="radio"] {
                display: none;
            }

            form .button {
                height: 45px;
                margin: 35px 0
            }

            form .button input {
                height: 100%;
                width: 100%;
                border-radius: 5px;
                border: none;
                color: #fff;
                font-size: 18px;
                font-weight: 500;
                letter-spacing: 1px;
                cursor: pointer;
                transition: all 0.3s ease;
                background: linear-gradient(135deg, #71b7e6, #9b59b6);
            }

            form .button input:hover {
                /* transform: scale(0.99); */
                background: linear-gradient(-135deg, #71b7e6, #9b59b6);
            }

            @media(max-width: 584px) {
                .container {
                    max-width: 100%;
                }

                form .user-details .input-box {
                    margin-bottom: 15px;
                    width: 100%;
                }

                form .category {
                    width: 100%;
                }

                .content form .user-details {
                    max-height: 300px;
                    overflow-y: scroll;
                }

                .user-details::-webkit-scrollbar {
                    width: 5px;
                }
            }

            @media(max-width: 459px) {
                .container .content .category {
                    flex-direction: column;
                }
            }
        </style>

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

            a {
                color: #c9d1db;
                text-decoration: none;
                background-color: transparent;
            }

            a:hover {
                color: #c9d1db;
                text-decoration: none;
            }


            /* card design start */


            .container_3 {
                position: relative;
                align-items: center;
                padding: 20px;
                top: 20px
            }

            .container_3 .card {
                position: relative;
                max-width: 300px;
                height: 182px;
                float: left;
                left: 15px;
                background-color: #fff;
                margin: 65px 10px;
                padding: 20px 15px;
                display: flex;
                flex-direction: column;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
                transition: 0.3s ease-in-out;
                border-radius: 15px;
            }

            .container_3 .card:hover {
                height: 320px;
            }

            .content p {
                font-size: 15px;
            }

            .content h3 {
                font-size: 25px;
            }


            .container_3 .card .image {
                position: relative;
                width: 208px;
                height: 180px;
                top: -40%;
                left: 0px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
                z-index: 1;
            }

            .container_3 .card .image img {
                width: 255px;
                height: 180px;
                border-radius: 15px
            }

            .container_3 .card .content {
                position: relative;
                top: -140px;
                padding: 50px 15px;
                color: #111;
                text-align: center;

                visibility: hidden;
                opacity: 0;
                transition: 0.3s ease-in-out;

            }

            .container_3 .card:hover .content {
                margin-top: 30px;
                visibility: visible;
                opacity: 1;
                transition-delay: 0.2s;

            }

            .dtlsIn {
                line-height: 10px;
                position: relative;
                top: 15px;
            }

            /* card design end */
        </style>

        <style>
            .chat {
                margin-top: auto;
                margin-bottom: auto;
            }

            .left-sidebar {
                flex-basis: 25%;
                position: sticky;
                top: 70px;
                margin-right: 10px !important;
                align-self: flex-start;
            }

            .cardCt {
                height: 500px;
                border-radius: 15px !important;
                background-color: rgb(58 94 217) !important;
                overflow-y: auto;
                white-space: nowrap;
            }

            .contacts_body {
                padding: 0.75rem 0 !important;
                overflow-y: auto;
                white-space: nowrap;
            }

            .contacts_body ul li {
                cursor: pointer;
            }

            .msg_card_body {
                overflow-y: auto;
            }

            .card-header {
                border-radius: 15px 15px 0 0 !important;
                border-bottom: 0 !important;
            }

            .card-footer {
                border-radius: 0 0 15px 15px !important;
                border-top: 0 !important;
            }

            .container {
                align-content: center;
            }

            .search {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
            }

            .search:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .type_msg {
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                height: 60px !important;
                overflow-y: auto;
            }

            .type_msg:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .attach_btn {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .send_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .search_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .contacts {
                list-style: none;
                padding: 0;
            }

            .contacts li {
                width: 100% !important;
                padding: 5px 10px;
                margin-bottom: 0px !important;
                cursor: pointer;
            }

            .contacts li:hover {


                background-color: rgba(0, 0, 0, 0.3);
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
            }

            .user_img {
                height: 60px;
                width: 60px;
                border: 1.5px solid #f5f6fa;
            }

            .user_img {
                height: 40px;
                width: 40px;
                border: 1.5px solid #f5f6fa;
            }


            .img_cont_msg {
                height: 40px;
                width: 40px;
            }

            .online_icon {
                position: absolute;
                height: 10px;
                width: 10px;
                background-color: #4cd137;
                border-radius: 50%;
                bottom: 32px;
                right: 28px;
                border: 1.5px solid white;
            }

            .offline {
                background-color: #c23616 !important;
            }

            .user_info {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 15px;
            }

            .user_info span {
                font-size: 15px;
                color: white;
            }

            .user_info p {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.6);
            }

            .video_cam {
                margin-left: 50px;
                margin-top: 5px;
            }

            .video_cam span {
                color: white;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }

            .msg_cotainer {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 10px;
                border-radius: 25px;
                background-color: #82ccdd;
                padding: 10px;
                position: relative;
            }

            .msg_cotainer_send {
                margin-top: auto;
                margin-bottom: auto;
                margin-right: 10px;
                border-radius: 25px;
                background-color: #78e08f;
                padding: 10px;
                position: relative;
            }

            .msg_time {
                position: absolute;
                left: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_time_send {
                position: absolute;
                right: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_head {
                position: relative;
            }

            #action_menu_btn {
                position: absolute;
                right: 10px;
                top: 10px;
                color: white;
                cursor: pointer;
                font-size: 20px;
            }

            .action_menu {
                z-index: 1;
                position: absolute;
                padding: 15px 0;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border-radius: 15px;
                top: 30px;
                right: 15px;
                display: none;
            }

            .action_menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .action_menu ul li {
                width: 100%;
                padding: 10px 15px;
                margin-bottom: 5px;
            }

            .action_menu ul li i {
                padding-right: 10px;
            }

            .action_menu ul li:hover {
                cursor: pointer;
                background-color: rgba(0, 0, 0, 0.2);
            }

            .rounded-circle {
                border-radius: 50% !important;
                width: 40px !important;
            }

            .card2 {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 480px;
                min-width: 0;
                word-wrap: break-word;
                background-color: #5b62b5fa;
                background-clip: border-box;
                border-radius: 0.25rem;
            }

            .content_1 {
                position: relative;
                background-color: #5b62b5fa;
                width: 829px;
                padding: 1em 2em;
                border-radius: 4px;
            }


            /* width */

            ::-webkit-scrollbar {
                width: 10px;
            }


            /* Track */

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }


            /* Handle */

            ::-webkit-scrollbar-thumb {
                background: #888;
            }


            /* Handle on hover */

            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            @media(max-width: 576px) {
                .contacts_card {
                    margin-bottom: 15px !important;
                }
            }
        </style>

        <style>
            h3.mngr {
                color: #fff;
                text-align: center;
                margin-left: 75px;
                font-size: 20px;
            }

            .chat {
                margin-top: auto;
                margin-bottom: auto;
            }

            .contacts_body {
                padding: 0.75rem 0 !important;
                overflow-y: auto;
                white-space: nowrap;
            }

            .contacts_body ul li {
                cursor: pointer;
            }

            .msg_card_body {
                overflow-y: auto;
            }

            .card-header {
                border-radius: 15px 15px 0 0 !important;
                border-bottom: 0 !important;
            }

            .card-footer {
                border-radius: 0 0 15px 15px !important;
                border-top: 0 !important;
            }

            .container {
                align-content: center;
            }

            .search {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
            }

            .search:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .type_msg {
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                height: 60px !important;
                overflow-y: auto;
            }

            .type_msg:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .attach_btn {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .send_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .search_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .contacts {
                list-style: none;
                padding: 0;
            }

            .contacts li {
                width: 100% !important;
                padding: 5px 10px;
                margin-bottom: 0px !important;
                cursor: pointer;
            }

            .contacts li:hover {


                background-color: rgba(0, 0, 0, 0.3);
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
            }

            .user_img {
                height: 60px;
                width: 60px;
                border: 1.5px solid #f5f6fa;
            }

            .user_img {
                height: 40px;
                width: 40px;
                border: 1.5px solid #f5f6fa;
            }

          

            .img_cont_msg {
                height: 40px;
                width: 40px;
            }

            .online_icon {
                position: absolute;
                height: 10px;
                width: 10px;
                background-color: #4cd137;
                border-radius: 50%;
                bottom: 32px;
                right: 28px;
                border: 1.5px solid white;
            }

            .offline {
                background-color: #c23616 !important;
            }

         

            .user_info span {
                font-size: 15px;
                color: white;
            }

            .user_info p {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.6);
            }

            .video_cam {
                margin-left: 50px;
                margin-top: 5px;
            }

            .video_cam span {
                color: white;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }

            .msg_cotainer {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 10px;
                border-radius: 25px;
                background-color: #82ccdd;
                padding: 10px;
                position: relative;
            }

            .msg_cotainer_send {
                margin-top: auto;
                margin-bottom: auto;
                margin-right: 10px;
                border-radius: 25px;
                background-color: #78e08f;
                padding: 10px;
                position: relative;
            }

            .msg_time {
                position: absolute;
                left: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_time_send {
                position: absolute;
                right: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_head {
                position: relative;
            }

            #action_menu_btn {
                position: absolute;
                right: 10px;
                top: 10px;
                color: white;
                cursor: pointer;
                font-size: 20px;
            }

            .action_menu {
                z-index: 1;
                position: absolute;
                padding: 15px 0;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border-radius: 15px;
                top: 30px;
                right: 15px;
                display: none;
            }

            .action_menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .action_menu ul li {
                width: 100%;
                padding: 10px 15px;
                margin-bottom: 5px;
            }

            .action_menu ul li i {
                padding-right: 10px;
            }

            .action_menu ul li:hover {
                cursor: pointer;
                background-color: rgba(0, 0, 0, 0.2);
            }

            .rounded-circle {
                border-radius: 50% !important;
                width: 40px !important;
            }

            .card2 {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 480px;
                min-width: 0;
                word-wrap: break-word;
                background-color: #5b62b5fa;
                background-clip: border-box;
                border-radius: 0.25rem;
            }

            .content_1 {
                position: relative;
                background-color: #5b62b5fa;
                width: 829px;
                padding: 1em 2em;
                border-radius: 4px;
            }


            /* width */

            ::-webkit-scrollbar {
                width: 10px;
            }


            /* Track */

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }


            /* Handle */

            ::-webkit-scrollbar-thumb {
                background: #888;
            }


            /* Handle on hover */

            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            @media(max-width: 576px) {
                .contacts_card {
                    margin-bottom: 15px !important;
                }
            }

            span.msg_time_send {
                position: absolute;
                right: -15px !important;
                bottom: -15px !important;
                width: 105px !important;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_time {
                width: 105px !important;
                position: absolute;
                15px: ;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }
        </style>

        <style>
            h3.mngr {
                color: #fff;
                text-align: center;
                margin-left: 75px;
                font-size: 20px;
            }

            .img_cont_msg img {
                height: 40px !important;
            }

            .d-flex.justify-content-start.mb- {
                margin-bottom: 30px;
            }

            .main-content {
                flex-basis: 60% !important;
                width: 400px !important;
                background: azure;
            }

            .chat {
                margin-top: auto;
                margin-bottom: auto;
            }

            .cardCt {
            height: 423px !important;
            border-radius: 7px !important;
            background-color: rgb(58 94 217) !important;
            overflow-y: auto;
            white-space: nowrap;
            padding-left: 10px;
            padding-right: 10px;
        }
        .right-sidebar {
                position: fixed;
                top: 198;
                right: 30px;
                width: 23% !important;
                height: 65%;
                background-color: #fff;
            }

            .contacts_body {
                padding: 0.75rem 0 !important;
                overflow-y: auto;
                white-space: nowrap;
            }

            .contacts_body ul li {
                cursor: pointer;
            }

            .msg_card_body {
                overflow-y: auto;
            }

            .card-header {
                border-radius: 15px 15px 0 0 !important;
                border-bottom: 0 !important;
            }

            .card-footer {
                border-radius: 0 0 15px 15px !important;
                border-top: 0 !important;
            }

            .container {
                align-content: center;
            }

            .search {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
            }

            .search:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .type_msg {
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                height: 60px !important;
                overflow-y: auto;
            }

            .type_msg:focus {
                box-shadow: none !important;
                outline: 0px !important;
            }

            .attach_btn {
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .send_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .search_btn {
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0, 0, 0, 0.3) !important;
                border: 0 !important;
                color: white !important;
                cursor: pointer;
            }

            .contacts {
                list-style: none;
                padding: 0;
            }

            .contacts li {
                width: 100% !important;
                padding: 5px 10px;
                margin-bottom: 0px !important;
                cursor: pointer;
            }

            .contacts li:hover {


                background-color: rgba(0, 0, 0, 0.3);
            }

            .actives {
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 5px;

            }

            .user_img {
                height: 60px;
                width: 60px;
                border: 1.5px solid #f5f6fa;
            }

            .user_img {
                height: 40px;
                width: 40px;
                border: 1.5px solid #f5f6fa;
            }

            .img_cont {
                position: relative;
                height: 70px;
                width: 70px;
                top: 7px;
                margin-right: 5px;
            }

            .user_info {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: -26px;
            }


            .img_cont_msg {
                height: 40px;
                width: 40px;
            }

            .online_icon {
                position: absolute;
                height: 10px;
                width: 10px;
                background-color: #4cd137;
                border-radius: 50%;
                bottom: 32px;
                right: 28px;
                border: 1.5px solid white;
            }

            .offline {
                background-color: #c23616 !important;
            }

          
            .user_info span {
                font-size: 15px;
                color: white;
            }

            .user_info p {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.6);
            }

            .video_cam {
                margin-left: 50px;
                margin-top: 5px;
            }

            .video_cam span {
                color: white;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }

            .msg_cotainer {
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 10px;
                border-radius: 25px;
                background-color: #82ccdd;
                padding: 10px;
                position: relative;
            }

            .msg_cotainer_send {
                margin-top: auto;
                margin-bottom: auto;
                margin-right: 10px;
                border-radius: 25px;
                background-color: #78e08f;
                padding: 10px;
                position: relative;
            }

            .msg_time {
                position: absolute;
                left: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_time_send {
                position: absolute;
                right: 0;
                bottom: -15px;
                color: rgba(255, 255, 255, 0.5);
                font-size: 10px;
            }

            .msg_head {
                position: relative;
            }

            #action_menu_btn {
                position: absolute;
                right: 10px;
                top: 10px;
                color: white;
                cursor: pointer;
                font-size: 20px;
            }

            .action_menu {
                z-index: 1;
                position: absolute;
                padding: 15px 0;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border-radius: 15px;
                top: 30px;
                right: 15px;
                display: none;
            }

            .action_menu ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .action_menu ul li {
                width: 100%;
                padding: 10px 15px;
                margin-bottom: 5px;
            }

            .action_menu ul li i {
                padding-right: 10px;
            }

            .action_menu ul li:hover {
                cursor: pointer;
                background-color: rgba(0, 0, 0, 0.2);
            }

            .rounded-circle {
                border-radius: 50% !important;
                width: 40px !important;
            }

            .card2 {
                position: relative;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 480px;
                min-width: 0;
                word-wrap: break-word;
                background-color: #5b62b5fa;
                background-clip: border-box;
                border-radius: 0.25rem;
            }

            .content_1 {
                position: relative;
                background-color: #5b62b5fa;
                width: 829px;
                padding: 1em 2em;
                border-radius: 4px;
            }


            /* width */

            ::-webkit-scrollbar {
                width: 10px;
            }


            /* Track */

            ::-webkit-scrollbar-track {
                background: #f1f1f1;
            }


            /* Handle */

            ::-webkit-scrollbar-thumb {
                background: #888;
            }


            /* Handle on hover */

            ::-webkit-scrollbar-thumb:hover {
                background: #555;
            }

            @media(max-width: 576px) {
                .contacts_card {
                    margin-bottom: 15px !important;
                }
            }

            .modal11 {

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

            .content_11 {
                position: relative;
                background-color: rgb(58 94 217) !important;
                width: 830px;
                height: 430px;
                padding: 1em 2em;
                border-radius: 4px;
                top: 175px;
                /* cng */
            }

            .card22 {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 405px;
                min-width: 0;
                word-wrap: break-word;
                background-clip: border-box;
                border-radius: 0.25rem;
                background-color: rgb(58 94 217) !important;
                /* cng */
            }

            form.msgFrm {
                width: 520px;
                display: flex;
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
                border: 1px solid rgba(0, 0, 0, .2);
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
        </style>

        
        <style>
     .main-content {
    flex-basis: 60% !important;
    width: 400px !important;
    background: azure;
    position: fixed;
    right: 460px;
}

.content_11 {
    position: relative;
    background-color: rgb(58 94 217) !important;
    width: 630px;
    height: 424px !important;
    padding: 1em 2em;
    border-radius: 4px;
    top: 170px !important;
}

.card22 {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 400px !important;
    min-width: 0;
    word-wrap: break-word;
    background-clip: border-box;
    border-radius: 0.25rem;
    background-color: rgb(58 94 217) !important;
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item actives">
                        <a href="tuition.php" class="nav-link">Tuition Platform</a>
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

        <!-- social media design start -->
        <?php

            $conn = new mysqli('localhost', 'root', '', 'studyabroad');
            if (!$conn) {
                echo 'not connect';
            }

            $sql = "SELECT* FROM tution_user_info WHERE  email = '$email' AND mobile = '$Phone' ";

            $query = $conn->query($sql);

            if ($query->num_rows > 0) {
                $data = mysqli_fetch_assoc($query);


                $s_id = $data['id'];
                $s_name = $data['name'];
                $s_Phone = $data['mobile'];
                $s_email = $data['email'];
                $s_img = $data['img'];
                $s_address = $data['address'];
                $designations = $data['designation'];
                $institut = $data['institut'];
            }



            ?>


        <!-- social media nav design start -->
        <nav class="socialNav">
            <div class="nav-left">
                <a href="tuition.php">
                    <p>T&S Tuition Book</p>
                </a>

                <ul>
                    <li class="act"> <a href="dashboard.php">Message</a> </li>
                </ul>

                <ul>
                    <li> <a href="myPost.php">My post</a> </li>
                </ul>

                <ul>
                    <li> <a href="applyHistory.php"><?php if($designations == "student"){echo "My Request";}else{echo"My job apply";} ?></a> </li>
                </ul>

                <ul>
                    <li> <a href="rqstStTs.php"><?php if($designations == "student"){echo "Applicant";}else{echo"Request";} ?></a></li>
                </ul>
              
            </div>

            <div class="nav-right">
                <div class="search-box">
                    <form class="srchFrm" action="searchTution.php" method="post">
                        <input type="text" name="sr" placeholder="Search..." name="search2">
                        <button class="srcBtn" name="search" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

               

                <div class="nav-user-icon online">
                    <img src="up_img/<?php echo "$s_img" ?>" alt="No picture" srcset="">
                </div>

                <div class="nav-user-icon deg">
                    <?php echo " $designations" ?>
                </div>

            </div>
        </nav>
        <!-- social media nav design end -->


        <!-- social middle design start -->
        <div class="container1">
            <!-- left-side start -->
            <div class="left-sidebar">
                <div class="imp-links">
                    <a href="socialMyAcc.php"><img src="socialmage/acc.png" alt="">
                        <?php echo "$name" ?>
                    </a>
                    <a href="dashboard.php"><img src="socialmage/friends.png" alt="">Student/Teacher</a>
                    <a href="#popup-box"><img src="socialmage/pst.png" alt="">Post</a>
                    <a href="#staticBackdrop"><img src="socialmage/pay.png" alt="">Payment</a>

                </div>

                <div class="shortcut-links">
                    <p>Online Course</p>

                    <a
                        href="https://www.udemy.com/course/ultimate-web/?gad_source=1&gclid=Cj0KCQiAwP6sBhDAARIsAPfK_wbkon7GZMWxzQ91n3vgGm1Xu8dJ5rl_v7ayoYcrTSF2-uIoucicQFsaAtrlEALw_wcB&matchtype=b&utm_campaign=WebDevelopment_v.PROF_la.EN_cc.ROW_ti.8322&utm_content=deal4584&utm_medium=udemyads&utm_source=adwords&utm_term=_._ag_80385736515_._ad_535757876393_._kw_web+development+course_._de_c_._dm__._pl__._ti_kwd-306481538064_._li_1001441_._pd__._"><img
                            src="socialmage/shortcut-2.webp" alt="">Web Development </a>
                    <a
                        href="https://developer.android.com/courses?gclid=Cj0KCQiAhomtBhDgARIsABcaYyluDSKX9CvJpCk7-s6YdH3zP4WIXA-xgnWzP4m-iylfi-pFIw5tMzoaAvAhEALw_wcB&gclsrc=aw.ds"><img
                            src="pic/app.gif" alt="">Mobile App Development</a>
                </div>
            </div>
            <!-- left-side end -->



            <!-- middle-side start -->

            <div class="main-content">


                <div class=container_3>



                    <div id="popup-box-chat" class="modal11">



                        <div class="content_11">


                            <div class="col-md-12 col-xl-12 chat">
                                <div class="card22">


                                    <?php
                                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                    if (!$conn) {
                                        echo 'not connect';
                                    }

                                    if ($_GET['phone']) {
                                        $get_phn_num = $_GET['phone'];


                                        $sql = "SELECT* FROM tution_user_info where mobile= $get_phn_num";
                                        $result = $conn->query($sql);

                                        while ($data = $result->fetch_assoc()) {
                                            $get_name = $data['name'];
                                            $get_img = $data['img'];
                                        }
                                    }

                                    ?>


                                    <div class="card-header msg_head">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="up_img/<?php echo "$get_img"; ?>" class="rounded-circle user_img">
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>
                                                    <?php echo "$get_name"; ?>
                                                </span>
                                                <p>Messenger</p>
                                            </div>
                                            <div class="video_cam">

                                            </div>
                                        </div>
                                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>

                                    </div>


                                    <div class="card-body msg_card_body">





                                        <?php
                                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                        if (!$conn) {
                                            echo 'not connect';
                                        }



                                        if ($_GET['phone']) {

                                            $get_phn_num = $_GET['phone'];


                                            $sql = "SELECT* FROM massege";
                                            $result = $conn->query($sql);

                                            function decryptText1($encryptedText, $key) {
                                                $data = base64_decode($encryptedText);
                                                $ivSize = openssl_cipher_iv_length('aes-256-cbc');
                                                $iv = substr($data, 0, $ivSize);
                                                $encrypted = substr($data, $ivSize);
                                                return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
                                            }

                                            function decryptText2($encryptedText, $key) {
                                                $data = base64_decode($encryptedText);
                                                $ivSize = openssl_cipher_iv_length('aes-256-cbc');
                                                $iv = substr($data, 0, $ivSize);
                                                $encrypted = substr($data, $ivSize);
                                                return openssl_decrypt($encrypted, 'aes-256-cbc', $key, 0, $iv);
                                            }

                                            while ($data = $result->fetch_assoc()) {
                                                $log_name = $data['name'];
                                                $log_email = $data['email'];
                                                $Log_send_phn = $data['send_phn'];
                                                $log_img = $data['img'];
                                                $log_msg = $data['msg'];
                                                $get_rec_phn = $data['rec_phn'];
                                                $get_snd_time = $data['snd_time'];
                                                $publicKey = $data['publicKey'];
                                                $privateKey = $data['privateKey'];
                                                if ($Log_send_phn == $Phone && $get_rec_phn == $get_phn_num) {
                                                        // private key is Log_send_phn
                                                        $log_msgs = decryptText1($log_msg, $privateKey);
                                                 echo "
                                            
                                            <div class='d-flex justify-content-end mb-4'>
                                            <div class='msg_cotainer_send'>
                                            $log_msgs
                                                <span class='msg_time_send'>$get_snd_time</span>
                                            </div>
                                            <div class='img_cont_msg'>
                                                <img src='up_img/$log_img'
                                                    class='rounded-circle user_img_msg'>
                                            </div>

                                        </div>
                                            
                                            
                                            ";
                                                }

                                                if ($Log_send_phn == $get_phn_num && $get_rec_phn == $Phone) {
                                                    $log_msgs = decryptText2($log_msg, $privateKey);
                                                    echo "
                                        
                                        <div class='d-flex justify-content-start mb-'>
                                        <div class='img_cont_msg'>
                                            <img src='up_img/$log_img'
                                                class='rounded-circle user_img_msg'>
                                        </div>
                                        <div class='msg_cotainer'>
                                            $log_msgs
                                            <span class='msg_time'>$get_snd_time</span>
                                        </div>
                                    </div>
                                        
                                        
                                        
                                        ";
                                                }


                                            }


                                        }


                                        ?>


                                    </div>

                                    <div class="card-footer">
                                        <div class="input-group">
                                           
                                            <form class="msgFrm" method="post">
                                                <textarea name="txtMsg" class="form-control type_msg"
                                                    placeholder="Type your message..."></textarea>
                                                <div class="input-group-append">

                                                    <button type="submit" name="send"> <span
                                                            class="input-group-text send_btn"><i
                                                                class="fas fa-location-arrow"></i></span></button>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>


                            <?php
                            $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                            if (!$conn) {
                                echo 'not connect';
                            }


                            if ($_GET['phone']) {
                                $get_phn_num = $_GET['phone'];
                                if (isset ($_POST['send'])) {
                                    $msges = $_POST['txtMsg']; // mage
                                    $pkey = "wJGIRUFKD$$@CJF--DUCH6453EE";

                                    $sql = "SELECT* FROM all_record";
                                    $result = $conn->query($sql);

        function RSAencryptText($text, $key) {
            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $encrypted = openssl_encrypt($text, 'aes-256-cbc', $key, 0, $iv);
            return base64_encode($iv . $encrypted);
        }
        while ($data = $result->fetch_assoc()) {

            $log_usr_id = $data['log_usr_id'];
            $log_usr_name = $data['log_usr_name'];
            $log_usr_email = $data['log_usr_email'];
            $log_usr_phone = $data['log_usr_phone'];
            $log_usr_img = $data['log_usr_img'];
            $add_prsn_id = $data['add_prsn_id'];
            $add_prsn_name = $data['add_prsn_name'];
            $add_prsn_email = $data['add_prsn_email'];
            $add_prsn_phone = $data['add_prsn_phone'];
            $add_usr_img = $data['add_usr_img'];

            if ($log_usr_phone == $Phone) {
            $msge = RSAencryptText($msges, $pkey);
$sqlin = "INSERT INTO massege(name, email,msg, img, send_phn, rec_phn, publicKey,privateKey)
    values('$log_usr_name','$log_usr_email','$msge','$log_usr_img',
    '$log_usr_phone','$get_phn_num','$pkey' ,'$pkey')";

                                            $resultin = $conn->query($sqlin);
                                            echo "<script>window.location.href ='msgr2.php?phone=$get_phn_num';</script> ";
                                            exit();


                                        } elseif ($add_prsn_phone == $Phone) {
                                            $msge = RSAencryptText($msges, $pkey);
                                            $sqlin = "INSERT INTO massege(name, email,msg, img, send_phn, rec_phn,publicKey,privateKey)
                                                values('$add_prsn_name','$add_prsn_email','$msge','$add_usr_img',
                                                '$add_prsn_phone','$get_phn_num','$pkey' ,'$pkey')";

                                            $resultin = $conn->query($sqlin);
                                            echo "<script>window.location.href ='msgr2.php?phone=$get_phn_num';</script> ";
                                            exit();

                                        }


                                    }

                                }
                            }



                            ?>
                        </div>
                    </div>


                </div>

                <div id="popup-box" class="modal">


                    <?php

                    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                    if (!$conn) {
                        echo 'not connect';
                    }

                    $sql = "SELECT* FROM tution_user_info WHERE  email = '$email' AND mobile = '$Phone' ";

                    $query = $conn->query($sql);

                    if ($query->num_rows > 0) {
                        $data = mysqli_fetch_assoc($query);


                        $s_id = $data['id'];
                        $s_name = $data['name'];
                        $s_Phone = $data['mobile'];
                        $s_email = $data['email'];
                        $s_address = $data['address'];
                        $s_img = $data['img'];
                        $designations = $data['designation'];
                        $institut = $data['institut'];

                    }

                    ?>



                    <div class="content1">


                        <div class="title">Please fillup this form</div>
                        <div class="content">
                            <form action="tuition.php" method="post">
                                <div class="user-details">
                                    <div class="input-box">
                                        <span class="details">Class</span>
                                        <input type="text" name="class" placeholder="1-12*" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Tuition time&days</span>
                                        <input type="text" name="day_time" placeholder="Example : Sunday&Tuesday (7 PM)"
                                            required>
                                    </div>

                                    <div class="input-box">
                                        <span class="details">Subject name</span>
                                        <input type="text" name="subject" placeholder="Subject name" required>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Version</span>
                                        <input type="text" name="version" placeholder="Bangla/English">
                                    </div>

                                    <div class="input-box">
                                        <span class="details">Amount</span>
                                        <input type="text" name="amount" placeholder="Amount" required>
                                    </div>
                                </div>

                                <div class="button">
                                    <input type="submit" name="postt" value="Post">
                                </div>
                            </form>

                            <?php

                            $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                            if (!$conn) {
                                echo 'not connect';
                            }


                            if (isset ($_POST['postt'])) {
                                $class = $_POST['class'];
                                $day_time = $_POST['day_time'];
                                $subject = $_POST['subject'];
                                $amount = $_POST['amount'];
                                $version = $_POST['version'];


                                $sql = "INSERT INTO student (name,email,phone,address,class,day_time,sl_clg_un,subject,designation,salary,version, img)
                                VALUES('$s_name','$s_email','$s_Phone','$s_address','$class','$day_time','$institut','$subject','$designations','$amount', '$version','$s_img')";


                                $result = $conn->query($sql);



                                $sqlAll = "INSERT INTO trackAllPost (name,email,phone,address,class,day_time,sl_clg_un,subject,designation,salary,version, img)
                                VALUES('$s_name','$s_email','$s_Phone','$s_address','$class','$day_time','$institut','$subject','$designations','$amount', '$version','$s_img')";

                                $resultAll = $conn->query($sqlAll);

                                echo "<script>window.location.href ='myPost.php';</script> ";


                            }
                            ?>



                        </div>

                        <a href="#" class="box-close">
                            ×
                        </a>
                    </div>
                </div>

                <div id="popup-box2" class="modal">


                    <div class="content1">


                        <div class="title">Do you want to delete this post?</div>
                        <div class="content">

                            <div class="btn1">
                                <form action="tuition.php" method="post">
                                    <!-- <input type="submit" name="submitY" value="Yes"> -->
                                    <button type="submit" name="submitY" class="btn btn-primary">Yes</button>
                                    <button type="submit" name="submitN" class="btn btn-danger">No</button>

                                </form>
                            </div>


                            <?php

                            $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                            if (!$conn) {
                                echo 'not connect';
                            }

                            if (isset ($_POST['submitY'])) {



                                $sql = "DELETE FROM student WHERE id = '$dl_id'";

                                $result = $conn->query($sql);

                                if ($result == true) {
                                    echo "<script>window.location.href ='tuition.php';</script> ";

                                } else {
                                    echo "error";
                                }
                            }

                            if (isset ($_POST['submitN'])) {

                                echo "<script>window.location.href ='tuition.php';</script> ";

                            }


                            ?>



                        </div>

                        <a href="#" class="box-close">
                            ×
                        </a>
                    </div>
                </div>

            </div>
            <!-- social middle design end -->

            <!-- right-side start -->
            <div class="right-sidebar">
                <div class="col-md-4 col-xl-12 chat">
                    <div class="cardCt mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header">
                            <div class="input-group">

                                <div class="input-group-prepend">
                                    <h3 class="mngr">Messenger</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body contacts_body">
                            <ui class="contacts">

                                <?php

                                $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                if (!$conn) {
                                    echo 'not connect';
                                }

                                $sql = "SELECT* FROM all_record";

                                $result = $conn->query($sql);

                                while ($data = $result->fetch_assoc()) {
                                    $all_rec_id = $data['id'];
                                    $log_usr_id = $data['log_usr_id'];
                                    $log_usr_name = $data['log_usr_name'];
                                    $log_usr_email = $data['log_usr_email'];
                                    $log_usr_phone = $data['log_usr_phone'];
                                    $log_usr_adrs = $data['log_usr_adrs'];
                                    $log_usr_img = $data['log_usr_img'];
                                    $log_sub = $data['log_sub'];

                                    $add_prsn_id = $data['add_prsn_id'];
                                    $add_prsn_name = $data['add_prsn_name'];
                                    $add_prsn_email = $data['add_prsn_email'];
                                    $add_prsn_phone = $data['add_prsn_phone'];
                                    $add_prns_cls = $data['add_prns_cls'];
                                    $add_usr_img = $data['add_usr_img'];
                                    $add_usr_time = $data['add_usr_time'];
                                    $add_prns_cls = $data['add_prns_cls'];
                                    $add_sub = $data['add_sub'];



                                    if ($log_usr_phone == $Phone) {
                                        $phoneAdd = $add_prsn_phone;

                                        echo "

                                
                                
                                    <a href='msg.php?phone=$phoneAdd'>
                                <li>
                                    <div class='d-flex bd-highlight'>
                                        <div class='img_cont'>
                                        <img src='up_img/$add_usr_img'
                                                class='rounded-circle user_img'>
                                            <span class='online_icon'></span>
                                        </div>
                                        <div class='user_info'>
                                            <span>$add_prsn_name</span>
                                            <p>Online</p>
                                        </div>
                                    </div>
                                </li>
                                </a>
                            
                                

                        ";

                                    } elseif ($add_prsn_phone == $Phone) {
                                        $phoneLog = $log_usr_phone;
                                        // $trackImgLog = $log_usr_img;
                                        echo "
                            
                                
                                
                                    <a href='msg.php?phone=$phoneLog'>
                                    <li >
                                    <div class='d-flex bd-highlight'>
                                        <div class='img_cont'>
                                        <img src='up_img/$log_usr_img'
                                                class='rounded-circle user_img'>
                                            <span class='online_icon'></span>
                                        </div>
                                        <div class='user_info'>
                                            <span>$log_usr_name</span>
                                            <p>Online</p>
                                        </div>
                                    </div>
                                </li>

                            </a>
                            
                            ";

                                    }


                                }

                                ?>


                            </ui>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
            <!-- right-side end -->
        </div>

        <!-- payment design start -->

        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-right">
                            <a href="#" class="box-close">
                                ×
                            </a>
                        </div>
                        <div class="tabs mt-3">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab"
                                        aria-controls="visa" aria-selected="true"> <img class="bks" src="pic/bk.png"
                                            width="80">
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab"
                                        aria-controls="paypal" aria-selected="false">
                                        <img class="upy" src="pic/upy.png" width="80"> </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab">
                                    <div class="mt-4 mx-4">
                                        <div class="text-center">
                                            <h5>Bkash</h5>
                                        </div>




                                        <?php

                                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                                        if (!$conn) {
                                            echo 'not connect';
                                        }



                                        $sql = "SELECT* FROM sign_up ";

                                        $result = $conn->query($sql);

                                        while ($data = $result->fetch_assoc()) {


                                            $g_name = $data['name'];
                                            $g_Phone = $data['Phone'];
                                            $g_sl_email = $data['email'];
                                            $g_amountBks = $data['amountBks'];
                                            $g_amountNgd = $data['amountNgd'];

                                            if ($g_sl_email == $email) {
                                                $crntBks = $g_amountBks;
                                                $crntNgd = $g_amountNgd;
                                            }

                                        }
                                        ?>


                                        <div class="form mt-3">
                                            <form method="post">
                                                <div class="inputbox">
                                                    <label>Current balance : </label>
                                                    <input type="text" name="crnt_bk_blnc" value="<?php echo "$crntBks"; ?>"
                                                        class="form-control crntB" readonly>

                                                </div>
                                                <div class="inputbox">
                                                    <input type="text" name="bks_num" min="1" max="999" class="form-control"
                                                        required="required">
                                                    <span>Bkash Number</span> <i class="fa fa-eye"></i>
                                                </div>
                                                <div class="inputbox">
                                                    <input type="text" name="given_amount" min="1" max="999"
                                                        class="form-control" required="required">
                                                    <span>
                                                        Tk-BDT
                                                    </span>
                                                </div>

                                                <div class="d-flex flex-row">
                                                    <div class="inputbox slt"> <select class="form-select" id="month"
                                                            name="month" required>
                                                            <option value="">Month</option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                        </select>

                                                    </div>
                                                    <div class="inputbox">
                                                        <input type="password" name="pin" class="form-control"
                                                            required="required"> <span>Pin</span>
                                                    </div>
                                                </div>
                                                <div class="px-5 pay">
                                                    <button type="submit" class="btn btn-success btn-block"
                                                        name="bks_pay">Payment</button>
                                                </div>
                                            </form>



                                            <?php

                                            if (isset ($_POST['bks_pay'])) {

                                                $crnt_bk_blnc = $_POST['crnt_bk_blnc'];
                                                $bks_num = $_POST['bks_num'];
                                                $month = $_POST['month'];
                                                $given_amount = $_POST['given_amount'];
                                                $pin = $_POST['pin'];


                                                if ($crntBks < $given_amount) {
                                                    echo "<script>window.location.href ='#popup-wrong';</script> ";
                                                } else {
                                                    $_SESSION['gvn_amnt'] = $given_amount;
                                                    $sql = "SELECT* FROM sign_up ";

                                                    $result = $conn->query($sql);

                                                    while ($data = $result->fetch_assoc()) {


                                                        $g_name = $data['name'];
                                                        $g_Phone = $data['Phone'];
                                                        $g_sl_email = $data['email'];
                                                        $g_amountBks = $data['amountBks'];
                                                        $g_amountNgd = $data['amountNgd'];

                                                        if ($g_Phone == $bks_num) {
                                                            $send_crntBks = $g_amountBks;

                                                        }

                                                    }

                                                    $update_my_blnc = $crntBks - $given_amount;
                                                    $update_send_blnc = $send_crntBks + $given_amount;


                                                    $sql3 = "UPDATE sign_up 
                                                    SET amountBks='$update_my_blnc' , month_pay='$month' WHERE email='$email' ";
                                                    $result3 = $conn->query($sql3);

                                                    $sql4 = "UPDATE sign_up 
                                                    SET amountBks='$update_send_blnc', month_pay='$month' WHERE Phone='$bks_num' ";
                                                    $result4 = $conn->query($sql4);

                                                    if ($result3 == true) {
                                                        if ($result4 == true) {
                                                            echo "<script>window.location.href ='#popup-success';</script> ";

                                                            echo "  <script>
                                                                    var audio = new Audio('AllAudiofile/pay.mp3');
                                                                    audio.play();
                                                                    </script>
                                                            ";
                                                        }
                                                    }
                                                }






                                            }

                                            ?>






                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                    <div class="px-5 mt-5">
                                        <div class="text-center upayT">
                                            <h5>Upay</h5>
                                        </div>

                                        <div class="form mt-3">
                                            <form method="post">
                                                <div class="inputbox">
                                                    <label>Current balance : </label>
                                                    <input type="text" name="crnt_ngd_blc" value="<?php echo "$crntNgd"; ?>"
                                                        class="form-control crntU" readonly>

                                                </div>
                                                <div class="inputbox">
                                                    <input type="text" name="upy_num" min="1" max="999" class="form-control"
                                                        required="required">
                                                    <span>Upay Number</span> <i class="fa fa-eye"></i>
                                                </div>
                                                <div class="inputbox">
                                                    <input type="text" name="given_amount_ngd" min="1" max="999"
                                                        class="form-control" required="required">
                                                    <span>
                                                        Tk-BDT
                                                    </span>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div class="inputbox slt"> <select class="form-select" id="month"
                                                            name="month" required>
                                                            <option value="">Month</option>
                                                            <option value="January">January</option>
                                                            <option value="February">February</option>
                                                            <option value="March">March</option>
                                                            <option value="April">April</option>
                                                            <option value="May">May</option>
                                                            <option value="June">June</option>
                                                            <option value="July">July</option>
                                                            <option value="August">August</option>
                                                            <option value="September">September</option>
                                                            <option value="October">October</option>
                                                            <option value="November">November</option>
                                                            <option value="December">December</option>
                                                        </select>
                                                        <!-- <span>Expiration
                                                        Date</span> -->
                                                    </div>
                                                    <div class="inputbox">
                                                        <input type="password" name="name" class="form-control"
                                                            required="required"> <span>Pin</span>
                                                    </div>
                                                </div>
                                                <div class="pay px-5">
                                                    <button type="submit" name="ngd_pay"
                                                        class="btn btn-primary btn-block">Payment</button>
                                                </div>
                                            </form>
                                        </div>

                                        <?php

                                        if (isset ($_POST['ngd_pay'])) {

                                            $crnt_ngd_blc = $_POST['crnt_ngd_blc'];
                                            $upy_num = $_POST['upy_num'];
                                            $month = $_POST['month'];
                                            $given_amount_ngd = $_POST['given_amount_ngd'];
                                            $pin = $_POST['pin'];


                                            if ($crntNgd < $given_amount_ngd) {
                                                echo "<script>window.location.href ='#popup-wrong';</script> ";
                                            } else {

                                                $_SESSION['gvn_amnt'] = $given_amount_ngd;

                                                $sql = "SELECT* FROM sign_up ";

                                                $result = $conn->query($sql);

                                                while ($data = $result->fetch_assoc()) {


                                                    $g_name = $data['name'];
                                                    $g_Phone = $data['Phone'];
                                                    $g_sl_email = $data['email'];
                                                    $g_amountBks = $data['amountBks'];
                                                    $g_amountNgd = $data['amountNgd'];

                                                    if ($g_Phone == $upy_num) {
                                                        $send_crnt_ngd = $g_amountNgd;
                                                    }

                                                }

                                                $update_my_blnc = $crntNgd - $given_amount_ngd;
                                                $update_send_blnc = $send_crnt_ngd + $given_amount_ngd;


                                                $sql3 = "UPDATE sign_up 
                                                    SET amountNgd='$update_my_blnc' , month_pay='$month' WHERE email='$email' ";
                                                $result3 = $conn->query($sql3);

                                                $sql4 = "UPDATE sign_up 
                                                    SET amountNgd='$update_send_blnc', month_pay='$month' WHERE Phone='$upy_num' ";
                                                $result4 = $conn->query($sql4);

                                                if ($result3 == true) {
                                                    if ($result4 == true) {
                                                        echo "<script>window.location.href ='#popup-success';</script> ";

                                                        echo "  <script>
                                                                    var audio = new Audio('AllAudiofile/pay.mp3');
                                                                    audio.play();
                                                                    </script>
                                                            ";
                                                    }
                                                }
                                            }






                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- payment design end -->


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

        <div id="popup-success" class="modal">
            <div class="content_succ">


                <div class="title_wr text-center">
                    <img src="pic/y.gif" alt="" srcset="">
                </div>
                <div class="content">

                    <div class="btn1">

                        <h3 class="cmnt2">Payment has been done</h3>

                        <form action="printRecept.php" method="post">

                            <!-- <input type="submit" name="submitY" value="Yes"> -->
                            <button type="submit" name="m_rcpt" class="btn btn-primary rcpt">Money Receipt</button>

                        </form>
                    </div>



                </div>

                <a href="#" class="box-close">
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