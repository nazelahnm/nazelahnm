<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>
<body>
    <?php
        $nilai = 40;
        if($nilai >= 80){
            echo "nilai A";
        }else if($nilai >= 70){
            echo "nilai B";
        }else if($nilai >= 60){
            echo "nilai C";
        }else if($nilai >= 50){
            echo "nilai D";
        }else{
            echo "nilai E";
        }
    ?>
</body>
</html>
