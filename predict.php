<?php
shell_exec("adi.sh");
?>
<!DOCTYPE html>
<html>
<title>PredicatorFinc.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<style>
    body, h1, h2, h3, h4, h5, h6 {
        font-family: "Lato", sans-serif
    }

    .w3-bar, h1, button {
        font-family: "Montserrat", sans-serif
    }

    .fa-anchor, .fa-coffee {
        font-size: 200px
    }

    .dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }
</style>

<body id="bod">
<head>
    <link rel="stylesheet" href="interface.css">

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black"
               href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i
                    class="fa fa-bars"></i></a>
            <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
            <a href="predict1.html" class="w3-bar-item w3-button w3-padding-large w3-white">Stock predictor</a>
            <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="predict1.html" class="w3-bar-item w3-button w3-padding-large">Stock predictor</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
        </div>
    </div>

    <!-- Header -->
    <header class="w3-container w3-black w3-center" style="padding:128px 16px">
        <h1 class="w3-margin w3-jumbo">Stock Prediction Zone</h1>
    </header>

    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
        <div class="w3-content">

            <form id="f1" action="predict.php" method="post">
                <br><br><br>

                <div id="co">
                    <h1 id="comp" for="company">List of Companies</h1>


                    <div class="dropdown">
                        <button type="button" onclick="/Users/user/Desktop/adi.sh">Click Me!</button>
                        <br>
                        <br>

                    </div>
                </div>
                <br><br>
                <div id="pred">
                    <h1 id="hpred">Select the Company </h1>
                    <input type="submit" class="dropbtn" value="Apple" id="button1" name="minute"/>
                    <input type="submit" class="dropbtn" value="Amazon" id="button1" name="day"/>
                    <input type="submit" class="dropbtn" value="FaceBook" id="button1" name="long"/>
                    <input type="submit" class="dropbtn" value="Intel Corporation" id="button1" name="long"/>
                    <input type="submit" class="dropbtn" value="Twitter" id="button1" name="long"/>
                </div>
            </form>
            <br><br>
        </div>
    </div>
    </div>
    <!-- Footer -->
    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Predicator<span>Finc.</span></h3>
            <p class="footer-company-name">PredicatorFinc. &copy; 2018</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>New York University</span> New York, NY</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+1 917 8647779</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:aj2529@nyu.edu">aj2529@nyu.edu</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                Not your average stock predictor.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>
