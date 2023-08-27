<?php
    session_start();
    if(isset($_SESSION['auth'])){
        $auth = $_SESSION['auth'];
        if($auth == "berhasil login"){
            header("location:index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="requirement/assets/" data-template="vertical-menu-template-free">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
        <title>LOGIN SEDERHANA</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="img/favicon.ico" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.css"/>
        
        <!-- sweet alert -->
        <link href="css/sweetalert2.min.css" rel="stylesheet"></link>
        <script src="js/sweetalert2.all.min.js"></script>

        <style>
            body{
                background-color: #f5f5f9;
            }
            .card{
                box-shadow: 0px 8px 16px 2px rgba(0, 0, 0, 0.2);
            }
            .btn-primary{
                background-color: #696CFF;
            }
        </style>
    </head>

    <body>
        <div class="conatiner d-flex justify-content-center mt-5">
            <div class="card" style="width: 28rem">
                <div class="card-body mt-2">
                    <h6 class="text-center fw-bolder"><img src="img/favicon.ico" alt="" style="width:8%; padding-left:0; margin-right: 0;"> LOGIN SEDERHANA</h6>
                    <h4 class="mb-3 mt-0 text-center"><b>Selamat datang user! 👋</b></h4>
                    <p class="mb-2 text-center mt-2 ">Silahkan Login ke akun anda untuk masuk ke dalam website</p>
            
                    <form id="formAuthentication" class="mb-3" action="cekLogin.php" method="POST">
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="nama" placeholder="Masukkan nama anda..." autofocus/>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="kelas">Kelas</label>
                            </div>
                        <div class="input-group input-group-merge">
                            <input type="text" id="kelas" class="form-control" name="kelas" placeholder="Masukkan kelas anda..." aria-describedby="password"/>
                        </div>
                        <div class="mb-2 mt-3">
                            <button class="btn btn-primary d-grid w-100" type="submit"><b>Login</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.6.3.min.js"></script>

        <script>
            function peringatan(){
                Swal.fire("Anda harus login dulu!!", "", "warning");
            }

            function usernameSalah(){
                Swal.fire("Username atau Password salah!!", "", "warning");
            }

            function selamatTinggal(){
                Swal.fire("Selamat tinggal👋", "", "");
            }
        </script>

        <?php
            if(isset($_SESSION['auth'])){
                $auth = $_SESSION['auth'];
                if($auth == "gagal login"){
                    echo"<script>peringatan()</script>";
                    session_destroy();
                }else if($auth == "username salah"){
                    echo"<script>usernameSalah()</script>";
                    session_destroy();
                }else if($auth == "selamat tinggal"){
                    echo"<script>selamatTinggal()</script>";
                    session_destroy();
                }
            }
        ?>
    </body>
</html>
