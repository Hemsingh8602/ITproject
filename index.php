<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hemsingh project</title>
</head>
<link rel="stylesheet" href="css/style.css">
<style>
    body {
        font-family: cursive;
        color: white;
        margin: 0px;
        padding: 0px;
        background: url(img/4.jpg)no-repeat center center/cover;

        /* height: 1200px; */
    }

    .left {
        /* border: 2px solid gold; */
        display: inline-block;
        position: absolute;
        left: 54px;
        top: 30px;
    }

    .left div {
        font-size: 20px;
        text-align: center;
    }

    .left img {
        width: 130px;
        height: 130px;
        padding: 0px 10px;
    }

    .mid {
        /* border: 2px solid red; */
        display: block;
        width: 60%;
        margin: 30px auto;
    }

    .right {
        /* border: 2px solid green; */
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 42px;
        width: 300px;
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 30px;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 20px 40px;
    }

    .navbar li a:hover,
    .navbar li a:active {
        text-decoration: underline;
        color: red;
    }

    .btn {
        margin: 0px 5px;
        background-color: black;
        color: white;
        padding: 5px 10px;
        border-radius: 10px;
        cursor: pointer;
        
    }

    .btn:hover {
        color: grey;

    }

    .container {
        /* border: 2px solid green; */
        margin: 5px 200px;
        padding: 10px 60px;
        width: 63%;
        border-color: white;
        border-radius: 10px;
    }

    .container h1 {
        text-align: center;
        color: yellow;
    }

    .pa {
        color: blue;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }

    .l {
        display: inline-block;
        width: 30%;
        margin: 10px;
        background-color: rgb(164, 224, 86);
        border-radius: 20px;
    }

    .detail {
        color: black;
        text-align: center;
    }

    footer {
        text-align: center;
    }

    .dbutton {
        font-size: 40px;
        margin: 20px 20px;
        background-color: yellow;
        border-radius: 15px;
        font-weight: bolder;
        padding: 10px;
        /* text-decoration: none; */
    }
.dbutton:hover{
    color: grey ;
}

</style>

<body>
    <header>
        <div class="left">
            <img src="img/logo.jpg" alt="">
            <div style="background-color: black;">Hemsingh GYM</div>
        </div>
        <div class="mid">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="fitnesscalc.html">Fitness Calculator</a></li>

            </ul>
        </div>
        <div class="right">
            <ul>
                <li><button class="btn">Call us Now</button>8602628999</li>
                <li><button class="btn">Email Us</button>hemu25@gmail.com</li>
            </ul>
        </div>
    </header>
   

    <div class="container">
        <h1>WHY JOIN US?</h1>
        <div class="l">
            <p class="pa">OPEN 24/7</p>
            <p class="detail"> Hemsingh GYM is always open 24/7, close to work and home and provides an exceptional
                workout at an exceptional price!</p>
        </div>
        <div class="l">
            <p class="pa">PERSONAL TRAINERS</p>
            <p class="detail">Our Personal Trainers ensure you perform exercises safely while giving you the best
                results. No matter what your fitness needs one of our friendly Personal Trainers will keep you
                challenged and motivated.</p>
        </div>
        <div class="l">
            <p class="pa">PRIVATE RESTROOMS</p>
            <p class="detail">Hemsingh GYM is here with a solution, we make sure that all our members get the best
                restrooms and shower facilities! ​
            </p>
        </div>
    </div>

    <footer>
        <button class="dbutton"><a href="registration.php"> JOIN NOW</a></button>
        <button class="dbutton"><a href="member.php">ALREADY A MEMBER</a></button>
    </footer>

</body>

</html>