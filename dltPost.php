    <!-- popup style -->
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
                visibility: visible;
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

                .title {
                    font-family: sans-serif;
                    font-weight: 600;
                    color: #000000a8;
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
            </style>

         <!-- popup style -->


<div id="popup-box2" class="modal">


<div class="content1">


    <div class="title">Do you want to delete this post?</div>
    <div class="content">
   
        <div class="btn1">
            <form method="post">
            <!-- <input type="submit" name="submitY" value="Yes"> -->
                    <button type="submit" name="submitY"  class="btn btn-primary">Yes</button>                    
                    <button type="submit" name="submitN" class="btn btn-danger">No</button>
  
            </form>
      </div>
   

        <?php

        $conn = new mysqli('localhost', 'root', '', 'studyabroad');
        if (!$conn) {
            echo 'not connect';
        }

        if (isset($_POST['submitY'])) {

            if($_GET['id']){
                                            
                                            
                $dl_id = $_GET['id'];
                
              
            }

            $sql = "DELETE FROM student WHERE id = '$dl_id'";

            $result = $conn->query($sql);

            $sqld = "DELETE FROM trackallpost WHERE id = '$dl_id'";

             $resultd = $conn->query($sqld);

            if ($result == true) {
                echo "<script>window.location.href ='myPost.php';</script> ";

            } else {
                echo "error";
            }
        }

        if (isset($_POST['submitN'])) {

            echo "<script>window.location.href ='myPost.php';</script> ";

        }


        ?>



    </div>

    <a href="myPost.php" class="box-close">
        ×
    </a>
</div>
</div>