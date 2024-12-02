<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td {
            border-collapse: collapse;
            background-color: greenyellow;
            border: 1px solid green;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <?php
            $n = 1;
            do 
            {
                ?><td>To jest kolumna numer <?php echo $n ?></td><?php
                $n++;
            }
            while ($n<=5);
        ?>
    </tr>
</table>
</body>
</html>