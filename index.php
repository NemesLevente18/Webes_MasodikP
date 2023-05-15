<?php
if(isset($_GET["redirect"]) && isset($_GET["delay"]))
{
    header("Refresh: ".$_GET["delay"]."; url=https://".$_GET["redirect"]);
}
?>

<!DOCTYPE html>
<html>
    <style>

        body{
            background-color: white;
            font-family: Arial;
            font-size: 20px;
            margin: 0;
        }

        #everyting{
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        #info-container{
            display: flex;
            flex-direction: column;
            height: 20%;
            width: 100%;
            color: purple;
            font-family: Arial;
            justify-content: center;
            font-size: 20px;
        }


        #response-contaienr{
            display: flex;
            flex-direction: column;
            height: 20%;
            width: 100%;
            background-color: <?php if(isset($_GET["color"])){echo $_GET["color"];} else {echo "white";}  ?>;
            font-family: Arial;
            justify-content: center;
            font-size: 20px;
        }

        #login-container{
            display: flex;
            flex-direction: column;
            height: 100%;
            width: 70%;
            background-image: url('/Masodik_Projekt/bground.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            justify-content: center;
            align-items: center;
            font-family: Arial;
            font-size: 20px;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 5px solid blue;
            border-radius: 4px;
        }

        input[type=submit] {
            width: 100%;
            background-color: yellow;
            color: black;
            padding: 14px 20px;
            margin: 32px 0;
            border: 5px solid black;
            border-radius: 16px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: black;
            color: #000000;
        }

        form{
            width: 50%;
            display: flex;
            flex-direction: column;
        }

    </style>
<head>
<title>Login</title>
</head>
<body >
    <div id= "everyting">
        <div id="info-container" >
                <p>Nemes Levente<br>S3FD46</p>
        </div>
        <div id= "response-contaienr">
            <?php
                if(isset($_GET["response"]))
                {
                    echo $_GET["response"];
                }
            ?>
        </div>
        <div id="login-container" >
            <form action="login.php" method="post">
                <input type="text" name="user" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>