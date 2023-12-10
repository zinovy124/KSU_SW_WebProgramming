<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fp = fopen("client.txt", "r");
        while (!feof($fp)) {
            $line = fgets($fp);
            $arr = explode('  ', $line);
            if ( (int)$arr[1] >= 30 ) {
                foreach ($arr as $val) {
                    echo $val.' ';
                }
                echo '<br>';
            }
        }
        fclose($fp);
    ?>
</body>
</html>