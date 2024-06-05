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
    <title>Education World</title>
    <link rel="icon" href="pic/Logo.png" type="pic/icon">
    <!-- fontAwesom start -->
    <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <!-- fontAwesom end -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css style -->
    <link rel="stylesheet" href="CSS-Study/std.css">



    <style>
      /* btn */

      .column.right {
        margin-left: 0px !important;
      }

      input.btn.btn-primary {
        position: relative;
        left: 365px;
      }

      .left {
        margin-left: 60px;
      }

      .box-close {
        position: absolute;
        top: 0;
        right: 15px !important;
        color: #170101;
        text-decoration: none;
        font-size: 30px;
      }

      .abr {
        color: blue;
        font-weight: bold;
      }

      .slider-navigation {
        z-index: 888;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translateY(80px);
        margin-bottom: 12px;
        top: -50px !important;
      }

      nav.navbar.navbar-expand-lg.navbar-light {
        background: #ffb000;
        color: black;
        margin-left: 14px;
      }

      .btn1 {
        padding: 10px;
        border-radius: 5px;
        background-color: #fff;
        border: 0;
        color: black;
      }

      .btn1:hover {
        background-color: rgba(0, 26, 255, 0.77);
        color: white;
      }

      /* form start */
      .inputfield.text-black {
        display: flex;
        margin-right: 10px;
        margin: 10px;
      }

      #formFile {
        width: 276px;
      }



      label {
        margin: 5px;
      }


      .gre {
        width: 94px;
        margin-left: 10px;
        height: 38px;
        margin-right: 10px;
      }

      .input {
        width: 104px;
      }

      /* form end */
      /* button */
      .submit-btn {
        margin-left: 235px;
        margin-top: 10px;
        padding: 10px;
        border-radius: 10px;
      }

      .submit-btn:hover {
        background-color: cornflowerblue;
        color: #fff;
      }

      .content1 h1 {
        color: #000;
      }

      .content1-img {

        width: 100%;
        height: 300px;
      }

      select {

        text-align: center;
      }

   

      .input-group {
        width: 130px;
      }

      .input-cgp {
        width: 165px;
        margin-left: 54px;
      }

      .inputfield.text-black {
        display: flex;
      }

      #inputGroupFile02 {
        width: 162px;
      }

      .option {
        display: flex;
      }

      .option2 {
        display: flex;
      }




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
        background: rgba(74, 71, 71, 0.7);
        transition: all 0.4s;
        visibility: hidden;
        opacity: 0;
      }

      .content1 {
        position: relative;
        background: white;
        width: 656px;
        height: 420px;
        padding: 1em 1em;
        border-radius: 4px;
      }

      .modal:target {
        visibility: visible;
        opacity: 1;
        background: #00ffffad;
      }

      .box-close {
        position: absolute;
        top: 0;
        right: 4px;
        color: #170101;
        text-decoration: none;
        font-size: 30px;
      }
    </style>

    <style>
      marquee {
        padding: 10px;
        font-size: 30px;
        font-family: cursive;
        color: red;
        cursor: pointer;
      }

      .offer a:hover {
        text-decoration: none;
        border: 1px solid black;
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
        background-color: #ffffff00;
        color: #550cdf;
        font-size: 20px;
        padding: 10px 30px;
        margin-top: 20px;
        border-radius: 6px;
        border: 2px solid #1a04d5;
        text-decoration: none;
        transition: all 0.4s ease;
      }

      .about .about-content .right a:hover {
        display: inline-block;
        background-color: blueviolet;
        color: #fff;
        font-size: 20px;
        padding: 10px 30px;
        margin-top: 20px;
        border-radius: 6px;
        border: 2px solid #fff;
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
        /* background-color: black; */
        text-align: center;
      }

      .col-md-12.headPhnTitleHeader {
        /* margin-top: 60px; */
        color: #fff;
      }



      .product {
        background-color: #fff;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
        /* width: 350px;
              height: 420px; */
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

      section .title {
        position: relative;
        text-align: center;
        font-size: 40px;
        font-weight: 500;
        margin-bottom: 60px;
        padding-bottom: 20px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        height: 0vh;
      }

      #top ul.menu>li a:hover {
        color: red;
        text-decoration: none;

        transition: 0.4s;

      }

      .robot {
            float: right;
            width: 65px;
            right:10px;
            position:relative;
        }

      h2.title {
        position: relative;
        top: 30px;
        text-align: center;
        font-size: 40px;
        font-weight: 700;
        margin-bottom: 60px;
        padding-bottom: 20px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        height: 0vh;
      }
    </style>

    <!-- counter css start-->
    <style>
      .frms {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .counter {
        color: #319B38;
        font-family: 'Poppins', sans-serif;
        text-align: center;
        width: 210px;
        height: 222px;
        padding: 48px 28px 0;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
        z-index: 1;
      }

      .counter:before,
      .counter:after {
        content: '';
        background: linear-gradient(135deg, #fff, #f1f1f1);
        height: 147px;
        width: 147px;
        box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #008533;
        transform: translateX(-50%) rotate(45deg);
        position: absolute;
        left: 50%;
        top: 44px;
        z-index: -1;
        transition: all 0.3s ease 0s;
      }

      .counter:before {
        background: linear-gradient(135deg, #00652F 50%, transparent 50%);
        box-shadow: none;
        top: 80px;
      }

      .counter .counter-icon {
        font-size: 35px;
        line-height: 40px;
        margin: 0 0 12px;
      }

      .counter h3 {
        font-size: 16px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 16px;
      }

      .counter .counter-value {
        color: #fff;
        background: linear-gradient(to right, #0C8412, #319B38);
        font-size: 27px;
        font-weight: 500;
        line-height: 33px;
        width: 100%;
        padding: 10px 0 26px;
        position: absolute;
        left: 0;
        bottom: 0;
        clip-path: polygon(0 0, 100% 0, 50% 100%);
      }

      .counter.orange {
        color: #FB9500;
      }

      .counter.orange:after {
        box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #ED8F1D;
      }

      .counter.orange:before {
        background: linear-gradient(135deg, #ED610A 50%, transparent 50%);
      }

      .counter.orange .counter-value {
        background: linear-gradient(to right, #EA7A00, #F1980C);
      }

      .counter.blue {
        color: #1B9FD1;
      }

      .counter.blue:after {
        box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #288EBB;
      }

      .counter.blue:before {
        background: linear-gradient(135deg, #1167C3 50%, transparent 50%);
      }

      .counter.blue .counter-value {
        background: linear-gradient(to right, #0784C3, #32AAEE);
      }

      .counter.red {
        color: #D85411;
      }

      .counter.red:after {
        box-shadow: -5px -5px 3px rgba(0, 0, 0, 0.2), -10px -10px #BF4C13;
      }

      .counter.red:before {
        background: linear-gradient(135deg, #A60810 50%, transparent 50%);
      }

      .counter.red .counter-value {
        background: linear-gradient(to right, #CC2D00, #FC6000);
      }

      @media screen and (max-width:990px) {
        .counter {
          margin-bottom: 40px;
        }
      }

      center {
        display: flex;
      }

      section.conr {
        background: -webkit-linear-gradient(left, #3931af, #00c6ff);
        padding: 100px 0PX;
        margin-bottom: 25px;
      }

      .hrs {
        width: 100%;
        border: 3px solid rgb(13 23 149) !important;
      }

      .hrrr {
        width: 330px;
        margin: auto;
      }

      label.col-sm-2.col-form-label {
        color: #000000ed;
        width: 30%;
      }

      .lftPrt {
        width: 60%;
      }

      .content1 {
        position: relative;
        background: white;
        width: 900px !important;
        height: 535px;
        padding: 1em 1em;
        border-radius: 4px;
      }

      select.slc {
        outline: none;
        border: 1px solid #00000047;
        color: #000000a6;
        font-family: sans-serif;
        border-radius: 3px;
        padding: 6px;
        position: relative;
        top: 10px;
      }

      .form-group.row {
        margin-top: 10px;
      }

      .lfPrt {
        width: 50%;
        display: flex;
      }

      .rtPrt {
        width: 50%;
        display: flex;
        position: relative;
        top: 5px;

      }

      label.col-sm-2.col-form-label.engP {
        width: 66%;
        position: relative;
        top: 3px;
      }

      label.col-sm-2.col-form-label.scrs {
        position: relative;
        left: 60px;
      }

      input#inputPassword\ scre {
        position: relative;
        left: 72px;
      }

      h3.text-black.px-5.mb-5.text-center {
        position: relative;
        top: 20px;
      }

      label.col-sm-2.col-form-label.cir {
        width: 100%;
      }

      select.slc.ctr {
        width: 104%;
        position: relative;
        left: 80px;
      }

      label.custom-file-label {
        color: black;
      }


      .custom-file {
        padding: 0px 22px 0px 15px;
      }

      label.custom-file-label {
        width: 75%;
      }

      .iner {
        border: 1px solid #0000005e;
        border-radius: 3px;
      }

      input#validatedCustomFile {
        width: 108px;
      }

      button.btn.btn-primary {
        position: relative;
        left: 41%;
      }
    </style>
    <!-- counter css end-->

    <!-- last slider start -->
    <style>
      .fnc-slider {
        overflow: hidden;
        box-sizing: border-box;
        position: relative;
        height: 100vh;
      }

      .fnc-slider *,
      .fnc-slider *:before,
      .fnc-slider *:after {
        box-sizing: border-box;
      }

      .fnc-slider__slides {
        position: relative;
        height: 100%;
        transition: transform 1s 0.6666666667s;
      }

      .fnc-slider .m--blend-dark .fnc-slide__inner {
        background-color: #8a8a8a;
      }

      .fnc-slider .m--blend-dark .fnc-slide__mask-inner {
        background-color: #575757;
      }

      .fnc-slider .m--navbg-dark {
        background-color: #575757;
      }

      .fnc-slider .m--blend-green .fnc-slide__inner {
        background-color: #6d9b98;
      }

      .fnc-slider .m--blend-green .fnc-slide__mask-inner {
        background-color: #42605e;
      }

      .fnc-slider .m--navbg-green {
        background-color: #42605e;
      }

      .fnc-slider .m--blend-red .fnc-slide__inner {
        background-color: #ea2329;
      }

      .fnc-slider .m--blend-red .fnc-slide__mask-inner {
        background-color: #990e13;
      }

      .fnc-slider .m--navbg-red {
        background-color: #990e13;
      }

      .fnc-slider .m--blend-blue .fnc-slide__inner {
        background-color: #59aecb;
      }

      .fnc-slider .m--blend-blue .fnc-slide__mask-inner {
        background-color: #2d7791;
      }

      .fnc-slider .m--navbg-blue {
        background-color: #2d7791;
      }

      .fnc-slide {
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transform: translate3d(0, 0, 0);
      }

      .fnc-slide.m--before-sliding {
        z-index: 2 !important;
        transform: translate3d(100%, 0, 0);
      }

      .fnc-slide.m--active-slide {
        z-index: 1;
        transition: transform 1s 0.6666666667s ease-in-out;
        transform: translate3d(0, 0, 0);
      }

      .fnc-slide__inner {
        position: relative;
        height: 100%;
        background-size: cover;
        background-position: center top;
        transform: translate3d(0, 0, 0);
      }

      .m--global-blending-active .fnc-slide__inner,
      .m--blend-bg-active .fnc-slide__inner {
        background-blend-mode: luminosity;
      }

      .m--before-sliding .fnc-slide__inner {
        transform: translate3d(-100%, 0, 0);
      }

      .m--active-slide .fnc-slide__inner {
        transition: transform 1s 0.6666666667s ease-in-out;
        transform: translate3d(0, 0, 0);
      }

      .fnc-slide__mask {
        overflow: hidden;
        z-index: 1;
        position: absolute;
        right: 60%;
        top: 15%;
        width: 50.25vh;
        height: 67vh;
        margin-right: -90px;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
        transform-origin: 50% 0;
        transition-timing-function: ease-in-out;
      }

      .m--before-sliding .fnc-slide__mask {
        transform: rotate(-10deg) translate3d(200px, 0, 0);
        opacity: 0;
      }

      .m--active-slide .fnc-slide__mask {
        transition: transform 0.7s 1.2222222222s, opacity 0.35s 1.2222222222s;
        transform: translate3d(0, 0, 0);
        opacity: 1;
      }

      .m--previous-slide .fnc-slide__mask {
        transition: transform 0.7s 0.3333333333s, opacity 0.35s 0.6833333333s;
        transform: rotate(10deg) translate3d(-200px, 0, 0);
        opacity: 0;
      }

      .fnc-slide__mask-inner {
        z-index: -1;
        position: absolute;
        left: 50%;
        top: 50%;
        width: 100vw;
        height: 100vh;
        margin-left: -50vw;
        margin-top: -50vh;
        background-size: cover;
        background-position: center center;
        background-blend-mode: luminosity;
        transform-origin: 50% 16.5vh;
        transition-timing-function: ease-in-out;
      }

      .m--before-sliding .fnc-slide__mask-inner {
        transform: translateY(0) rotate(10deg) translateX(-200px) translateZ(0);
      }

      .m--active-slide .fnc-slide__mask-inner {
        transition: transform 0.7s 1.2222222222s;
        transform: translateX(0);
      }

      .m--previous-slide .fnc-slide__mask-inner {
        transition: transform 0.7s 0.3333333333s;
        transform: translateY(0) rotate(-10deg) translateX(200px) translateZ(0);
      }

      .fnc-slide__content {
        z-index: 2;
        position: absolute;
        left: 40%;
        top: 40%;
      }

      .fnc-slide__heading {
        margin-bottom: 10px;
        text-transform: uppercase;
      }

      .fnc-slide__heading-line {
        overflow: hidden;
        position: relative;
        padding-right: 20px;
        font-size: 100px;
        color: #fff;
        word-spacing: 10px;
      }

      .fnc-slide__heading-line:nth-child(2) {
        padding-left: 30px;
      }

      .m--before-sliding .fnc-slide__heading-line {
        transform: translateY(100%);
      }

      .m--active-slide .fnc-slide__heading-line {
        transition: transform 1.5s 1s;
        transform: translateY(0);
      }

      .m--previous-slide .fnc-slide__heading-line {
        transition: transform 1.5s;
        transform: translateY(-100%);
      }

      .fnc-slide__heading-line span {
        display: block;
      }

      .m--before-sliding .fnc-slide__heading-line span {
        transform: translateY(-100%);
      }

      .m--active-slide .fnc-slide__heading-line span {
        transition: transform 1.5s 1s;
        transform: translateY(0);
      }

      .m--previous-slide .fnc-slide__heading-line span {
        transition: transform 1.5s;
        transform: translateY(100%);
      }

      .fnc-slide__action-btn {
        position: relative;
        margin-left: 200px;
        padding: 5px 15px;
        font-size: 20px;
        line-height: 1;
        color: transparent;
        border: none;
        text-transform: uppercase;
        background: transparent;
        cursor: pointer;
        text-align: center;
        outline: none;
      }

      .fnc-slide__action-btn span {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        perspective: 1000px;
        transform-style: preserve-3d;
        transition: transform 0.3s;
        transform-origin: 50% 0;
        line-height: 30px;
        color: #fff;
      }

      .fnc-slide__action-btn span:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: 2px solid #fff;
        border-top: none;
        border-bottom: none;
      }

      .fnc-slide__action-btn span:after {
        content: attr(data-text);
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        line-height: 30px;
        background: #1f2833;
        opacity: 0;
        transform-origin: 50% 0;
        transform: translateY(100%) rotateX(-90deg);
        transition: opacity 0.15s 0.15s;
      }

      .fnc-slide__action-btn:hover span {
        transform: rotateX(90deg);
      }

      .fnc-slide__action-btn:hover span:after {
        opacity: 1;
        transition: opacity 0.15s;
      }

      .fnc-nav {
        z-index: 5;
        position: absolute;
        right: 0;
        bottom: 0;
      }

      .fnc-nav__bgs {
        z-index: -1;
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
      }

      .fnc-nav__bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
      }

      .fnc-nav__bg.m--nav-bg-before {
        z-index: 2 !important;
        transform: translateX(100%);
      }

      .fnc-nav__bg.m--active-nav-bg {
        z-index: 1;
        transition: transform 1s 0.6666666667s;
        transform: translateX(0);
      }

      .fnc-nav__controls {
        font-size: 0;
      }

      .fnc-nav__control {
        overflow: hidden;
        position: relative;
        display: inline-block;
        vertical-align: top;
        width: 100px;
        height: 50px;
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
        background: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        transition: background-color 0.5s;
      }

      .fnc-nav__control.m--active-control {
        background: #1f2833;
      }

      .fnc-nav__control-progress {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: #fff;
        transform-origin: 0 50%;
        transform: scaleX(0);
        transition-timing-function: linear !important;
      }

      .m--with-autosliding .m--active-control .fnc-nav__control-progress {
        transform: scaleX(1);
      }

      .m--prev-control .fnc-nav__control-progress {
        transform: translateX(100%);
        transition: transform 0.5s !important;
      }

      .m--reset-progress .fnc-nav__control-progress {
        transform: scaleX(0);
        transition: transform 0s 0s !important;
      }

      .m--autosliding-blocked .fnc-nav__control-progress {
        transition: all 0s 0s !important;
        transform: scaleX(0) !important;
      }

      /* NOT PART OF COMMON SLIDER STYLES */
      body {
        margin: 0;
      }

      .demo-cont {
        overflow: hidden;
        position: relative;
        height: 100vh;
        perspective: 1500px;
        background: #000;
      }

      .demo-cont__credits {
        box-sizing: border-box;
        overflow-y: auto;
        z-index: 1;
        position: absolute;
        right: 0;
        top: 0;
        width: 400px;
        height: 100%;
        padding: 20px 10px 30px;
        background: #303030;
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
        color: #fff;
        text-align: center;
        transition: transform 0.7s;
        transform: translate3d(100%, 0, 0) rotateY(-45deg);
        will-change: transform;
      }

      .credits-active .demo-cont__credits {
        transition: transform 0.7s 0.2333333333s;
        transform: translate3d(0, 0, 0);
      }

      .demo-cont__credits *,
      .demo-cont__credits *:before,
      .demo-cont__credits *:after {
        box-sizing: border-box;
      }

      .demo-cont__credits-close {
        position: absolute;
        right: 20px;
        top: 20px;
        width: 28px;
        height: 28px;
        cursor: pointer;
      }

      .demo-cont__credits-close:before,
      .demo-cont__credits-close:after {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 2px;
        margin-top: -1px;
        background: #fff;
      }

      .demo-cont__credits-close:before {
        transform: rotate(45deg);
      }

      .demo-cont__credits-close:after {
        transform: rotate(-45deg);
      }

      .demo-cont__credits-heading {
        text-transform: uppercase;
        font-size: 40px;
        margin-bottom: 20px;
      }

      .demo-cont__credits-img {
        display: block;
        width: 60%;
        margin: 0 auto 30px;
        border-radius: 10px;
      }

      .demo-cont__credits-name {
        margin-bottom: 20px;
        font-size: 30px;
      }

      .demo-cont__credits-link {
        display: block;
        margin-bottom: 10px;
        font-size: 24px;
        color: #fff;
      }

      .demo-cont__credits-blend {
        font-size: 30px;
        margin-bottom: 10px;
      }

      .example-slider {
        z-index: 2;
        transform: translate3d(0, 0, 0);
        transition: transform 0.7s;
      }

      .credits-active .example-slider {
        transform: translate3d(-400px, 0, 0) rotateY(10deg) scale(0.9);
      }

      .example-slider .fnc-slide-1 .fnc-slide__inner,
      .example-slider .fnc-slide-1 .fnc-slide__mask-inner {
        background-image: url("https://e1.pxfuel.com/desktop-wallpaper/498/671/desktop-wallpaper-harvard-university.jpg");
        background-attachment: fixed;
        background-position: center;
        background-position: 50% 50%;

      }

      .example-slider .fnc-slide-2 .fnc-slide__inner,
      .example-slider .fnc-slide-2 .fnc-slide__mask-inner {
        background-image: url("https://c4.wallpaperflare.com/wallpaper/118/314/404/cities-oxford-wallpaper-thumb.jpg");
        background-attachment: fixed;
        background-position: center;
      }

      .example-slider .fnc-slide-3 .fnc-slide__inner,
      .example-slider .fnc-slide-3 .fnc-slide__mask-inner {
        background-image: url("https://pbs.twimg.com/media/BkUhhKpIMAATX49.jpg");
        background-attachment: fixed;
        background-position: center;
      }

      .example-slider .fnc-slide-3 .fnc-slide__inner:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
      }

      .example-slider .fnc-slide-4 .fnc-slide__inner,
      .example-slider .fnc-slide-4 .fnc-slide__mask-inner {
        background-image: url("https://images.unsplash.com/photo-1545405197-2964efafb2c6?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dW5pdmVyc2l0eSUyMG9mJTIwbWVsYm91cm5lfGVufDB8fDB8fHww");
        background-attachment: fixed;
        background-position: center;
      }

      .example-slider .fnc-slide-4 .fnc-slide__inner:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.2);
      }

      .example-slider .fnc-slide__heading,
      .example-slider .fnc-slide__action-btn,
      .example-slider .fnc-nav__control {
        font-family: "Open Sans", Helvetica, Arial, sans-serif;
      }


      .colorful-switch {
        position: relative;
        width: 180px;
        height: 77.1428571429px;
        margin: 0 auto;
        border-radius: 32.1428571429px;
        background: #cfcfcf;
      }

      .colorful-switch:before {
        content: "";
        z-index: -1;
        position: absolute;
        left: -5px;
        top: -5px;
        width: 190px;
        height: 87.1428571429px;
        border-radius: 37.1428571429px;
        background: #314239;
        transition: background-color 0.3s;
      }

      .colorful-switch:hover:before {
        background: #4c735f;
      }

      .colorful-switch__checkbox {
        z-index: -10;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
      }

      .colorful-switch__label {
        z-index: 1;
        overflow: hidden;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border-radius: 32.1428571429px;
        cursor: pointer;
      }

      .colorful-switch__bg {
        position: absolute;
        left: 0;
        top: 0;
        width: 540px;
        height: 100%;
        background: linear-gradient(90deg, #14dcd6 0, #10e7bd 180px, #ef9c29 360px, #e76339 100%);
        transition: transform 0.5s;
        transform: translate3d(-360px, 0, 0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__bg {
        transform: translate3d(0, 0, 0);
      }

      .colorful-switch__dot {
        position: absolute;
        left: 131.1428571429px;
        top: 50%;
        width: 5.1428571429px;
        height: 5.1428571429px;
        margin-left: -2.5714285714px;
        margin-top: -2.5714285714px;
        border-radius: 50%;
        background: #fff;
        transition: transform 0.5s;
        transform: translate3d(0, 0, 0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__dot {
        transform: translate3d(-80.3571428571px, 0, 0);
      }

      .colorful-switch__on {
        position: absolute;
        left: 104.1428571429px;
        top: 22.5px;
        width: 19.2857142857px;
        height: 36px;
        transition: transform 0.5s;
        transform: translate3d(0, 0, 0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__on {
        transform: translate3d(-80.3571428571px, 0, 0);
      }

      .colorful-switch__on__inner {
        position: absolute;
        width: 100%;
        height: 100%;
        transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
        transform-origin: 100% 50%;
        transform: rotate(45deg) scale(0) translateZ(0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__on__inner {
        transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
        transform: rotate(45deg) scale(1) translateZ(0);
      }

      .colorful-switch__on__inner:before,
      .colorful-switch__on__inner:after {
        content: "";
        position: absolute;
        border-radius: 2.5714285714px;
        background: #fff;
      }

      .colorful-switch__on__inner:before {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 6.1428571429px;
      }

      .colorful-switch__on__inner:after {
        right: 0;
        top: 0;
        width: 6.1428571429px;
        height: 100%;
      }

      .colorful-switch__off {
        position: absolute;
        left: 131.1428571429px;
        top: 50%;
        width: 41.1428571429px;
        height: 41.1428571429px;
        margin-left: -20.5714285714px;
        margin-top: -20.5714285714px;
        transition: transform 0.5s;
        transform: translate3d(0, 0, 0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off {
        transform: translate3d(-80.3571428571px, 0, 0);
      }

      .colorful-switch__off:before,
      .colorful-switch__off:after {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 5.1428571429px;
        margin-top: -2.5714285714px;
        border-radius: 2.5714285714px;
        background: #fff;
        transition: transform 0.25s 0.25s;
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:before,
      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:after {
        transition-delay: 0s;
      }

      .colorful-switch__off:before {
        transform: rotate(45deg) scaleX(1) translateZ(0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:before {
        transform: rotate(45deg) scaleX(0) translateZ(0);
      }

      .colorful-switch__off:after {
        transition-timing-function: cubic-bezier(0.67, -0.16, 0.47, 1.61);
        transform: rotate(-45deg) scaleX(1) translateZ(0);
      }

      .colorful-switch__checkbox:checked~.colorful-switch__label .colorful-switch__off:after {
        transition-timing-function: ease;
        transform: rotate(-45deg) scaleX(0) translateZ(0);
      }

      .topRank {
        padding: 10px 420px 0px 420px;
        text-align: center;
        position: relative;
        top: 18px;
        color: #000000cf;
      }

      section.slider2 {
        height: 100vh;
      }

      .topRank hr {
        position: relative;
        top: -10px;
      }
    </style>
    <!-- last slider end -->
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
        <img src="images/Logo.png" alt="" srcset="">
        <a class="navbar-brand" href="index2.php">Education World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="allKidsBook2.php">Kids Study <span class="sr-only">(current)</span></a>
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


      <div class="menu-btn"></div>
      <div class="navigation">
        <div class="navigation-items">

        </div>
      </div>
    </header>

    <section class="home">
      <!-- 1st video -->
      <video class="video-slide active" src="Vedio/WhatsApp Video 2024-02-28 at 10.40.19 PM.mp4" autoplay muted loop>

      </video>
      <!-- 2nd video -->
      <video class="video-slide" src="Vedio/WhatsApp Video 2024-02-28 at 7.20.06 PM.mp4" autoplay muted loop>
      </video>

      <!-- 3rd video -->
      <video class="video-slide" src="Vedio/WhatsApp Video 2024-02-28 at 10.42.44 PM.mp4" autoplay muted loop>
      </video>

      <!-- 4th video -->
      <video class="video-slide" src="Vedio/WhatsApp Video 2024-02-28 at 10.40.14 PM.mp4" autoplay muted loop>
      </video>

      <!-- 5th video -->
      <video class="video-slide" src="Vedio/WhatsApp Video 2024-02-28 at 10.43.13 PM.mp4" autoplay muted loop>
      </video>
      <!-- slider 1 -->
      <div class="content active">
        <h1>Study<br><span>Abroad</span></h1>
        <p>“Studying abroad is about experiencing a foreign country — and the most beautiful, important part of a country’s culture is its people.” – Alexander Kolker.</p>

        <a href="#popup-boxx"><button class="btn1">Eligibility</button></a>

      </div>

      <!-- slide 2 -->
      <div class="content">

        <h1>Study<br><span>Abroad</span></h1>
        <p>“Studying abroad is about experiencing a foreign country — and the most beautiful, important part of a country’s culture is its people.” – Alexander Kolker</p>

        <a href="#popup-boxx2"><button class="btn1">Eligibility</button></a>

      </div>

      <!-- slide 3 -->
      <div class="content">

        <h1>Study<br><span>Abroad</span></h1>
        <p>“Studying abroad is about experiencing a foreign country — and the most beautiful, important part of a country’s culture is its people.” – Alexander Kolker</p>
        <a href="#popup-boxx3"><button class="btn1">Eligibility</button></a>


      </div>

      <!-- slide 4 -->
      <div class="content">

        <h1>Study<br><span>Abroad</span></h1>
        <p>“Studying abroad is about experiencing a foreign country — and the most beautiful, important part of a country’s culture is its people.” – Alexander Kolker</p>

        <a href="#popup-boxx4"><button class="btn1">Eligibility</button></a>


      </div>

      <!-- slide 5 -->
      <div class="content">

        <h1>Study<br><span>Abroad</span></h1>
        <p>“Studying abroad is about experiencing a foreign country — and the most beautiful, important part of a country’s culture is its people.” – Alexander Kolker</p>

        <a href="#popup-boxx5"><button class="btn1">Eligibility</button></a>

      </div>

      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="max-width container">

        <h2 class="title">Study Abroad</h2>
        <div class="hrrr">
          <hr class="hrs">
        </div>


        <div class="about-content">


          <div class=" right">
            <div class="text">Here you will found <span class="typing_2"> </span></div>
            <p>Assalamualaikum this is <span class="abr">Study Abroad page</span>. Let's know about this shop. In 2012, Bijoy Munshi and his sister established Munshi Shop in Bangladesh, before expanding to Malaysia, Indonesia, the Philippines and Thailand.This Munshi Shop deliverer in Chiang Rai Province, Thailand. A year later in 2013, Munshi Shop was launched in Bangladesh and Romania. With more than 20,000 employees operating in their company, Munshi Shop became...</p>
            <a href="Study_More.php">Read More</a>
          </div>

          <div class="left">
            <div class="video">
              <iframe width="460px" height="320px" src="https://www.youtube.com/embed/rm6p3MqE6Tc?si=8rulzaAabK9mmpZc&autoplay=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; loop; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="conr">
      <div class="container">
        <div class="row">
          <center>
            <div class="col-md-3 col-sm-6">
              <div class="counter">
                <div class="counter-icon">
                  <i class="fa fa-globe"></i>
                </div>
                <h3>Country</h3>
                <span class="counter-value">15</span>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="counter orange">
                <div class="counter-icon">
                  <i class="fa fa-university"></i>
                </div>
                <h3>University</h3>
                <span class="counter-value">2854</span>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="counter">
                <div class="counter-icon">
                  <i class="fa fa-user"></i>
                </div>
                <h3>User</h3>
                <span class="counter-value">1468</span>
              </div>
            </div>

            <div class="col-md-3 col-sm-6">
              <div class="counter orange">
                <div class="counter-icon">
                  <i class="fa fa-smile-o"></i>
                </div>
                <h3>Success</h3>
                <span class="counter-value">854</span>
              </div>
            </div>
          </center>

        </div>
      </div>

    </section>

    <section class="slider2">

      <div class="demo-cont">
        <!-- slider start -->
        <div class="fnc-slider example-slider">
          <div class="fnc-slider__slides">
            <!-- slide start -->
            <div class="fnc-slide m--blend-green m--active-slide">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>MIT</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span></span>
                    </div>
                  </h2>

                </div>
              </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-dark">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Oxford</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>University</span>
                    </div>
                  </h2>

                </div>
              </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-red">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Toronto</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>University</span>
                    </div>
                  </h2>

                </div>
              </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-blue">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Melbourne</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>University</span>
                    </div>
                  </h2>

                </div>
              </div>
            </div>
            <!-- slide end -->
          </div>
          <nav class="fnc-nav">
            <div class="fnc-nav__bgs">
              <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
              <div class="fnc-nav__bg m--navbg-dark"></div>
              <div class="fnc-nav__bg m--navbg-red"></div>
              <div class="fnc-nav__bg m--navbg-blue"></div>
            </div>
            <div class="fnc-nav__controls">
              <button class="fnc-nav__control">
                MIT 
                <span class="fnc-nav__control-progress"></span>
              </button>
              <button class="fnc-nav__control">
                Oxford University
                <span class="fnc-nav__control-progress"></span>
              </button>
              <button class="fnc-nav__control">
                Toronto University
                <span class="fnc-nav__control-progress"></span>
              </button>
              <button class="fnc-nav__control">
                Melbourne University
                <span class="fnc-nav__control-progress"></span>
              </button>
            </div>
          </nav>
        </div>
        <!-- slider end -->

      </div>
    </section>

    <!-- 5 poppu[ box start] -->
    <div id="popup-boxx" class="modal">
      <div class="content1">



        <h3 class="text-black px-5 mb-5 text-center">Fill up the Form</h3>
        <hr class="hrs">

        <div class="frms">
          <div class="lftPrt">
            <form method="post">

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CGPA*</label>
                <div class="col-sm-8">
                  <input type="text" name="CGPA" class="form-control" id="inputPassword" required placeholder="CGPA">
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">English Proficiency*</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO" required>
                      <option>IELTS</option>
                      <option>TOEFL</option>
                      <option>DUOLINGO</option>
                      <option>PTE</option>
                      <option>ITEP</option>
                      <option>MOI</option>
                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">GRE/GMAT/SAT</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO2">
                      <option>GRE</option>
                      <option>GMAT</option>
                      <option>SAT</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="OTHER_SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label cir">Achievement certificate</label>
                  <div class="col-sm-8">
                    <select class="slc ctr" name="achiv" required>
                      <option>YES</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>

              </div>

              <div class="form-group row midl">
                <div class="custom-file">
                  <div class="iner">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>

                </div>

              </div>




          </div>

          <div class="rhtPrt">
            <img src="images/g.gif" class="content1-img">
          </div>
        </div>

        <hr class="hrs">

        <div class="btnn">

          <input type="submit" class="btn btn-primary" name="submit" value="Click here">
          </form>
        </div>

        <a href="#" class="box-close">
          ×
        </a>
      </div>
    </div>

    <div id="popup-boxx2" class="modal">
      <div class="content1">



        <h3 class="text-black px-5 mb-5 text-center">Fill up the Form</h3>
        <hr class="hrs">

        <div class="frms">
          <div class="lftPrt">
            <form method="post">

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CGPA*</label>
                <div class="col-sm-8">
                  <input type="text" name="CGPA" class="form-control" id="inputPassword" required placeholder="CGPA">
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">English Proficiency*</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO" required>
                      <option>IELTS</option>
                      <option>TOEFL</option>
                      <option>DUOLINGO</option>
                      <option>PTE</option>
                      <option>ITEP</option>
                      <option>MOI</option>
                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">GRE/GMAT/SAT</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO2">
                      <option>GRE</option>
                      <option>GMAT</option>
                      <option>SAT</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="OTHER_SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label cir">Achievement certificate</label>
                  <div class="col-sm-8">
                    <select class="slc ctr" name="achiv" required>
                      <option>YES</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>

              </div>

              <div class="form-group row midl">
                <div class="custom-file">
                  <div class="iner">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>

                </div>

              </div>




          </div>

          <div class="rhtPrt">
            <img src="images/g.gif" class="content1-img">
          </div>
        </div>

        <hr class="hrs">

        <div class="btnn">

          <input type="submit" class="btn btn-primary" name="submit" value="Click here">
          </form>
        </div>

        <a href="#" class="box-close">
          ×
        </a>
      </div>
    </div>

    <div id="popup-boxx3" class="modal">
      <div class="content1">



        <h3 class="text-black px-5 mb-5 text-center">Fill up the Form</h3>
        <hr class="hrs">

        <div class="frms">
          <div class="lftPrt">
            <form method="post">

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CGPA*</label>
                <div class="col-sm-8">
                  <input type="text" name="CGPA" class="form-control" id="inputPassword" required placeholder="CGPA">
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">English Proficiency*</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO" required>
                      <option>IELTS</option>
                      <option>TOEFL</option>
                      <option>DUOLINGO</option>
                      <option>PTE</option>
                      <option>ITEP</option>
                      <option>MOI</option>
                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">GRE/GMAT/SAT</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO2">
                      <option>GRE</option>
                      <option>GMAT</option>
                      <option>SAT</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="OTHER_SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label cir">Achievement certificate</label>
                  <div class="col-sm-8">
                    <select class="slc ctr" name="achiv" required>
                      <option>YES</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>

              </div>

              <div class="form-group row midl">
                <div class="custom-file">
                  <div class="iner">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>

                </div>

              </div>




          </div>

          <div class="rhtPrt">
            <img src="images/g.gif" class="content1-img">
          </div>
        </div>

        <hr class="hrs">

        <div class="btnn">

          <input type="submit" class="btn btn-primary" name="submit" value="Click here">
          </form>
        </div>

        <a href="#" class="box-close">
          ×
        </a>
      </div>
    </div>

    <div id="popup-boxx4" class="modal">
      <div class="content1">



        <h3 class="text-black px-5 mb-5 text-center">Fill up the Form</h3>
        <hr class="hrs">

        <div class="frms">
          <div class="lftPrt">
            <form method="post">

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CGPA*</label>
                <div class="col-sm-8">
                  <input type="text" name="CGPA" class="form-control" id="inputPassword" required placeholder="CGPA">
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">English Proficiency*</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO" required>
                      <option>IELTS</option>
                      <option>TOEFL</option>
                      <option>DUOLINGO</option>
                      <option>PTE</option>
                      <option>ITEP</option>
                      <option>MOI</option>
                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">GRE/GMAT/SAT</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO2">
                      <option>GRE</option>
                      <option>GMAT</option>
                      <option>SAT</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="OTHER_SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label cir">Achievement certificate</label>
                  <div class="col-sm-8">
                    <select class="slc ctr" name="achiv" required>
                      <option>YES</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>

              </div>

              <div class="form-group row midl">
                <div class="custom-file">
                  <div class="iner">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>

                </div>

              </div>




          </div>

          <div class="rhtPrt">
            <img src="images/g.gif" class="content1-img">
          </div>
        </div>

        <hr class="hrs">

        <div class="btnn">

          <input type="submit" class="btn btn-primary" name="submit" value="Click here">
          </form>
        </div>

        <a href="#" class="box-close">
          ×
        </a>
      </div>
    </div>

    <div id="popup-boxx5" class="modal">
      <div class="content1">



        <h3 class="text-black px-5 mb-5 text-center">Fill up the Form</h3>
        <hr class="hrs">

        <div class="frms">
          <div class="lftPrt">
            <form method="post">

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">CGPA*</label>
                <div class="col-sm-8">
                  <input type="text" name="CGPA" class="form-control" id="inputPassword" required placeholder="CGPA">
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">English Proficiency*</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO" required>
                      <option>IELTS</option>
                      <option>TOEFL</option>
                      <option>DUOLINGO</option>
                      <option>PTE</option>
                      <option>ITEP</option>
                      <option>MOI</option>
                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label engP">GRE/GMAT/SAT</label>
                  <div class="col-sm-8">
                    <select class="slc" name="ENG_PRO2">
                      <option>GRE</option>
                      <option>GMAT</option>
                      <option>SAT</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>
                <div class="rtPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label scrs">Score</label>
                  <div class="col-sm-4">
                    <input type="text" name="OTHER_SCORE" class="form-control scre" id="inputPassword scre" placeholder="Score">
                  </div>
                </div>
              </div>

              <div class="form-group row midl">
                <div class="lfPrt">
                  <label for="inputPassword" class="col-sm-2 col-form-label cir">Achievement certificate</label>
                  <div class="col-sm-8">
                    <select class="slc ctr" name="achiv" required>
                      <option>YES</option>
                      <option>NO</option>

                    </select>
                  </div>
                </div>

              </div>

              <div class="form-group row midl">
                <div class="custom-file">
                  <div class="iner">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>

                </div>

              </div>




          </div>

          <div class="rhtPrt">
            <img src="images/g.gif" class="content1-img">
          </div>
        </div>

        <hr class="hrs">

        <div class="btnn">

          <input type="submit" class="btn btn-primary" name="submit" value="Click here">
          </form>
        </div>

        <a href="#" class="box-close">
          ×
        </a>
      </div>
    </div>
    <!-- 5 poppu[ box end] -->


    <?php

    $conn = new mysqli('localhost', 'root', '', 'studyabroad');
    if (!$conn) {
      echo 'not connect';
    }

    if (isset($_POST['submit'])) {
      $CGPA = $_POST['CGPA'];
      $ENG_PRO = $_POST['ENG_PRO'];
      $SCORE = $_POST['SCORE'];
      $ENG_PRO2 = $_POST['ENG_PRO2'];
      $OTHER_SCORE = $_POST['OTHER_SCORE'];
      $achiv = $_POST['achiv'];

      $_SESSION['CGPA'] = $CGPA;
      $_SESSION['ENG_PRO'] = $ENG_PRO;
      $_SESSION['SCORE'] = $SCORE;
      $_SESSION['ENG_PRO2'] = $ENG_PRO2;
      $_SESSION['OTHER_SCORE'] = $OTHER_SCORE;
      $_SESSION['achiv'] = $achiv;

      echo "<script>window.location.href ='universityList.php';</script> ";
    }


    ?>



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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/jquery-331.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
      var typed = new Typed(".typing_2", {
        strings: [' Dream country for study abroad.', ' University for study abroad.', ' University tuition fee.', ' Living cost.', ' University ranking.'],
        typeSpeed: 74,
        backSpeed: 74,
        loop: true
      });

      $(document).ready(function() {
        $('.counter-value').each(function() {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 3500,
            easing: 'swing',
            step: function(now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      });





      // ------------------------



      (function() {
        var $$ = function(selector, context) {
          var context = context || document;
          var elements = context.querySelectorAll(selector);
          return [].slice.call(elements);
        };

        function _fncSliderInit($slider, options) {
          var prefix = ".fnc-";

          var $slider = $slider;
          var $slidesCont = $slider.querySelector(prefix + "slider__slides");
          var $slides = $$(prefix + "slide", $slider);
          var $controls = $$(prefix + "nav__control", $slider);
          var $controlsBgs = $$(prefix + "nav__bg", $slider);
          var $progressAS = $$(prefix + "nav__control-progress", $slider);

          var numOfSlides = $slides.length;
          var curSlide = 1;
          var sliding = false;
          var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
          var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

          var autoSlidingActive = false;
          var autoSlidingTO;
          var autoSlidingDelay = 5000; // default autosliding delay value
          var autoSlidingBlocked = false;

          var $activeSlide;
          var $activeControlsBg;
          var $prevControl;

          function setIDs() {
            $slides.forEach(function($slide, index) {
              $slide.classList.add("fnc-slide-" + (index + 1));
            });

            $controls.forEach(function($control, index) {
              $control.setAttribute("data-slide", index + 1);
              $control.classList.add("fnc-nav__control-" + (index + 1));
            });

            $controlsBgs.forEach(function($bg, index) {
              $bg.classList.add("fnc-nav__bg-" + (index + 1));
            });
          }

          setIDs();

          function afterSlidingHandler() {
            $slider
              .querySelector(".m--previous-slide")
              .classList.remove("m--active-slide", "m--previous-slide");
            $slider
              .querySelector(".m--previous-nav-bg")
              .classList.remove("m--active-nav-bg", "m--previous-nav-bg");

            $activeSlide.classList.remove("m--before-sliding");
            $activeControlsBg.classList.remove("m--nav-bg-before");
            $prevControl.classList.remove("m--prev-control");
            $prevControl.classList.add("m--reset-progress");
            var triggerLayout = $prevControl.offsetTop;
            $prevControl.classList.remove("m--reset-progress");

            sliding = false;
            var layoutTrigger = $slider.offsetTop;

            if (autoSlidingActive && !autoSlidingBlocked) {
              setAutoslidingTO();
            }
          }

          function performSliding(slideID) {
            if (sliding) return;
            sliding = true;
            window.clearTimeout(autoSlidingTO);
            curSlide = slideID;

            $prevControl = $slider.querySelector(".m--active-control");
            $prevControl.classList.remove("m--active-control");
            $prevControl.classList.add("m--prev-control");
            $slider
              .querySelector(prefix + "nav__control-" + slideID)
              .classList.add("m--active-control");

            $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
            $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

            $slider
              .querySelector(".m--active-slide")
              .classList.add("m--previous-slide");
            $slider
              .querySelector(".m--active-nav-bg")
              .classList.add("m--previous-nav-bg");

            $activeSlide.classList.add("m--before-sliding");
            $activeControlsBg.classList.add("m--nav-bg-before");

            var layoutTrigger = $activeSlide.offsetTop;

            $activeSlide.classList.add("m--active-slide");
            $activeControlsBg.classList.add("m--active-nav-bg");

            setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
          }

          function controlClickHandler() {
            if (sliding) return;
            if (this.classList.contains("m--active-control")) return;
            if (options.blockASafterClick) {
              autoSlidingBlocked = true;
              $slider.classList.add("m--autosliding-blocked");
            }

            var slideID = +this.getAttribute("data-slide");

            performSliding(slideID);
          }

          $controls.forEach(function($control) {
            $control.addEventListener("click", controlClickHandler);
          });

          function setAutoslidingTO() {
            window.clearTimeout(autoSlidingTO);
            var delay = +options.autoSlidingDelay || autoSlidingDelay;
            curSlide++;
            if (curSlide > numOfSlides) curSlide = 1;

            autoSlidingTO = setTimeout(function() {
              performSliding(curSlide);
            }, delay);
          }

          if (options.autoSliding || +options.autoSlidingDelay > 0) {
            if (options.autoSliding === false) return;

            autoSlidingActive = true;
            setAutoslidingTO();

            $slider.classList.add("m--with-autosliding");
            var triggerLayout = $slider.offsetTop;

            var delay = +options.autoSlidingDelay || autoSlidingDelay;
            delay += slidingDelay + slidingAT;

            $progressAS.forEach(function($progress) {
              $progress.style.transition = "transform " + delay / 1000 + "s";
            });
          }

          $slider
            .querySelector(".fnc-nav__control:first-child")
            .classList.add("m--active-control");
        }

        var fncSlider = function(sliderSelector, options) {
          var $sliders = $$(sliderSelector);

          $sliders.forEach(function($slider) {
            _fncSliderInit($slider, options);
          });
        };

        window.fncSlider = fncSlider;
      })();


      fncSlider(".example-slider", {
        autoSlidingDelay: 4000
      });

      var $demoCont = document.querySelector(".demo-cont");

      [].slice
        .call(document.querySelectorAll(".fnc-slide__action-btn"))
        .forEach(function($btn) {
          $btn.addEventListener("click", function() {
            $demoCont.classList.toggle("credits-active");
          });
        });

      document
        .querySelector(".demo-cont__credits-close")
        .addEventListener("click", function() {
          $demoCont.classList.remove("credits-active");
        });

      document
        .querySelector(".js-activate-global-blending")
        .addEventListener("click", function() {
          document
            .querySelector(".example-slider")
            .classList.toggle("m--global-blending-active");
        });




      // ---------------------------
    </script>

        <!-- js link -->
    <script src="main.js" defer data-deferred="1"></script>

    <!-- Bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


  </body>

  </html>

<?php
} else {
  header("location:index1.php");
}

?>