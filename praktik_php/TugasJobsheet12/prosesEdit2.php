<?php 
    include "koneksi.php";
    $tmp_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_foto,'upload_image/' . $foto);
?>
