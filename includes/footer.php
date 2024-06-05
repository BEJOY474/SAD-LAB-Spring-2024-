<style>
    #outerContent {
        background-color: rgb(236, 226, 226);
        position: relative;
        top: 50px;
        height: 660px;
    }

    .col-sm-4.col-md-3 {
        float: right;
        position: relative;
        top: -211px;
        right: 70px;
    }

    .col-sm-6.col-mid-3 {
        height: 245px;
    }

    #footer {
        background-color: black;
        padding: 78px 0;
        position: relative;
    }

    .lines {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgb(255 254 254);
}

    #footer ul {
        list-style: none;
        padding-left: 0px;

    }

    #footer ul a {
        color: #EA3027;
        padding: 20px 0;
        text-decoration: none;
    }



    #footer .social {
        text-align: left;
    }

    #footer h4 {
        color: #fff;
    }

    #footer .social a {
        margin: 0px 10px 0px 0px;
        display: inline-block;
        color: #ffffff;
        width: 30px;
        height: 30px;
        border-radius: 15px;
        line-height: 30px;
        font-size: 15px;
        text-align: center;
        vertical-align: bottom;
        background-color: #555555;

    }

    #footer .social a:hover {
        background-color: red;
        text-decoration: none;
    }

    @media (min-width: 850px) {
        .col-sm-4.col-md-3 {
            float: right;
            position: relative;
            top: -211px;
            right: 105px;
        }

    }

    #footer ul a {
    color: #EA3027;
    padding: 20px 0;
    text-decoration: none;
    line-height: 35px;
    font-weight: bold;
    font-size: 16px;
}

    .col-sm-4.col-md-3 {
        position: relative;
        top: -295px;
    }

    .col-sm-6.col-md-3 a {
        text-decoration: none;
        color: gray;
        transition: 0.4s;
    }

    .col-sm-6.col-md-3 a:hover {
        color: red;
    }

    .col-sm-6.col-mid-3 {
        height: 152px;
    }

    .cntcIn {
    font-family: var(--font-text);
    font-size: 15px;
    line-height: 1.5;
    color: hsl(0deg 0% 100% / 52%);
}

.row h4 {
    font-size: 20px;
}

</style>



<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-mid-3">

                <h4>Pages</h4>

                <ul>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>


                <h4>User Section</h4>

                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="adminLogin.php">Admin</a></li>
                </ul>

            </div>

            <div class="col-sm-6 col-md-3">
                <h4>Find Us</h4>
                <p class="cntcIn">
                <?php

                        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
                        if (!$conn) {
                            echo 'not connect';
                        }


                        $sql = "SELECT * FROM admininfo";
                        $result = $conn->query($sql);


                        while ( $data = $result->fetch_assoc()) {
                            $phnNum = $data['phnNum'];
                            $email = $data['email'];
                            $address = $data['address'];
                        }

                        echo "
                        <strong>Education World</strong>
                        <br>$address
                        <br>$phnNum
                        <br>$email
                        <br><strong>Bejoy Munshi</strong>
                        ";
                ?>
                   
                </p>
                <a href="contact.php">Contact Us</a>
                <hr class="hidder-md hidden-lg hidden-sm">

            </div>

            <div class="col-sm-6 col-md-3">

                <p class="text-muted">
                    <a href="cmnt.php">See comments</a>
                </p>
                <hr class="lines" >
                <h4>Keep In Touch</h4>

                <p class="social">
                    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/home" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
                    <a href="https://www.google.com/" class="fa fa-google"></a>
                    <a href="#" class="fa fa-arrow-up"></a>
                </p>
            </div>
        </div>
    </div>
</div>