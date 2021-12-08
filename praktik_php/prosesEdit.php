<?php 
    include "koneksi.php";

    $id = $_POST['id'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_foto,'upload_image/' . $foto);
    $nama = $_POST['name'];
    $harga = $_POST['price'];

    $query = "UPDATE product SET url_foto='$foto', product_name='$nama', harga='$harga'
    WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
?>
    <form action="prosesEdit2.php" method="POST"></form>
    <a href="homeCRUD.php"> Lihat Data </a>
<?php
    } else {
        echo "Gagal update data".mysqli_error($connect);
    }
?>
