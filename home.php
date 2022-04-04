<?php
    session_start();
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
            $username = $_SESSION['usernameSession'];
            $str_query = "select * from customer1 where Username = '".$username."'";
            $query = mysqli_query($connection, $str_query);
            $data = mysqli_fetch_array($query);
            $NamaDepan = $data['NamaDepan'];
            $NamaTengah = $data['NamaTengah'];
            $NamaBelakang = $data['NamaBelakang'];
            $Username = $data['Username'];
            
    
    ?>
    <div class="HomeHeader">
        <div class="TitleHeader">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="ButtonHeader1">
            <div class="ButtonHeaderHome">
                
                <a href="home.php">Home</a>
            </div>
                <a href="profile.php">Profile</a>
                
            </div>
            <div class="ButtonHeader2">
                <a href="logout.php">Logout</a>
            </div>
        </div>
    </div>
    <div class="HomeBody">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
            <?php
                echo "<p>Halo ";
                echo "<b>";
                echo $NamaDepan;
                echo " ";
                echo  $NamaTengah;
                echo " ";
                echo $NamaBelakang; 
                echo "</b>";
                echo " , Selamat datang di Aplikasi Pengelolaan Keuangan</p>";
            ?>
    </div>
</body>
</html>