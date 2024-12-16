<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ol type="a">
    <li><p>oprogramowanie serwera = <?php print_r($_SERVER['SERVER_SOFTWARE']);?></p></li>
    <li><p>oprogramowanie klienta = <?php print_r($_SERVER['HTTP_USER_AGENT']);?></p></li>
    <li><p>nazwa i wersja protokołu użytego podczas odbierania żądania od klienta = <?php print_r($_SERVER['SERVER_PROTOCOL']);?></p></li>
    <li><p>czas rozpoczęcia bieżącego żądania = <?php print_r($_SERVER['REQUEST_TIME']);?></p></li>
    <li><p>zmienna środowiskowa PATH = <?php print_r($_SERVER['PATH']);?></p></li>
    <li><p>nazwa serwera = <?php print_r($_SERVER['SERVER_NAME']);?></p></li>
    <li><p>metoda jaką zostało obsłużone bieżące żądanie = <?php print_r($_SERVER['REQUEST_METHOD']);?></p></li>
</ol>
</body>
</html>