<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
    <style>
        p {
            color: yellowgreen;
            border-top: 10px double greenyellow;
            border-bottom: 10px double greenyellow;
            font-size: 24px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-shadow: 1px 1px 5px forestgreen;
        }
    </style>
</head>
<body>
<p>
    <?php
    for ($x = -10; $x <= 9; $x++) {
        echo "$x, ";
    }
    echo " $x."
    ?>
</p>
</body>
</html>