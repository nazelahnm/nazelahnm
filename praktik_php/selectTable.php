<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Harga</th>
        </tr>
        <?php
            include "koneksi.php";

            $query = "SELECT * FROM product";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["product_name"] ?></td>
                        <td><?= $row["harga"] ?></td>
                    </tr>
                    <?php
                }
            }else{
                echo "0 result";
            }
        ?>
    </table>
</body>
</html>
