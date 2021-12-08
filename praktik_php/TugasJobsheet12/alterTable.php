<?php
    include "koneksi.php";

    $query = "ALTER TABLE product
            ADD COLUMN IF NOT EXISTS
            url_foto varchar(255)";

    $result = mysqli_query($connect, $query);
    
    if($result){
        echo "Column url_foto berhasil dibuat";
    }else{
        echo "Column url_foto gagal dibuat <br>".mysqli_error($connect);
    }
    mysqli_close($connect);
?>
