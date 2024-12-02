<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-family: Arial;
            color: cornflowerblue;
            font-size: large;
            text-shadow: 1px 1px blue;
        }
    </style>
</head>
<body>
<p>
    <?php 
        $suma = 0;
        for ($i = 1; $i <= 97; $i++) {
            if ($i %2== 0) {
                if ($i >= 10) { 
                    echo " $i |";
                    $suma = $suma + $i;
                }
            }
        }
        echo " $i";
        $suma = $suma + $i;
    ?>
</p>
<p>Suma powyższych liczb jest równa <?php echo $suma ?></p>
</body>
</html>