<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = array(1, 4, 5, 2, 7, 9 ,0);
        function revSort($arr) {
            sort($arr);
            return array_reverse($arr);
        }
        $array = revSort($array);
        for ($i = 0; $i < 7; $i++) {
            echo $array[$i]." ";
        }
    ?>
</body>
</html>