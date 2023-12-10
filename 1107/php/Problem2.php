<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function facIter($num) {
            $res = 1;
            while ($num > 1) {
                $res *= $num--;
            }
            return $res;
        }
        echo facIter(10);
    ?>
</body>
</html>