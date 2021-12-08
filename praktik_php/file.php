<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>
    <?php
        $myFile = "testFile.txt";
        $fh = fopen($myFile, 'r');
        $theData = fread($fh, filesize($myFile));
        fclose($fh);
        echo $theData;
    ?>
</body>
</html>
