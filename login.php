<?php
    session_start();
    include 'src/koneksi.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['lusername'];
        $password = $_POST['lpassword'];
    
        $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND userpass='$password'") or die (mysqli_error($koneksi));
    
        $cek = mysqli_num_rows($login);
    
        if($cek > 0){
            $data = mysqli_fetch_assoc($login);
            if($data['level_id'] == 1){
                $_SESSION['username'] = $username;
                $_SESSION['level_id'] = 1;
                echo '<script> alert("Anda Berhasil Login Admin");
                document.location="admin/dasboard.php";</script>';
            }
            elseif($data['level_id'] == 2){
                $_SESSION['username'] = $username;
                $_SESSION['level_id'] = 2;
                echo '<script> alert("Anda Berhasil Login Kasir");
                document.location="dasboard.php";</script>';
            }
            elseif($data['level_id'] == 3){
                $_SESSION['username'] = $username;
                $_SESSION['level_id'] = 3;
                echo '<script> alert("Anda Berhasil Login Pasien");
                document.location="dasboard.php";</script>';
            }
            else {
                echo '<script> alert("Username atau Password anda salah!!!");
                document.location="index.php";</script>'; 
            }
        }else {
            echo '<script> alert("Username atau Password anda salah!!!");
            document.location="index.php";</script>'; 
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
    <title>Poliklinik | Login</title>
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
                        <h2>Welcome back</h2>
                        <p>Senang melihat anda kembali.</p>
                    </div>
                    <form method="post" action="">
                        <div class="login-form mb-3">
                            <label for="lusername" class="form-label">Password</label>
                            <input type="text" name="lusername" class="form-control form-control-lg bg-light fs-6" placeholder="Username" required>
                        </div>
                        <div class="login-form mb-1">
                            <label for="lpassword" class="form-label">Password</label>
                            <input type="password" name="lpassword" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-success w-100 fs-6" style="margin-top: 40px">Masuk</button>
                        </div>
                        
                        <div class="row text-center ">
                            <small>Tidak punya akun? <a href="register.php" class="text-decoration-none">Daftar</a></small>
                        </div>
                    </form>
                </div>
            </div> 
        </div>
    </div>

</body>
</html>