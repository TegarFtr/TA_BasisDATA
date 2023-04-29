<?php
    session_start();
    include 'src/koneksi.php';

    //jika tombol daftar diklik
    if(isset($_POST['rdaftar'])){
        $level_id = 3;
        $simpan = mysqli_query($koneksi, 
        "INSERT INTO user (nik, nama, username, userpass, level_id)
        VALUES ('$_POST[rnik]', '$_POST[rnama]', '$_POST[rusername]', '$_POST[rpassword]', '$level_id')");
        if($simpan){
            echo '<script> alert("Pendaftaran Berhasil");
            document.location="login.php";</script>';
        }
        else{
            echo '<script> alert("Pendaftaran Gagal");
            document.location="register.php";</script>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Poliklinik | Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body{
            font-family: 'Poppins', sans-serif;
            background: #ececec;
            background: linear-gradient(250deg, #4d9559 0%, #38703d 28.53%, #133917 75.52%);
        }

        .box-area{
            width: 450px;
        }


        .box{
            padding: 40px 30px 40px 40px;
        }
        .row a {
            color: #07b610;
        }

        .login-form label {
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #000000;
        }

        .login-form input {
            background: #FFFFFF;
            border: 1px solid #BCBCBC;
            border-radius: 8px;
            box-sizing: border-box;
        }

        ::placeholder{
            font-size: 16px;
        }

        .rounded-4{
            border-radius: 20px;
        }
        .rounded-5{
            border-radius: 30px;
        }

        @media only screen and (max-width: 768px){

            .box-area{
                margin: 0 10px;

            }
            .box{
                padding: 20px;
            }

        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100 ">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-12 box justify-content-center d-flex">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Welcome</h2>
                        <p>Silahkan isi form berikut.</p>
                    </div>

                    <form method="post" action="">
                        <div class="login-form mb-3">
                            <label for="rnama" class="form-label">Nama</label>
                            <input type="text" name="rnama" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="login-form mb-3">
                        <label for="rnik" class="form-label">No. Identitas</label>
                            <input type="text" name="rnik" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Nomor Identitas Anda" required>
                        </div>
                        <div class="login-form mb-3">
                        <label for="rusername" class="form-label">Username</label>
                            <input type="text" name="rusername" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Username Anda" required>
                        </div>
                        <div class="login-form mb-3">
                        <label for="rpassword" class="form-label">Password</label>
                            <input type="text" name="rpassword" class="form-control form-control-lg bg-light fs-6" placeholder="Masukkan Password Anda" required>
                        </div>
                        <div class="login-form mb-3" style="margin-top: 40px">
                            <button class="btn btn-lg btn-success w-100 fs-6" name="rdaftar">Daftar</button>
                        </div>
                        <div class="row text-center ">
                            <small>Sudah punya akun? <a href="login.php" class="text-decoration-none">Masuk</a></small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>