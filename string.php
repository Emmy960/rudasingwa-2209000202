<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best form</title>
</head>
<body>
    <?php
    function gd() {
        $name = "Rudasingwa emmy";
        $nameArray = str_split($name);
        $nameArray[0] = "2209000202";
        return implode("", $nameArray);
    }

    echo gd();
    ?>

    
</body>
</html>