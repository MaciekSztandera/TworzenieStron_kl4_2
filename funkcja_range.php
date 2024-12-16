<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $parzyste = range(0, 12, 2);
    $dziesiatki = range(-10, 100, 10);
    $polowki = range(-5.5, 5.5, 0.5);
    $litery_od_em = range('m', 'u');
    $litery_wstecz = range('X', 'E');?>

<pre><?php print_r($parzyste);?></pre>

<?php
foreach ($parzyste as $value) 
echo $value . " " ?>
<br>
<?php
foreach ($dziesiatki as $value) 
echo $value . " " ?>
<br>
<?php
foreach ($polowki as $value) 
echo $value . " " ?>
<br>
<?php
foreach ($litery_od_em as $value) 
echo $value . " " ?>
<br>
<?php
foreach ($litery_wstecz as $value) 
echo $value . " " ?>

</body>
</html>