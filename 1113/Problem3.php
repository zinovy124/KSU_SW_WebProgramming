<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $fp = fopen("exam.txt", "r");
        $line = 0;
        $word = 0;
        $char = 0;

        while (!feof($fp)) {
            $line++;
            $text = fgets($fp);
            $char += strlen($text);
            $arr = explode(" ", $text);
            $word += count($arr);
        }
        echo $line."개의 라인<br>";
        echo $word."개의 단어<br>";
        echo $char."개의 글자 수<br>";
        fclose($fp);
    ?>
</body>
</html>