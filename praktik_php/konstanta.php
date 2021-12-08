<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
        $var = "Ini adalah contoh variabel";
        echo $var;
        echo "<br/><br/>";
        define("konstanta", "ini adalah contoh konstanta", true);
        echo constant("konstanta");
        echo "<br>";
        echo constant("KONSTANTA");
    ?>
</body>
</html>