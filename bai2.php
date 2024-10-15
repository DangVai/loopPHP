<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .squire {
        height: 20px;
        width: 20px;
        background-color: red;
        margin: 10px;
        display: inline-block;
    };
</style>

<body>
    <?php
    $sum = 0;
    $sumc=0;
    $suml= 0;
    for ($i = 0; $i <= 5; $i++) {
        $sum += $i;

        if ($i % 2 == 0) {
            $sumc += $i;
        } else {
            $suml += $i;
        }
    };

    echo $sum;
    echo "<br>";
    echo $sumc;
    echo "<br>";
    echo $suml;
    ?>
</body>

</html>