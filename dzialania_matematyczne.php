<DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php 
$x = 5;
$y = 15;
$a = 4;
$b = 35;
$r = 9;
$alfa = 95;
?>
<fieldset>
<legend>AD 1.</legend>
<p>Wynik dodawania <?php echo $x;?> i <?php echo $y;?> wynosi <?php echo $x+$y;?></p>
<p>Wynik odejmowania <?php echo $x;?> i <?php echo $y;?> wynosi <?php echo $x-$y;?></p>
<p>Wynik mnożenia <?php echo $x;?> i <?php echo $y;?> wynosi <?php echo $x*$y;?></p>
<p>Wynik dzielenia <?php echo $x;?> przez <?php echo $y;?> wynosi <?php echo $x/$y;?></p>
<p>Reszta z dzielenia <?php echo $x;?> przez <?php echo $y;?> wynosi <?php echo $x%$y;?></p>
</fieldset>
<fieldset>
<legend>AD 2.</legend>
<p>Obwód prostokąta o bokach długości <?php echo $a;?> i <?php echo $b;?> wynosi <?php echo $a+$a+$b+$b;?></p>
<p>Pole prostokąta o bokach długośco <?php echo $a;?> i <?php echo $b;?> wynosi <?php echo $a*$b;?>j<sup>2</sup></p>
</fieldset>
<fieldset>
<legend>AD 3.</legend>
<p>Obwód koła o promieniu <?php echo $r;?> jest równy <?php echo round(2*pi()*$r,3);?></p>
<p>Pole koła o promieniu <?php echo $r;?> jest równe <?php echo round(pi()*$r**2,3);?>j<sup>2</sup></p>
<p>Pole wycinka koła o promieniu <?php echo $r;?> i kącie środkowym <?php echo $alfa;?>° jest równe <?php echo round($alfa/360*pi()*$r**2,3);?>j<sup>2</sup></p>
</fieldset>
</body>
</html>