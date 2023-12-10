<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arr = array("A", "B", "C", "D", "E");
        for ($i = 0; $i <= 4; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo $arr[$j]." ";
            }
            echo "<br>";
        }
        for ($i = 3; $i >= 0; $i--) {
            for ($j = 0; $j <= $i; $j++) {
                echo $arr[$j]." ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>