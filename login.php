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
        width: 350px;
        height: 300px;
        background-color: white;
        text-align: center;
        padding: 10px;
        opacity: 0.5;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 1em;
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
			<h1>Login</h1>
			<form action="login.php" method="post">
            <img src="./upload/lacat.png" alt="DCS"><input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" name="log-btn" value="Login">
			</form>
		</div>
	</body>
</html>
