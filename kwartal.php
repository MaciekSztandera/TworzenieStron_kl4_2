<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        h1 {
            border-bottom: 4px dotted pink;
            border-top: 4px dotted pink;
            text-align: center;
        }
        h3 {
            border-bottom: 2px dashed pink;
            border-top: 2px dashed pink;
            text-align: center;
            font-family: cursive;
        }
    </style>
</head>
<body>
<?php 
$miesiac = rand(1,15);
?>
<h1>
    <?php
    echo $miesiac;
    ?>
</h1>
<h3>
<?php switch ($miesiac) {
    case 1:
        case 2:
            case 3:
                echo "I kwartał";
                break;
    case 4:
        case 5:
            case 6:
                echo "II kwartał";
                break;
    case 7:
        case 8:
            case 9:
                echo "III kwartał";
                break;
    case 10:
        case 11:
            case 12:
                echo "IV kwartał";
                break;
    default: 
    echo "Błędny numer miesiąca";
    break;
}
?>
</h3>
</body>
</html>