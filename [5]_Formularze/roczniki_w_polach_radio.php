<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <style>
        fieldset {
            border-color: black;
            border-width: 2px;
        }
    </style>
</head>
<body>
<h2>FOREACH:</h2>
    <fieldset>
        <legend>Roczniki</legend>
        <form>
            <?php
            $liczby = range(2010, 2025);
            foreach ($liczby as $liczba) {
            ?> 
                <input id="<?php echo $liczba ?>" type="radio" name="foreach">
                <label for="<?php echo $liczba ?>"><?php echo $liczba ?></label><br>
            <?php
            } 
            ?>
        </form>
    </fieldset>
<br><hr>
<h2>FOR:</h2>
    <fieldset>
        <legend>Roczniki</legend>
        <form>
            <?php
            $rocznik = 2010;
            for ($i = 1; $i <= 16; $i++) {
            ?> 
                <input id="<?php echo $i ?>" type="radio" name="for">
                <label for="<?php echo $i ?>"><?php echo $rocznik ?></label><br>
            <?php
            $rocznik=$rocznik+1;
            } 
            ?>
        </form>
    </fieldset>
</body>
</html>