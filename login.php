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

    html, body {
        text-align: center;
        background: url("./upload/santa.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        max-width: 100%;
        height: 100%;
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
        background-color: rgba(0, 0, 0, 0.4);
        text-align: center;
        padding: 10px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-style: solid;
        border-width: 5px;
        /* border-radius: 15px;
        border-image-slice: 30%;
        border-image: linear-gradient(to right, #373b44, #4286f4); */
        border: solid 4px transparent;
        border-radius: 20px;
        background-image: radial-gradient(circle at top left, #f00,#3020ff);
        background-origin: border-box;
        background-clip: content-box, border-box;
    }

    img {
        height: 25px;
        vertical-align: middle;
    }

    input {
        height: 25px;
        border-radius: 1rem;
        border-width: 1px;
    }

    input:focus{
        outline: none;
    }

    h3 {
        color: rgb(240, 240, 240);
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
