<?php
    session_start();
    $conn = mysqli_connect("librarydatabase-libraryaplication-2023.aivencloud.com:18900", "avnadmin", "AVNS_nDBmHU2pnODq3ylam0C", "defaultdb");
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $dataFromDb = mysqli_query($conn, "INSERT INTO user VALUES(null, '$nama', '$kelas')");
    $data = mysqli_affected_rows($conn);


    if($data > 0){
        $_SESSION['auth'] = "berhasil login";
        $_SESSION['username'] = $username;
        $_SESSION['sapaUser'] = $username;
        header("location:index.php");
    }else{
        $_SESSION['auth'] = "username salah";
        header("location:login.php");
    }
?>