<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<h2 style="text-align:center; color: darkorchid;">
    <?php 
    $losowa = rand(1,30);
    echo $losowa;
    ?>
</h2>
<h4 style="text-align:center; color: magenta;">
    <?php if ($losowa>=20)  echo "Wylosowana liczba jest większa lub równa 20."?>
</h4>
<h4 style="text-align:center; color: navy;">
    <?php 
        if($losowa%2==0) echo "Wylosowana liczba jest parzysta.";
        else echo "Wylosowana liczba jest nieparzysta.";
    ?>
</h4>
<h4 style="text-align:center; color: deeppink;">
    <?php 
        if ($losowa<=10) echo "Pierwsza dziesiątka";
        elseif ($losowa<=20) echo "Druga dziesiątka";
        else echo "Trzecia dziesiątka";
    ?>
</h4>

</body>
</html>