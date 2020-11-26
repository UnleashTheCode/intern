<?php
require_once 'auth_control.php';

function make_seed(){
  list($usec, $sec) = explode(' ', microtime());
  return $sec + $usec * 1000000;
}

if(isset($_SESSION['logged'])){
    
if(isset($_POST['logat'])){
    srand(make_seed());
    $posibil = file('array.txt', FILE_IGNORE_NEW_LINES);
    $max_r = count($posibil);
    if($max_r >0){
        $castigator = $_POST['logat'];
            if($max_r > 1){
                while($castigator === $_POST['logat']){
                    $random = rand(0,$max_r-1);
                    $castigator = $posibil[$random];
                }
                fclose($file);
                $myfile = fopen("array.txt", "w");
                unset($posibil[$random]);
                $posibil = array_values($posibil);
                foreach ($posibil as &$value) {
                    fwrite($myfile, $value."\n"); 
                }
            }
    }
    else{
        echo "<script>alert('S-au extras toate persoanele!')</script>";
    }
}
?>
<html>
    <!-- <head>
        <link rel="stylesheet" href="secret_santa_css.css">
    </head> -->
    <style>
        html, body {
    text-align: center;
    background: linear-gradient(to right, #373b44, #4286f4);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    max-width: 100%;
    height: 100%;
}

form, div {
    margin: 0;
    position: absolute;
    width: 300px;
    height: 100px;
    text-align: center;
    padding: 10px;
    text-align: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

}

button {
    height: 25px;
    border-radius: 1rem;
    border-width: 1px;
}

label, p, h3 {
    color: rgb(240, 240, 240);
    font-size: 15px;
}

select {
    font-size: 14px;
}
    </style>
    <body>
    <div>
    <form action="https://teodordan.dev/intern/secret_santa.php" method="post">
        <label for="logat"> Cine esti?</label><br>
        <select name="logat">
            <option value ="Cristi M">Cristi M</option>
            <option value ="Roxana">Roxana</option>
            <option value ="Cristi C">Cristi C</option>
            <option value ="Andrei S">Andrei S</option>
            <option value ="Daniel">Daniel</option>
            <option value ="Dorian">Dorian</option>
            <option value ="Andrei G">Andrei G</option>
            <option value ="Andreea">Andreea</option>
            <option value ="Corina">Corina</option>
            <option value ="Mihai">Mihai</option>
            <option value ="Gabi">Gabi</option>
            <option value ="Teo">Teo</option>
            <option value ="Vlad">Vlad</option>
            <option value ="Alex">Alex</option>
            <option value ="Florin">Florin</option>
            <option value ="Marius">Marius</option>
        </select>
    <button type="submit" name="submit" value="submit">Do It </button>
    </form>
    </div>
    </body>
</html>

<?php

}else {
    header('location: login.php');
}

if(isset($_POST['logat'])){
    echo '<html>
    <h3> Ii iei cadou<h3> <h2>'.$castigator.'</h2>
    <p>Retine, poti sa faci un screenshot pe care sa-l tii bine, si te rog apasa pe butonul de mai jos cand esti pregatit.</p>
    <form action="login.php" method="get">
    <button type="submit" name="logout" value="submit">Log out</button>
    </form>
    </html>';
}

?>