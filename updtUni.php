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

  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <link rel="icon" href="pic/Logo.png" type="pic/icon">

  <link rel="stylesheet" href="cssFolder/ts.css">


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');

    * {
      font-family: 'Ubuntu', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --blue: #2a2185;
      --white: #fff;
      --gray: #f5f5f5;
      --black1: #222;
      --black2: #999;
    }

    body {
      min-height: 100vh;
      overflow-x: hidden;
    }

    .container_r {
      position: relative;
      width: 100%;
    }

    .card-body {
      height: 400px;
      overflow-y: scroll;
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

    .navigation.active {
      width: 90px;
    }

    .navigation ul {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }

    .navigation ul li {
      position: relative;
      width: 100%;
      height: 65px;
      list-style: none;
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
    }

    .navigation ul li:hover,
    .navigation ul li.hovered {
      background-color: var(--white);
    }

    .navigation ul li:nth-child(1) {
      margin-bottom: 40px;
      pointer-events: none;
    }

    .navigation ul li a {
      position: relative;
      display: block;
      width: 100%;
      display: flex;
      text-decoration: none;
      color: var(--white);
    }

    .navigation ul li:hover a,
    .navigation ul li.hovered a {
      color: var(--blue);
    }

    .navigation ul li a .icon {
      position: relative;
      display: block;
      min-width: 70px;
      height: 70px;
      line-height: 85px;
      text-align: center;
    }

    .navigation ul li a .icon ion-icon {
      font-size: 1.75rem;
    }

    .navigation ul li a .title {
      position: relative;
      display: block;
      padding: 0 10px;
      height: 70px;
      line-height: 70px;
      text-align: start;
      white-space: nowrap;
    }

    .navigation ul li:hover a::before,
    .navigation ul li.hovered a::before {
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
    .navigation ul li.hovered a::after {
      content: '';
      position: absolute;
      right: 0;
      bottom: -50px;
      width: 50px;
      height: 55px;
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

    .main.active {
      width: calc(100% - 90px);
      left: 90px;
    }

    .topbar {
      width: 100%;
      height: 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 10px;
      box-shadow: 0 7px 25px rgb(0 0 0 / 8%);

    }


    .toggle {
      position: relative;
      top: 8px;
      width: 60px;
      height: 60px;
      display: flex;
      justify-content: center;
      font-size: 2.5rem;
      cursor: pointer;
    }

    .search {
      position: relative;
      width: 400px;
      margin: 0 10px;
    }

    .search label {
      position: relative;
      width: 100%;
    }

    .search label input {
      width: 100%;
      height: 40px;
      border-radius: 40px;
      padding: 5px 20px;
      padding-left: 35px;
      font-size: 18px;
      outline: none;
      border: 1px solid var(--black2);
    }

    .search label ion-icon {
      position: absolute;
      top: 0;
      left: 10px;
      font-size: 1.2rem;
    }

    .user {
      position: relative;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;

    }

    .user img {
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

      grid-gap: 30px;
    }

    .cardBox .card {
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
    .cardBox .card:last-child .iconB {
      color: var(--white);
    }


    .cardBox .card .numbers {
      position: relative;
      font-weight: 500;
      font-size: 2.5rem;
      color: var(--blue);
    }

    .cardBox .card .cardName {
      color: var(--black2);
      font-size: 1.1rem;
      margin-top: 5px;
    }

    .cardBox .card .iconB {
      font-size: 3.5rem;
      color: var(--black2);
    }

    .cardBox .card:hover {
      background: #4643b5;
      transition: 0.3s;
    }

    .cardBox .card:hover .numbers,
    .cardBox .card:hover .cardName,
    .cardBox .card:hover .iconB {
      color: var(--white);
    }



    .recent-grid {
      margin-top: 0.5rem;
      margin-left: 10px;
      margin-right: 10px;
      border-radius: 5px;
      box-shadow: 0 7px 25px rgb(0 0 0 / 8%);
    }

    .card-2 {
      background-color: #fff;
      border-radius: 5px;
    }

    .card-header,
    .card-body {
      padding: 1rem;
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #f0f0f0;
    }

    .card-header button {
      background: #b70606;
      border-radius: 10px;
      color: var(--white);
      font-size: .8rem;
      padding: .5rem 1rem;
      font-family: 'Ubuntu', sans-serif;
      cursor: pointer;
      border: 1px solid #b70606;
    }

    .customer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: .5rem .7rem;
      cursor: pointer;
    }

    .customer:hover {
      background: var(--blue);
      color: var(--white);
      border-radius: 5px;
    }

    .customer:hover h4 {

      color: var(--white);
    }

    .info {
      display: flex;
      align-items: center;
    }

    .info img {
      border-radius: 50%;
      margin-right: 1rem;
    }

    .info h4 {
      font-size: .8rem;
      font-weight: 700;
      color: #222;
    }

    .info small {
      font-weight: 600;
      color: var(--text-grey);
    }


    .contact span {
      font-size: 1.2rem;
      display: inline-block;
      margin-left: .5rem;
      color: var(--main-color);
    }






    @media (max-width: 991px) {

      .navigation {
        left: -300px;
      }


      .navigation.active {
        width: 300px;
        left: 0;
      }

      .main {
        width: 100%;
        left: 0;
      }

      .main.active {
        left: 300px;
      }

      .cardBox {
        grid-template-columns: repeat(2, 1fr);
      }




    }


    @media (max-width: 580px) {

      .cardBox {
        grid-template-columns: repeat(1, 1fr);
      }

      .navigation {
        width: 100%;
        left: -100%;
        z-index: 1000;
      }

      .navigation.active {
        width: 100%;
        left: 0;
      }

      .toggle {
        z-index: 10001;
      }

      .main.active .toggle {
        color: var(--white);
        position: fixed;
        right: 0;
        left: initial;
      }

    }

    table.table.table-success {

      z-index: 2;
      border-collapse: collapse;
      width: 938px;
      background: #e9dcdc;
      text-align: center;
      box-shadow: 0 5px 12px rgb(32 32 32 / 30%);
      height: 400px;
      overflow-y: scroll;
    }

    th {
      background: #d2a0f9;
    }

    th,
    td {
      padding: 10px 12px;
    }

    tr:nth-child(odd) {
      background-color: #c5abab;
    }

    .twoBtn {
      width: 196px;
    }
  </style>

  <style>
    /* 64ac15 */
    *,
    *:before,
    *:after {
      box-sizing: border-box;
    }

    h4 {
      color: #f0a500;
    }

    input,
    input[type="radio"]+label,
    input[type="checkbox"]+label:before,
    select option,
    select {
      width: 100%;
      padding: 1em;
      line-height: 1.4;
      background-color: #f9f9f9;
      border: 1px solid #e5e5e5;
      border-radius: 3px;
      -webkit-transition: 0.35s ease-in-out;
      -moz-transition: 0.35s ease-in-out;
      -o-transition: 0.35s ease-in-out;
      transition: 0.35s ease-in-out;
      transition: all 0.35s ease-in-out;
    }

    input:focus {
      outline: 0;
      border-color: #bd8200;
    }

    input:focus+.input-icon i {
      color: #f0a500;
    }

    input:focus+.input-icon:after {
      border-right-color: #f0a500;
    }

    input[type="radio"] {
      display: none;
    }

    input[type="radio"]+label,
    select {
      display: inline-block;
      width: 50%;
      text-align: center;
      float: left;
      border-radius: 0;
    }

    input[type="radio"]+label:first-of-type {
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
    }

    input[type="radio"]+label:last-of-type {
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }

    input[type="radio"]+label i {
      padding-right: 0.4em;
    }

    input[type="radio"]:checked+label,
    input:checked+label:before,
    select:focus,
    select:active {
      background-color: #f0a500;
      color: #fff;
      border-color: #bd8200;
    }

    input[type="checkbox"] {
      display: none;
    }

    input[type="checkbox"]+label {
      position: relative;
      display: block;
      padding-left: 1.6em;
    }

    input[type="checkbox"]+label:before {
      position: absolute;
      top: 0.2em;
      left: 0;
      display: block;
      width: 1em;
      height: 1em;
      padding: 0;
      content: "";
    }

    input[type="checkbox"]+label:after {
      position: absolute;
      top: 0.45em;
      left: 0.2em;
      font-size: 0.8em;
      color: #fff;
      opacity: 0;
      font-family: FontAwesome;
      content: "\f00c";
    }

    input:checked+label:after {
      opacity: 1;
    }

    select {
      height: 3.4em;
      line-height: 2;
    }

    select:first-of-type {
      border-top-left-radius: 3px;
      border-bottom-left-radius: 3px;
    }

    select:last-of-type {
      border-top-right-radius: 3px;
      border-bottom-right-radius: 3px;
    }

    select:focus,
    select:active {
      outline: 0;
    }

    select option {
      background-color: #f0a500;
      color: #fff;
    }

    .input-group {
      margin-bottom: 1em;
      zoom: 1;
    }

    .input-group:before,
    .input-group:after {
      content: "";
      display: table;
    }

    .input-group:after {
      clear: both;
    }

    .input-group-icon {
      position: relative;
    }

    .input-group-icon .input-icon {
      position: absolute;
      top: 0;
      left: 0;
      width: 3.4em;
      height: 3.4em;
      line-height: 3.4em;
      text-align: center;
      pointer-events: none;
    }

    .input-group-icon .input-icon:after {
      position: absolute;
      top: 0.6em;
      bottom: 0.6em;
      left: 3.4em;
      display: block;
      border-right: 1px solid #e5e5e5;
      content: "";
      -webkit-transition: 0.35s ease-in-out;
      -moz-transition: 0.35s ease-in-out;
      -o-transition: 0.35s ease-in-out;
      transition: 0.35s ease-in-out;
      transition: all 0.35s ease-in-out;
    }

    .input-group-icon .input-icon i {
      -webkit-transition: 0.35s ease-in-out;
      -moz-transition: 0.35s ease-in-out;
      -o-transition: 0.35s ease-in-out;
      transition: 0.35s ease-in-out;
      transition: all 0.35s ease-in-out;
    }

    .container {
      max-width: 61em;
      height: 40rem;
      padding: 1em 3em 2em 3em;
      margin: 0em auto;
      background-color: #fff;
      border-radius: 4.2px;
      box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
    }

    .row {
      zoom: 1;
    }

    .row:before,
    .row:after {
      content: "";
      display: table;
    }

    .row:after {
      clear: both;
    }

    .col-half {
      padding-right: 10px;
      float: left;
      width: 50%;
    }

    .col-half:last-of-type {
      padding-right: 0;
    }

    .col-third {
      padding-right: 10px;
      float: left;
      width: 33.33333333%;
    }

    .col-third:last-of-type {
      padding-right: 0;
    }

    @media only screen and (max-width: 540px) {
      .col-half {
        width: 100%;
        padding-right: 0;
      }
    }

    .row.fstNms {
      display: flex;
      align-items: center;
    }

    .input-group.input-group-icon {
      display: flex;
    }

    .input-group.input-group-icon .wr {
      width: 250px;
      position: relative;
      top: 14px;
      left: 0px;
    }

    label.wr.uni {
      position: relative;
      left: 97px;
    }

    .input-group.input-group-icon .wrBk {
      width: 350px;
      position: relative;
      top: 14px;
      left: 55px;
    }

    .input-group.input-group-icon label {
      width: 250px;
      position: relative;
      top: 14px;

    }

    input.inpPNm.rnk {
      position: relative;
      width: 190px;
    }

    input.inpPNm {
      position: relative;
      right: 100px;
    }

             h4.hdr {
                      text-align: center;
                      margin-bottom: 25px;
                      margin-top: 10px;
                      font-size: 22px;
                      color: #4643b5;
                  }

                  hr {
                      margin-bottom: 10px;
                      color: #ffa50040;
                      background: #4643b5;
                      border: 1px solid;
                  }

    input.inpPNm.bks {
      position: relative;
      left: 0px;
    }

    input.inpPNm.img {
      right: 0;
    }

    .input-group.input-group-icon.imgFld {
      width: 100%;
    }

    label.wr.intr {
      position: relative;
      left: 130px;
    }

    select.fndSec {
      position: relative;
      left: 78px;
    }

    input.inpNmUn.fndSec {
      position: relative;
      left: 20px;
    }

    select.fndSec2 {
      position: relative;
      left: -45px;
    }
  </style>

  <style>
    .wrappers {
      cursor: pointer;
      transform: translate(-50%, -50%);
    }

    .link_wrapper {
      position: relative;
      top: 32px;
      left: 450px;
      cursor: pointer;
    }

    select.fndSecUs {
      position: relative;
      left: -48px;
    }

    .ab {
                      display: block;
                      width: 250px;
                      height: 50px;
                      line-height: 50px;
                      font-weight: bold;
                      text-decoration: none;
                      background: #4643b5;
                      text-align: center;
                      color: #fff;
                      text-transform: uppercase;
                      letter-spacing: 1px;
                      border: 3px solid #4643b5;
                      transition: all .35s;
                      position: relative;
                      cursor: pointer;
                  }

                  .iconss{
                    width: 50px;
                    height: 50px;
                    border: 3px solid transparent;
                    position: absolute;
                    transform: rotate(45deg);
                    right: 0;
                    top: 0;
                    z-index: -1;
                    transition: all .35s;
                  }

                  .iconss svg{
                    width: 30px;
                    position: absolute;
                    top: calc(50% - 15px);
                    left: calc(50% - 15px);
                    transform: rotate(-45deg);
                    fill: #4643b5;
                    transition: all .35s;
                  
                  }

                  .ab:hover{
                    width: 200px;
                    border: 3px solid #4643b5;
                    background: transparent;
                    color: #4643b5;
                  }

                  .ab:hover + .iconss{
                    border: 3px solid #4643b5;
                    right: -25%;
                  }


    a.upd {
      text-decoration: none;
      background: #0000ffb5;
      padding: 10px;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }

    a.dlts {
      text-decoration: none;
      background: red;
      padding: 10px;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 5px;
    }

    input.inpNmUn {
      position: relative;
      width: 285px;
      left: -95px;
    }

    label.wr.uni {
      position: relative;
      left: 0px;
    }

    label.wr.un {
      position: relative;
      left: 95px;
    }
  </style>

</head>

<body>

  <div class="container_r">
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
            <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                  d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z" />
              </svg></span>
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



    <?php

    $conn = new mysqli('localhost', 'root', '', 'studyabroad');


    if ($_GET['INFO_id']) {
      $INFO_id = $_GET['INFO_id'];



      $sql6 = "SELECT * FROM abroad WHERE ID = $INFO_id";
      $result = $conn->query($sql6);

      while ($data = $result->fetch_assoc()) {
        $ID = $data['ID'];
        $COUNTRY_NAME = $data['COUNTRY_NAME'];
        $UNIVERSITY = $data['UNIVERSITY'];
        $RANK_UNI = $data['RANK_UNI'];
        $COURSE_OFFER = $data['COURSE_OFFER'];
        $ENG_PRO = $data['ENG_PRO'];
        $SCORE = $data['SCORE'];
        $CGPA = $data['CGPA'];
        $TUITION_FEE = $data['TUITION_FEE'];
        $LIVING_COST = $data['LIVING_COST'];
        $FUND = $data['FUND'];
        $INTERNSHIP = $data['INTERNSHIP'];
        $TA_RA_GA = $data['TA_RA_GA'];
        $CONTACT = $data['CONTACT'];

        $pubOrPrivate = $data['pubOrPrivate'];


      }
    }

    ?>
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

        <div class="container">
          <form method="POST" enctype="multipart/form-data">
            <h4 class="hdr">Update Study Abroad Information</h4>
            <hr>
            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label for="">Country Name</label>
                <input type="text" class="inpPNm rnk" name="COUNTRY_NAME" value="<?php echo "$COUNTRY_NAME" ?>" required
                  placeholder="University Rank" />


              </div>
              <div class="input-group input-group-icon">
                <label class="wr uni">University Name</label>
                <input type="text" class="inpNmUnUp" name="UNIVERSITY" value="<?php echo "$UNIVERSITY" ?>" required
                  placeholder="University Name" />
              </div>

            </div>

            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label for="">University Rank</label>
                <input type="text" class="inpPNm rnk" name="RANK_UNI" value="<?php echo "$RANK_UNI" ?>" required
                  placeholder="University Rank" />

              </div>
              <div class="input-group input-group-icon">
                <label class="wr">Course Offer</label>
                <input type="text" class="inpNm" name="COURSE_OFFER" value="<?php echo "$COURSE_OFFER" ?>"
                  placeholder="Course Offer" />

              </div>

            </div>

            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label for="">English Proficiency</label>
                <input type="text" class="inpPNm rnk" name="ENG_PRO" value="<?php echo "$ENG_PRO" ?>" required
                  placeholder="English Proficiency" />


              </div>
              <div class="input-group input-group-icon">
                <label class="wr un">Score</label>
                <input type="text" class="inpNmUn" name="SCORE" value="<?php echo "$SCORE" ?>" required
                  placeholder="Score" />
              </div>



            </div>


            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label for="">CGPA</label>
                <input type="text" class="inpPNm rnk" name="CGPA" value="<?php echo "$CGPA" ?>" required
                  placeholder="CGPA" />

              </div>

              <div class="input-group input-group-icon">
                <label for="">Type</label>

                <input type="text" class="inpNmUn" name="pubOrPrivate" value="<?php echo "$pubOrPrivate" ?>" required
                  placeholder="Type" />

              </div>

            </div>

            <hr>

            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label class="wr">Tution Fee</label>
                <input type="text" class="inpNm" name="TUITION_FEE" value="<?php echo "$TUITION_FEE" ?>"
                  placeholder="Tution Fee" />

              </div>

              <div class="input-group input-group-icon">
                <label class="wrBk">Living Cost</label>
                <input type="text" class="inpPNm bks" name="LIVING_COST" value="<?php echo "$LIVING_COST" ?>" required
                  placeholder="Living Cost" />
              </div>
            </div>


            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label class="wr">Fund</label>
                <input type="text" class="inpNm" name="FUND" value="<?php echo "$FUND" ?>" placeholder="Tution Fee" />

              </div>

              <div class="input-group input-group-icon">
                <label class="wrBk">Internship</label>
                <input type="text" class="inpPNm bks" name="INTERNSHIP" value="<?php echo "$INTERNSHIP" ?>" required
                  placeholder="Living Cost" />
              </div>
            </div>

            <div class="row fstNms">

              <div class="input-group input-group-icon">
                <label class="wr">TA/RA/GA</label>
                <input type="text" class="inpNm" name="TA_RA_GA" value="<?php echo "$TA_RA_GA" ?>"
                  placeholder="Tution Fee" />

              </div>

              <div class="input-group input-group-icon">
                <label class="wrBk">Contact</label>
                <input type="text" class="inpPNm bks" name="CONTACT" value="<?php echo "$CONTACT" ?>" required
                  placeholder="Living Cost" />
              </div>
            </div>

            <hr>


            <center>
              <div class="row fstNms">

                <div class="input-group input-group-icon imgFld">

                  <div class="wrappers">
                    <div class="link_wrapper">
                      <button class="ab" name="update" type="submit">Update</button>
                      <div class="iconss">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 268.832 268.832">
                          <path
                            d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.883-4.882 4.883-12.796 0-17.678z" />
                        </svg>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </center>


        </div>

        </form>
      </div>

      <?php

      $conn = new mysqli('localhost', 'root', '', 'studyabroad');
      if (!$conn) {
        echo 'not connect';
      }
      if ($_GET['INFO_id']) {
        $INFO_id = $_GET['INFO_id'];

        if (isset ($_POST['update'])) {
          $RANK_UNI = $_POST['RANK_UNI'];
          $UNIVERSITY = $_POST['UNIVERSITY'];
          $COURSE_OFFER = $_POST['COURSE_OFFER'];
          $TUITION_FEE = $_POST['TUITION_FEE'];
          $LIVING_COST = $_POST['LIVING_COST'];
          $FUND = $_POST['FUND'];

          $INTERNSHIP = $_POST['INTERNSHIP'];
          $TA_RA_GA = $_POST['TA_RA_GA'];
          $CONTACT = $_POST['CONTACT'];
          $ENG_PRO = $_POST['ENG_PRO'];
          $SCORE = $_POST['SCORE'];
          $COUNTRY_NAME = $_POST['COUNTRY_NAME'];
          $CGPA = $_POST['CGPA'];
          $pubOrPrivate = $_POST['pubOrPrivate'];


          $sql = "UPDATE abroad 
                      SET RANK_UNI='$RANK_UNI',	UNIVERSITY='$UNIVERSITY',	COURSE_OFFER='$COURSE_OFFER',	TUITION_FEE='$TUITION_FEE'
                      ,	LIVING_COST='$LIVING_COST',	FUND='$FUND',	INTERNSHIP='$INTERNSHIP'   
                      ,	TA_RA_GA='$TA_RA_GA',	CONTACT='$CONTACT',	ENG_PRO='$ENG_PRO',pubOrPrivate='$pubOrPrivate',	SCORE='$SCORE',	COUNTRY_NAME='$COUNTRY_NAME',	CGPA='$CGPA'
                       WHERE ID ='$INFO_id' ";

          $result = $conn->query($sql);

          if ($result == true) {
            echo "<script>window.location.href ='addAbrod.php';</script> ";

          } else {
            echo "error";
          }

        }

      }
      ?>


    </div>
  </div>
  </div>

  <script>
    let list = document.querySelectorAll(".navigation li");

    function activeLink() {
      list.forEach(item => {
        item.classList.remove("hovered");
      });
      this.classList.add("hovered");
    }

    list.forEach(item => item.addEventListener("mouseover", activeLink));

    let toggle = document.querySelector(".toggle");
    let navigation = document.querySelector(".navigation");
    let main = document.querySelector(".main");

    toggle.onclick = function () {
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