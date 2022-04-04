<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditProfile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        if(isset($_GET['id'])){
            $id = base64_decode($_GET['id']);
            $str_query = "select * from customer1 where Username = '".$id."'";
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
          
        }
    ?>
    <form action="prosesEditProfile.php" method="post" enctype="multipart/form-data">
        <div class="boxRegister">
        <h1>Edit Profile</h1>
            <br>
            <div class="Form">
                <div class="boxForm">
                    <div class="card">
                        <div class="tag">Nama Depan</div>
                        <input type="text" name="NamaDepan" value="<?php echo $NamaDepan?>">
                    </div>
                    <div class="card">
                        <div class="tag">Tempat Lahir</div>
                            <input type="text" name="TempatLahir" value="<?php echo $TempatLahir?>">
                    </div>
                    <div class="card">
                        <div class="tag">Warga Negara</div>
                            <input type="text" name="WargaNegara" value="<?php echo $WargaNegara?>">
                    </div>
                    <div class="card">
                        <div class="tag">Alamat</div>
                            <textarea  name="Alamat" cols="20" rows="4"><?php echo $Alamat?></textarea>
                    </div>
                    <div class="card">
                        <div class="tag">Username</div>
                            <input type="text" name="Username" value="<?php echo $Username ?>" readonly>
                    </div>
                </div>


                <div class="boxForm">
                    <div class="card">
                        <div class="tag">Nama Tengah</div>
                        <input type="text" name="NamaTengah" value="<?php echo $NamaTengah?>">
                    </div>
                    <div class="card">
                        <div class="tag">Tgl Lahir</div>
                            <input type="date" name="TglLahir" value="<?php echo $TglLahir?>">
                    </div>
                    <div class="card">
                        <div class="tag">Email</div>
                            <input type="email" name="Email" value="<?php echo $Email?>">
                    </div>
                    <div class="card">
                        <div class="tag">Kode Pos</div>
                            <input type="number" name="KodePos" value="<?php echo $KodePos?>">
                    </div>
                    <div class="card">
                        <div class="tag">Password1</div>
                            <input type="password" name="Password1" value="<?php echo $Password1?>">
                    </div>
                </div>


                <div class="boxForm">
                    <div class="card">
                        <div class="tag">Nama Belakang</div>
                        <input type="text" name="NamaBelakang" value="<?php echo $NamaBelakang?>">
                    </div>
                    <div class="card">
                        <div class="tag">NIK</div>
                            <input type="number" name="NIK" value="<?php echo $NIK?>">
                    </div>
                    <div class="card">
                        <div class="tag">No HP</div>
                            <input type="phone" name="NoHp" value="<?php echo $NoHp?>">
                    </div>
                    <div class="card">
                        <div class="tag">Foto Profil</div>                
                        <input type="file" name="FotoProfil">
                    </div>
                    <div class="card">
                        <div class="tag">Password2</div>
                            <input type="password" name="Password2" value="<?php echo $Password2?>">
                    </div>
                </div>
            </div>
            <div class="BtnForm">
                <input class="BtnSubmit" type="submit" value="Submit">
            </div>
        </div>
    </form>
</body>
</html>