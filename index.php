<?php 
        $conn = new mysqli('localhost', 'root', '', 'studyabroad'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Education World</title>

    <!-- fontAwesom start -->
    <script src="https://kit.fontawesome.com/09deaf1e8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">

    <!-- fontAwesom end -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cssFolder/index.css">
    <link rel="icon" href="pic/Logo.png" type="pic/icon">

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


    <style>
                    img.spk {
                        width: 50px;
                    }
                                    
                    h3.cmnt2 {
                        color: #01139f;
                        font-weight: bold;
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
                        background: rgb(255 252 252);
                        transition: all 0.4s;
                        visibility: hidden;
                        opacity: 0;
                    }
                    .modall {
                        align-items: center;
                        display: flex;
                        justify-content: center;
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        background: rgb(255 252 252);
                        transition: all 0.4s;
                        visibility: visible;
                        opacity: 1;
                    }
            

                    .modal:target {
                        visibility: visible;
                        opacity: 1;
                    }

                    .box-close {
                    position: absolute;
                    top: 0;
                    right: 15px;
                    color: #1907a7;
                    text-decoration: none;
                    font-size: 30px;
                    font-weight: bold;
                }


                /* 2nd popup */
                .popup-overlay {

                    display: none;

                    position: fixed;

                    top: 0;

                    left: 0;

                    width: 100%;

                    height: 100%;

                    background: rgba(0, 0, 0, 0.5);

                    }

                    .popup {

                    font-family: Arial, sans-serif;

                    position: absolute;

                    top: 50%;

                    left: 50%;

                    transform: translate(-50%, -50%);

                    background: #fff;

                    padding: 20px;

                    border-radius: 8px;

                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

                    }

                    .popup-content {

                    text-align: center;

                    }

                    .popup .close {

                    position: absolute;

                    top: 10px;

                    right: 10px;

                    font-size: 20px;

                    cursor: pointer;

                    color: #333;

                    }

                    .popup #emailInput {

                    width: 80%;

                    padding: 10px;

                    margin: 10px 0;

                    border: 1px solid #ddd;

                    border-radius: 4px;

                    }

                    .popup button {

                    background-color: #8d72df;

                    color: #fff;

                    padding: 10px 20px;

                    border: none;

                    border-radius: 4px;

                    cursor: pointer;

                    font-size: 16px;

                    }

    </style>


</head>
<body>

    <div class="popup-overlay" id="popupOverlay">

        <div class="popup" id="popup">

            <div class="popup-content">

                <p>Welcome to our website!</p>
              
                <p>Dear user this website has voice command system. Do you want to use voice command?</p>

                <form  method="post">
                        <button type="submit" name="yes">Yes</button>
                        <button type="submit" name="no">No</button>
                </form>
            

            </div>

        </div>

    </div>


    <?php 

    if (isset ($_POST['yes'])) {
        echo "<script>popupOverlay.style.display = 'none';</script>";
        $sqll = "UPDATE sequrity 
            SET actions ='yes' WHERE intId = '1' ";
            $result = $conn->query($sqll);
        
        echo "<script>window.location.href ='index1.php';</script> ";

    
    }

    if (isset ($_POST['no'])) {
        echo "<script>popupOverlay.style.display = 'none';</script>";

        $sqll = "UPDATE sequrity 
        SET actions ='no' WHERE intId = '1' ";
        $result = $conn->query($sqll);

        echo "<script>window.location.href ='index1.php';</script> ";

    
    }


    ?>

<?php 




?>

    <script>
        let displayValue = document.querySelectorAll(".num");
        let interval = 7000;

        displayValue.forEach(valueDisplay => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"));
        

            let duration = Math.floor(interval/endValue);

            let counter = setInterval( function() {
                startValue+=1;
                valueDisplay.textContent = startValue;

                if(startValue ==endValue){
                    clearInterval(counter);
                }

            }, duration);



        } );






        $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    dots: false,
    nav: true,
    mouseDrag: false,
    autoplay: true,
    animateOut: 'slideOutUp',
    responsive: {
        0: {
            items: 1
        },
        300: {
            items: 1
        },
        600: {
            items: 1
        },
        800: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


document.addEventListener('DOMContentLoaded', function () {

const popupOverlay = document.getElementById('popupOverlay');

const popup = document.getElementById('popup');

const closePopup = document.getElementById('closePopup');

const emailInput = document.getElementById('emailInput');

// Function to open the popup

function openPopup() {

    popupOverlay.style.display = 'block';

}

// Function to close the popup

function closePopupFunc() {

    popupOverlay.style.display = 'none';

}

// Function to submit the signup form

function submitForm() {

    const email = emailInput.value;

    // Add your form submission logic here

    console.log(`Email submitted: ${email}`);

    closePopupFunc(); // Close the popup after form submission

}

// Event listeners

// Trigger the popup to open (you can call this function on a button click or any other event)

openPopup();

// Close the popup when the close button is clicked

closePopup.addEventListener('click', closePopupFunc);

// Close the popup when clicking outside the popup content

popupOverlay.addEventListener('click', function (event) {

    if (event.target === popupOverlay) {

        closePopupFunc();

    }

});

// You can customize and expand these functions based on your specific requirements.

});

    </script>

</body>

</html>