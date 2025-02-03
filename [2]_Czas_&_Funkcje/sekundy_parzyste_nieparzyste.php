<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekunda</title>
    <style>
        p {
            text-align: center;
            border: 20px solid;
            font-weight: bold;
            font-size: 220px;
            color: <?= $kolor ?>
        }
    </style>
</head>
<body>
<?php
    $czas = date('G:i:s');
    $sekunda = date('s');
    $kolor = ($sekunda % 2 == 0) ? 'red' : 'blue';
    echo "<p style='color: ;'>$czas</p>";
?>
</body>
</html>