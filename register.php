<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <form action="registerProses.php" method="post" enctype="multipart/form-data">
        <div class="boxRegister">
        <h1>Register</h1>
            <br>
            <div class="Form">
                <div class="boxForm">
                    <div class="card">
                        <div class="tag">Nama Depan</div>
                        <input type="text" name="NamaDepan">
                    </div>
                    <div class="card">
                        <div class="tag">Tempat Lahir</div>
                            <input type="text" name="TempatLahir">
                    </div>
                    <div class="card">
                        <div class="tag">Warga Negara</div>
                            <input type="text" name="WargaNegara">
                    </div>
                    <div class="card">
                        <div class="tag">Alamat</div>
                            <textarea  name="Alamat" cols="20" rows="4"></textarea>
                    </div>
                    <div class="card">
                        <div class="tag">Username</div>
                            <input type="text" name="Username">
                    </div>
                </div>


                <div class="boxForm">
                    <div class="card">
                        <div class="tag">Nama Tengah</div>
                        <input type="text" name="NamaTengah">
                    </div>
                    <div class="card">
                        <div class="tag">Tgl Lahir</div>
                            <input type="date" name="TglLahir">
                    </div>
                    <div class="card">
                        <div class="tag">Email</div>
                            <input type="email" name="Email">
                    </div>
                    <div class="card">
                        <div class="tag">Kode Pos</div>
                            <input type="number" name="KodePos">
                    </div>
                    <div class="card">
                        <div class="tag">Password1</div>
                            <input type="password" name="Password1">
                    </div>
                </div>


                <div class="boxForm">
                    <div class="card">
                        <div class="tag">Nama Belakang</div>
                        <input type="text" name="NamaBelakang">
                    </div>
                    <div class="card">
                        <div class="tag">NIK</div>
                            <input type="number" name="NIK">
                    </div>
                    <div class="card">
                        <div class="tag">No HP</div>
                            <input type="phone" name="NoHp">
                    </div>
                    <div class="card">
                        <div class="tag">Foto Profil</div>
                            <input type="file" name="FotoProfil">
                    </div>
                    <div class="card">
                        <div class="tag">Password2</div>
                            <input type="password" name="Password2">
                    </div>
                </div>
            </div>
            <div class="BtnForm">
                <a href="welcome.php"><input class="BtnBack" type="button" value="Kembali"></a>
                <input class="BtnSubmit" type="submit" value="Register">
            </div>
        </div>
    </form>
</body>
</html>