<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="loginProses.php" method="post">
        <div class="LoginForm">
            <div class="Title">
                <h1>Login</h1>
            </div>
            <br>
            <div class="Box"> 
        
                    <div class="cardLogin">
                        <div class="tagLogin">Username</div>
                        <input type="text" name="Username">
                    </div>
                    <div class="cardLogin">
                        <div class="tagLogin">Password</div>
                        <input type="password" name="Password">
                    </div>
                
                <div class="BoxBtn">
                    <a href="login.php"><input class="BtnLogin" type="submit" value="Login"></a>
                    <a href="welcome.php"><input class="BtnBack2" type="button" value="Kembali"></a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>