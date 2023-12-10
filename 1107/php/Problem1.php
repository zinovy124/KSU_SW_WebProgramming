<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function judgingOdd($num) {
            if ($num % 2) {
                return $num + 1;
            } else if (!($num % 2)) {
                return $num;
            }
        }
        echo judgingOdd(7);
    ?>
</body>
</html>