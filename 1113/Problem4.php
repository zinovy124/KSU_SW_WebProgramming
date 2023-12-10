<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $data = array(
            "Kim" => "Seoul",
            "Lee" => array("Pusan", "Daegu"),
            "Choi" => "Incheon",
            "Park" => array("Suwon", "Daejeon"),
            "Jung" => array("Kwangju", "Chuncheon", "Wonju")
        );
        unset($data["Choi"]);
        $keys = array_keys($data);
        $values = array_values($data);
        for ($i = 0; $i < count($keys); $i++) {
            echo $keys[$i].' ';
            if (gettype($data[$keys[$i]]) == "array") {
                foreach ($data[$keys[$i]] as $e) {
                    echo $e.' ';
                }
            } else {
                echo $values[$i];
            }
            echo '<br>';
        }
    ?>
</body>
</html>