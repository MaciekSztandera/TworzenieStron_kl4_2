<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="border: 2px solid blue">
        <legend>Alfabet</legend>
        <?php $_SERVER['PHP_SELF']?>
        <form method="post">
            <?php 
            foreach (range('a','z') as $letter) { 
                if (!empty($_POST['letters']) && in_array($letter, $_POST['letters'])) {
                    $checked = 'checked';
                }
                else {
                    $checked = '';
                }
                ?>
                <input <?php $checked ?> type="checkbox" id="letter_<?php $checked ?>" name="letters[]">
                <label for="letter_<?php $checked ?>" style="margin-right: 15px;"><?php echo $letter ?></label>
                <?php
            }
            ?>
            <br><br>
            <input type="submit" value="Wybierz">
        </form>
        <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') { 
            print_r($_POST);
            echo "<p>";
            if (!empty($_POST["letters"])) 
            {
                if (count($_POST["letters"]) === 1) 
                {
                    echo "Ta litera została wybrana";
                }
                else 
                {
                    echo "Te litery zostały wybrane: ";
                }
                echo implode(", ", $_POST["letters"]) . '.';
            }
            else 
            {
                echo "Żadna litera nie została wybrana.";
            }
            echo "</p>";
        }
        ?>
    </fieldset>
</body>
</html>