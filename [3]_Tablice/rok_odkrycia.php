<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th ,td {
            border: 2px dashed deeppink;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php $pierwiastki = array(
        "1774" => "chlor",
        "1894"=> "argon",
        "1807"=> "potas",
        "1808"=> "wapń",
        "1879"=> "skand",
    ) ?>
    <pre><?php print_r($pierwiastki)?></pre>
    <table>
        <tr>
            <th>Pierwiastek</th>
            <th>Rok odkrycia</th>
        </tr>
    <?php asort($pierwiastki); foreach ($pierwiastki as $klucz => $wartosc) { 
        echo "<tr><td>". $wartosc ."</td><td>". $klucz ."</td></tr>"; } ?>
    </table>
</body>
</html>