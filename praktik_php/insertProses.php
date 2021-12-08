<?php 
    require_once "koneksi.php";
    $id = $_POST['id'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_foto,'upload_image/' . $foto);
    $nama = $_POST['name'];
    $harga = $_POST['price'];

    $sql = "INSERT INTO product(id, url_foto, product_name, harga)
            VALUES 
            ($id, '$foto', '$nama', $harga)";

    if (mysqli_query($connect, $sql)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>
