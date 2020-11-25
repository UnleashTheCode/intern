<?php
require 'auth_control.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

<style>
    body {
        text-align: center;
        background-image: url("./upload/santa.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    form {
        display: inline-block;
    }
    h1 {
        color: white;
    }
    
    div {
        margin: 0;
        position: absolute;
        width: 300px;
        height: 100px;
        background-color: rgba(255, 255, 255, 0.5);
        text-align: center;
        padding: 10px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-style: solid;
        border-width: 2px;
        border-radius: 1em;
        border-image-slice: 1;
        border-image-source: linear-gradient(to right, #373b44, #4286f4);
    }

    img {
        height: 20px;
        vertical-align: middle;
    }

    input {
        height: 20px;
    }

</style>


	</head>
	<body>
		<div>
        <h3> Login</h3>
			<form action="login.php" method="post">
            <img src="./upload/lacat.png" alt="DCS"><input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" name="log-btn" value="Login">
			</form>
		</div>
	</body>
</html>
