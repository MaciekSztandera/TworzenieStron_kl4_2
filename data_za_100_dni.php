<DOCTYPE html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<fieldset style="color: chocolate; border-color: chocolate;">
<legend>Dzisiejsza data</legend>
<p><?php echo date("d-m-Y")?></p>
</fieldset>

<fieldset style="color: DarkGoldenRod; border-color: DarkGoldenRod;">
<legend>Data za 100 dni.</legend>
<p><?php echo date("d-m-Y",strtotime("+100days"))?></p>
</fieldset>
</body>
</html>