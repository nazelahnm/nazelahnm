<html>
    <head>
        <title>Data Product</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <a href="insertForm.html">Tambah Data</a>
        <table>
            <tr>
                <th>Id</th>
                <th>Foto Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php 
                include "koneksi.php";

                $query = "SELECT * FROM product";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><img width="150px" src="upload_image/<?= $row["url_foto"] ?>"></td>
                        <td><?= $row["product_name"] ?></td>
                        <td><?= $row["harga"] ?></td>
                        <td>
                            <!-- edit data form -->
                            <a href="editForm.php?id=<?php echo $row['id']; ?>">Edit &nbsp;</a>
                            
                            <!-- hapus data form -->
                            <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                } else {
                    echo "0 result";
                }
            ?>
        </table>
    </body>
</html>