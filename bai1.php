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
    }
</style>
<body>
    <?php
    for ($i = 0; $i <= 5; $i++) {
        echo "<br>";
        for ($j = 0; $j <= 5; $j++) {
            echo "<div class='squire'></div>";
        }
    };
    ?>
</body>

</html>