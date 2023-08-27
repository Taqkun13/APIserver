<?php
    include "koneksi.php";

    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $query = mysqli_query($conn, "INSERT INTO user VALUES('null', '$nama', '$kelas')");
        $request = mysqli_num_rows($query);
        if($request > 0){
            header("location:https://dontgetserious.com/wp-content/uploads/2022/01/Wait-A-Minute-Memes-768x577.jpeg");
        }
    }else{
        header("location:https://cdn1-production-images-kly.akamaized.net/Vd6XkL5jWqeqnSDe_qTY2VqZkwI=/1280x1280/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4473096/original/079167400_1687227614-6682d4172ec12c5a0e8ad5271c3495ee.jpg");
    }
?>