<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
    <style>
        h2 {
            border: 4px solid green;
        }
    </style>
</head>
<body>
    <?php $odcinki = rand(1,20); ?>
    <h2><?php echo($odcinki)?></h2>
    <h3>
        <?php switch ($odcinki) {
        case 2:
            case 3:
                case 4:
                    case 5:
                        case 6:
                            echo "pierwszy sezon";
                            break;
        case 7:
            case 8:
                case 9:
                    case 10:
                        case 11:
                            echo "drugi sezon";
                            break;
        case 12:
            case 13:
                case 14:
                    case 15:
                        case 16:
                            echo "trzeci sezon";
                            break;
        case 17:
            case 18:
                case 19:
                    case 20:
                        echo "czwarty sezon";
                        break;
        default: 
        echo "Pilot";
        break;
        }
        ?>
    </h3>
</body>
</html>