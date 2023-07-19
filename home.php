<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/home.css">
    <style>
       body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: rgb(179,215,237);
background: linear-gradient(142deg, rgba(179,215,237,1) 0%, rgba(208,242,252,1) 92%);
}

.container {
    width: 40vw;
    height: 50vh;
   background: #FFFFFF;
    border-radius: 10px;
    padding: 20px;
    text-align: center;
}

h1 {
    margin-top: 0;
    color: #FFFFFF;
}

p {
    margin: 10px 0;
    color: #FFFFFF;
}

button#loginButton {
    width: 40%;
    background-color: #4CAF50;
    color: #FFFFFF;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button#loginButton:hover {
    animation: pulse 1s infinite;
}

@keyframes pulse {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.8;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

h2{
    color: blue;
    position: absolute;
    top: 0%;
}

    </style>
</head>
<body>
<h2>Group 11</h2>
<div class="container">
<p style="color: black; font-weight: 600; margin-top: 30px; font-size: 20px;">Welcome to the Registration Portal</p>
        <h1><img src="./img/uenr_logo-removebg-preview.png" width="80px" height="100px" style="margin-top: 30px;" alt=""></h1>
       <br><br>
       
        <a href="login.php"><button id="loginButton" style="color: black;">Login</button></a>
    </div>
    <script src="script.js"></script>
</body></body>
</html>