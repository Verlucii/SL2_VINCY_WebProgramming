<?php
    include("config.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            $TempatLahir = $data['TempatLahir'];
            $TglLahir = $data['TglLahir'];
            $NIK = $data['NIK'];
            $WargaNegara = $data['WargaNegara'];
            $Email = $data['Email'];
            $NoHp = $data['NoHp'];
            $Alamat = $data['Alamat'];
            $KodePos = $data['KodePos'];
            $FileName = $data['FotoProfil'];
            $src = "FotoProfil/".$FileName;
            $Password1 = $data['Password1'];
            $Password2 = $data['Password2'];
            $Username = $data['Username'];
            $idNew = base64_encode($data['Username']);
    ?>
    <div class="HomeHeader">
        <div class="TitleHeader">
            Aplikasi Pengelolaan Keuangan
        </div>
        <div class="ButtonHeader1">
                <a href="home.php">Home</a>
            <div class="ButtonHeaderHome">  
                <a href="profile.php">Profile</a>
            </div>
                <a href="EditProfile.php?id=<?php echo $idNew;?>">Edit Profile</a>
        </div>
        <div class="ButtonHeader2">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="HomeBody">
        <br>
        <br>
        <div class="HomeBodyTitle">
            <h4>Profil Pribadi</h4>
        </div>
        <div class="Form2">
            <div class="boxForm">
                <div class="card">
                    <div class="tag">Nama Depan</div>
                        <?php 
                            echo $NamaDepan;
                        ?>
                    </div>
                <div class="card">
                    <div class="tag">Tempat Lahir</div>
                        <?php 
                            echo $TempatLahir;
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Warga Negara</div>
                        <?php 
                            echo $WargaNegara;
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Alamat</div>
                        <?php 
                            echo $Alamat;
                        ?>
                </div>
            </div>


            <div class="boxForm">
                <div class="card">
                    <div class="tag">Nama Tengah</div>
                        <?php 
                            echo $NamaTengah;
                        ?>
                    </div>
                <div class="card">
                    <div class="tag">Tanggal Lahir</div>
                        <?php 
                            echo $TglLahir;
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Email</div>
                        <?php 
                            echo $Email;
                        ?>
                </div>
                <div class="card">
                    <div class="tag">Kode Pos</div>
                        <?php 
                            echo $KodePos;
                        ?>
                </div>
            </div>


            <div class="boxForm">
                <div class="card">
                    <div class="tag">Nama Belakang</div>
                        <?php 
                            echo $NamaBelakang;
                        ?>
                    </div>
                <div class="card">
                    <div class="tag">NIK</div>
                        <?php 
                            echo $NIK;
                        ?>
                </div>
                <div class="card">
                    <div class="tag">No HP</div>
                        <?php 
                            echo $NoHp;
                        ?>
                </div>
                <div class="card">
                <div class="tag">Foto Profil</div>
                    <div class="image">
                        <img src="
                        <?php 
                            echo "$src";
                        ?>" 
                        alt="" srcset="">
                    </div>
                </div>
        </div>  
    </div>
</body>
</html>