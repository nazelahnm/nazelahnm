<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 7</title>
</head>
<body>
<h2>Sorting Array</h2>
    <?php
        $numbers = array(8, 4, 1, 9, 23, 54, 17, 30);
        rsort($numbers);

        $arrLength = count($numbers);
        for ($x=0; $x < $arrLength; $x++) { 
            echo $numbers[$x]."<br>";
        }
    ?>
</body>
</html>
