<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border-collapse: collapse;
            background-color: lightgray;
            border: 1px solid gray;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
        <?php
            $n = 1;
            while ($n<=5)
            {
                ?><tr><td>To jest wiersz numer <?php echo $n ?></td></tr><?php
                $n++;
            }
        ?>
</table>
</body>
</html>