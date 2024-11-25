<DOCTYPE html>
<head>
    <meta charset="UTF-8">
<?php $string = 'Życie jest to opowieść idioty, pełna wrzasku i wściekłości, nic nie znacząca.'?>
</head>
<body>
<p>Cytat: <q><?php echo $string; ?></q></p>
<p>Liczba wyrazów: <?php echo  str_word_count($string);?>
</body>
</html>