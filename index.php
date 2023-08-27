<?php
    session_start();
    if(isset($_SESSION['auth'])){
        if($_SESSION['auth'] != "berhasil login"){
            $_SESSION['auth'] = "gagal login";
            header("location:login.php");
            exit;
        }
    }else{
        $_SESSION['auth'] = "gagal login";
        header("location:login.php");
        exit;
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

        <!-- Font -->
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
            .btn-danger{
                background-color: #F53838;
            }
        </style>
    </head>

    <body>
        <div class="conatiner d-flex justify-content-center mt-5">
            <div class="card" style="width: 28rem">
                <div class="card-body mt-2">
                    <h6 class="text-center fw-bolder mr-5"><img src="img/favicon.ico" alt="" style="width:8%;"> DASHBOARD SEDERHANA</h6>
                    <h4 class="mb-3 mt-0 text-center"><b>Selamat datang <?=$_SESSION['username']?> 👋</b></h4>
                    <p class="mb-2 text-center mt-2 ">Terimakasih telah mengunjungi website sederhana ini!</p>
            
                    <form id="formAuthentication" class="mb-3" action="logout.php" method="POST">
                        <div class="mb-2 mt-3">
                            <button class="btn btn-danger d-grid w-100" type="submit"><b>Logout</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.6.3.min.js"></script>
        <script>
            function sambutan(username){
                Swal.fire("Selamat Datang "+username, "", "success");
            }
        </script>

        <?php
            if(isset($_SESSION['sapaUser'])){
                $username = $_SESSION['sapaUser'];
                echo"<script>sambutan('$username')</script>";
                unset($_SESSION['sapaUser']);
            }
        ?>
    </body>
</html>
