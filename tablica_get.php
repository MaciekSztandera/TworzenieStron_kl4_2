<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablica Get</title>
</head>
<body>
    <form method="get">
        <input type="text" name="login" placeholder="login"><br>
        <input type="password" name="pass" placeholder="hasło"><br>
        <input type="submit" name="send" value="wyślij"><br><br><hr>
    </form>
<pre><?php print_r($_GET);?></pre>
</body>
</html>