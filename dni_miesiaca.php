<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td {
            border-collapse: collapse;
            border: 2px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
<table>
<caption>
<?php echo date('t')?>
</caption>  
    <tr>
    <?php 
        for ($i = 1; $i <= date('t'); $i++) {
            if($i%7==0) { 
            ?>
            <td><?php echo $i?></td></tr><tr>
            <?php
            }
            else {
            ?>
            <td><?php echo $i?></td>
            <?php
            }
        }
    ?>
</tr>
</table>
</body>
</html>