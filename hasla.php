<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table, td, th {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
<?php 
    $haslo1 = "mbank.pl";
    $haslo2 = "rnbank.pl";
?>
<table>
    <tr>
        <th><?php echo $haslo1 ?></th>
        <th><?php echo $haslo2 ?></th>
    </tr>
    <tr>
        <td colspan="2">
            <?php 
                if ($haslo1 == $haslo2) echo "Hasła są takie same";
                else echo "Hasła są różne";
            ?>
        </td>
    </tr>
</table>
</body>
</html>