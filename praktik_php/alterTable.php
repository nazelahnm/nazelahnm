<?php
    include "koneksi.php";

    $query = "ALTER TABLE product
            ADD COLUMN IF NOT EXISTS
            file_image varchar(255)";

    $result = mysqli_query($connect, $query);
    
    if($result){
        echo "Column file_image berhasil dibuat";
    }else{
        echo "Column file_image gagal dibuat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>
