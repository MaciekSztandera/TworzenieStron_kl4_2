<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="email" name="email" placeholder="email"><br>
        <input type="date" name="data"><br>
        <input type="month" name="miesiąc"><br>
        <input type="time" name="godzina"><br>
        <input type="week" name="tydzień"><br>
        <input type="submit" name="send" value="wyślij"><br><br><hr>
    </form>
<pre><?php print_r($_POST);?></pre>
</body>
</html>